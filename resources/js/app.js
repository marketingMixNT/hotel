import './bootstrap';
// import './partials/hamburger'


const navbar = document.querySelector('#navbar')


const  navbarOnScroll = () => {
    let pozycjaScrolla = window.scrollY;
  
    if (pozycjaScrolla >= 250) {
      navbar.classList.add('show')
      navbar.classList.remove('hiddenNavbar')

    } else {
        navbar.classList.add('hiddenNavbar')
        navbar.classList.remove('show')

    }
}

window.addEventListener('scroll', navbarOnScroll);


var container = document.getElementById('container');

document.querySelectorAll('.hover\\:bg').forEach((div) => {
    div.addEventListener('mouseover', function() {
        container.style.backgroundImage = 'url(' + this.dataset.bg + ')';
    });
    div.addEventListener('mouseout', function() {
        container.style.backgroundImage = 'url(/assets/images/desktop/willaPodScietaLipa-25.jpg)';
    });
});