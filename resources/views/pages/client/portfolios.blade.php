@extends('layout.client.layout')

@section('content')
    <x-banner-nav title="My works" :navigations="$navigations" />
    <div class="portfolio">
        <div class="container">
            <div class="portfolio__container">
                <div class="portfolio__filter">
                    <div class="portfolio__filter_item">All</div>
                    <div class="portfolio__filter_item">Animation</div>
                    <div class="portfolio__filter_item">Interior</div>
                    <div class="portfolio__filter_item">Items</div>
                    <div class="portfolio__filter_item">Modelling</div>
                    <div class="portfolio__filter_item">Panorams</div>
                    <div class="portfolio__filter_item">Exterior</div>
                </div>
                <div class="portfolio__list">
                    <div class="portfolio__list_item portfolio-item">
                        <img class="portfolio-item__img"
                            src="https://premiumwebsite.ru/portfolio/sites/default/files/portfolio-images/Screenshot_4.jpg"
                            alt="">
                        <div class="portfolio-item__plus">+</div>
                        <div class="portfolio-item__title">Коттедж</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
