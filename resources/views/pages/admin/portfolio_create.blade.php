@extends('layout.admin.layout')

@section('content')
    <div class="admin-form-editor">
        <h1 class="admin-form-editor__title">Создание портфолио</h1>
        <form class="admin-form-editor__form" action="{{ url()->current() }}" enctype="multipart/form-data" method="POST">
            @csrf
            <div class="admin-form-editor__flex">
                <label class="label">
                    <span class="label__title">Название</span>
                    <textarea class="input" type="text" name="title" rows="1" required>{{ old('title') }}</textarea>
                    @error('title')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </label>
                <label class="label">
                    <span class="label__title">Категория</span>
                    <select class="input" name="category_id" required>
                        @foreach ($categories as $item)
                            <option @if (old('category_id') == $item->id) selected @endif value="{{ $item->id }}">
                                {{ $item->name }}</option>
                        @endforeach
                    </select>
                    @error('category_id')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </label>
            </div>
            <label class="label">
                <span class="label__title">Описание</span>
                <textarea class="input" name="description">{{ old('description') }}</textarea>
                @error('description')
                    <span class="error">{{ $message }}</span>
                @enderror
            </label>
            <label class="label">
                <span class="label__title">Фото</span>
                <input class="input" type="file" name="image[]" value="{{ old('image') }}"
                    accept=".png, .jpeg, .jpg, .webm" multiple />
                @error('image')
                    <span class="error">{{ $message }}</span>
                @enderror
            </label>
            <label class="label">
                <span class="label__title">Видео</span>
                <input class="input" type="file" name="video[]" value="{{ old('video') }}" accept=".mp4, .mov"
                    multiple />
                @error('video')
                    <span class="error">{{ $message }}</span>
                @enderror
            </label>
            <button class="btn admin-form-editor__btn">Создать</button>
        </form>
    </div>
@endsection
