@extends('layout.admin.layout')

@section('seo_title', 'Все услуги')

@section("content")
    <form class="admin-filter" action="{{ url()->current() }}">
        <div class="admin-filter__inputs">
            <label class="label admin-filter__label">
                <span class="label__title">Название</span>
                <input class="input" type="text" name="title" placeholder="Название" value="{{ Request::get('title') }}">
            </label>
        </div>
        <button class="btn admin-filter__btn">Поиск</button>
    </form>
    <a class="btn" href="/admin/service/create">+ Создать</a>
    <div class="admin-items">
        <div class="admin-items__list">
            @foreach ($services as $service)
                <a class="admin-item" href="/admin/service/edit/{{ $service->id }}">
                    <div class="admin-item__title">{{ $service->title }}</div>
                    <div class="admin-item__image">
                        <img class="admin-item__img" src="{{ Storage::url($service?->image?->path) }}" alt="">
                    </div>
                </a>
            @endforeach
        </div>
    </div>
    {{ $services->appends(Request::all())->links('vendor.pagination') }}
@endsection
