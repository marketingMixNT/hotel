import './bootstrap';
import './partials/hamburger'
import './partials/navbar'





var container = document.getElementById('container');

document.querySelectorAll('.hover\\:bg').forEach((div) => {
    div.addEventListener('mouseover', function() {
        container.style.backgroundImage = 'url(' + this.dataset.bg + ')';
    });
    div.addEventListener('mouseout', function() {
        container.style.backgroundImage = 'url(/assets/images/desktop/willaPodScietaLipa-25.jpg)';
    });
});


const hamburgerBtn = document.querySelector('#hamburger')
const menu = document.querySelector("#menu");


const hamburgerHandler = () => {
    hamburgerBtn.classList.toggle('is-active')
    menu.classList.toggle("menu-open");
    menu.classList.toggle("menu-close");
}

hamburgerBtn.addEventListener('click',hamburgerHandler)

// const footerSpan = document.querySelector("#year");
// const currentYear = new Date().getFullYear();

// footerSpan.innerHTML = currentYear;