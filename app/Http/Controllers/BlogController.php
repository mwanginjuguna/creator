<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * List of all sitemaps.
     */
    public function sitemaps(): View
    {
        $files = Storage::disk('public')->files('sitemaps');

        return view('admin.sitemaps', [
            'sitemaps' => $files
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post): View
    {
        Log::channel('analytics')
            ->info('Post View: ' . $post->title, [
                'post' => $post->withoutRelations()->only(['title', 'slug', 'excerpt'])
            ]);

        $relatedPosts = null;
        if (count($post->relatedPosts) < 5) {
            $relatedPosts= Post::query()->latest()
                ->limit(5)
                ->get(['title', 'id', 'slug']);
        }

        return view('livewire.pages.posts.post-view', [
            'post' => $post,
            'relatedPosts' => $relatedPosts
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        return view('livewire.admin.posts-edit', [
            'post' => $post
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }
}
