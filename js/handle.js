document.addEventListener("DOMContentLoaded", () => {



  const setMessage = (element, messageElement, message) => {
    messageElement.innerText = message;
    element.style.zIndex = '3';
    element.style.opacity = '1';

    setTimeout(() => {
      element.style.zIndex = '-1';
      element.style.opacity = '0';
    }, 3000);
  }




  fornBtn = document.getElementById('form_btn')

  fornBtn.addEventListener('click', (e) => {
    e.preventDefault();
    try {
      var form = document.getElementById("form");
      if (!form || !(form instanceof HTMLFormElement)) {
        throw new Error('Invalid form');
      }

      var formData = new FormData(form);
      fetch("action.php", { method: 'POST', body: formData })
        .then(res => {
          if (!res.ok) {
            throw new Error('Network response was not ok');
          }
          return res.json()
        })
        .then(data => {
          if (data.status == "success") {
            const errorElements = form.querySelectorAll('.error');
            errorElements.forEach(span => span.innerText = "");

            var messageSuccess = document.getElementById('message-success');
            var mainSuccess = document.getElementById('main-success');
            var message = data.message;
            setMessage(mainSuccess, messageSuccess, message);
          } else if (data.status === 'error') {
            const errorElements = form.querySelectorAll('.error');
            errorElements.forEach(span => span.innerText = "");

            var messageError = document.getElementById('message-error');
            var mainError = document.getElementById('main-error');
            var message = data.message;
            setMessage(mainError, messageError, message);
          } else if (data.status === 'errors') {
            for (var key in data.message) {
              if (data.message.hasOwnProperty(key)) {
                var message = data.message[key];
                const input = document.getElementById(key);
                const inputParrent = input.parentElement;
                const errorElement = inputParrent.querySelector('.error');
                errorElement.innerText = message;
              }
            }

          }
        })
        .catch(error => {
          var mainError = document.getElementById('main-error');
          var messageError = document.getElementById('message-error');
          var message = 'Form submission error'
          setMessage(mainError, messageError, message);
        })
    } catch (error) {
      var mainError = document.getElementById('main-error');
      var messageError = document.getElementById('message-error');
      var message = 'Something went wrong. Say it again'
      setMessage(mainError, messageError, message);
    }


  })


})

