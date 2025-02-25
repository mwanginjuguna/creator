<?php

namespace App\Livewire\Pages;

use App\Models\Post;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Session;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithPagination;

#[Layout('layouts.guest'), Title('Blog Page - Explore Guides, Explainers, Opinions, and Tutorials')]
class Blog extends Component
{
    use WithPagination;
    public string $search = '';
    public int $perPage = 24;

    public function render()
    {

        $cacheKey = 'posts:' . $this->getPage() . ':' . $this->perPage . ':' . $this->search;

        return view('livewire.pages.blog', [
            'posts' => Cache::remember(
                $cacheKey,
                now()->addMinutes(2),
                fn() => Post::query()
                    ->where('status', '=', 'Published')
                    ->where('is_public', true)
                    ->when($this->search, function ($query) {
                        $query->where('title', 'like', '%' . $this->search . '%')
                            ->orWhere('excerpt', 'like', '%' . $this->search . '%')
                            ->orWhere('body', 'like', '%' . $this->search . '%');
                    })
                    ->latest()
                    ->paginate($this->perPage)
            ),
        ]);
    }
}
