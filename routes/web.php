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

Route::view('/', 'welcome')->name('home');
Route::view('/dev', 'welcome')->name('dev');
Route::view('/#blog', 'welcome')->name('blog');
Route::view('/#writing', 'welcome')->name('writing');
Route::view('/letter', 'letters')->name('letter');
Route::view('/#shop', 'welcome')->name('shop');
Route::view('/#contact', 'welcome')->name('contact');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
