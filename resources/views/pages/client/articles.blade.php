@extends('layout.client.layout')
@section('seo_title', 'Articles Artefact')

@section('content')
    <x-banner-nav title="Articles" :navigations="$navigations" />
    <div class="articles">
        <div class="container">
            <div class="articles__list">
                @foreach ($articles as $article)
                    @php
                        $article_current_lang = $article
                            ->article_langs()
                            ->whereHas('lang', function ($query) {
                                $query->where('value', app()->getLocale());
                            })
                            ->first();

                        $article_link = '/articles/' . $article->id;
                        $article_description = \Illuminate\Support\Str::limit(
                            $article_current_lang->description,
                            250,
                            $end = '...',
                        );
                    @endphp
                    <article class="article">
                        <a class="article__image" href="{{ $article_link }}">
                            <img class="article__img" decoding="async" loading="lazy"
                                src="{{ Storage::url($article->image->path) }}" alt="{{ $article_current_lang->title }}">
                        </a>
                        <div class="article__info">
                            <a class="article__title" href="{{ $article_link }}">
                                {{ $article_current_lang->title }}
                            </a>
                            <ul class="article__info_list">
                                <li class="article__info_item">
                                    <div class="article__info_name">Date:</div>
                                    <time class="article__date"
                                        datetime="{{ $article->created_at }}">{{ $article->created_at }}</time>
                                </li>
                                <li class="article__info_item">
                                    <div class="article__info_name">Author:</div>
                                    <div class="">{{ $article->user->name }}</div>
                                </li>
                            </ul>
                            <div class="article__description">{{ $article_description }}</div>
                            <a class="btn article__link" href="{{ $article_link }}">Read</a>
                        </div>
                    </article>
                @endforeach
            </div>
            {{ $articles->appends(Request::all())->links('vendor.pagination') }}
        </div>
    </div>
@endsection
