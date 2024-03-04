<?php

namespace App\Livewire\Admin;

use App\Models\Post;
use Livewire\Component;

class Posts extends Component
{
    public function updatePost($id)
    {
        $post = Post::where('id', $id)->first();
        $post->is_public = true;
        $post->status = 'Published';
        $post->save();
    }

    public function render()
    {
        return view('livewire.admin.posts', [
            'posts' => Post::all()
        ]);
    }
}
