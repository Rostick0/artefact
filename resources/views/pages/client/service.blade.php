@extends('layout.client.layout')

@section('content')
    <x-banner-nav title="Services and prices" :navigations="$navigations" />
    <div class="service">
        <div class="container">
            <div class="service__date">Submitted by admin on July 25, 2023</div>
            <div class="service__item service-item">
                <div class="service-item__image">
                    <img class="service-item__img" src="https://premiumwebsite.ru/portfolio/sites/default/files/Screenshot_154.jpg" alt="">
                </div>
                <div class="service-item__text">
                    <div class="service-item__title">Product rendering - scene of interior</div>
                    <ul class="service-item__prices">
                        <li class="service-item__price">Creating scene (+ 1 render) - from €150</li>
                        <li class="service-item__price">Modeling - from €100</li>
                        <li class="service-item__price">Additional render - from €70</li>
                        <li class="service-item__price">Revision - €50</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
