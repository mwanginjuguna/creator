<?php

namespace App\Observers;

use App\Models\Post;
use Illuminate\Support\Facades\Cache;

class PostObserver
{
    /**
     * Handle the Post "created", "updated", "deleted", "restored", "forceDeleted" events.
     * Invalidate the blog posts cache.
     *
     * @param Post $post
     * @return void
     */
    public function handleBlogPostsCacheInvalidation(Post $post): void
    {
        Cache::forget('posts:*');
    }

    /**
     * Handle the Post "created" event.
     */
    public function created(Post $post): void
    {
        $this->handleBlogPostsCacheInvalidation($post);
    }

    /**
     * Handle the Post "updated" event.
     */
    public function updated(Post $post): void
    {
        $this->handleBlogPostsCacheInvalidation($post);
    }

    /**
     * Handle the Post "deleted" event.
     */
    public function deleted(Post $post): void
    {
        $this->handleBlogPostsCacheInvalidation($post);
    }

    /**
     * Handle the Post "restored" event.
     */
    public function restored(Post $post): void
    {
        $this->handleBlogPostsCacheInvalidation($post);
    }

    /**
     * Handle the Post "force deleted" event.
     */
    public function forceDeleted(Post $post): void
    {
        $this->handleBlogPostsCacheInvalidation($post);
    }
}
