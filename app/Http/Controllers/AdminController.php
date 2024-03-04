<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Emails;
use App\Models\Letter;
use App\Models\Post;
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
        $posts = Post::query()->latest()->limit(5)->get();
        $postCount = count($posts);
        $contacts = Emails::query()->count('*');
        $subCount = Letter::query()->count('*');
        $published = Post::query()->where('status', '=', 'Published')->count();

        return view('dashboard', [
            'posts' => $posts,
            'postCount' => $postCount,
            'subsCount' => $subCount,
            'contacts' => $contacts,
            'publishedCount' => $published
        ]);
    }
}
