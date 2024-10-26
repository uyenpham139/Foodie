const navElement = document.querySelector(".navbar");
const brandName = document.querySelector(".brand-name");
const loginBtn = document.querySelector(".login-button");
const navBtns = document.querySelectorAll(".nav-btn")

let sections = document.querySelectorAll('section');
let navLinks = document.querySelectorAll('header nav a');
window.onscroll = () => {
    sections.forEach(sec => {
        let top = window.scrollY;
        let offset = sec.offsetTop - 150;
        let height = sec.offsetHeight;
        let id = sec.getAttribute('id');
        console.log(offset);
        if(top >= offset && top < offset + height) {
            navLinks.forEach(links => {
                links.classList.remove('active');
                document.querySelector('header nav a[href*=' + id + ']').classList.add('active');
            });
        };
    });
};

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

