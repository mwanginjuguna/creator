<?php

namespace App\Livewire;

use App\Models\Post;
use Illuminate\View\View;
use Livewire\Component;
use Livewire\WithPagination;

class ReadNewsletters extends Component
{
    use WithPagination;

    public function render(): View
    {
        return view('livewire.read-newsletters', [
            'newsLetters' => Post::query()->where('category', '=', 'Newsletter')->latest()->simplePaginate(9)
        ]);
    }
}
