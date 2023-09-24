@props(['services'])

<div class="services-list">
    @foreach ($services as $item)
        <a class="services-list__item services-list-item" href="/service/{{ $item->id }}">
            <div class="services-list-item__title">{{ $item->title }}</div>
            <div class="services-list-item__image">
                <img class="services-list-item__img" decoding="async" loading="lazy"
                    src="https://premiumwebsite.ru/portfolio/sites/default/files/styles/small/public/2023-07/Product-Renders-service-12.jpg?itok=4OgDc5IJ"
                    alt="">
            </div>
        </a>
    @endforeach
</div>
