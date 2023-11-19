const activeClassName = '_active';
const unScrollClassName = '_un__scroll';
const body = document.body

const menuBtn = document.querySelector('a.nav__menu-btn');
const navMenu = document.querySelector('div.nav__menu');

const delay = async (ms) => await new Promise(resolve => setTimeout(resolve, ms))

if (navMenu && menuBtn) {
    menuBtn.addEventListener('click', switchMenu);
}

function switchMenu(e) {
    e.preventDefault();
    let isActive = navMenu.classList.contains(activeClassName);

    if (isActive) {
        body.classList.remove(unScrollClassName);
        menuBtn.classList.remove(activeClassName);
        navMenu.classList.remove(activeClassName);
        return
    }

    body.classList.add(unScrollClassName);
    menuBtn.classList.add(activeClassName);
    navMenu.classList.add(activeClassName);

}

addEventListener('scroll', checkScrollPosition);

function checkScrollPosition(e) {
    const nav = document.querySelector('nav.nav');

    if (!nav) {
        console.log('Меню не найдено');
        return
    }

    if (scrollY == 0) {
        nav.classList.remove(activeClassName);
        return;
    }

    nav.classList.add(activeClassName);
}

function setTabs() {
    const atrName = 'data-tab-id';
    const descrSourseClass = '.products__tab-descr:not(._draw)';
    const descrTargetClass = '.products__tab-descr._draw';

    let allBtnTabs = [...document.querySelectorAll(`#products .products__btn-list [${atrName}]`)];
    let allTabs = [...document.querySelectorAll(`#products .products__tab-wapper [${atrName}]`)];

    if (!allBtnTabs || !allBtnTabs) {
        return;
    }

    let removeActive = (el) => el.classList.remove(activeClassName)


    allBtnTabs.forEach((btn) => {
        btn.addEventListener('click', (e) => {
            e.preventDefault();

            if (btn.classList.contains(activeClassName)) {
                return
            }

            const id = btn.getAttribute(atrName);
            allBtnTabs.forEach(removeActive);
            allTabs.forEach((tab) => {
                removeActive(tab)
                tab.querySelector(descrTargetClass).textContent = ''
            });

            btn.classList.add(activeClassName);

            let tab = allTabs.find(tab => tab.getAttribute(atrName) == id);

            if (!tab) {
                return
            }

            tab.classList.add(activeClassName);
            let descrSourse = tab.querySelector(descrSourseClass).innerHTML;
            let descrTarget = tab.querySelector(descrTargetClass);
            let txt = descrSourse.replace(/\s{2,}/g, ' ').trim();


            console.log(txt);

            if (innerWidth > 768) {
                let speed = 50;
                typingAnimation(descrTarget, txt, 0, speed)
            }
            else {
                descrTarget.innerHTML = txt
            }
        });


    });
}

setTabs();


async function typingAnimation(item, text, i = 0, duration = 50) {
    if (!item || !text) {
        return
    }

    await delay(duration)
    item.textContent += text.charAt(i)

    if (i == text.length - 1) {
        return;
    }

    typingAnimation(item, text, i + 1, duration);

}