const imagesToPreload = [
    '/assets/images/features/willaPodScietaLipa-2.jpg',
    '/assets/images/features/willaPodScietaLipa-4.jpg',
    '/assets/images/features/willaPodScietaLipa-3.jpg',
    '/assets/images/features/willaPodScietaLipa-1.jpg'
];

imagesToPreload.forEach((imgUrl) => {
    const img = new Image();
    img.src = imgUrl;
});


import './bootstrap';
import './partials/hamburger'
import './partials/navbar'
import './partials/featuresBg'
import './partials/mobileButtons'
import './partials/footerYear'
import './partials/preloader'
import './partials/gLightbox'
import './partials/smoothScroll'
import './partials/observer'
import './swiper/description_images'
import './swiper/home_gallery'










