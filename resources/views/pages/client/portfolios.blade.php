@extends('layout.client.layout')

@section('content')
    <x-banner-nav title="My works" :navigations="$navigations" />
    <div class="portfolio">
        <div class="container">
            <div class="portfolio__container">
                <div class="portfolio__filter">
                    <div class="portfolio__filter_item _active">All</div>
                    @foreach ($categories as $item)
                        <div class="portfolio__filter_item">{{ $item->name }}</div>
                    @endforeach
                </div>
                <div class="portfolio__list">
                    @foreach ($portfolios as $item)
                        <div class="portfolio__list_item portfolio-item" data-type="{{ $item->category_id }}">
                            <img class="portfolio-item__img" decoding="async" loading="lazy"
                                src="{{ Storage::url($item->image->path) }}" alt="{{ $item?->title }}">
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
