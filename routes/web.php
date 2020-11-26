<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
//
//Auth::routes([
//    'reset' => false,
//    'confirm' => false,
//    'verify' => false,
//]);


Route::get('/',  [\App\Http\Controllers\MainController::class, 'home'])->name('home');

Route::get('/about', [\App\Http\Controllers\MainController::class, 'about'])->name('about');

Route::get('/review', [\App\Http\Controllers\MainController::class, 'review'])->name('review');

Route::post('/review/check', [\App\Http\Controllers\MainController::class, 'review_check'])->name('send_form');


Route::get('/signup', [\App\Http\Controllers\AuthController::class, 'getSignup'])->name('signup');
Route::post('/signup', [\App\Http\Controllers\AuthController::class, 'postSignup']);
