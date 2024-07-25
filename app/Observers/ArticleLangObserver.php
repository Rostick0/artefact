<?php

namespace App\Observers;

use App\Models\Article;
use App\Models\ArticleLang;

class ArticleLangObserver
{
    /**
     * Handle the ArticleLang "created" event.
     */
    public function created(ArticleLang $articleLang): void
    {
        //
    }

    /**
     * Handle the ArticleLang "updated" event.
     */
    public function updated(ArticleLang $articleLang): void
    {
        //
    }

    /**
     * Handle the ArticleLang "deleted" event.
     */
    public function deleted(ArticleLang $articleLang): void
    {
        if (ArticleLang::where('article_id', $articleLang->article_id)->count() < 1) {
            Article::destroy($articleLang->article_id);
        }
    }

    /**
     * Handle the ArticleLang "restored" event.
     */
    public function restored(ArticleLang $articleLang): void
    {
        //
    }

    /**
     * Handle the ArticleLang "force deleted" event.
     */
    public function forceDeleted(ArticleLang $articleLang): void
    {
        //
    }
}
