@props(['navigations', 'title'])

<div class="banner-nav">
    <div class="container">
        <div class="banner-nav__container">
            <nav class="banner-nav__nav">
                @foreach ($navigations as $item)
                    @if ($item?->is_active)
                        <span class="banner-nav__nav_item _active">{{ $item->name }}</span>
                    @else
                        <a class="banner-nav__nav_item _active" href="{{ $item->link }}">{{ $item->name }}</a>
                    @endif
                @endforeach
            </nav>
            <div class="banner-nav__title">{{ $title }}</div>
        </div>
    </div>
</div>
