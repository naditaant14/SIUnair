const burger = document.querySelector('.burger');
const navList = document.querySelector('.nav-list');
const statContainer = document.querySelector('.status-container');
const navContainer = document.querySelector('nav-container');

burger.addEventListener('click', () => {
    burger.classList.toggle('toggle');
    navList.classList.toggle('nav-active');
});

