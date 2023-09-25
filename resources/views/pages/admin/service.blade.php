@extends('layout.admin.layout')

@section('content')
    <div class="admin-form-editor">
        <h1 class="admin-form-editor__title">Редактирование услуги #{{ $service->id }}</h1>
        <form class="admin-form-editor__form" action="{{ url()->current() }}" enctype="multipart/form-data" method="POST">
            @csrf
            <label class="label">
                <span class="label__title">Название</span>
                <input class="input" type="text" name="title" value="{{ $service->title ?? old('title') }}" required />
                @error('title')
                    <span class="error">{{ $message }}</span>
                @enderror
            </label>
            <label class="label">
                <span class="label__title">Описание</span>
                <textarea class="input" name="description">{{ $service->description ?? old('description') }}</textarea>
                @error('description')
                    <span class="error">{{ $message }}</span>
                @enderror
            </label>
            <label class="label">
                <span class="label__title">Фото</span>
                <input class="input" type="file" name="image" value="{{ old('image') }}" />
                @error('image')
                    <span class="error">{{ $message }}</span>
                @enderror
            </label>
            @if ($service->image?->path)
                <img class="admin-form-editor__img" src="{{ Storage::url($service->image->path) }}" alt="">
            @endif
            <button class="btn admin-form-editor__btn">Изменить</button>
        </form>
    </div>
@endsection
