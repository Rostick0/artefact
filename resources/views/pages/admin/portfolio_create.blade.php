@extends('layout.admin.layout')

@section('content')
    <div class="admin-form-editor">
        <h1 class="admin-form-editor__title">Создание портфолио</h1>
        <form class="admin-form-editor__form" action="{{ url()->current() }}" method="POST">
            @csrf
            <div class="admin-form-editor__flex">
                <label class="label">
                    <span class="label__title">Название</span>
                    <input class="input" type="text" name="title" required/>
                    @error('title')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </label>
                <label class="label">
                    <span class="label__title">Категория</span>
                    <select class="input" name="category_id" required>
                        @foreach ($categories as $item)
                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                        @endforeach
                    </select>
                    @error('category_id')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </label>
            </div>
            <label class="label">
                <span class="label__title">Описание</span>
                <textarea class="input" name="description"></textarea>
                @error('description')
                    <span class="error">{{ $message }}</span>
                @enderror
            </label>
            <label class="label">
                <span class="label__title">Фото</span>
                <input class="input" type="file" name="image" />
                @error('image')
                    <span class="error">{{ $message }}</span>
                @enderror
            </label>
            <button class="btn admin-form-editor__btn">Создать</button>
        </form>
    </div>
@endsection
