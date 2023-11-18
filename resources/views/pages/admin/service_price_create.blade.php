@extends('layout.admin.layout')

@section("content")
    <div class="admin-form-editor">
        <h1 class="admin-form-editor__title">Создание цены и описания</h1>
        <form class="admin-form-editor__form" action="{{ url()->current() }}" enctype="multipart/form-data" method="POST">
            @csrf
            <label class="label">
                <span class="label__title">Цена</span>
                <input class="input" type="number" name="price" value="{{ old('price') }}" />
                @error('price')
                    <span class="error">{{ $message }}</span>
                @enderror
            </label>
            <label class="label">
                <span class="label__title">Описание</span>
                <input class="input" type="text" name="description" value="{{ old('description') }}" />
                @error('description')
                    <span class="error">{{ $message }}</span>
                @enderror
            </label>
            <label class="checkbox">
                <input class="checkbox__input" type="checkbox" name="is_from"
                    @if (old('is_from')) checked @endif>
                <span class="checkbox__icon">✓</span>
                <span>Цена от?</span>
            </label>
            <button class="btn admin-form-editor__btn">Изменить</button>
        </form>
    </div>
@endsection
