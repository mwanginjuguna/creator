<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Emails;
use App\Models\Letter;
use App\Models\Post;
use App\Models\Visitor;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function posts(): Factory|View
    {
        return view('admin.posts-index');
    }

    public function dashboard(): Factory|View
    {
        $posts = Post::query()->where('status', '=', 'Published')->latest()->limit(5)->get();
        $contacts = Emails::query()->count('*');
        $subCount = Letter::query()->count('*');
        $published = $posts->count();

        return view('dashboard', [
            'posts' => $posts,
            'subsCount' => $subCount,
            'contacts' => $contacts,
            'publishedCount' => $published,
            'visitors' => count(Visitor::query()->select('ip_address')->distinct()->get())
        ]);
    }

    public function uploads(): View
    {
        return view('admin.file-uploads');
    }
}
