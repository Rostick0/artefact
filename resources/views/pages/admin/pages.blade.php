@extends('layout.admin.layout')

@section('seo_title', 'Все страницы')

@section("content")
    <div class="admin-items">
        <div class="admin-items__list">
            @foreach ($pages as $page)
                <a class="admin-item" href="/admin/page/edit/{{ $page->id }}">
                    <div class="admin-item__title">{{ explode('.', $page->path)[0] }}</div>
                    {{-- <div class="admin-item__image">
                        <img class="admin-item__img" src="{{ Storage::url($portfolio->image[0]?->path ?? '') }}" alt="{{ $portfolio->title }}">
                    </div> --}}
                </a>
            @endforeach
        </div>
    </div>
@endsection
