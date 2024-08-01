@extends('layout.admin.layout')

@section('content')
    <div class="admin-form-editor">
        <h1 class="admin-form-editor__title">Изменение Статьи {{ $article_lang?->title }}</h1>
        <form class="admin-form-editor__form" action="{{ url()->current() }}" enctype="multipart/form-data" method="POST">
            @csrf
            <label class="label">
                <span class="label__title">Название</span>
                <input class="input" type="text" name="title" value="{{ old('title') ?? $article_lang?->title }}"
                    required />
                @error('title')
                    <span class="error">{{ $message }}</span>
                @enderror
            </label>
            <label class="label">
                <span class="label__title">Описание</span>
                <textarea class="input" name="description" rows="3">{{ old('description') ?? $article_lang?->description }}</textarea>
                @error('description')
                    <span class="error">{{ $message }}</span>
                @enderror
            </label>
            <label class="label">
                <span class="label__title">Контент</span>
                <textarea class="summernote" name="content" id="myeditorinstance">{{ old('content') ?? $article_lang?->content }}</textarea>
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
            @if ($article?->image?->path)
                <img class="admin-form-editor__img" src="{{ Storage::url($article->image->path) }}" alt="">
            @endif
            <label class="label">
                <span class="label__title">Текущий язык</span>
                <input class="input" value="{{ $article_lang->lang->name }}" readonly />
            </label>
            <button class="btn admin-form-editor__btn">Изменить</button>
        </form>
        <form class="admin-form-editor__delete"
            action="{{ route('article.delete', [
                'lang_id' => $article_lang->lang_id ?? Request::get('lang_id'),
            ]) }}"
            method="POST">
            @csrf
            <input name="_method" value="DELETE" type="hidden">
            <button class="btn-delete">Удалить</button>
        </form>
        <br />
        <br />
        <form class="admin-form-editor__form">
            <select class="input" name="lang_id">
                @foreach ($langs as $lang)
                    {{-- @php
                        $lang = $article_langs->lang;
                    @endphp --}}
                    <option value="{{ $lang->id }}">{{ $lang->name }}</option>
                @endforeach
            </select>
            <button class="btn admin-form-editor__btn">Поменять или создать другом языке</button>
        </form>
    </div>
    <x-include-tinymce />
@endsection
