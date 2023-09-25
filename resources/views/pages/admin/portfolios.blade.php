@extends('layout.admin.layout')

@section('content')
    <form class="admin-filter" action="{{ url()->current() }}">
        <div class="admin-filter__inputs">
            <label class="label admin-filter__label">
                <span class="label__title">Название</span>
                <input class="input" type="text" name="title" placeholder="Название" value="{{ Request::get('title') }}">
            </label>
            <label class="label admin-filter__label">
                <span class="label__title">Категория</span>
                <select class="input" name="category_id">
                    <option @if (Request::get('category_id') == '') selected @endif value="">Все</option>
                    @foreach ($categories as $item)
                        <option value="{{ $item->id }}" @if (Request::get('category_id') == $item->id) selected @endif>
                            {{ $item->name }}</option>
                    @endforeach
                </select>
            </label>
        </div>
        <button class="btn admin-filter__btn">Поиск</button>
    </form>
    <a class="btn" href="/admin/portfolio/create">+ Создать</a>
    <div class="admin-items">
        @foreach ($portfolios as $portfolio)
            <a class="admin-item" href="/admin/portfolio/edit/{{ $portfolio->id }}">
                <div class="admin-item__title">{{ $portfolio->title }}</div>
                <div class="admin-item__image">
                    <img class="admin-item__img" src="{{ Storage::url($portfolio->image->path) }}" alt="">
                </div>
            </a>
        @endforeach
    </div>
    {{ $portfolios->appends(Request::all())->links('vendor.pagination') }}
@endsection
