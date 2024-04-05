<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\VisitorController;
use App\Livewire\Pages\About;
use App\Livewire\Pages\Blog;
use App\Livewire\Pages\Contact;
use App\Livewire\Pages\Portfolio;
use App\Livewire\Pages\Posts\CategoryTag;
use App\Livewire\Pages\Posts\PostCreate;
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
Route::view('/#writing', 'welcome')->name('writing');
Route::view('/letter', 'letters')->name('letter');
Route::get('/about', About::class)->name('about');
Volt::route('/blog', Blog::class)->name('blog');
Volt::route('/shop', Shop::class)->name('shop');
Volt::route('/portfolio', Portfolio::class)->name('portfolio');
Volt::route('/contact', Contact::class)->name('contact');

Route::middleware('auth')->group(function () {
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
