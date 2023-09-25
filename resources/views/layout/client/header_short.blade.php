@include('layout.head')

<div class="header-short__top">
    <div class="container header-short__top_container">
        <a class="header-short__img" href="/">
            <img class="header-short__logo" decoding="async" loading="lazy" src="/assets/img/logo.jpg" alt="ARTEFACT">
        </a>
        <div class="header-short__info">
            <div class="header-short__info_icon">
                <span class="fas fa-envelope"></span>
            </div>
            <div class="header-short__info_text">
                <span>Write me</span>
                <a class="header-short__info_mailto"
                    href="mailto:sofialopatina@artefact.guru">sofialopatina@artefact.guru</a>
            </div>
        </div>
    </div>
</div>
<div class="header-short__bottom">
    <div class="container header-short__bottom_container">
        <div class="header-mobile">
            <div class="header-mobile__inner">
                <div class="header-mobile__top">
                    <i class="fa fa-times header-mobile__close"></i>
                </div>
                <div class="header-mobile__list">
                    <a class="header-mobile__link{{ Request::path() === 'about' ? ' _active' : '' }}"
                        href="/about">About
                        us</a>
                    <a class="header-mobile__link{{ Request::path() === 'portfolio' ? ' _active' : '' }}"
                        href="/portfolio">Portfolio</a>
                    <a class="header-mobile__link{{ Request::path() === 'services' ? ' _active' : '' }}"
                        href="/services">Services and prices</a>
                    <a class="header-mobile__link{{ Request::path() === 'faq' ? ' _active' : '' }}"
                        href="/faq">Faq</a>
                    <a class="header-mobile__link{{ Request::path() === 'panorams' ? ' _active' : '' }}"
                        href="/panorams">Panorams</a>
                    <a class="header-mobile__link{{ Request::path() === 'contacts' ? ' _active' : '' }}"
                        href="/contacts">Contacts</a>
                </div>
            </div>
        </div>
        <nav class="header-short__nav">
            <div class="header-burger">
                <span class="header-burger__line"></span>
            </div>
            <a class="header-short__nav_item" href="/about">About us</a>
            <a class="header-short__nav_item" href="/portfolio">Portfolio</a>
            <a class="header-short__nav_item" href="/services">Services and prices</a>
            <a class="header-short__nav_item" href="/faq">Faq</a>
            <a class="header-short__nav_item" href="/panorams">Panorams</a>
            <a class="header-short__nav_item" href="/contacts">Contacts</a>
        </nav>
        <a class="btn header-short__contact" href="/feedback">Contact us</a>
    </div>
</div>
