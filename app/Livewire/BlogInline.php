<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;
use Livewire\WithPagination;

class BlogInline extends Component
{
    use WithPagination;

    public int $postsPerPage = 8;

    public function render()
    {
        $query = Post::query()
            ->where('status', '=', 'Published')
            ->with(['user', 'category'])
            ->latest();

        return view('livewire.blog-inline', [
            'posts' => $query->paginate($this->postsPerPage)
        ]);
    }
}
