<?php

namespace App\Livewire\Pages;

use App\Models\Post;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithPagination;

#[Layout('layouts.guest'), Title('Blog Page - Explore Guides, Explainers, Opinions, and Tutorials')]
class Blog extends Component
{
    use WithPagination;

    public function render()
    {
        return view('livewire.pages.blog', [
            'posts' => Post::query()
                ->where('status', '=', 'Published')
                ->simplePaginate(12),
        ]);
    }
}
