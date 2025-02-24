<?php

namespace App\Livewire\Admin;

use App\Models\Post;
use Livewire\Component;

class Posts extends Component
{
    public function updatePost($id)
    {
        sleep(1);
        $post = Post::where('id', $id)->first();
        $post->is_public = true;
        $post->status = 'Published';
        $post->save();
    }

    public function deletePost($id)
    {
        $post = Post::query()->where('id', '=', $id)->first();
        $post->delete();
        $this->redirectRoute('admin-posts');
    }

    public function render()
    {
        return view('livewire.admin.posts', [
            'posts' => Post::all()
        ]);
    }
}
