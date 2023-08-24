const navLinkEls = document.querySelectorAll('.nav-link');

navLinkEls.forEach(navLinkEl => {
    navLinkEl.addEventListener('click', () => {
        document.querySelector('.active')?.classList.remove('active');
        navLinkEl.classList.add('active');
    });
});

// import Swiper from 'swiper';
// import { Navigation, Pagination } from 'swiper/modules';

// const swiper = new Swiper('.swiper', {
//     loop : true,

//     navigator : {
//         nextEl: '.swiper-button-next',
//         prevEl: '.swiper-button-prev',
//     },
// });

// const swiper = new Swiper(".swiper", {
//     loop: true,

//     navigation: {
//       nextEl: ".swiper-button-next",
//       prevEl: ".swiper-button-prev",
//     },
//   });