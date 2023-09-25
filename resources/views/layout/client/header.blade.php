@include('layout.head')
<header class="header">
    <div class="container">
        <div class="header__container">
            <a class="header__image" href="/">
                <img class="header__logo" src="/assets/img/logo.jpg" decoding="async" loading="lazy" width="100"
                    height="57" alt="ARTEFACT">
            </a>
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
            <div class="header-burger">
                <span class="header-burger__line"></span>
            </div>
            <nav class="header__nav">
                <a class="header__nav_item{{ Request::path() === 'about' ? ' _active' : '' }}" href="/about">About
                    us</a>
                <a class="header__nav_item{{ Request::path() === 'portfolio' ? ' _active' : '' }}"
                    href="/portfolio">Portfolio</a>
                <a class="header__nav_item{{ Request::path() === 'services' ? ' _active' : '' }}"
                    href="/services">Services and prices</a>
                <a class="header__nav_item{{ Request::path() === 'faq' ? ' _active' : '' }}" href="/faq">Faq</a>
                <a class="header__nav_item{{ Request::path() === 'panorams' ? ' _active' : '' }}"
                    href="/panorams">Panorams</a>
                <a class="header__nav_item{{ Request::path() === 'contacts' ? ' _active' : '' }}"
                    href="/contacts">Contacts</a>
            </nav>
            <a class="btn header__contact" href="/feedback">Contact us</a>
        </div>
    </div>
</header>
