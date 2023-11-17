@extends('layout.admin.layout')

@section('content')
    <div class="admin-form-editor">
        <h1 class="admin-form-editor__title">Страница {{ explode('.', $page->path)[0] }}</h1>
        <form class="admin-form-editor__form" action="{{ url()->current() }}" enctype="multipart/form-data" method="POST">
            @csrf
            <div class="admin-form-editor__flex">
                <label class="label">
                    <span class="label__title">Сео заголовок</span>
                    <input class="input" type="text" name="seo_title" value="{{ old('seo_title') ?? $page->seo_title }}"
                        required />
                    @error('seo_title')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </label>
                <label class="label">
                    <span class="label__title">Сео заголовок</span>
                    <input class="input" type="text" name="seo_keywords"
                        value="{{ old('seo_keywords') ?? $page->seo_keywords }}" required />
                    @error('seo_keywords')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </label>
            </div>
            <label class="label">
                <span class="label__title">Сео описание</span>
                <input class="input" type="text" name="seo_description"
                    value="{{ old('seo_description') ?? $page->seo_description }}" required />
                @error('seo_description')
                    <span class="error">{{ $message }}</span>
                @enderror
            </label>
            <label class="label">
                <span class="label__title">Контент страницы</span>
                <div class="summernote" name="content" id="content">{{ old('content') ?? $htmlSection($content) }}
                </div>
                @error('content')
                    <span class="error">{{ $message }}</span>
                @enderror
            </label>
            <button class="btn admin-form-editor__btn">Изменить</button>
        </form>
    </div>
@endsection
