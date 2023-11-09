const activeClassName = '_active';
const unScrollClassName = '_un__scroll';
const body = document.body

const menuBtn = document.querySelector('a.nav__menu-btn');
const navMenu = document.querySelector('div.nav__menu');

if (navMenu && menuBtn) {
    menuBtn.addEventListener('click', switchMenu);
}

function switchMenu(e) {
    e.preventDefault();
    let isActive = navMenu.classList.contains(activeClassName);
    
    if(isActive) {
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

function checkScrollPosition (e) {
    const nav = document.querySelector('nav.nav');
    
    if(!nav) {
        console.log('Меню не найдено');
        return
    }
    
    if(scrollY == 0) {
        nav.classList.remove(activeClassName);
        return;
    }
    
    nav.classList.add(activeClassName);
}
