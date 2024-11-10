const navElement = document.querySelector(".navbar");
const brandName = document.querySelector(".brand-name");
const loginBtn = document.querySelector(".login-button");
const signupBtn = document.querySelector(".signup-button");
const username = document.querySelector(".username");
const logoutBtn= document.querySelector(".logout-btn");
const navBtns = document.querySelectorAll(".nav-btn")

const keysValues = window.location.search;
var urlParams = new URLSearchParams(keysValues);
const page = urlParams.get('page');

switch (page) {
    case 'signup':
        document.title = 'Sign up';
        break;
    case 'login':
        document.title = 'Log in';
        break;
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
        brandName.classList.add('brand-name-contact');
        navBtns.forEach(navBtn => {
            navBtn.classList.add('nav-btn-contact');
        })
        document.title = 'Contact';
        break;
    case 'menu-search':
        document.querySelector('.menu').classList.add('active');
        document.title = 'Searching';
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
    case 'menu-drinks':
        document.querySelector('.menu').classList.add('active');
        document.title = 'Dinner';
        break;
    default:
        document.querySelector('.home').classList.add('active');
        document.title = 'Home';
        break;
}

document.addEventListener('DOMContentLoaded', () => {
    window.addEventListener('scroll', () => {
        if (window.scrollY >= 50) {
            navElement.classList.add('navbar-scrolled');
            brandName.classList.add('brand-name-scrolled');
            navBtns.forEach(navBtn => {
                navBtn.classList.add('nav-btn-scrolled');
            });
            // loginBtn.classList.add('login-button-scrolled');
            // signupBtn.classList.add('signup-button-scrolled');
            // username.classList.add('username-scrolled');
            // logoutBtn.classList.add('logout-btn-scrolled');
            if (typeof window.sessionStorage.getItem("username") !== 'undefined' && window.sessionStorage.getItem("username") !== null) {
                username.classList.add('username-scrolled');
                logoutBtn.classList.add('logout-btn-scrolled');
            } else {
                loginBtn.classList.add('login-button-scrolled');
                signupBtn.classList.add('signup-button-scrolled');
            }
        }
        else if (window.scrollY < 50) {
            navElement.classList.remove('navbar-scrolled');
            brandName.classList.remove('brand-name-scrolled');
            navBtns.forEach(navBtn => {
                navBtn.classList.remove('nav-btn-scrolled');
            });       
            // loginBtn.classList.remove('login-button-scrolled');
            // signupBtn.classList.remove('signup-button-scrolled');
            // username.classList.remove('username-scrolled');
            // logoutBtn.classList.remove('logout-btn-scrolled');
            if (typeof window.sessionStorage.getItem("username") !== 'undefined' && window.sessionStorage.getItem("username") !== null) {
                username.classList.remove('username-scrolled');
                logoutBtn.classList.remove('logout-btn-scrolled');
            } else {
                loginBtn.classList.remove('login-button-scrolled');
                signupBtn.classList.remove('signup-button-scrolled');
            }
        }
    });    
});


