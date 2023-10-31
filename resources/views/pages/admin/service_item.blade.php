@extends('layout.admin.layout')

@section('content')
    <div class="admin-form-editor">
        <h1 class="admin-form-editor__title">Редактирование типа услуги #{{ $service_item->id }}</h1>
        <form class="admin-form-editor__form" action="{{ url()->current() }}" enctype="multipart/form-data" method="POST">
            @csrf
            <label class="label">
                <span class="label__title">Название</span>
                <input class="input" type="text" name="title" value="{{ $service_item->title ?? old('title') }}"
                    required />
                @error('title')
                    <span class="error">{{ $message }}</span>
                @enderror
            </label>
            <label class="label">
                <span class="label__title">Описание</span>
                <textarea class="input" name="description">{{ $service_item->description ?? old('description') }}</textarea>
                @error('description')
                    <span class="error">{{ $message }}</span>
                @enderror
            </label>
            <label class="label">
                <span class="label__title">Фото</span>
                <input class="input" type="file" name="image" value="{{ old('image') }}"
                    accept=".png, .jpeg, .jpg, .webm" />
                @error('image')
                    <span class="error">{{ $message }}</span>
                @enderror
            </label>
            @if ($service_item->image?->path)
                <img class="admin-form-editor__img" src="{{ Storage::url($service_item->image->path) }}" alt="">
            @endif
            <button class="btn admin-form-editor__btn">Изменить</button>
        </form>
    </div>
    <br>
    <div class="admin-items">
        <div class="admin-items__top">
            <h2>Цены и описание</h2>
            <a class="btn" href="/admin/service-price/create/{{ $service_item->id }}">+ Создать</a>
        </div>
        <div class="admin-items-prices__list">
            <div class="admin-items-prices__titles">
                <div class="admin-items-prices__title">Описание</div>
                <div class="admin-items-prices__title">Цена</div>
                <div class="admin-items-prices__title">Цена от?</div>
            </div>
            @foreach ($service_item->prices as $service)
                <a class="admin-items-prices__item" href="/admin/service-price/edit/{{ $service->id }}">
                    <div class="admin-items-prices__value">{{ $service->description }}</div>
                    <div class="admin-items-prices__value">{{ $service->price }}</div>
                    <div class="admin-items-prices__value">{{ $service->is_from ? 'да' : 'нет' }}</div>
                </a>
            @endforeach
        </div>
    </div>
@endsection
