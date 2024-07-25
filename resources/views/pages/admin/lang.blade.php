@extends('layout.admin.layout')

@section('content')
    <div class="admin-form-editor">
        <h1 class="admin-form-editor__title">Создание языка</h1>
        <form class="admin-form-editor__form" action="{{ url()->current() }}" method="POST">
            @csrf
            <label class="label">
                <span class="label__title">Название</span>
                <input class="input" type="text" name="name" value="{{ old('name') ?? $lang->name }}" />
                @error('name')
                    <span class="error">{{ $message }}</span>
                @enderror
            </label>
            <label class="label">
                <span class="label__title">Значение в браузере</span>
                <input class="input" type="text" name="value" value="{{ old('value') ?? $lang->value }}" />
                @error('value')
                    <span class="error">{{ $message }}</span>
                @enderror
            </label>
            <button class="btn admin-form-editor__btn">Изменить</button>
        </form>
        <form class="admin-form-editor__delete"
            action="{{ route('lang.delete', [
                'id' => $lang->id,
            ]) }}" method="POST">
            @csrf
            <input name="_method" value="DELETE" type="hidden">
            <button class="btn-delete">Удалить</button>
        </form>
    </div>
@endsection
