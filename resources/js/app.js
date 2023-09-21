import './bootstrap';

(function () {
    const visualizationSlider = document.querySelector('.visualization__slider');

    if (!visualizationSlider) return;

    new Swiper(visualizationSlider, {
        autoplay: {
            delay: 1250
        },
        speed: 1250,
        slidesPerView: 1,
        pagination: {
            el: '.swiper-pagination',
            type: 'bullets',
            clickable: true
        },
        breakpoints: {
            768: {
                slidesPerView: 2,
            },
            992: {
                slidesPerView: 3,
            },
            1200: {
                slidesPerView: 4,
            }
        }
    });
})();