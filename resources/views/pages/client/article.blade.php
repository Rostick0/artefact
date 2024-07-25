@extends('layout.client.layout')
@php
    $article_current_lang = $article
        ->article_langs()
        ->whereHas('lang', function ($query) {
            $query->where('value', app()->getLocale());
        })
        ->first();
@endphp
@section('seo_title', 'Articles Artefact')
@section('seo_description', 'Articles Artefact')

@section('content')

    {{-- @dd($article_current_lang) --}}
    <div class="article-one">
        <div class="container">
            <div class="article-one__info">
                <div class="article-one__image">
                    <img class="article-one__img" src="{{ Storage::url($article->image->path) }}" decoding="async"
                        loading="async" alt="{{ $article_current_lang->title }}" />
                </div>
                <div class="article__info">
                    <h1 class="article__title" href="/articles/2">
                        321
                    </h1>
                    <ul class="article__info_list">
                        <li class="article__info_item">
                            <div class="article__info_name">Date:</div>
                            <time class="article__date" datetime="2024-07-24 17:14:36">2024-07-24 17:14:36</time>
                        </li>
                        <li class="article__info_item">
                            <div class="article__info_name">Author:</div>
                            <div class="">admin</div>
                        </li>
                    </ul>
                    <div class="article__description">{{ $article_current_lang->description }}</div>
                </div>
            </div>
            <div class="article-one__content">{!! $article_current_lang->content !!}</div>
            <div class="article-one__form">
                <x-contact-form />
            </div>
        </div>
    </div>
@endsection
