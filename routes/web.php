<?php

use App\Http\Middleware\UserAccess;	
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Back\UserController;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Back\ConfigController;
use App\Http\Controllers\Back\ArticleController;
use App\Http\Controllers\Front\ContactController;
use App\Http\Controllers\Back\CategoryController;	
use App\Http\Controllers\Back\DashboardController;	
use App\Http\Controllers\Front\ArticleController as FrontArticleController;
use App\Http\Controllers\Front\CategoryController as FrontCategoryController;


// Route::get('/', function () {
//     return view('welcome');
// });

Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
    });

Route::get('/',[HomeController::class, 'index']);
Route::get('/about',[HomeController::class, 'about']);
Route::get('/contact',[ContactController::class, 'index']);

//Search articles

Route::get('/p/{slug}',[FrontArticleController::class, 'show']);
Route::get('/f-articles',[FrontArticleController::class, 'index']);
Route::post('/articles/search',[FrontArticleController::class, 'index'])->name('search');

Route::get('category/{slug}',[FrontCategoryController::class, 'index']);
Route::get('all-category',[FrontCategoryController::class, 'allCategory']);

//Memasukan semua routing ke authentifikasi 

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index']);

    Route::resource('/categories', CategoryController::class)->only([
        'index','store','update','destroy'
    ])->middleware(UserAccess::class);
    //->middleware('UserAccess:1')

    Route::resource('articles', ArticleController::class);

    Route::resource('/users', UserController::class);

    Route::resource('/config', ConfigController::class)->only([
        'index','update'
    ]);

    // Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['guest']], function () {
    //     \UniSharp\LaravelFilemanager\Lfm::routes();
    // });
    Route::group(['prefix' => 'laravel-filemanager'], function () {
        \UniSharp\LaravelFilemanager\Lfm::routes();
    });
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
