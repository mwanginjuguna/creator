<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;

class BlogInline extends Component
{
    public function render()
    {
        return view('livewire.blog-inline', [
            'posts' => Post::query()->limit(3)->latest()->get()
        ]);
    }
}
