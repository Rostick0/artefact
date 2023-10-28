@extends('layout.client.layout')

@section('seo_title', $portfolio->title)

@section('content')
    <x-banner-nav :title="$portfolio->title" :navigations="$navigations" />
    <section class="portfolio-one">
        <div class="container">
            <img class="portfolio-one__img" decoding="async" loading="lazy" src="{{ Storage::url($portfolio->image[0]?->path ?? '') }}" alt="{{$portfolio->title}}" />
            <div class="portfolio-one__info">
                <div class="portfolio-one__category">{{ $portfolio->category->name }}</div>
                <div class="portfolio-one__date">{{ \Carbon\Carbon::parse($portfolio->created_at)->format('F d, Y') }}</div>
            </div>
            <h1 class="portfolio-one__title">{{ $portfolio->title }}</h1>
            @if ($portfolio->description)
                <div class="portfolio-one__description">{!! $portfolio->description !!}</div>
            @endif
        </div>
    </section>
@endsection
