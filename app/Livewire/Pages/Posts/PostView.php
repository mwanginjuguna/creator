<?php

namespace App\Livewire\Pages\Posts;

use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class PostView extends Component
{
    public Post $post;

    public function render()
    {
        // update views metrics
//        if (Auth::user()->isAdmin)
        $this->post->increment('views');
        return view('livewire.pages.posts.post-view');
    }
}
