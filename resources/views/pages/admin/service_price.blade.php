@extends('layout.admin.layout')

@section("content")
    <div class="admin-form-editor">
        <h1 class="admin-form-editor__title">Редактирование цены и описания #{{ $service_price->id }}</h1>
        <form class="admin-form-editor__form" action="{{ url()->current() }}" enctype="multipart/form-data" method="POST">
            @csrf
            <label class="label">
                <span class="label__title">Цена</span>
                <input class="input" type="number" name="price" value="{{ $service_price->price ?? old('price') }}" />
                @error('price')
                    <span class="error">{{ $message }}</span>
                @enderror
            </label>
            <label class="label">
                <span class="label__title">Описание</span>
                <input class="input" type="text" name="description"
                    value="{{ $service_price->description ?? old('description') }}" />
                @error('description')
                    <span class="error">{{ $message }}</span>
                @enderror
            </label>
            <label class="checkbox">
                <input class="checkbox__input" type="checkbox" name="is_from"
                    @if (old('is_from') ?? $service_price->is_from) checked @endif>
                <span class="checkbox__icon">✓</span>
                <span>Цена от?</span>
            </label>
            <button class="btn admin-form-editor__btn">Изменить</button>
        </form>
        <form class="admin-form-editor__delete" action="{{ route('service-price.delete', [
            'id' => $service_price->id
        ]) }}" method="POST">
            @csrf
            <input name="_method" value="DELETE" type="hidden">
            <button class="btn-delete">Удалить</button>
        </form>
    </div>
@endsection
