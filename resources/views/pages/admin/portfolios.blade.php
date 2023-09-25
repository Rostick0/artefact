@extends('layout.admin.layout')

@section('content')
    <form class="admin-filter" action="{{ url()->current() }}">
        <div class="admin-filter__inputs">
            <label class="label admin-filter__label">
                <span class="label__title">Название</span>
                <input class="input" type="text" name="title" placeholder="Название">
            </label>
            <label class="label admin-filter__label">
                <span class="label__title">Категория</span>
                <select class="input" name="category_id">
                    <option value="">Все</option>
                    @foreach ($categories as $item)
                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                    @endforeach
                </select>
            </label>
        </div>
        <button class="btn admin-filter__btn">Поиск</button>
    </form>

    {{-- @dd($portfolios) --}}
@endsection
