<?php

namespace App\Livewire\Pages;

use App\Models\Post;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Layout('layouts.guest'), Title('Blog Page - Explore Guides, Explainers, Opinions, and Tutorials')]
class Blog extends Component
{
    public function render()
    {
        return view('livewire.pages.blog', [
            'posts' => Post::all(),
        ]);
    }
}
