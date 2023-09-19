<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::group(['middleware' => 'auth'], function () {
    Route::group(['prefix' => 'admin'], function () {
        Route::get('login', function () {
            return view('pages.admin.login');
        });
        Route::post('login', [AuthController::class, 'login']);

        Route::get('main', function () {
            return view('pages.admin.index');
        })->name('admin.name');
        Route::group(['prefix' => 'service'], function () {
            Route::get('list', [ServiceController::class, 'index']);
            Route::get('create', [ServiceController::class, 'create']);
            Route::get('edit/{id}', [ServiceController::class, 'edit']);
            Route::post('edit/{id}', [ServiceController::class, 'update']);
            Route::delete('delete/{id}', [ServiceController::class, 'destroy']);
        });

        Route::group(['prefix' => 'portfolio'], function () {
            Route::get('list', [PortfolioController::class, 'index']);
            Route::get('create', [PortfolioController::class, 'create']);
            Route::get('edit/{id}', [PortfolioController::class, 'edit']);
            Route::post('edit/{id}', [PortfolioController::class, 'update']);
            Route::delete('delete/{id}', [PortfolioController::class, 'destroy']);
        });
    });
});

Route::get('/', function () {
    return view('pages.client.index');
});

Route::get('/about', function () {
    $visualization_slides = [
        [
            'title' => 'Contacts',
            'link' => '/contacts',
            'content' => '',
        ],
        [
            'title' => 'Services',
            'link' => '/services',
            'content' => '',
        ],
        [
            'title' => 'Portfolio',
            'link' => '/portfolio',
            'content' => '',
        ],
        [
            'title' => 'Panorams',
            'link' => '/panorams',
            'content' => '',
        ],
        [
            'title' => 'FAQ',
            'link' => '/faq',
            'content' => '',
        ],
    ];

    return view('pages.client.about', [
        'visualization_slides' => $visualization_slides
    ]);
});

Route::get('/portfolio', function () {
    return view('pages.client.portfolios');
});

Route::get('/portfolio/{id}', function () {
    return view('pages.client.portfolio');
});

Route::get('/services', function () {
    return view('pages.client.services');
});

Route::get('/service/{id}', function () {
    return view('pages.client.service');
});

Route::get('/faq', function () {
    return view('pages.client.faq');
});


Route::get('/panorams', function () {
    return view('pages.client.panorams');
});

Route::get('/contacts', function () {
    return view('pages.client.contacts');
});

Route::get('/feedback', function () {
    return view('pages.client.feedback');
});
