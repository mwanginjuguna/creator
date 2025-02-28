<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Emails;
use App\Models\Letter;
use App\Models\Order;
use App\Models\PageView;
use App\Models\Post;
use App\Models\User;
use App\Models\Visitor;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function posts(): View
    {
        return view('admin.posts-index');
    }

    public function dashboard(): View
    {
        $postsQuery = Post::query();
        $postsCount = $postsQuery->count();
        $postsQuery->where('status', '=', 'Published')->latest();
        $contacts = Emails::query()->count('*');
        $subCount = Letter::query()->count('*');
        $published = $postsQuery->count();

        return view('dashboard', [
            'posts' => $postsQuery->limit(5)->get(),
            'subsCount' => $subCount,
            'customersCount' => 20,
            'leadsCount' => $subCount,
            'productsCount' => 88,
            'ordersCount' => Order::count(),
            'sales' => 3625060,
            'expenses' => 2786400.5,
            'usersCount' => User::count(),
            'postsCount' => $postsCount,
            'contacts' => $contacts,
            'publishedCount' => $published,
            'visitors' => PageView::query()->select('ip_address')->distinct()->count()
        ]);
    }

    public function uploads(): View
    {
        return view('admin.file-uploads');
    }
}
