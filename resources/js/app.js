import { classAdd, classRemove, observerOnce } from './util';

const useState = (initValue) => {
    const getState = () => initValue;

    const setState = (newValue) => initValue = newValue;

    return [getState, setState];
};

function modal() {
    const modal = document.querySelector('.modal');

    if (!modal) return;

    const modalContentInner = modal.querySelector('.modal__content_inner');
    const modalImage = modal.querySelector('.modal__img');

    function activeModal(imageUrl) {
        if (modal.classList.contains('_active')) return;

        modalImage.src = imageUrl;
        modal.classList.add('_active');
    }

    function activeModalManyImage(images) {
        if (modal.classList.contains('_active')) return;

        modalContentInner.innerHTML = images;
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
        activeModal,
        activeModalManyImage
    };
}

function creatImage(urls) {
    return urls?.map(url => `<img src="${url}" />`)?.join('');
}

(function () {
    const portfolioItems = document.querySelectorAll('.portfolio-item');

    portfolioItems?.forEach(item => {
        const img = item?.querySelector('.portfolio-item__img');
        // const button = item?.querySelector('.portfolio-item__plus');
        const portfolioItemTitle = item.querySelector('.portfolio-item__title');
        const portfolioItemImages = item.querySelector('.portfolio-item__images');
        const imagesPaths = JSON.parse(portfolioItemImages.textContent)?.map(item => '/storage/' + item.path)
        const images = creatImage(imagesPaths);

        console.log();
        const { activeModal, activeModalManyImage } = modal();
        item.onclick = function (e) {
            if (e.target === portfolioItemTitle) return;

            activeModalManyImage(images);
        };
    })
})();

(function () {
    const visualizationSlider = document.querySelector('.visualization__slider');

    if (!visualizationSlider) return;

    try {
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
    } catch {

    }
})();

(function () {
    const mainSliderBottom = document.querySelector('.main-slider-bottom');

    if (!mainSliderBottom) return;

    try {
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
    } catch {

    }
})();

