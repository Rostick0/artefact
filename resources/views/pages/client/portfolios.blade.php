@extends('layout.client.layout')

@section('seo_title', 'Portfolio')

@section('content')
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
                        <div class="portfolio__list_item portfolio-item _active" data-id="{{ $item->category_id }}"
                            data-is-video="{{ $item->file->count() >= 1 }}">
                            <div class="portfolio-item__images" hidden>
                                {{ $item->file->count() ? $item->file : $item?->image }}</div>
                            @if (isset($item?->file[0]?->path))
                                <video class="portfolio-item__img" src="{{ Storage::url($item?->file[0]?->path ?? '') }}"
                                    autoplay muted></video>
                            @else
                                <img class="portfolio-item__img" decoding="async" loading="lazy"
                                    src="{{ Storage::url($item?->image[0]?->path ?? '') }}" alt="{{ $item?->title }}">
                            @endif
                            <button class="portfolio-item__plus">
                                <span>+</span>
                                @if (count($item?->image) > 1)
                                    <svg class="portfolio-item__many_images" xmlns="http://www.w3.org/2000/svg"
                                        width="16" height="16" fill="none">
                                        <path fill="#000"
                                            d="M8 2h1v3H8zM13 2h1v6h-1zM9 2h4v1H9zM11 7h2v1h-2zM5 5h1v3H5zM6 5h5v1H6zM8 10h3v1H8zM10 6h1v4h-1z" />
                                        <path stroke="#000" d="M2.5 8.5h5v5h-5z" />
                                    </svg>
                                @endif
                            </button>
                            <a class="portfolio-item__title" href="/portfolio/{{ $item->id }}">{{ $item->title }}</a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <x-modal />
@endsection
