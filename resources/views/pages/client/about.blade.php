@extends('layout.client.layout')

@section('content')
    <div class="container">
        <section class="about">
            <div class="about__left">
                <div class="about__figure">
                    Work from 2019 year
                </div>
                <img class="about__img" src="/assets/img/abot_first.jpg" alt="">
            </div>
            <div class="about__right">
                <div class="about__description">
                    <p>Welcome to the realm of 3D visualization! We are an art, technology, and creativity-driven team
                        offering
                        you a captivating perspective on your projects. While our main office is located in the beautiful
                        city
                        of Prague, our experts hail from around the globe, allowing us to infuse diversity and innovation
                        into
                        every endeavor.</p>
                    <p>We take immense pride in the exceptional quality of our work, leaving a lasting impression with every
                        visualization. Our renderings are not just visually striking, but also precise representations of
                        your
                        ideas.</p>
                    <p>We continually refine our skills, mastering the latest technologies and engaging in advanced courses
                        to
                        stay ahead. If you are seeking a reliable partner to bring your projects to life, you've found us!
                        We
                        are always open to new opportunities and collaborations. Let's transform your ideas into reality
                        together. Get in touch with us now, and let's embark on a journey of creating stunning 3D
                        visualizations
                        for your success!</p>
                </div>
                <a class="btn about__btn" href="">Order a 3D project </a>
            </div>
        </section>
        <section class="visualization">
            <h2 class="title visualization__title">3D visualization</h2>
            <div class="visualization__description">
                <h3 class="visualization__description_title">When ordering a project from me, you will receive:</h3>
                <ul class="visualization__description_list">
                    <li class="visualization__description_item">Compliance with the given drawings and technical
                        specifications;</li>
                    <li class="visualization__description_item">Compliance with the agreed deadlines for the completion of
                        work;</li>
                    <li class="visualization__description_item">The exact embodiment of your ideas and concepts; Guaranteed
                        quality of visualization and graphics.</li>
                </ul>
            </div>
            <div class="visualization__slider">
                @foreach ($visualization_slides as $item)
                    @php
                        $item = (object) $item;
                    @endphp
                    <a class="visualization__slide visualization-slide" href="{{ $item?->link }}">
                        <div class="visualization-slide__title">{{ $item?->title }}</div>
                        <div class="visualization-slide__content">{{ $item?->content }}</div>
                    </a>
                @endforeach
            </div>
        </section>
    </div>
    <section class="need-visualization">
        <div class="container">
            <h2 class="titlle visualization__title">Do you need 3D visualisation?</h2>
            <div class="visualization__motivation"></div>
            <a class="btn visualization__btn" href="/feedback">Contact us</a>
        </div>
    </section>
    <div class="container">
        <section class="stat">
            <h2 class="title stat__title">Stats</h2>
            <ul class="stat__list">
                <li class="stat__item stat-item">
                    <div class="stat-item__icomn">
                        <span class="icon gv-icon-925"></span>
                    </div>
                    <div class="stat-item__text">
                        <div class="stat-item__count">300</div>
                        <div class="stat-item__title">Orders</div>
                    </div>
                </li>
                <li class="stat__item stat-item">
                    <div class="stat-item__icomn">
                        <span class="icon gv-icon-392"></span>
                    </div>
                    <div class="stat-item__text">
                        <div class="stat-item__count">400</div>
                        <div class="stat-item__title">Clients</div>
                    </div>
                </li>
                <li class="stat__item stat-item">
                    <div class="stat-item__icomn">
                        <span class="icon gv-icon-880"></span>
                    </div>
                    <div class="stat-item__text">
                        <div class="stat-item__count">500</div>
                        <div class="stat-item__title">Projects</div>
                    </div>
                </li>
                <li class="stat__item stat-item">
                    <div class="stat-item__icomn">
                        <span class="icon gv-icon-1110"></span>
                    </div>
                    <div class="stat-item__text">
                        <div class="stat-item__count">5</div>
                        <div class="stat-item__title">Experience</div>
                    </div>
                </li>
            </ul>
        </section>
    </div>
@endsection
