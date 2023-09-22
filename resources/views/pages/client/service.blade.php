@extends('layout.client.layout')

@section('content')
    <x-banner-nav title="Services and prices" :navigations="$navigations" />
    <div class="service">
        <div class="container">
            <div class="service__date">Submitted by admin on July 25, 2023</div>
            <div class="service__description">Our product rendering service takes your product modelling to the next level by
                adding lighting, materials, and textures to create a stunning visualization that truly showcases your
                product</div>
            <div class="service__list">
                <div class="service__item service-item">
                    <div class="service-item__image">
                        <div class="service-item__image_inner">
                            <img class="service-item__img" decoding="async" loading="lazy"
                                src="https://premiumwebsite.ru/portfolio/sites/default/files/Screenshot_154.jpg"
                                alt="">
                        </div>
                    </div>
                    <div class="service-item__text">
                        <div class="service-item__title">Product rendering - scene of interior</div>
                        <div class="service-item__description">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Commodi id molestias doloremque asperiores aliquid illum, quis quidem ex, cumque dolorum
                            iusto. Ab corrupti dolor harum esse ratione numquam asperiores incidunt!</div>
                        <ul class="service-item__prices">
                            <li class="service-item__price">Creating scene (+ 1 render) - from €150</li>
                            <li class="service-item__price">Modeling - from €100</li>
                            <li class="service-item__price">Additional render - from €70</li>
                            <li class="service-item__price">Revision - €50</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="service__description_bottom">
                At our company, we believe in providing transparent and affordable pricing. Our prices are tailored to
                your
                specific needs and requirements, ensuring that you get the best possible value for your money. If you
                have
                any
                questions about our services or pricing, please don't hesitate to get in touch with us. We'd be more
                than
                happy
                to provide you with a quote for your project.
            </div>
            <img class="service__image" decoding="async" loading="lazy"
                src="https://premiumwebsite.ru/portfolio/sites/default/files/2023-07/Thanos-Infinity-Gauntlet-3D-model-for-3D-Printing-1.png"
                alt="" />
        </div>
    </div>
@endsection
