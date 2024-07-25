<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Article\StoreArticleRequest;
use App\Http\Requests\Article\UpdateArticleRequest;
use App\Models\Article;
use App\Models\ArticleLang;
use App\Models\Lang;
use App\Utils\ImageDBUtil;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $articles = Article::query();

        if ($request->title) $articles->where('title', 'LIKE', '%' . $request->title . '%');

        $articles = $articles->orderByDesc('id')->paginate(18);

        return view('pages.admin.articles', [
            'articles' => $articles
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $langs = Lang::all();

        return view('pages.admin.article_create', [
            'langs' => $langs,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreArticleRequest $request)
    {
        $article = Article::create([
            'user_id' => auth()->id()
        ]);

        if ($request->hasFile('image')) ImageDBUtil::updateOne($request->file('image'), $article);

        $article->article_langs()->create($request->validated());

        return redirect('/admin/article/edit/' . $article->id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, int $id)
    {
        $article = Article::findOrFail($id);
        $article_lang = $article->article_langs()->find($request->lang_id);
        $langs = Lang::all();

        return view('pages.admin.article', [
            'article' => $article,
            'article_lang' => $article_lang,
            'langs' => $langs,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateArticleRequest $request, int $id)
    {
        $article = Article::findOrFail($id);
        $article_lang = $article->article_langs()->find($request->lang_id);

        $values = $request->validated();

        if ($article_lang) {
            $article_lang->update($values);
        } else {
            $article->article_langs()->create($values);
        }

        if ($request->hasFile('image')) ImageDBUtil::updateOne($request->file('image'), $article);

        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $lang_id)
    {
        // Article::destroy($id);

        ArticleLang::destroy($lang_id);

        return redirect('/admin/article/list');
    }
}
