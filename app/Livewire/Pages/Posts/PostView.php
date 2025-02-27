<?php

namespace App\Livewire\Pages\Posts;

use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Livewire\Component;

class PostView extends Component
{
    public Post $post;
    public mixed $relatedPosts;

    public function render()
    {
        return view('livewire.pages.posts.post-view');
    }
}
