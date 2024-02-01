@props(['services'])

<div class="services-list">
    @foreach ($services as $item)
        <a class="services-list__item services-list-item" href="/service/{{ $item->id }}">
            <div class="services-list-item__title">{{ $item->title }}</div>
            <div class="services-list-item__image">
                <img class="services-list-item__img" decoding="async" loading="lazy"
                    src="{{ Storage::url($item?->image?->path) }}" alt="{{ $item->title }}">
            </div>
        </a>
    @endforeach
</div>
