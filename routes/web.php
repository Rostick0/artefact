<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\Admin\PortfolioController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\ServiceItemController;
use App\Http\Controllers\Admin\ServicePriceController;
use App\Http\Controllers\Client\FeedbackController;
use App\Http\Controllers\Client\IndexController as ClientIndexController;
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
    Route::post('login', [AuthController::class, 'login'])->middleware('throttle:3,3');

    // 'middleware' => 'auth'
    Route::group([], function () {
        Route::get('', function () {
            return view('pages.admin.index');
        })->name('admin.main');
        Route::group(['prefix' => 'service'], function () {
            Route::get('list', [ServiceController::class, 'index']);
            Route::get('create', [ServiceController::class, 'create']);
            Route::post('create', [ServiceController::class, 'store']);
            Route::get('edit/{id}', [ServiceController::class, 'edit']);
            Route::post('edit/{id}', [ServiceController::class, 'update']);
            Route::delete('delete/{id}', [ServiceController::class, 'destroy']);
        });

        Route::group(['prefix' => 'service-item'], function () {
            Route::get('create/{service_id}', [ServiceItemController::class, 'create']);
            Route::post('create/{service_id}', [ServiceItemController::class, 'store']);
            Route::get('edit/{id}', [ServiceItemController::class, 'edit']);
            Route::post('edit/{id}', [ServiceItemController::class, 'update']);
            Route::delete('delete/{id}', [ServiceItemController::class, 'destroy']);
        });

        Route::group(['prefix' => 'service-price'], function () {
            Route::get('create/{service_item_id}', [ServicePriceController::class, 'create']);
            Route::post('create/{service_item_id}', [ServicePriceController::class, 'store']);
            Route::get('edit/{id}', [ServicePriceController::class, 'edit']);
            Route::post('edit/{id}', [ServicePriceController::class, 'update']);
            Route::delete('delete/{id}', [ServicePriceController::class, 'destroy']);
        });

        Route::group(['prefix' => 'portfolio'], function () {
            Route::get('list', [PortfolioController::class, 'index']);
            Route::get('create', [PortfolioController::class, 'create']);
            Route::post('create', [PortfolioController::class, 'store']);
            Route::get('edit/{id}', [PortfolioController::class, 'edit']);
            Route::post('edit/{id}', [PortfolioController::class, 'update']);
            Route::delete('delete/{id}', [PortfolioController::class, 'destroy']);
        });
    });
});

Route::get('/', [ClientIndexController::class, 'index']);

