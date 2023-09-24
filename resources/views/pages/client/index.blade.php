@extends('layout.client.layout_short')

@section('content')
    <div class="main-banner">
        <div class="main-banner__slider main-slider-top">
            <div class="swiper-wrapper">
                <div class="swiper-slide main-slider-top__slide"
                    style="background-image: url('/assets/img/3d-visualisation-slide.jpg')">
                    <div class="main-slider-top__slide_inner">
                        <div class="main-slider-top__big-text">
                            3D <span class="text-ui">VISUALISATION</span>
                        </div>
                        <a class="btn main-slider-top__btn" href="/contacts">Get to know us</a>
                    </div>
                </div>
                <div class="swiper-slide main-slider-top__slide"
                    style="background-image: url('/assets/img/visualization-interior-slide.jpg')">
                    <div class="main-slider-top__slide_inner">
                        <div class="main-slider-top__middle-text">
                            VISUALIZATION OF
                            <br>
                            EXTERIOR
                            <br>
                            AND <span class="text-ui">INTERIOR</span>
                        </div>
                        <a class="btn main-slider-top__btn" href="/contacts">CONTACT US</a>
                    </div>
                </div>
                <div class="swiper-pagination main-slider-top__pagination"></div>
            </div>
        </div>
        <div class="main-banner__slider main-slider-bottom"></div>
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
            <img class="main-info__img" decoding="async" loading="lazy" src="/assets/img/autumn.jpg" alt="">
            <div class="main-info__bottom">
                <div class="main-info__bottom_left">
                    <div class="main-info__need">Do you need 3D visualization?</div>
                    <div class="main-info__service">Then I am at your service!</div>
                </div>
                <div class="main-info__bottom_right">
                    <a class="btn" href="/contacts">Contact us</a>
                    <a class="btn" href="/portfolio">Portfolio</a>
                </div>
            </div>
        </div>
    </section>
    <section class="main-service-prices">
        <div class="container">
            <h2 class="title main-service-prices__title">Services and prices</h2>
            <x-services-list :services="[...$services]" />
        </div>
    </section>
@endsection
