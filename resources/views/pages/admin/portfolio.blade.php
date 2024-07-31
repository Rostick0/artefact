@extends('layout.admin.layout')

@section('content')
    <div class="admin-form-editor">
        <h1 class="admin-form-editor__title">Работа #{{ $portfolio->id }} в портфолио</h1>
        <form class="admin-form-editor__form" action="{{ url()->current() }}" enctype="multipart/form-data" method="POST">
            @csrf
            <div class="admin-form-editor__flex">
                <label class="label">
                    <span class="label__title">Название</span>
                    <textarea class="input" type="text" name="title" rows="1" required>{{ old('title') ?? $portfolio->title }}</textarea>
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
                <input class="input" type="file" name="image[]" value="{{ old('image') }}"
                    accept=".png, .jpeg, .jpg, .webm" multiple />
                @error('image')
                    <span class="error">{{ $message }}</span>
                @enderror
            </label>
            @if ($portfolio->image->count())
                <div class="admin-form-editor__images">
                    @foreach ($portfolio->image as $index => $image)
                        @if ($image->path)
                            <div class="admin-form-editor__image">
                                <label class="admin-form-editor__image_close">
                                    <span>×</span>
                                    <input type="checkbox" name="image_delete[{{ $index }}]"
                                        value="{{ $image->id }}" hidden>
                                </label>
                                <img class="admin-form-editor__img" src="{{ Storage::url($image->path) }}" alt="">
                            </div>
                        @endif
                    @endforeach
                </div>
            @endif
            <label class="label">
                <span class="label__title">Видео</span>
                <input class="input" type="file" name="video[]" value="{{ old('video') }}" accept=".mp4, .mov"
                    multiple />
                @error('video')
                    <span class="error">{{ $message }}</span>
                @enderror
            </label>
            @if ($portfolio->file->count())
                <div class="admin-form-editor__images">
                    @foreach ($portfolio->file as $index => $file)
                        @if ($file->path)
                            <div class="admin-form-editor__image">
                                <label class="admin-form-editor__image_close">
                                    <span>×</span>
                                    <input type="checkbox" name="file_delete[{{ $index }}]"
                                        value="{{ $file->id }}" hidden>
                                </label>
                                <video class="admin-form-editor__img" src="{{ Storage::url($file->path) }}" autoplay
                                    muted></video>
                            </div>
                        @endif
                    @endforeach
                </div>
            @endif
            <button class="btn admin-form-editor__btn">Изменить</button>
        </form>
        <form class="admin-form-editor__delete"
            action="{{ route('portfolio.delete', [
                'id' => $portfolio->id,
            ]) }}"
            method="POST">
            @csrf
            <input name="_method" value="DELETE" type="hidden">
            <button class="btn-delete">Удалить</button>
        </form>
    </div>
@endsection
