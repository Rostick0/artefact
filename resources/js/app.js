import './bootstrap';
import { classAdd, classRemove, observerOnce } from './util';

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

(function () {
    const portfolioFilterItems = document.querySelectorAll('.portfolio__filter_item');
    const portfolioItems = document.querySelectorAll('.portfolio-item');

    portfolioFilterItems.forEach(item => {
        item.onclick = () => {
            console.log(item.getAttribute('data-id'));
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
    function statItemsStartAnim() {
        const statItems = document.querySelectorAll('.stat-item__count');

        statItems.forEach(item => {
            animateCounter(item, {
                endValue: +(item.textContent.trim())
            })
        });
    }

    observerOnce(document.querySelector('.stat__list'), statItemsStartAnim);
})();

(function () {
    const needVisualizationContainer = document.querySelector('.need-visualization__container');
    observerOnce(document.querySelector('.need-visualization'), () => classAdd(needVisualizationContainer, '_visible'));
})();

(function () {
    const aboutBtn = document.querySelector('.about__btn');
    observerOnce(document.querySelector('.about__description'), () => classAdd(aboutBtn, '_visible'));
})();

