<footer class="footer">
    <div class="footer__content">
        <div class="container">
            <div class="footer__content_inner">
                <div class="footer__content_item">
                    <div class="footer__content_top">Contacts</div>
                    <div class="footer__contacts">
                        <a class="footer__contacts_item" href="mailto:sofialopatina@artefact.guru">
                            <i class="far fa-envelope"></i>
                            <span>sofialopatina@artefact.guru</span>
                        </a>
                        <div class="footer__contacts_item">
                            <i class="far fa-map"></i>
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
                    <div class="footer__works">
                        @foreach (\App\Models\Portfolio::orderByDesc('id')->limit(6)->get() as $item)
                            <a class="footer__works_item" href="/portfolio/{{ $item->id }}">
                                <img class="footer__works_img" width="70" height="70" decoding="async"
                                    loading="lazy" src="{{ Storage::url($item?->image[0]?->path ?? '') }}"
                                    alt="{{ $item->title }}" />
                            </a>
                        @endforeach
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
