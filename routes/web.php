<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',  [\App\Http\Controllers\MainController::class, 'home'])->name('home');

Route::get('/about', [\App\Http\Controllers\MainController::class, 'about'])->name('about');

Route::group(['middleware' => 'guest'], function (){
    Route::get('/signup', [\App\Http\Controllers\AuthController::class, 'getSignup'])->name('signup');
    Route::post('/signup', [\App\Http\Controllers\AuthController::class, 'postSignup']);

    Route::get('/signin', [\App\Http\Controllers\AuthController::class, 'getSignin'])->name('signin');
    Route::post('/signin', [\App\Http\Controllers\AuthController::class, 'postSignin']);
});

Route::group(['middleware' => 'auth'], function (){
    Route::get('/signout', [\App\Http\Controllers\AuthController::class, 'getSignout'])->name('signout');

    Route::get('/review', [\App\Http\Controllers\MainController::class, 'review'])->name('review');
    Route::post('/review/check', [\App\Http\Controllers\MainController::class, 'review_check'])->name('send_form');

    Route::group(['middleware' => 'is_admin'], function () {

        Route::get('/admin', [\App\Http\Controllers\AdminController::class, 'admin_users'])->name('admin_users');
        Route::get('/admin/books', [\App\Http\Controllers\AdminController::class, 'admin_books'])->name('admin_books');
        Route::get('/admin/genres', [\App\Http\Controllers\AdminController::class, 'admin_genres'])->name('admin_genres');
        Route::get('/admin/authors', [\App\Http\Controllers\AdminController::class, 'admin_authors'])->name('admin_authors');
        Route::get('/admin/countries', [\App\Http\Controllers\AdminController::class, 'admin_countries'])->name('admin_countries');
    });

});

