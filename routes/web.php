<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\Mpesa\C2BController;
use App\Http\Controllers\Mpesa\StkPushController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\QuoteRequestController;
use App\Http\Controllers\VisitorController;
use App\Livewire\Pages\About;
use App\Livewire\Pages\Blog;
use App\Livewire\Pages\Contact;
use App\Livewire\Pages\Portfolio;
use App\Livewire\Pages\Posts\CategoryTag;
use App\Livewire\Pages\Posts\PostCreate;
use App\Livewire\Pages\Shop;
use App\Livewire\QuoteRequest;
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
Route::view('/products', 'coming-soon')->name('products');
//Route::view('/about', 'coming-soon')->name('about');
Route::get('/about', About::class)->name('about');
Volt::route('/blog', Blog::class)->name('blog');
Route::view('/shop', 'coming-soon')->name('shop');
Route::view('/quote-request', 'quote-request')->name('quote');
//Route::view('/services', 'coming-soon')->name('services');
Volt::route('/shop', Shop::class)->name('shop');
Volt::route('/services', Shop::class)->name('services');
Volt::route('/portfolio', Portfolio::class)->name('portfolio');
Route::view('/contact', 'quote-request')->name('contact');
Route::view('/coming-soon', 'coming-soon')->name('coming-soon');

Route::post('/quote-request', [QuoteRequestController::class, 'store'])->name('quote-request');

Route::middleware('auth')->group(function () {
    Route::post('/orders/pay/mpesa/stk-push', [StkPushController::class, 'stkInit'])->name('mpesa.stk-push');
    Route::post('/mpesa/c2b/register-urls', [C2BController::class, 'registerURLS'])->name('c2b.registerUrls');

    Volt::route('/admin/orders', \App\Livewire\Admin\Orders\Index::class)->name('admin-orders');

    Volt::route('/admin/posts/new', PostCreate::class)->name('post-create');
    Volt::route('/admin/posts/category-tag', CategoryTag::class)->name('category-tag');
    Route::get('/admin/sitemap', [BlogController::class, 'sitemaps'])->name('sitemaps');
    Route::get('/admin/posts', [AdminController::class, 'posts'])->name('admin-posts');
    Route::view('/dev', 'welcome')->name('dev');
    Route::get('/admin/shop', [ProductController::class, 'shop'])->name('admin-shop');
    Route::get('/admin/uploads', [AdminController::class, 'uploads'])->name('admin-uploads');
    Route::get('/admin/posts/{post}/edit', [BlogController::class, 'edit'])->name('post-edit');
    Route::get('/admin/visitors', [VisitorController::class, 'index'])->name('admin-visitors');
    Route::get('/admin/visitors/{visitor}', [VisitorController::class, 'show'])->name('admin-visitors.show');
    Route::delete('/admin/visitors/{visitor}', [VisitorController::class, 'destroy'])->name('admin-visitors.delete');
});

Route::get('/posts/{post}', [BlogController::class, 'show'])->name('post-view');

Route::get('dashboard', [AdminController::class, 'dashboard'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
