import './bootstrap';
import './partials/hamburger'
import './partials/navbar'
import './swiper/testimonials'





var container = document.getElementById('container');

document.querySelectorAll('.hover\\:bg').forEach((div) => {
    div.addEventListener('mouseover', function() {
        container.style.backgroundImage = 'url(' + this.dataset.bg + ')';
    });
    div.addEventListener('mouseout', function() {
        container.style.backgroundImage = 'url(/assets/images/desktop/willaPodScietaLipa-25.jpg)';
    });
});



// const footerSpan = document.querySelector("#year");
// const currentYear = new Date().getFullYear();

// footerSpan.innerHTML = currentYear;