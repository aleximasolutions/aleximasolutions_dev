document.addEventListener('DOMContentLoaded', () => {
  gsap.registerPlugin(ScrollTrigger, ScrollSmoother);
  const InitialWidth = innerWidth;
  let smoother;



  setTimeout(() => {
    let preloader = document.getElementById('preloader');
    preloader.remove();
    document.body.style.overflow = 'visible';
  }, 3000);



  // Resize

  (() => {
    const headerImage = document.getElementById('header-img')
    const section = document.getElementById('our-works')
    const works = document.getElementById('content__right')
    let pinWrapWidth = works.offsetWidth - (InitialWidth * 0.65);


    if (InitialWidth <= 912) {
      pinWrapWidth = works.offsetWidth;
    }
    // Change header image
    if (InitialWidth <= 682) {
      headerImage.src = 'image/header-tablet.png'
    }

    // Gsap animation
    if (InitialWidth > 1192) {
      smoother = ScrollSmoother.create({
        wrapper: 'root',
        content: 'smoother-content',
        smooth: 2,
        effects: true,
      })


      gsap.fromTo('.about-us_text',
        { x: 300, opacity: 0 },
        {
          opacity: 1, x: 0,

          scrollTrigger: {
            trigger: '.about-us_text',
            start: '-100',
            end: 'center center',
            scrub: true,
          }
        })
    }

    if (InitialWidth > 912) {

      let timeline = gsap.timeline();

      setTimeout(() => {
        timeline.to(section, {

          scrollTrigger: {
            trigger: section,
            start: "top top",
            end: `${pinWrapWidth} bottom`,
            scrub: 1,
            pin: true,
          },
          height: `${works.scrollWidth}px`,
          ease: "none",
        });

        timeline.to(works, {
          scrollTrigger: {
            trigger: works,
            start: "top top",
            end: `${pinWrapWidth} bottom`,
            scrub: 1,
            onUpdate: self => {
              const hasShadow = self.progress > 0;
              const nextBlock = document.getElementById('content__left');
              nextBlock.style.boxShadow = hasShadow ? '5px 0 10px #000' : "none";
            },
          },
          x: -pinWrapWidth,

          ease: "none",
        });
        ScrollTrigger.refresh();
      }, 1000)
      timeline.kill();

      gsap.fromTo('.our-works-title', { x: -300, opacity: 0 }, {
        opacity: 1,
        x: 50,
        scrollTrigger: {
          trigger: '.our-works',
          start: '100',
          end: 'center',
          scrub: true,
        }
      })

      gsap.fromTo('.our-works-description', { y: 300, opacity: 0 }, {
        opacity: 1,
        y: 0,
        scrollTrigger: {
          trigger: '.our-works',
          start: '100',
          end: 'center',
          scrub: true,
        }
      })
    }
  })();




  // Services
  ((InitialWidth) => {
    const dataId = 'data-id';
    const services = document.querySelectorAll(`#services .services-descriptions [${dataId}]`);
    const cardsBtn = document.querySelectorAll(`#services .service-cards [${dataId}]`);

    if (!services.length || !cardsBtn.length) {
      console.log('No elements found');
      return;
    }

    if (InitialWidth > 650) {

      cardsBtn.forEach((cardBtn) => {
        cardBtn.addEventListener('mouseover', () => {
          if (cardBtn.classList.contains('active')) {
            return;
          }
          const cardId = cardBtn.getAttribute(dataId);

          cardsBtn.forEach((btn) => btn.classList.toggle('active', btn === cardBtn));

          services.forEach((service) => {
            const isCurrentService = service.getAttribute(dataId) === cardId;
            service.classList.toggle('show', isCurrentService);
          });
        });
      });
    }




  })(InitialWidth);


  // Animation
  (() => {
    var services = document.querySelectorAll('.service')

    gsap.from('.header-content__left', {
      x: -300,
      opacity: 0,
      duration: 1,
      scale: 0.7,
      delay: 2,
    });

    gsap.from('.header-content__right', {
      x: 300,
      opacity: 0,
      duration: 1,
      scale: 0.7,
      delay: 2,
    });

    gsap.from('.menu_btn', {
      y: -40,
      opacity: 0,
      duration: 2,
      delay: 2,
      scale: 0.7,
    });

    gsap.to('#preloader', {
      y: 500,
      opacity: 0,
      duration: 2,
      delay: 2,
      zIndex: -1,
      ease: 'ease-in-out',
    });

    gsap.fromTo('.header-description', { opacity: 1 }, {
      opacity: 0,
      scrollTrigger: {
        trigger: '.header',
        start: 'top',
        end: 'bottom',
        scrub: true,
      }
    });

    services.forEach((service) => {
      gsap.fromTo(service,
        { opacity: 0, y: 100 },
        {
          opacity: 1, y: 0,
          scrollTrigger: {
            trigger: service,
            start: 'top 80%',
            end: 'center center',
            scrub: true,

          }
        }
      );
    });
  })();

  // Navigation
  (() => {
    const menu = document.getElementById('menu');
    const menuBtn = document.getElementById('menu_btn')
    var clicked = false;

    const onClick = () => {
      clicked = !clicked
      if (clicked) {
        menu.style.transform = 'translateY(0)';
        menu.style.boxShadow = "0 0 10px #ff0000";
        menuBtn.style.clipPath = 'polygon(0px 0px, 100% 0px, 80% 100%, 20% 100%)'
      } else {
        menu.style.transform = 'translateY(-100%)'
        setTimeout(() => {
          menu.style.boxShadow = "none";
        }, 300);
      }
    }

    menuBtn.addEventListener('click', onClick);


    const navLinkAttribute = 'data-nav-link'
    const sectionAttribute = 'data-section'

    var navBtns = document.querySelectorAll(`[${navLinkAttribute}]`);
    var sections = document.querySelectorAll(`[${sectionAttribute}]`);

    navBtns.forEach((btn) => {
      btn.addEventListener('click', () => {
        var btnValue = btn.getAttribute(navLinkAttribute);
        sections.forEach((section) => {
          var sectionValue = section.getAttribute(sectionAttribute)

          if (sectionValue == btnValue) {
            var sectionId = section.getAttribute('id')
            if (InitialWidth > 1024) {
              gsap.to(smoother, {
                scrollTop: smoother.offset(`#${sectionId}`),
                duration: 3,
                ease: 'ease-in',
              })
              // smoother.scrollTo(`#${sectionId}`, true, 'top top');
            } else {
              var section = document.getElementById(sectionId)
              section.scrollIntoView({
                behavior: 'smooth',
              });
            }
          }
        })
      })
    })
  })();

  window.addEventListener("orientationchange", () => {
    location.reload(true);
    window.scrollTo(0, 0);
  });


})