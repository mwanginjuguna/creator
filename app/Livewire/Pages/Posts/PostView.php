<?php

namespace App\Livewire\Pages\Posts;

use App\Models\Post;
use Livewire\Component;

class PostView extends Component
{
    public Post $post;

    public function render()
    {
        return view('livewire.pages.posts.post-view');
    }
}
