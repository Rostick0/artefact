@extends('layout.client.layout')

@section('seo_title', 'Portfolio')

@section("content")
    <x-banner-nav title="Portfolio" :navigations="$navigations" />
    <div class="portfolio">
        <div class="container">
            <div class="portfolio__container">
                <div class="portfolio__filter">
                    <div class="portfolio__filter_item _active" data-id="0">All</div>
                    @foreach ($categories as $item)
                        <div class="portfolio__filter_item" data-id="{{ $item->id }}">{{ $item->name }}</div>
                    @endforeach
                </div>
                <div class="portfolio__list">
                    @foreach ($portfolios as $item)
                        <div class="portfolio__list_item portfolio-item _active" data-id="{{ $item->category_id }}">
                            <div class="portfolio-item__images" hidden>{{ $item->image }}</div>
                            <img class="portfolio-item__img" decoding="async" loading="lazy"
                                src="{{ Storage::url($item?->image[0]?->path ?? '') }}" alt="{{ $item?->title }}">
                            <button class="portfolio-item__plus">+</button>
                            <a class="portfolio-item__title" href="/portfolio/{{ $item->id }}">{{ $item->title }}</a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <x-modal />
@endsection
