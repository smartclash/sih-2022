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
});
