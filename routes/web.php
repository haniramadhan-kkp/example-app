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

Route::get('/', function () {
    return view('landing.home');
})->name('home');

Route::view('about', 'landing.about')->name('about');
Route::view('contact', 'landing.contact')->name('contact');
Route::view('service', 'landing.service')->name('service');
Route::view('roadmap', 'landing.roadmap')->name('roadmap');
Route::view('faq', 'landing.faq')->name('faq');
Route::view('feature', 'landing.feature')->name('feature');
Route::view('token', 'landing.feature')->name('token');

Auth::routes();

Route::group([
    'prefix' => 'admin',
    'middleware' => 'auth',
    'as' => 'admin.',
], function() {
    Route::get('home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::view('about', 'admin.about')->name('about');
    Route::get('users', [\App\Http\Controllers\UserController::class, 'index'])->name('users.index');

});

Route::middleware('auth')->group(function () {
    Route::get('profile', [\App\Http\Controllers\ProfileController::class, 'show'])->name('profile.show');
    Route::put('profile', [\App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');
});
