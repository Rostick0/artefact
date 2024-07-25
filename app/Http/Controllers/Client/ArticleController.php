<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index(Request $request)
    {
        $articles = Article::query();

        $articles = $articles->whereHas(
            'article_langs.lang',
            function ($query) use ($request) {
                $query->where(
                    'value',
                    $request->getPreferredLanguage()
                );
            }
        )->orderByDesc('id')->paginate(9);


        $navigations = [
            [
                'link' => '/',
                'name' => 'Home',
            ],
            [
                'is_active' => true,
                'name' => 'Articles',
            ],
        ];

        return view('pages.client.articles', compact('articles', 'navigations'));
    }

    public function show(Request $request, int $id): View
    {
        $article = Article::whereHas(
            'article_langs.lang',
            function ($query) use ($request) {
                $query->where(
                    'value',
                    $request->getPreferredLanguage()
                );
            }
        )->where('id', $id)->firstOrFail();

        return view('pages.client.article', compact('article'));
    }
}
