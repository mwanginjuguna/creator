<?php

namespace App\Livewire\Pages\Posts;

use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Livewire\Component;

class PostView extends Component
{
    public Post $post;

    public function render()
    {
        Log::channel('analytics')->info('Post View: ' . $this->post->title, ['post' => $this->post]);
        return view('livewire.pages.posts.post-view');
    }
}
