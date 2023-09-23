<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\Admin\PortfolioController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Client\FeedbackController;
use App\Http\Controllers\Client\PortfolioController as ClientPortfolioController;
use App\Http\Controllers\Client\ServiceController as ClientServiceController;
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

Route::group(['prefix' => 'admin'], function () {
    Route::get('login', function () {
        return view('pages.admin.login');
    })->name('login');
    Route::post('login', [AuthController::class, 'login']);

    // ->middleware('throttle:3,3')
    Route::group(['middleware' => 'auth'], function () {
        Route::get('main', function () {
            return view('pages.admin.index');
        })->name('admin.main');
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

Route::get('/portfolio', [ClientPortfolioController::class, 'index']);
Route::get('/portfolio/{id}', [ClientPortfolioController::class, 'show']);

Route::get('/services', [ClientServiceController::class, 'index']);
Route::get('/service/{id}', [ClientServiceController::class, 'show']);

Route::get('/faq', function () {
    $navigations = [
        [
            'link' => '/',
            'name' => 'Home',
        ],
        [
            'is_active' => true,
            'name' => 'FAQ',
        ],
    ];

    return view('pages.client.faq', [
        'navigations' => $navigations
    ]);
});

Route::get('/panorams', function () {
    $navigations = [
        [
            'link' => '/',
            'name' => 'Home',
        ],
        [
            'is_active' => true,
            'name' => 'Panorams',
        ],
    ];

    return view('pages.client.panorams', [
        'navigations' => $navigations
    ]);
});

Route::get('/contacts', function () {
    return view('pages.client.contacts');
});

Route::get('/feedback', [FeedbackController::class, 'create']);
Route::post('/feedback', [FeedbackController::class, 'send'])->name('feedback.send')->middleware('throttle:3,10');
