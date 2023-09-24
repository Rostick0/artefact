@extends('layout.client.layout')

@section('content')
    <x-banner-nav :title="$service->title" :navigations="$navigations" />
    <div class="service">
        <div class="container">
            <div class="service__date">Submitted by admin on July 25, 2023</div>
            @if ($service->description)
                <div class="service__description">{{ $service->description }}</div>
            @endif
            <div class="service__list">
                @foreach ($service->items as $item)
                    <div class="service__item service-item">
                        <div class="service-item__image">
                            <div class="service-item__image_inner">
                                <img class="service-item__img" decoding="async" loading="lazy" src="{{ Storage::url($item->image->path) }}"
                                    alt="{{ $item?->title }}">
                            </div>
                        </div>
                        <div class="service-item__text">
                            @if ($item?->title)
                                <div class="service-item__title">{{ $item->title }}</div>
                            @endif
                            @if ($item?->description)
                                <div class="service-item__description">{{ $item->description }}</div>
                            @endif
                            <ul class="service-item__prices">
                                @foreach ($item?->prices as $price)
                                    <li class="service-item__price">{{ $price?->description }} - @if ($price?->is_from)
                                            from
                                        @endif €{{ $price->price }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                @endforeach
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
            <img class="service__image" decoding="async" loading="lazy" src="{{ Storage::url($service->image->path) }}"
                alt="{{ $service?->title }}" />
        </div>
    </div>
@endsection
