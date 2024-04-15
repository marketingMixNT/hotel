import './bootstrap';
import './partials/hamburger'





var container = document.getElementById('container');

document.querySelectorAll('.hover\\:bg').forEach((div) => {
    div.addEventListener('mouseover', function() {
        container.style.backgroundImage = 'url(' + this.dataset.bg + ')';
    });
    div.addEventListener('mouseout', function() {
        container.style.backgroundImage = 'url(/assets/images/spa/spa-1.jpeg)';
    });
});