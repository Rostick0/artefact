@extends('layout.admin.layout')

@section('content')
    <div class="admin-form-editor">
        <h1 class="admin-form-editor__title">Создание Статьи</h1>
        <form class="admin-form-editor__form" action="{{ url()->current() }}" enctype="multipart/form-data" method="POST">
            @csrf
            <label class="label">
                <span class="label__title">Название</span>
                <input class="input" type="text" name="title" value="{{ old('title') }}" required />
                @error('title')
                    <span class="error">{{ $message }}</span>
                @enderror
            </label>
            <label class="label">
                <span class="label__title">Описание</span>
                <textarea class="input" name="description" rows="3">{{ old('description') }}</textarea>
                @error('description')
                    <span class="error">{{ $message }}</span>
                @enderror
            </label>
            <label class="label">
                <span class="label__title">Контент</span>
                <textarea class="summernote" name="content" id="myeditorinstance">{{ old('content') }}</textarea>
                @error('content')
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
            <label class="label">
                <select class="input" name="lang_id">
                    @foreach ($langs as $lang)
                        <option value="{{ $lang->id }}">{{ $lang->name }}</option>
                    @endforeach
                </select>
            </label>
            <button class="btn admin-form-editor__btn">Создать</button>
        </form>
    </div>
    <x-include-tinymce />
@endsection
