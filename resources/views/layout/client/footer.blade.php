<footer class="footer">
    <div class="footer__content">
        <div class="container">
            <div class="footer__content_inner">
                <div class="footer__content_item">
                    <div class="footer__content_top">Contacts</div>
                    <div class="footer__contacts">
                        <a class="footer__contacts_item" href="mailto:info@artefact.guru">
                            <i class="far fa-envelope-open"></i>
                            <span>info@artefact.guru</span>
                        </a>
                        <div class="footer__contacts_item">
                            <i class="icon fas fa-map-marker-alt"></i>
                            <span>Prague, Korunni 2569/108</span>
                        </div>
                    </div>
                </div>
                <div class="footer__content_item">
                    <div class="footer__content_top">Menu</div>
                    <div class="footer__nav">
                        <a href="/about">About us</a>
                        <a href="/portfolio">Portfolio</a>
                        <a href="/services">Services and prices</a>
                        <a href="/faq">FAQ</a>
                    </div>
                </div>
                <div class="footer__content_item">
                    <div class="footer__content_top">New works</div>
                    <div class="footer-works-swiper swiper">
                        <div class="swiper-wrapper">
                            @foreach (\App\Models\Portfolio::orderByDesc('id')->limit(18)->get()->chunk(6) as $list)
                                <div class="swiper-slide footer__works">
                                    @foreach ($list as $item)
                                        <a class="footer__works_item" href="/portfolio/{{ $item->id }}">
                                            <img class="footer__works_img" width="70" height="70"
                                                decoding="async" loading="lazy"
                                                src="{{ Storage::url($item?->image[0]?->path ?? '') }}"
                                                alt="{{ $item->title }}" />
                                        </a>
                                    @endforeach
                                </div>
                            @endforeach
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="footer__copyright">© Copyright Artefact 2023. All rights reserved.</div>
    </div>
</footer>
@include('layout.foot')