Route::get('/about', function () {
    $visualization_slides = [
        [
            'title' => 'Contacts',
            'link' => '/contacts',
            'icon' => '<?xml version="1.0" standalone="no"?>
            <svg version="1.0" xmlns="http://www.w3.org/2000/svg"
             width="64" height="64" viewBox="0 0 500.000000 500.000000"
             preserveAspectRatio="xMidYMid meet">
            <g transform="translate(0.000000,500.000000) scale(0.100000,-0.100000)"
            fill="#000000" stroke="none">
            <path d="M1138 4584 c-343 -62 -619 -320 -710 -664 l-23 -85 0 -1335 c0 -1240
            1 -1340 18 -1403 86 -338 336 -588 674 -674 63 -17 163 -18 1403 -18 l1335 0
            85 23 c327 87 572 336 657 669 17 63 18 163 18 1403 0 1240 -1 1340 -18 1403
            -84 331 -324 577 -652 669 l-80 23 -1315 2 c-1090 1 -1328 -1 -1392 -13z
            m2625 -195 l37 -10 0 -1879 0 -1879 -39 -11 c-27 -7 -438 -10 -1313 -8 -1185
            3 -1277 4 -1332 21 -180 54 -335 174 -426 332 -16 28 -41 86 -57 130 l-28 80
            -3 1290 c-2 872 1 1312 8 1359 37 238 208 449 436 538 40 15 97 32 126 37 78
            13 2544 13 2591 0z m285 -88 c208 -109 352 -363 352 -621 l0 -80 -200 0 -200
            0 0 360 c0 198 2 360 5 360 3 0 22 -9 43 -19z m352 -1301 l0 -400 -200 0 -200
            0 0 400 0 400 200 0 200 0 0 -400z m0 -1000 l0 -400 -200 0 -200 0 0 400 0
            400 200 0 200 0 0 -400z m0 -680 c0 -252 -116 -467 -322 -601 -34 -21 -65 -39
            -70 -39 -4 0 -8 162 -8 360 l0 360 200 0 200 0 0 -80z"/>
            <path d="M2032 3790 c-557 -79 -988 -484 -1108 -1041 -26 -118 -26 -380 0
            -499 57 -266 172 -479 360 -666 188 -187 402 -303 668 -360 116 -25 380 -25
            496 0 266 57 482 173 668 360 187 186 303 402 360 668 25 116 25 380 0 496
            -57 266 -173 482 -360 668 -184 184 -389 297 -646 355 -98 22 -340 33 -438 19z
            m393 -214 c440 -96 759 -421 857 -871 8 -36 12 -122 12 -215 -1 -172 -21 -272
            -83 -421 -29 -70 -124 -225 -170 -278 l-21 -23 -52 47 c-139 125 -325 217
            -528 261 -125 27 -372 25 -498 -4 -181 -42 -351 -125 -486 -238 l-77 -65 -20
            23 c-11 13 -41 55 -68 93 -302 438 -238 1042 152 1411 153 146 354 249 552
            283 33 6 71 13 85 15 50 9 277 -3 345 -18z m26 -1709 c120 -31 246 -93 343
            -169 42 -32 76 -62 76 -66 0 -4 -39 -32 -86 -61 -359 -227 -809 -227 -1168 0
            -47 29 -85 58 -83 64 7 19 142 116 217 154 157 82 295 112 480 107 90 -3 152
            -11 221 -29z"/>
            <path d="M2085 3188 c-114 -22 -240 -107 -304 -206 -57 -90 -74 -154 -74 -282
            0 -93 4 -126 21 -174 84 -228 303 -355 552 -318 185 27 327 142 392 318 31 85
            31 263 0 348 -88 239 -323 365 -587 314z m262 -221 c88 -45 142 -131 151 -242
            9 -124 -47 -234 -148 -290 -50 -27 -63 -30 -150 -30 -83 1 -101 4 -146 27 -90
            47 -143 132 -152 243 -12 149 77 281 212 316 60 16 178 3 233 -24z"/>
            </g>
            </svg>
            ',
        ],
        [
            'title' => 'Services',
            'link' => '/services',
            'icon' => '<?xml version="1.0" standalone="no"?>
            <svg version="1.0" xmlns="http://www.w3.org/2000/svg"
             width="64" height="64" viewBox="0 0 100.000000 100.000000"
             preserveAspectRatio="xMidYMid meet">
            <g transform="translate(0.000000,100.000000) scale(0.100000,-0.100000)"
            fill="#000000" stroke="none">
            <path d="M386 985 c-3 -8 -8 -38 -12 -66 -6 -45 -11 -52 -40 -66 -32 -16 -34
            -16 -86 20 -29 21 -58 37 -64 37 -11 0 -94 -84 -94 -95 0 -3 16 -29 36 -59 34
            -52 35 -55 21 -89 -13 -31 -20 -35 -63 -41 -87 -12 -84 -10 -84 -86 0 -76 -3
            -74 83 -86 42 -6 51 -11 65 -40 15 -33 15 -34 -21 -87 -20 -29 -37 -58 -37
            -64 0 -11 85 -93 96 -93 4 0 29 16 55 35 56 40 59 40 98 20 24 -12 29 -23 35
            -65 11 -80 11 -80 81 -80 l64 0 3 -37 3 -38 235 0 235 0 3 189 c3 235 8 226
            -125 226 -71 0 -94 3 -91 12 3 7 24 16 49 21 97 17 89 10 89 86 0 77 1 76 -81
            87 -45 6 -52 11 -66 40 -16 33 -16 34 20 88 20 31 37 58 37 61 0 11 -83 95
            -93 95 -6 0 -35 -17 -64 -37 -53 -36 -54 -36 -87 -21 -29 14 -34 23 -40 65
            -12 86 -10 83 -86 83 -51 0 -69 -4 -74 -15z m123 -86 c6 -34 12 -62 13 -63 2
            -1 26 -11 55 -23 l51 -20 51 35 52 36 26 -26 27 -27 -36 -51 -36 -51 21 -52
            c12 -29 22 -53 23 -55 1 -1 29 -7 63 -13 l61 -11 0 -38 0 -38 -61 -11 c-34 -6
            -63 -12 -63 -13 -1 -2 -7 -15 -14 -30 -11 -27 -14 -28 -87 -28 l-76 0 16 23
            c88 125 -30 296 -177 256 -87 -23 -141 -115 -117 -201 21 -79 110 -137 188
            -122 l31 7 0 -75 c0 -41 -5 -100 -11 -131 l-12 -57 -37 0 -38 0 -11 61 c-6 34
            -12 62 -13 63 -2 1 -26 11 -55 23 l-52 21 -51 -36 -51 -36 -27 27 -26 26 36
            52 36 51 -20 47 c-25 58 -37 67 -98 75 l-50 7 0 39 0 39 50 7 c61 8 73 17 98
            76 l20 47 -36 51 -36 51 27 27 26 26 52 -36 51 -35 51 20 c29 12 53 22 55 23
            1 1 7 29 13 63 l11 61 38 0 38 0 11 -61z m21 -257 c14 -10 33 -35 44 -56 16
            -32 17 -44 7 -76 -23 -76 -103 -116 -168 -83 -103 51 -104 173 -2 226 39 20
            81 16 119 -11z m425 -272 c4 -7 -63 -10 -195 -10 -132 0 -199 3 -195 10 8 13
            382 13 390 0z m5 -190 l0 -140 -200 0 -200 0 0 140 0 140 200 0 200 0 0 -140z"/>
            <path d="M698 263 c-37 -36 -37 -37 -58 -18 -19 17 -22 17 -36 3 -14 -14 -12
            -18 21 -43 l36 -28 50 49 c27 26 48 53 46 58 -7 21 -24 15 -59 -21z"/>
            <path d="M698 163 c-37 -36 -37 -37 -58 -18 -19 17 -22 17 -36 3 -14 -14 -12
            -18 21 -43 l36 -28 50 49 c27 26 48 53 46 58 -7 21 -24 15 -59 -21z"/>
            </g>
            </svg>
            ',
        ],
        [
            'title' => 'Portfolio',
            'link' => '/portfolio',
            'icon' => '<?xml version="1.0" standalone="no"?>
            <svg version="1.0" xmlns="http://www.w3.org/2000/svg"
             width="64" height="64" viewBox="0 0 100.000000 100.000000"
             preserveAspectRatio="xMidYMid meet">
            <g transform="translate(0.000000,100.000000) scale(0.100000,-0.100000)"
            fill="#000000" stroke="none">
            <path d="M379 942 c-79 -21 -150 -65 -216 -135 -126 -134 -157 -334 -76 -505
            35 -75 140 -180 215 -215 31 -15 88 -32 126 -39 301 -51 575 222 524 523 -17
            97 -53 169 -124 245 -118 126 -277 170 -449 126z m226 -37 c313 -81 418 -471
            190 -700 -242 -241 -650 -109 -708 229 -50 295 226 546 518 471z"/>
            <path d="M455 830 c-3 -5 -13 -32 -21 -60 -11 -38 -26 -59 -65 -92 -55 -48
            -129 -141 -129 -163 0 -24 21 -17 49 17 14 17 58 63 98 103 56 55 75 81 84
            117 9 31 17 44 26 41 18 -7 16 -66 -4 -124 -25 -70 -11 -82 105 -89 85 -5 87
            -5 90 -32 2 -14 10 -32 18 -38 19 -16 18 -29 -3 -53 -17 -18 -17 -19 0 -32 22
            -16 22 -28 -3 -50 -13 -12 -17 -25 -14 -45 8 -36 -7 -41 -131 -47 -71 -4 -122
            0 -175 12 -137 30 -140 30 -140 9 0 -32 136 -59 297 -59 118 0 134 2 160 21
            15 12 29 32 31 45 2 13 10 38 19 56 14 25 15 37 5 57 -7 16 -8 28 -2 31 15 9
            12 49 -5 71 -8 10 -15 29 -15 41 0 37 -36 53 -122 53 -42 0 -79 4 -82 9 -3 5
            1 25 9 45 23 55 20 118 -8 144 -24 23 -61 29 -72 12z"/>
            </g>
            </svg>
            ',
        ],
        [
            'title' => 'Panorams',
            'link' => '/panorams',
            'icon' => '<?xml version="1.0" standalone="no"?>
            <svg version="1.0" xmlns="http://www.w3.org/2000/svg"
             width="64" height="64" viewBox="0 0 100.000000 100.000000"
             preserveAspectRatio="xMidYMid meet">
            <g transform="translate(0.000000,100.000000) scale(0.100000,-0.100000)"
            fill="#000000" stroke="none">
            <path d="M840 800 c-11 -11 -20 -29 -20 -40 0 -11 9 -29 20 -40 11 -11 29 -20
            40 -20 11 0 29 9 40 20 11 11 20 29 20 40 0 11 -9 29 -20 40 -11 11 -29 20
            -40 20 -11 0 -29 -9 -40 -20z m56 -31 c10 -17 -13 -36 -27 -22 -12 12 -4 33
            11 33 5 0 12 -5 16 -11z"/>
            <path d="M225 715 c-14 -13 -25 -29 -25 -35 0 -16 47 -12 54 6 8 22 60 15 64
            -9 3 -13 -6 -22 -27 -30 -40 -15 -40 -33 0 -41 25 -5 30 -10 27 -28 -4 -28
            -48 -37 -68 -14 -15 19 -50 21 -50 3 0 -27 45 -57 86 -57 72 0 112 69 62 105
            -21 15 -22 17 -5 26 10 6 17 22 17 39 0 59 -89 82 -135 35z"/>
            <path d="M444 717 c-23 -20 -28 -34 -32 -83 -4 -54 -1 -63 23 -92 51 -61 145
            -33 145 43 0 63 -58 95 -108 59 -17 -12 -22 -12 -22 -2 0 39 58 76 75 48 8
            -13 55 -13 55 -1 0 18 -53 51 -81 51 -15 0 -40 -11 -55 -23z m91 -117 c9 -28
            -13 -52 -44 -48 -26 3 -38 26 -27 54 9 23 63 18 71 -6z"/>
            <path d="M656 717 c-45 -45 -41 -158 7 -192 34 -23 80 -19 108 11 20 22 24 36
            24 91 0 59 -3 67 -28 89 -36 31 -81 31 -111 1z m82 -29 c7 -7 12 -35 12 -63 0
            -53 -12 -75 -42 -75 -34 0 -50 68 -28 124 10 28 38 34 58 14z"/>
            <path d="M81 540 c-48 -35 -81 -84 -81 -121 0 -60 79 -133 182 -169 283 -99
            693 -42 795 109 28 42 29 76 3 118 -23 38 -95 93 -122 93 -33 0 -19 -27 28
            -55 91 -53 94 -127 6 -185 -179 -118 -605 -118 -784 0 -86 57 -85 133 2 182
            22 13 40 31 40 41 0 25 -21 21 -69 -13z"/>
            </g>
            </svg>
            ',
        ],
        [
            'title' => 'FAQ',
            'link' => '/faq',
            'icon' => '<?xml version="1.0" standalone="no"?>
            <svg version="1.0" xmlns="http://www.w3.org/2000/svg"
             width="64" height="64" viewBox="0 0 100.000000 100.000000"
             preserveAspectRatio="xMidYMid meet">
            <g transform="translate(0.000000,100.000000) scale(0.100000,-0.100000)"
            fill="#000000" stroke="none">
            <path d="M386 944 c-225 -54 -376 -286 -338 -517 62 -367 512 -513 773 -252
            329 330 18 879 -435 769z m219 -39 c312 -81 418 -473 191 -701 -241 -240 -651
            -107 -709 230 -50 295 226 546 518 471z"/>
            <path d="M440 732 c-43 -21 -81 -89 -59 -103 24 -15 47 -10 54 11 16 50 85 69
            118 32 30 -33 21 -75 -30 -143 -36 -50 -47 -73 -47 -104 -1 -36 1 -40 24 -40
            19 0 26 6 30 31 4 16 28 61 53 98 26 38 47 78 48 90 4 72 -15 110 -66 132 -46
            19 -83 18 -125 -4z"/>
            <path d="M470 290 c0 -41 1 -41 33 -38 29 3 32 6 32 38 0 32 -3 35 -32 38 -32
            3 -33 3 -33 -38z"/>
            </g>
            </svg>
            ',
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
