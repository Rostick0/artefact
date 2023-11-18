@extends('layout.admin.layout')

@section("content")
    <div class="admin-form-editor">
        <h1 class="admin-form-editor__title">Страница {{ explode('.', $page->path)[0] }}</h1>
        <form class="admin-form-editor__form" action="{{ url()->current() }}" enctype="multipart/form-data" method="POST">
            @csrf
            <div class="admin-form-editor__flex">
                <label class="label">
                    <span class="label__title">Сео заголовок</span>
                    <input class="input" type="text" name="seo_title" value="{{ old('seo_title') ?? $page->seo_title }}"
                     />
                    @error('seo_title')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </label>
                <label class="label">
                    <span class="label__title">Сео слова</span>
                    <input class="input" type="text" name="seo_keywords"
                        value="{{ old('seo_keywords') ?? $page->seo_keywords }}" />
                    @error('seo_keywords')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </label>
            </div>
            <label class="label">
                <span class="label__title">Сео описание</span>
                <input class="input" type="text" name="seo_description"
                    value="{{ old('seo_description') ?? $page->seo_description }}" />
                @error('seo_description')
                    <span class="error">{{ $message }}</span>
                @enderror
            </label>
            <label class="label">
                <span class="label__title">Контент страницы</span>
                <textarea class="summernote" name="content" id="myeditorinstance">{{ old('content') ?? $htmlSection($content) }}
                </textarea>
                @error('content')
                    <span class="error">{{ $message }}</span>
                @enderror
            </label>
            <button class="btn admin-form-editor__btn">Изменить</button>
        </form>
    </div>
    <script src="/assets/libs/tinymce/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        tinymce.init({
            selector: 'textarea#myeditorinstance', // Replace this CSS selector to match the placeholder element for TinyMCE
            plugins: 'code table lists',
            toolbar: 'undo redo | blocks | bold italic | alignleft aligncenter alignright | indent outdent | bullist numlist | code | table'
        });
    </script>
@endsection
