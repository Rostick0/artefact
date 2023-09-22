@extends('layout.client.layout')

@section('content')
    <x-banner-nav title="Services and prices" :navigations="$navigations" />
    <div class="services">
        <div class="container">
            <div class="services__list">
                <a class="services__item services-item" href="/service/1">
                    <div class="services-item__title">INTERIOR VISUALIZATION</div>
                    <div class="services-item__image">
                        <img class="services-item__img"
                            src="https://premiumwebsite.ru/portfolio/sites/default/files/styles/small/public/2023-07/Product-Renders-service-12.jpg?itok=4OgDc5IJ"
                            alt="">
                    </div>
                </a>
            </div>
        </div>
    </div>
@endsection
