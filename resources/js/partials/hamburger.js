const hamburgerBtn = document.querySelector('#hamburger')

const hamburgerHandler = () => {
    hamburgerBtn.classList.add('is-active')
}

hamburgerBtn.addEventListener('click',hamburgerHandler)