<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

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
            $startString = '@section("content")';
            $endString = '@endsection';
            $startPosition = strpos($text, $startString);
            if ($startPosition !== false) {
                $startPosition += strlen($startString);
                $endPosition = strpos($text, $endString, $startPosition);
                if ($endPosition !== false) {
                    $result = substr($text, $startPosition, $endPosition - $startPosition);
                    echo $result;
                }
            }
        });
    }
}
