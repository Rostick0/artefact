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

function modal() {
    const modal = document.querySelector('.modal');

    if (!modal) return;

    const modalImage = modal.querySelector('.modal__img');
    

    function activeModal(imageUrl) {
        if (modal.classList.contains('_active')) return;
        modalImage.src = imageUrl;
        modal.classList.add('_active');
    }

    function disactiveModal() {
        if (!modal.classList.contains('_active')) return;

        modal.classList.remove('_active');
    }

    const modalClose = modal.querySelector('.modal__close');

    modal.onclick = function (e) {
        if (e.target === this) disactiveModal();
    };

    modalClose.onclick = () => disactiveModal();

    return {
        activeModal
    };
}


(function () {
    const portfolioItems = document.querySelectorAll('.portfolio-item');

    portfolioItems.forEach(item => {
        const img = item?.querySelector('.portfolio-item__img');
        const button = item?.querySelector('.portfolio-item__plus');

        const { activeModal } = modal();
        button.onclick = () => {
            activeModal(img.src);
        };
    })
})();

// 

(function () {
    const mainSliderTop = document.querySelector('.main-slider-top');

    if (!mainSliderTop) return;

    new Swiper(mainSliderTop, {
        autoplay: {
            delay: 1250
        },
        autoplay: true,
        loop: true,
        parallax: true,
        speed: 1250,
        effect: "fade",
        paginationClickable: true,
        slidesPerView: 1,
        pagination: {
            el: '.swiper-pagination',
            type: 'bullets',
            clickable: true
        },
    });
})();