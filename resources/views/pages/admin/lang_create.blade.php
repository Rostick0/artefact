@extends('layout.admin.layout')

@section('content')
    <div class="admin-form-editor">
        <h1 class="admin-form-editor__title">Создание языка</h1>
        <form class="admin-form-editor__form" action="{{ url()->current() }}" method="POST">
            @csrf
            <label class="label">
                <span class="label__title">Название</span>
                <input class="input" type="text" name="name" value="{{ old('name') }}" />
                @error('name')
                    <span class="error">{{ $message }}</span>
                @enderror
            </label>
            <label class="label">
                <span class="label__title">Значение в браузере</span>
                <input class="input" type="text" name="value" value="{{ old('value') }}" />
                @error('value')
                    <span class="error">{{ $message }}</span>
                @enderror
            </label>
            <button class="btn admin-form-editor__btn">Изменить</button>
        </form>
    </div>
@endsection
