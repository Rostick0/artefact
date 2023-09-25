@extends('layout.admin.layout')

@section('content')
    <div class="admin-form-editor">
        <h1 class="admin-form-editor__title">Работа #{{ $portfolio->id }} в портфолио</h1>
        <form class="admin-form-editor__form" action="{{ url()->current() }}" enctype="multipart/form-data" method="POST">
            @csrf
            <div class="admin-form-editor__flex">
                <label class="label">
                    <span class="label__title">Название</span>
                    <input class="input" type="text" name="title" value="{{ old('title') ?? $portfolio->title }}"
                        required />
                    @error('title')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </label>
                <label class="label">
                    <span class="label__title">Категория</span>
                    <select class="input" name="category_id" required>
                        @foreach ($categories as $item)
                            <option @if (old('category_id') ? old('category_id') == $item->id : $portfolio->category_id == $item->id) selected @endif value="{{ $item->id }}">
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
                <textarea class="input" name="description">{{ old('description') ?? $portfolio->description }}</textarea>
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
            @if ($portfolio->image?->path)
                <img class="admin-form-editor__img" src="{{ Storage::url($portfolio->image->path) }}" alt="">
            @endif
            <button class="btn admin-form-editor__btn">Изменить</button>
        </form>
    </div>
@endsection
