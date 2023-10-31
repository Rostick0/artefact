@extends('layout.client.layout_short')

@section('seo_title', 'Artefact')

@section('content')
    <div class="main-banner">
        <div class="main-banner__slider main-slider-top">
            <div class="swiper-wrapper">
                <div class="swiper-slide main-slider-top__slide"
                    style="background-image: url('/assets/img/3d-visualisation-slide.jpg')">
                    <div class="main-slider-top__slide_inner">
                        <div class="main-slider-top__middle-text">
                            3D <span class="text-ui">VISUALISATION</span>
                        </div>
                        {{-- <a class="btn main-slider-top__btn" href="/contacts">Get to know us</a> --}}
                    </div>
                </div>
                <div class="swiper-slide main-slider-top__slide"
                    style="background-image: url('/assets/img/visualization-interior-slide.jpg')">
                    <div class="main-slider-top__slide_inner">
                        <div class="main-slider-top__middle-text">
                            VISUALIZATION OF
                            <br>
                            <span class="text-ui">EXTERIOR</span>
                            <br>
                            AND <span class="text-ui">INTERIOR</span>
                        </div>
                        {{-- <a class="btn main-slider-top__btn" href="/contacts">CONTACT US</a> --}}
                    </div>
                </div>
                <div class="swiper-pagination main-slider-top__pagination"></div>
            </div>
        </div>
        <div class="container">
            <div class="main-banner__slider main-slider-bottom">
                <div class="swiper-wrapper">
                    @foreach ($portfolios as $portfolio)
                        <div class="swiper-slide">
                            <div class="portfolio__list_item portfolio-item _active">
                                <div class="portfolio-item__images" hidden>{{ $portfolio->image }}</div>
                                <img class="portfolio-item__img" decoding="async" loading="lazy"
                                    src="{{ Storage::url($portfolio->image[0]?->path ?? '') }}"
                                    alt="{{ $portfolio?->title }}">
                                <button class="portfolio-item__plus">+</button>
                                <a class="portfolio-item__title"
                                    href="/portfolio/{{ $portfolio->id }}">{{ $portfolio->title }}</a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <section class="main-info">
        <div class="container">
            <div class="main-info__text">
                <p>Welcome to the realm of 3D visualization! We are an art, technology, and creativity-driven team offering
                    you
                    a
                    captivating perspective on your projects. While our main office is located in the beautiful city of
                    Prague,
                    our
                    experts hail from around the globe, allowing us to infuse diversity and innovation into every endeavor.
                </p>
                <p>We take immense pride in the exceptional quality of our work, leaving a lasting impression with every
                    visualization. Our renderings are not just visually striking, but also precise representations of your
                    ideas.</p>
                <p>We continually refine our skills, mastering the latest technologies and engaging in advanced courses to
                    stay
                    ahead. If you are seeking a reliable partner to bring your projects to life, you've found us! We are
                    always
                    open
                    to new opportunities and collaborations. Let's transform your ideas into reality together. Get in touch
                    with
                    us
                    now, and let's embark on a journey of creating stunning 3D visualizations for your success!</p>
            </div>
            <div class="main-info__video">
                <div class="main-info__video_inner">
                    <iframe class="main-info__iframe"
                        src="https://drive.google.com/file/d/1S69A3V67WoSm9cGN0O1g3kaWQGPoIyZR/preview" width="640"
                        height="640"></iframe>
                </div>
            </div>
            <div class="main-info__bottom">
                <div class="main-info__bottom_left">
                    <div class="main-info__need">Do you need 3D visualization?</div>
                    <div class="main-info__service">Then we are at your service!</div>
                </div>
                <div class="main-info__bottom_right">
                    <a class="btn" href="/contacts">Contact us</a>
                    <a class="btn" href="/portfolio">Portfolio</a>
                </div>
            </div>
        </div>
    </section>
    <section class="calculator">
        <div class="container">
            <div class="calculator__container">
                <div class="calculator__switch">
                    <label class="calculator__switch_item">
                        <input class="calculator__switch_input" type="radio" name="calculator_switch" checked
                            value="EXTERIOR_VISUALIZATION" hidden>
                        <span class="calculator__switch_name">Exterior visualization</span>
                    </label>
                    <label class="calculator__switch_item">
                        <input class="calculator__switch_input" type="radio" name="calculator_switch"
                            value="INTERIOR_VISUALIZATION" hidden>
                        <span class="calculator__switch_name">Interior visualization</span>
                    </label>
                    <label class="calculator__switch_item">
                        <input class="calculator__switch_input" type="radio" name="calculator_switch"
                            value="PRODUCT_RENDERING" hidden>
                        <span class="calculator__switch_name">Product rendering</span>
                    </label>
                    <label class="calculator__switch_item">
                        <input class="calculator__switch_input" type="radio" name="calculator_switch" value="ANIMATION"
                            hidden>
                        <span class="calculator__switch_name">Animation</span>
                    </label>
                </div>
                <div class="calculator__grid">
                    <div class="calculator__grid_item calculator-grid-item">
                        <div class="calculator-grid-item__count">1</div>
                        <div class="calculator-grid-item__question">What to count?</div>
                        <div class="calculator-grid-item__radios">
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
                                <span class="radio__title">3D 360° rotation</span>
                            </label>
                        </div>
                    </div>
                    <div class="calculator__grid_item calculator-grid-item">
                        <div class="calculator-grid-item__count">2</div>
                        <div class="calculator-grid-item__question">What do you have?</div>
                        <div class="calculator-grid-item__checkboxs">
                            <label class="radio calculator__radio_value">
                                <input class="radio__input" type="radio" value="1" name="have" hidden>
                                <span class="radio__icon"></span>
                                <span class="checkbox__title">completely finished 3d scene</span>
                            </label>
                            <label class="radio calculator__radio_value">
                                <input class="radio__input" type="radio" value="2" name="have" hidden>
                                <span class="radio__icon"></span>
                                <span class="checkbox__title">3d model of building</span>
                            </label>
                            <label class="radio calculator__radio_value">
                                <input class="radio__input" type="radio" value="3" name="have" hidden>
                                <span class="radio__icon"></span>
                                <span class="checkbox__title">CAD - files or draw</span>
                            </label>
                        </div>
                    </div>
                    <div class="calculator__grid_item calculator-grid-item">
                        <div class="calculator-grid-item__count">3</div>
                        <div class="calculator-grid-item__question">Specify the parameters</div>
                        <label class="input-field-ui">
                            <span class="input-field-ui__title">Picture or sec/min</span>
                            <input class="calculator-grid-item__input input-field-ui__input" type="number">
                        </label>
                    </div>
                </div>
                <div class="calculator__total">Total: <strong class="calculator__amount">...</strong></div>
                <div class="calculator__bottom text-ui">*The cost calculation is approximate, the final cost depends on the
                    initial data of the project.</div>
            </div>
        </div>
    </section>
    <section class="main-service-prices">
        <div class="container">
            <h2 class="title main-service-prices__title">Services and prices</h2>
            <x-services-list :services="[...$services]" />
        </div>
    </section>
    <x-modal />
@endsection
