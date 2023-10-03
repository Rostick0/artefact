import { classAdd, classRemove, observerOnce } from './util';

const useState = (initValue) => {
    const getState = () => initValue;

    const setState = (newValue) => initValue = newValue;

    return [getState, setState];
};

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
        // const button = item?.querySelector('.portfolio-item__plus');
        const portfolioItemTitle = item.querySelector('.portfolio-item__title');

        const { activeModal } = modal();
        item.onclick = function (e) {
            if (e.target === portfolioItemTitle) return;

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

(function () {
    const calculatorRadio = document.querySelectorAll('.calculator__radio');
    const calculatorCheckbox = document.querySelectorAll('.calculator__checkbox');

    function calculator(name, key, power, x) {
        if (x < 1) x = 1;
        console.log(name, key, power);

        const formuls = [
            {
                name: 'EXTERIOR_VISUALIZATION',
                key: 1,
                power: 3,
                calc: (x) => 200 + (140 * x - 1)
            },
            {
                name: 'EXTERIOR_VISUALIZATION',
                key: 1,
                power: 2,
                calc: (x) => 350 + (140 * x - 1)
            },
            {
                name: 'EXTERIOR_VISUALIZATION',
                key: 1,
                power: 1,
                calc: (x) => 490 + (140 * x - 1)
            },
            {
                name: 'EXTERIOR_VISUALIZATION',
                key: 1,
                power: 0,
                calc: (x) => 600 + (140 * x - 1)
            },
            {
                name: 'EXTERIOR_VISUALIZATION',
                key: 2,
                power: 3,
                calc: (x) => 300 + (200 * x - 1)
            },
            {
                name: 'EXTERIOR_VISUALIZATION',
                key: 2,
                power: 2,
                calc: (x) => 450 + (200 * x - 1)
            },
            {
                name: 'EXTERIOR_VISUALIZATION',
                key: 2,
                power: 1,
                calc: (x) => 620 + (200 * x - 1)
            },
            {
                name: 'EXTERIOR_VISUALIZATION',
                key: 2,
                power: 0,
                calc: (x) => 800 + (200 * x - 1)
            },
            {
                name: 'EXTERIOR_VISUALIZATION',
                key: 3,
                power: 3,
                calc: (x) => 400 + (290 * x - 1)
            },
            {
                name: 'EXTERIOR_VISUALIZATION',
                key: 3,
                power: 2,
                calc: (x) => 620 + (290 * x - 1)
            },
            {
                name: 'EXTERIOR_VISUALIZATION',
                key: 3,
                power: 1,
                calc: (x) => 850 + (290 * x - 1)
            },
            {
                name: 'EXTERIOR_VISUALIZATION',
                key: 3,
                power: 0,
                calc: (x) => 1000 + (290 * x - 1)
            },
            {
                name: 'INTERIOR_VISUALIZATION',
                key: 4,
                power: 3,
                calc: (x) => 150 + (60 * x - 1)
            },
            {
                name: 'INTERIOR_VISUALIZATION',
                key: 4,
                power: 2,
                calc: (x) => 240 + (60 * x - 1)
            },
            {
                name: 'INTERIOR_VISUALIZATION',
                key: 4,
                power: 1,
                calc: (x) => 350 + (60 * x - 1)
            },
            {
                name: 'INTERIOR_VISUALIZATION',
                key: 4,
                power: 0,
                calc: (x) => 400 + (60 * x - 1)
            },
            {
                name: 'INTERIOR_VISUALIZATION',
                key: 5,
                power: 3,
                calc: (x) => 200 + (65 * x - 1)
            },
            {
                name: 'INTERIOR_VISUALIZATION',
                key: 5,
                power: 2,
                calc: (x) => 290 + (65 * x - 1)
            },
            {
                name: 'INTERIOR_VISUALIZATION',
                key: 5,
                power: 1,
                calc: (x) => 400 + (65 * x - 1)
            },
            {
                name: 'INTERIOR_VISUALIZATION',
                key: 5,
                power: 0,
                calc: (x) => 450 + (65 * x - 1)
            },
            {
                name: 'INTERIOR_VISUALIZATION',
                key: 6,
                power: 3,
                calc: (x) => 250 + (70 * x - 1)
            },
            {
                name: 'INTERIOR_VISUALIZATION',
                key: 6,
                power: 2,
                calc: (x) => 340 + (70 * x - 1)
            },
            {
                name: 'INTERIOR_VISUALIZATION',
                key: 6,
                power: 1,
                calc: (x) => 450 + (70 * x - 1)
            },
            {
                name: 'INTERIOR_VISUALIZATION',
                key: 6,
                power: 0,
                calc: (x) => 500 + (70 * x - 1)
            },
            {
                name: 'INTERIOR_VISUALIZATION',
                key: 7,
                power: 3,
                calc: (x) => 300 + (90 * x - 1)
            },
            {
                name: 'INTERIOR_VISUALIZATION',
                key: 7,
                power: 2,
                calc: (x) => 420 + (90 * x - 1)
            },
            {
                name: 'INTERIOR_VISUALIZATION',
                key: 7,
                power: 1,
                calc: (x) => 550 + (90 * x - 1)
            },
            {
                name: 'INTERIOR_VISUALIZATION',
                key: 7,
                power: 0,
                calc: (x) => 650 + (90 * x - 1)
            },
            {
                name: 'INTERIOR_VISUALIZATION',
                key: 8,
                power: 3,
                calc: (x) => 100
            },
            {
                name: 'INTERIOR_VISUALIZATION',
                key: 8,
                power: 2,
                calc: (x) => 200
            },
            {
                name: 'INTERIOR_VISUALIZATION',
                key: 8,
                power: 1,
                calc: (x) => 400
            },
            {
                name: 'INTERIOR_VISUALIZATION',
                key: 8,
                power: 0,
                calc: (x) => 500
            },
            {
                name: 'PRODUCT_RENDERING',
                key: 9,
                power: 3,
                calc: (x) => 100 + (70 * x - 1)
            },
            {
                name: 'PRODUCT_RENDERING',
                key: 9,
                power: 2,
                calc: (x) => 150 + (70 * x - 1)
            },
            {
                name: 'PRODUCT_RENDERING',
                key: 9,
                power: 1,
                calc: (x) => 250 + (70 * x - 1)
            },
            {
                name: 'PRODUCT_RENDERING',
                key: 9,
                power: 0,
                calc: (x) => 300 + (70 * x - 1)
            },
            {
                name: 'PRODUCT_RENDERING',
                key: 10,
                power: 3,
                calc: (x) => 30 + (50 * x - 1)
            },
            {
                name: 'PRODUCT_RENDERING',
                key: 10,
                power: 2,
                calc: (x) => 30 + (50 * x - 1)
            },
            {
                name: 'PRODUCT_RENDERING',
                key: 10,
                power: 1,
                calc: (x) => 100 + (50 * x - 1)
            },
            {
                name: 'PRODUCT_RENDERING',
                key: 10,
                power: 0,
                calc: (x) => 100 + (50 * x - 1)
            },
            {
                name: 'ANIMATION',
                key: 11,
                power: 3,
                calc: (x) => 100 + (60 * x)
            },
            {
                name: 'ANIMATION',
                key: 11,
                power: 2,
                calc: (x) => 200 + (60 * x)
            },
            {
                name: 'ANIMATION',
                key: 11,
                power: 1,
                calc: (x) => 500 + (60 * x)
            },
            {
                name: 'ANIMATION',
                key: 11,
                power: 0,
                calc: (x) => 600 + (60 * x)
            },
            {
                name: 'ANIMATION',
                key: 12,
                power: 3,
                calc: (x) => 50 + (150 * x)
            },
            {
                name: 'ANIMATION',
                key: 12,
                power: 2,
                calc: (x) => 100 + (150 * x)
            },
            {
                name: 'ANIMATION',
                key: 12,
                power: 3,
                calc: (x) => 300 + (150 * x)
            },
            {
                name: 'ANIMATION',
                key: 12,
                power: 0,
                calc: (x) => 500 + (150 * x)
            },
        ];

        const find = formuls.find(elem => {
            return elem.name == name && elem.key == key && elem.power == power
        });

        if (!find) return;

        return find.calc(x);
    }

    const [calculatorSwitch, setCalculatorSwitch] = useState('EXTERIOR_VISUALIZATION');
    const [key, setKey] = useState(1);
    const [count, setCount] = useState(0);

    const calculatorSwitchItems = document.querySelectorAll('.calculator__switch_item');
    const calculatorAmount = document.querySelector('.calculator__amount');

    calculatorSwitchItems.forEach(elem => {
        elem.onclick = e => setCalculatorSwitch(e.target.value);
    });

    const calculatorGridItemInput = document.querySelector('.calculator-grid-item__input');

    calculatorGridItemInput.oninput = e => {
        calculatorAmount.textContent = calculator(calculatorSwitch(), key(), count(), e.target.value);
    };

    const initInputs = () => {
        const calculatorGridItemRadios = document.querySelectorAll('.calculator-grid-item__radios');

        calculatorGridItemRadios.forEach(elem => {
            elem.onclick = e => {
                setKey(e.target.value);
            }
        });

        const calculatorGridItemCheckboxs = document.querySelectorAll('.calculator-grid-item__checkboxs');

        calculatorGridItemCheckboxs.forEach(elem => {
            elem.onclick = e => {
                const count = [...document.querySelectorAll('.calculator__checkbox .checkbox__input:checked')]?.length;
                setCount(count);

                console.log(calculator(calculatorSwitch(), key(), count, 1));
            }
        });
    };

    initInputs();


})();