@extends('layout.client.layout')
@section('seo_title', 'About Artefact')

@section('content')
    <x-banner-nav title="About us" :navigations="$navigations" />
    <div class="container">
        <section class="about">
            <div class="about__description">
                <p class="MsoNormal" style="line-height: 2;"><span lang="EN-US"
                        style="font-size: 12pt;"><strong>Welcome</strong> to the realm of 3D visualization! We are an art,
                        technology, and creativity-driven team offering you a captivating perspective on your projects.
                        While our main office is located in the beautiful city of Prague, our experts hail from around the
                        globe, allowing us to infuse diversity and innovation into every endeavor.</span></p>
                <p class="MsoNormal" style="line-height: 2;"><span lang="EN-US" style="font-size: 12pt;">We take immense
                        pride in the exceptional quality of our work, leaving a lasting impression with every visualization.
                        Our renderings are not just visually striking, but also precise representations of your ideas. We
                        continually refine our skills, mastering the latest technologies and engaging in advanced courses to
                        stay ahead.</span></p>
                <p class="MsoNormal" style="line-height: 2;"><span lang="EN-US" style="font-size: 12pt;">If you are
                        seeking a reliable partner to bring your projects to life, you've found us! We are always open to
                        new opportunities and collaborations. Let's transform your ideas into reality together. Get in touch
                        with us now, and let's embark on a journey of creating stunning 3D visualizations for your
                        success!</span></p>
            </div>
            <a class="btn about__btn" href="/contacts"><span style="font-size: 12pt;">Order the 3D project</span> </a>
            <div class="about__images">
                <div class="about__image _figure">
                    <div class="about__figure"><span style="font-size: 14pt;">Work from <span
                                style="font-size: 18pt;">2019&nbsp;</span></span></div>
                    <img class="about__img" src="../../../assets/img/abot_first.jpg" alt="" decoding="async"
                        loading="lazy" width="100%">
                </div>
                <div class="about__image"><img class="about__img" src="../../../assets/img/Screenshot_7.jpg" alt=""
                        decoding="async" loading="lazy" width="100%"></div>
                <div class="about__image"><img class="about__img" src="../../../assets/img/Screenshot_8.jpg"
                        alt=""decoding="async" loading="lazy" width="100%"></div>
            </div>
        </section>
        <section class="visualization">
            <h2 class="title visualization__title">3D visualization</h2>
            <div class="visualization__description">
                <h3 class="visualization__description_title">When ordering a project from us, you will receive:</h3>
                <ul>
                    <li style="line-height: 2;"><span style="font-size: 12pt;">&bull; Compliance with the given drawings and
                            technical specifications;</span></li>
                    <li style="line-height: 2;"><span style="font-size: 12pt;">&bull; Compliance with the agreed deadlines
                            for the completion of work;</span></li>
                    <li style="line-height: 2;"><span style="font-size: 12pt;">&bull; The exact embodiment of your ideas and
                            concepts; Guaranteed quality of visualization and graphics.</span></li>
                </ul>
            </div>
            <div class="visualization__slider swiper">
                <div class="swiper-wrapper">
                    @foreach ($visualization_slides as $item)
                        @php $item = (object) $item; @endphp
                        <a class="visualization__slide visualization-slide swiper-slide" href="{{ $item?->link }}">
                            <div class="visualization-slide__inner">
                                <div class="visualization-slide__title">{{ $item?->title }}</div>
                                {!! $item?->icon !!}
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
            <div class="visualization__slider_pagination swiper-pagination">&nbsp;</div>
        </section>
    </div>
    <section class="need-visualization">
        <div class="container">
            <div class="need-visualization__container">
                <h2 class="title need-visualization__title">Do you need 3D visualization?</h2>
                <div class="need-visualization__motivation">Make order right now!</div>
                <a class="btn need-visualization__btn" href="/contacts">Contact us</a>
            </div>
        </div>
    </section>
    <div class="container">
        <x-stats />
    </div>
@endsection
