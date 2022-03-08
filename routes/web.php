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

Route::view('/', 'welcome');

Route::prefix('auth')->middleware('guest')->group(function () {
    Route::controller(\App\Http\Controllers\Auth\RegisterController::class)->group(function () {
        Route::get('register', 'show')->name('auth.register');
        Route::post('register', 'register');
    });

    Route::controller(\App\Http\Controllers\Auth\LoginController::class)->group(function () {
        Route::get('login', 'show')->name('auth.login');
        Route::post('login', 'login');
    });
});

Route::controller(\App\Http\Controllers\HomeController::class)
    ->middleware('auth')
    ->group(function () {
        Route::get('home', 'home')->name('home');
        Route::get('logout', 'logout')->name('logout');
        Route::get('admin', 'admin')->name('home.admin');
    });

Route::controller(\App\Http\Controllers\EventController::class)
    ->middleware('auth')
    ->prefix('event')
    ->group(function () {
        Route::get('create', 'showCreate')->name('event.create');
        Route::get('{event}', 'view')->name('event.view');

        Route::post('create', 'create');
    });
