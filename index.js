const navElement = document.querySelector(".navbar");
const brandName = document.querySelector(".brand-name");
const loginBtn = document.querySelector(".login-button");
const navBtns = document.querySelectorAll(".nav-btn")

// let sections = document.querySelectorAll('section');
// 
// window.onscroll = () => {
//     sections.forEach(sec => {
//         let top = window.scrollY;
//         let offset = sec.offsetTop - 150;
//         let height = sec.offsetHeight;
//         let id = sec.getAttribute('id');
//         console.log(offset);
//         if(top >= offset && top < offset + height) {
//             navLinks.forEach(links => {
//                 links.classList.remove('active');
//                 document.querySelector('header nav a[href*=' + id + ']').classList.add('active');
//             });
//         };
//     });
// };

const keysValues = window.location.search;
const urlParams = new URLSearchParams(keysValues);
const page = urlParams.get('page');

switch (page) {
    case 'home':
        document.querySelector('.home').classList.add('active');
        document.title = 'Home';
        break;
    case 'menu':
        document.querySelector('.menu').classList.add('active');
        document.title = 'Menu';
        break;
    case 'about':
        document.querySelector('.about').classList.add('active');
        document.title = 'About';
        break;
    case 'contact':
        document.querySelector('.contact').classList.add('active');
        document.title = 'Contact';
        break;
    case 'menu-breakfast':
        document.querySelector('.menu').classList.add('active');
        document.title = 'Breakfast';
        break;
    case 'menu-lunch':
        document.querySelector('.menu').classList.add('active');
        document.title = 'Lunch';
        break;
    case 'menu-dinner':
        document.querySelector('.menu').classList.add('active');
        document.title = 'Dinner';
        break;
}

window.addEventListener('scroll', () => {
    if (window.scrollY >= 50) {
        navElement.classList.add('navbar-scrolled');
        brandName.classList.add('brand-name-scrolled');
        loginBtn.classList.add('login-button-scrolled');
        navBtns.forEach(navBtn => {
            navBtn.classList.add('nav-btn-scrolled');
        })
    }
    else if (window.scrollY < 50) {
        navElement.classList.remove('navbar-scrolled');
        brandName.classList.remove('brand-name-scrolled');        
        loginBtn.classList.remove('login-button-scrolled');
        navBtns.forEach(navBtn => {
            navBtn.classList.remove('nav-btn-scrolled');
        })
    }
});

