@extends('layout.admin.layout')

@section('seo_title', 'Все статьи')

@section('content')
    <form class="admin-filter" action="{{ url()->current() }}">
        <div class="admin-filter__inputs">
            <label class="label admin-filter__label">
                <span class="label__title">Название</span>
                <input class="input" type="text" name="title" placeholder="Название" value="{{ Request::get('title') }}">
            </label>
        </div>
        <button class="btn admin-filter__btn">Поиск</button>
    </form>
    <a class="btn" href="/admin/article/create">+ Создать</a>
    <div class="admin-items">
        <div class="admin-items__list">
            @foreach ($articles as $article)
                <a class="admin-item"
                    href="/admin/article/edit/{{ $article->id }}?lang_id={{ $article->article_langs[0]->lang_id }}">
                    <div class="admin-item__title">{{ $article->article_langs[0]->title }}</div>
                    <div class="admin-item__image">
                        <img class="admin-item__img" src="{{ Storage::url($article?->image?->path) }}" alt="">
                    </div>
                </a>
            @endforeach
        </div>
    </div>
    {{ $articles->appends(Request::all())->links('vendor.pagination') }}
@endsection
