@include('layout.head')
<header class="header">
    <div class="container">
        <div class="header__container">
            <a class="header__image" href="/">
                <img class="header__logo" src="/assets/img/logo.jpg" decoding="async" loading="lazy" width="100"
                    height="57" alt="ARTEFACT">
            </a>
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
