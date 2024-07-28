<?php

namespace App\Providers;

use App\Models\ArticleLang;
use App\Observers\ArticleLangObserver;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        View::share('htmlSection', function ($text) {
            $startString = "@section('content')";
            $endString = '@endsection';
            $startPosition = strpos($text, $startString);
            if ($startPosition !== false) {
                $startPosition += strlen($startString);
                $endPosition = strpos($text, $endString, $startPosition);
                if ($endPosition !== false) {
                    return htmlspecialchars_decode(substr($text, $startPosition, $endPosition - $startPosition));
                }
            }
        });

        Schema::defaultStringLength(191);

        ArticleLang::observe(ArticleLangObserver::class);
    }
}
