import './bootstrap';
import { classAdd, classRemove, observerOnce } from './util';

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

(function () {
    const mainSliderBottom = document.querySelector('.main-slider-bottom');

    if (!mainSliderBottom) return;

    new Swiper(mainSliderBottom, {
        speed: 1250,
        slidesPerView: 1,
        spaceBetween: 30,
        breakpoints: {
            480: {
                slidesPerView: 2,
            },
            992: {
                slidesPerView: 3,
            },
            1200: {
                slidesPerView: 4,
            },
            1201: {
                slidesPerView: 5,
            }
        }
    });
})();

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

(function () {
    const portfolioFilterItems = document.querySelectorAll('.portfolio__filter_item');
    const portfolioItems = document.querySelectorAll('.portfolio-item');

    portfolioFilterItems.forEach(item => {
        item.onclick = () => {
            document.querySelectorAll('.portfolio__filter_item._active').forEach(item => classRemove(item, '_active'));
            document.querySelectorAll('.portfolio-item._active').forEach(item => classRemove(item, '_active'));

            classAdd(item, '_active');
            portfolioItems.forEach(elem => {
                if (item.getAttribute('data-id') == '0') {
                    classAdd(elem, '_active');
                    return;
                }

                if (item.getAttribute('data-id') != elem.getAttribute('data-id')) return;

                classAdd(elem, '_active')
            });
        }
    });
})();

(function () {
    const headerMobile = document.querySelector('.header-mobile');
    const headerBurger = document.querySelector('.header-burger');
    const headerMobileClose = document.querySelector('.header-mobile__close');

    headerBurger.onclick = () => {
        headerMobile.classList.toggle('_active');
        headerBurger.classList.toggle('_active');
    }

    function disactive(e) {
        if (e.target != this) return;

        classRemove(headerMobile, '_active');
        classRemove(headerBurger, '_active');
    }

    headerMobileClose.onclick = disactive;
    headerMobile.onclick = disactive;
})();

function animateCounter(elem, {
    duration = 3000,
    startValue = 0,
    endValue = 500,
    startTime = null,
}) {
    function animate(currentTime) {
        if (!startTime) startTime = currentTime;

        const elapsedTime = currentTime - startTime;
        const progress = Math.min(elapsedTime / duration, 1);
        const value = Math.round(startValue + (endValue - startValue) * progress);

        elem.textContent = value;

        if (progress < 1) requestAnimationFrame(animate);
    }

    requestAnimationFrame(animate);
};

(function () {
    const statList = document.querySelector('.stat__list');
    if (!statList) return;

    function statItemsStartAnim() {
        const statItems = document.querySelectorAll('.stat-item__count');

        statItems.forEach(item => {
            animateCounter(item, {
                endValue: +(item.textContent.trim())
            })
        });
    }

    observerOnce(statList, statItemsStartAnim);
})();

(function () {
    const needVisualizationContainer = document.querySelector('.need-visualization__container');
    if (!needVisualizationContainer) return;

    observerOnce(document.querySelector('.need-visualization'), () => classAdd(needVisualizationContainer, '_visible'));
})();

(function () {
    const aboutBtn = document.querySelector('.about__btn');
    if (!aboutBtn) return;

    observerOnce(document.querySelector('.about__description'), () => classAdd(aboutBtn, '_visible'));
})();

