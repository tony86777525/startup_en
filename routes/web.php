<?php

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

Route::get('/', function () {
    return view('user.index');
});

Route::get('/permit', function () {
    return view('user.permit');
});

Route::get('/incorporation', function () {
    return view('user.incorporation');
});

Route::get('/incentive', function () {
    return view('user.incentive');
});

Route::get('/ia', function () {
    return view('user.ia');
});

Route::get('/smt', function () {
    return view('user.smt');
});

Route::get('/cc', function () {
    return view('user.cc');
});

Route::get('/innovation', function () {
    return view('user.innovation');
});

Route::get('/news', function () {
    return view('user.news');
});

Route::get('/NewsContent', function () {
    return view('user.news-content');
});

Route::get('/story', function () {
    return view('user.story');
});

Route::get('/StoryContent', function () {
    return view('user.story-content');
});

//Route::group([
////    'namespace' => 'App\Http\Controllers\User',
////    'as' => 'user.',
//], function () {
//    Route::get('/', function () {
//        return view('user.index');
//    });
//
//    Route::get('/permit', function () {
//        return view('user.permit');
//    });
//
//    Route::get('/incorporation', function () {
//        return view('user.incorporation');
//    });
//
//    Route::get('/incentive', function () {
//        return view('user.incentive');
//    });
//
//    Route::get('/ia', function () {
//        return view('user.ia');
//    });
//
//    Route::get('/smt', function () {
//        return view('user.smt');
//    });
//
//    Route::get('/cc', function () {
//        return view('user.cc');
//    });
//
//    Route::get('/innovation', function () {
//        return view('user.innovation');
//    });
//
//    Route::get('/news', function () {
//        return view('user.news');
//    });
//
//    Route::get('/story', function () {
//        return view('user.story');
//    });
////    Route::get('/', [IndexController::class, 'index'])->name('index');
//
////    Route::group([
////        'as' => 'api.',
////    ], function () {
////        Route::group([
////            'namespace'     => 'Api',
////        ], function () {
////            Route::post('/api/mail/store', 'MailController@store')
////                ->name('mail.store');
////
////            Route::post('/api/captcha/reload', 'CaptchaController@getCaptchaImageSrc')
////                ->name('captcha.reload');
////        });
////    });
//});