(function () {
    const mainSliderTop = document.querySelector('.main-slider-top');

    if (!mainSliderTop) return;

    try {
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
    } catch {

    }
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

    if (!headerMobile && !headerBurger) return;

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
    const calculatorSwitchItems = document.querySelectorAll('.calculator__switch_item');
    const calculatorAmount = document.querySelector('.calculator__amount');

    if (!calculatorSwitchItems || !calculatorAmount) return;

    function calculator(name, key, power, x) {
        if (x < 1) x = 1;

        const formuls = [
            {
                name: 'EXTERIOR_VISUALIZATION',
                key: 1,
                power: 3,
                calc: (x) => 200 + (140 * (x - 1))
            },
            {
                name: 'EXTERIOR_VISUALIZATION',
                key: 1,
                power: 2,
                calc: (x) => 350 + (140 * (x - 1))
            },
            {
                name: 'EXTERIOR_VISUALIZATION',
                key: 1,
                power: 1,
                calc: (x) => 490 + (140 * (x - 1))
            },
            {
                name: 'EXTERIOR_VISUALIZATION',
                key: 1,
                power: 0,
                calc: (x) => 600 + (140 * (x - 1))
            },
            {
                name: 'EXTERIOR_VISUALIZATION',
                key: 2,
                power: 3,
                calc: (x) => 300 + (200 * (x - 1))
            },
            {
                name: 'EXTERIOR_VISUALIZATION',
                key: 2,
                power: 2,
                calc: (x) => 450 + (200 * (x - 1))
            },
            {
                name: 'EXTERIOR_VISUALIZATION',
                key: 2,
                power: 1,
                calc: (x) => 620 + (200 * (x - 1))
            },
            {
                name: 'EXTERIOR_VISUALIZATION',
                key: 2,
                power: 0,
                calc: (x) => 800 + (200 * (x - 1))
            },
            {
                name: 'EXTERIOR_VISUALIZATION',
                key: 3,
                power: 3,
                calc: (x) => 400 + (290 * (x - 1))
            },
            {
                name: 'EXTERIOR_VISUALIZATION',
                key: 3,
                power: 2,
                calc: (x) => 620 + (290 * (x - 1))
            },
            {
                name: 'EXTERIOR_VISUALIZATION',
                key: 3,
                power: 1,
                calc: (x) => 850 + (290 * (x - 1))
            },
            {
                name: 'EXTERIOR_VISUALIZATION',
                key: 3,
                power: 0,
                calc: (x) => 1000 + (290 * (x - 1))
            },
            {
                name: 'INTERIOR_VISUALIZATION',
                key: 4,
                power: 3,
                calc: (x) => 150 + (60 * (x - 1))
            },
            {
                name: 'INTERIOR_VISUALIZATION',
                key: 4,
                power: 2,
                calc: (x) => 240 + (60 * (x - 1))
            },
            {
                name: 'INTERIOR_VISUALIZATION',
                key: 4,
                power: 1,
                calc: (x) => 350 + (60 * (x - 1))
            },
            {
                name: 'INTERIOR_VISUALIZATION',
                key: 4,
                power: 0,
                calc: (x) => 400 + (60 * (x - 1))
            },
            {
                name: 'INTERIOR_VISUALIZATION',
                key: 5,
                power: 3,
                calc: (x) => 200 + (65 * (x - 1))
            },
            {
                name: 'INTERIOR_VISUALIZATION',
                key: 5,
                power: 2,
                calc: (x) => 290 + (65 * (x - 1))
            },
            {
                name: 'INTERIOR_VISUALIZATION',
                key: 5,
                power: 1,
                calc: (x) => 400 + (65 * (x - 1))
            },
            {
                name: 'INTERIOR_VISUALIZATION',
                key: 5,
                power: 0,
                calc: (x) => 450 + (65 * (x - 1))
            },
            {
                name: 'INTERIOR_VISUALIZATION',
                key: 6,
                power: 3,
                calc: (x) => 250 + (70 * (x - 1))
            },
            {
                name: 'INTERIOR_VISUALIZATION',
                key: 6,
                power: 2,
                calc: (x) => 340 + (70 * (x - 1))
            },
            {
                name: 'INTERIOR_VISUALIZATION',
                key: 6,
                power: 1,
                calc: (x) => 450 + (70 * (x - 1))
            },
            {
                name: 'INTERIOR_VISUALIZATION',
                key: 6,
                power: 0,
                calc: (x) => 500 + (70 * (x - 1))
            },
            {
                name: 'INTERIOR_VISUALIZATION',
                key: 7,
                power: 3,
                calc: (x) => 300 + (90 * (x - 1))
            },
            {
                name: 'INTERIOR_VISUALIZATION',
                key: 7,
                power: 2,
                calc: (x) => 420 + (90 * (x - 1))
            },
            {
                name: 'INTERIOR_VISUALIZATION',
                key: 7,
                power: 1,
                calc: (x) => 550 + (90 * (x - 1))
            },
            {
                name: 'INTERIOR_VISUALIZATION',
                key: 7,
                power: 0,
                calc: (x) => 650 + (90 * (x - 1))
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
                calc: (x) => 100 + (70 * (x - 1))
            },
            {
                name: 'PRODUCT_RENDERING',
                key: 9,
                power: 2,
                calc: (x) => 150 + (70 * (x - 1))
            },
            {
                name: 'PRODUCT_RENDERING',
                key: 9,
                power: 1,
                calc: (x) => 250 + (70 * (x - 1))
            },
            {
                name: 'PRODUCT_RENDERING',
                key: 9,
                power: 0,
                calc: (x) => 300 + (70 * (x - 1))
            },
            {
                name: 'PRODUCT_RENDERING',
                key: 10,
                power: 3,
                calc: (x) => 30 + (50 * (x - 1))
            },
            {
                name: 'PRODUCT_RENDERING',
                key: 10,
                power: 2,
                calc: (x) => 30 + (50 * (x - 1))
            },
            {
                name: 'PRODUCT_RENDERING',
                key: 10,
                power: 1,
                calc: (x) => 100 + (50 * (x - 1))
            },
            {
                name: 'PRODUCT_RENDERING',
                key: 10,
                power: 0,
                calc: (x) => 100 + (50 * (x - 1))
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
                power: 1,
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

        if (!find) return 'Calculated individually';

        return find.calc(x) + '€';
    }

    const [calculatorSwitch, setCalculatorSwitch] = useState('EXTERIOR_VISUALIZATION');
    const [key, setKey] = useState(1);
    const [count, setCount] = useState(0);

    const updateCalculatorAmount = (value = null) => {
        let amountText = value ?? +(document.querySelector('.calculator-grid-item__input')?.value);
        if (isNaN(amountText)) return calculatorAmount.textContent = '...';

        calculatorAmount.textContent = calculator(calculatorSwitch(), key(), count(), amountText);
    };

    calculatorSwitchItems.forEach(elem => {
        elem.onclick = e => setCalculatorSwitch(e.target.value);
    });

    const calculatorGridItemInput = document.querySelector('.calculator-grid-item__input');

    calculatorGridItemInput.oninput = e => {
        const value = e.target.value > 1 ? e.target.value : 1;

        e.target.value = value.toString().replaceAll(/[^0-9]/g, '');
        updateCalculatorAmount(value);
    };

    const initInputs = () => {
        const calculatorGridItemRadios = document.querySelectorAll('.calculator__radio');

        setKey(
            +(calculatorGridItemRadios[0].querySelector('.radio__input').value)
        );

        calculatorGridItemRadios?.forEach(elem => {
            elem.onclick = e => {
                setKey(e.target.value);
                updateCalculatorAmount();
            }
        });

        const calculatorGridItemCheckboxs = document.querySelectorAll('.calculator__checkbox');

        calculatorGridItemCheckboxs?.forEach(elem => {
            elem.onclick = () => {
                setCount(
                    [...document.querySelectorAll('.calculator__checkbox .checkbox__input:checked')]?.length
                );
                updateCalculatorAmount();
            }
        });

        updateCalculatorAmount();
    };

    const updateCalcForm = (value) => {
        const edit = {
            EXTERIOR_VISUALIZATION: {
                radions: `<div class="calculator-grid-item__radios">
                    <label class="radio calculator__radio">
                        <input class="radio__input" type="radio" name="key" value="1" checked hidden>
                        <div class="radio__icon"></div>
                        <span class="radio__title">Residential rendering</span>
                    </label>
                    <label class="radio calculator__radio">
                        <input class="radio__input" type="radio" name="key" value="2" hidden>
                        <div class="radio__icon"></div>
                        <span class="radio__title">Medium-large exterior rendering</span>
                    </label>
                    <label class="radio calculator__radio">
                        <input class="radio__input" type="radio" name="key" value="3" hidden>
                        <div class="radio__icon"></div>
                        <span class="radio__title">Aerial rendering</span>
                    </label>
                    <label class="radio calculator__radio">
                        <input class="radio__input" type="radio" name="key" value="0" hidden>
                        <div class="radio__icon"></div>
                        <span class="radio__title">3D plan</span>
                    </label>
                    <label class="radio calculator__radio">
                        <input class="radio__input" type="radio" name="key" value="0" hidden>
                        <div class="radio__icon"></div>
                        <span class="radio__title">3D 360" rotation</span>
                    </label>
                </div>`,
                checkboxs: `<div class="calculator-grid-item__checkboxs">
                    <label class="checkbox calculator__checkbox">
                        <input class="checkbox__input" type="checkbox" name="" hidden>
                        <span class="checkbox__icon">✓</span>
                        <span class="checkbox__title">completely finished 3d scene</span>
                    </label>
                    <label class="checkbox calculator__checkbox">
                        <input class="checkbox__input" type="checkbox" name="" hidden>
                        <span class="checkbox__icon">✓</span>
                        <span class="checkbox__title">3d model of building</span>
                    </label>
                    <label class="checkbox calculator__checkbox">
                        <input class="checkbox__input" type="checkbox" name="" hidden>
                        <span class="checkbox__icon">✓</span>
                        <span class="checkbox__title">CAD - files or draw</span>
                    </label>
                </div>`
            },
            INTERIOR_VISUALIZATION: {
                radions: `<div class="calculator-grid-item__radios">
                <label class="radio calculator__radio">
                    <input class="radio__input" type="radio" name="key" value="4" checked hidden>
                    <div class="radio__icon"></div>
                    <span class="radio__title">Rooms less than 10 square meters</span>
                </label>
                <label class="radio calculator__radio">
                    <input class="radio__input" type="radio" name="key" value="5" hidden>
                    <div class="radio__icon"></div>
                    <span class="radio__title">10 to 20 square meter</span>
                </label>
                <label class="radio calculator__radio">
                    <input class="radio__input" type="radio" name="key" value="6" hidden>
                    <div class="radio__icon"></div>
                    <span class="radio__title">More than 20 square meters</span>
                </label>
                <label class="radio calculator__radio">
                    <input class="radio__input" type="radio" name="key" value="7" hidden>
                    <div class="radio__icon"></div>
                    <span class="radio__title">Commercial space</span>
                </label>
                <label class="radio calculator__radio">
                    <input class="radio__input" type="radio" name="key" value="8" hidden>
                    <div class="radio__icon"></div>
                    <span class="radio__title">3D floor plan</span>
                </label>
                <label class="radio calculator__radio">
                    <input class="radio__input" type="radio" name="key" value="0" hidden>
                    <div class="radio__icon"></div>
                    <span class="radio__title">3D 360" rotation</span>
                </label>
            </div>`,
                checkboxs: `<div class="calculator-grid-item__checkboxs">
                <label class="checkbox calculator__checkbox">
                    <input class="checkbox__input" type="checkbox" name="" hidden>
                    <span class="checkbox__icon">✓</span>
                    <span class="checkbox__title">completely finished 3d scene</span>
                </label>
                <label class="checkbox calculator__checkbox">
                    <input class="checkbox__input" type="checkbox" name="" hidden>
                    <span class="checkbox__icon">✓</span>
                    <span class="checkbox__title">desing - project</span>
                </label>
                <label class="checkbox calculator__checkbox">
                    <input class="checkbox__input" type="checkbox" name="" hidden>
                    <span class="checkbox__icon">✓</span>
                    <span class="checkbox__title">CAD - files or draw</span>
                </label>
            </div>`
            },
            PRODUCT_RENDERING: {
                radions: `<div class="calculator-grid-item__radios">
                <label class="radio calculator__radio">
                    <input class="radio__input" type="radio" name="key" value="9" checked hidden>
                    <div class="radio__icon"></div>
                    <span class="radio__title">Product rendering - scene of interior</span>
                </label>
                <label class="radio calculator__radio">
                    <input class="radio__input" type="radio" name="key" value="10" hidden>
                    <div class="radio__icon"></div>
                    <span class="radio__title">Product rendering - white background</span>
                </label>
                <label class="radio calculator__radio">
                    <input class="radio__input" type="radio" name="key" value="0" hidden>
                    <div class="radio__icon"></div>
                    <span class="radio__title">MODELLING</span>
                </label>
                <label class="radio calculator__radio">
                    <input class="radio__input" type="radio" name="key" value="0" hidden>
                    <div class="radio__icon"></div>
                    <span class="radio__title">3D 360" rotation</span>
                </label>
            </div>`,
                checkboxs: `<div class="calculator-grid-item__checkboxs">
                <label class="checkbox calculator__checkbox">
                    <input class="checkbox__input" type="checkbox" name="" hidden>
                    <span class="checkbox__icon">✓</span>
                    <span class="checkbox__title">completely finished 3d scene</span>
                </label>
                <label class="checkbox calculator__checkbox">
                    <input class="checkbox__input" type="checkbox" name="" hidden>
                    <span class="checkbox__icon">✓</span>
                    <span class="checkbox__title">3d models of product</span>
                </label>
                <label class="checkbox calculator__checkbox">
                    <input class="checkbox__input" type="checkbox" name="" hidden>
                    <span class="checkbox__icon">✓</span>
                    <span class="checkbox__title">CAD - files or draw</span>
                </label>
            </div>`
            },
            ANIMATION: {
                radions: `<div class="calculator-grid-item__radios">
                <label class="radio calculator__radio">
                    <input class="radio__input" type="radio" name="key" value="11" checked hidden>
                    <div class="radio__icon"></div>
                    <span class="radio__title">Photorealistic</span>
                </label>
                <label class="radio calculator__radio">
                    <input class="radio__input" type="radio" name="key" value="12" hidden>
                    <div class="radio__icon"></div>
                    <span class="radio__title">Non-realistic</span>
                </label>
            </div>`,
                checkboxs: `<div class="calculator-grid-item__checkboxs">
                <label class="checkbox calculator__checkbox">
                    <input class="checkbox__input" type="checkbox" name="" hidden>
                    <span class="checkbox__icon">✓</span>
                    <span class="checkbox__title">completely finished 3d scene</span>
                </label>
                <label class="checkbox calculator__checkbox">
                    <input class="checkbox__input" type="checkbox" name="" hidden>
                    <span class="checkbox__icon">✓</span>
                    <span class="checkbox__title">3d models of ...</span>
                </label>
                <label class="checkbox calculator__checkbox">
                    <input class="checkbox__input" type="checkbox" name="" hidden>
                    <span class="checkbox__icon">✓</span>
                    <span class="checkbox__title">CAD - files or draw</span>
                </label>
            </div>`
            }
        }

        document.querySelector('.calculator-grid-item__radios').innerHTML = edit?.[value]?.radions;
        document.querySelector('.calculator-grid-item__checkboxs').innerHTML = edit?.[value]?.checkboxs;
    }

    const calculatorSwitchInput = document.querySelectorAll('.calculator__switch_input');
    calculatorSwitchInput.forEach(elem => {
        elem.onchange = e => {
            updateCalcForm(e.target.value);
            initInputs();
        }
    });

    initInputs();
})();

(function () {
    const adminFormEditorImage = document.querySelectorAll('.admin-form-editor__image');

    adminFormEditorImage.forEach(elem => {
        const adminFormEditorImageClose = elem.querySelector('.admin-form-editor__image_close');

        adminFormEditorImageClose.onclick = () => elem.setAttribute('hidden', true);
    })
})();