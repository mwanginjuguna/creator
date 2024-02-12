<?php

use App\Livewire\Pages\About;
use App\Livewire\Pages\Blog;
use App\Livewire\Pages\Contact;
use App\Livewire\Pages\Portfolio;
use App\Livewire\Pages\Shop;
use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

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
Route::view('/#writing', 'welcome')->name('writing');
Route::view('/letter', 'letters')->name('letter');
Route::get('/about', About::class)->name('about');
Volt::route('/blog', Blog::class)->name('blog');
Volt::route('/shop', Shop::class)->name('shop');
Volt::route('/portfolio', Portfolio::class)->name('portfolio');
Volt::route('/contact', Contact::class)->name('contact');
//Volt::route('/about', 'pages.about')->name('about');
//Volt::route('/blog', 'pages.blog')->name('blog');
//Volt::route('/shop', 'pages.shop')->name('shop');
//Volt::route('/portfolio', 'pages.portfolio')->name('portfolio');
//Volt::route('/contact', 'pages.contact')->name('contact');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
