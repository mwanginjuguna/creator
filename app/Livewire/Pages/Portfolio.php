<?php

namespace App\Livewire\Pages;

use Illuminate\Support\Facades\Storage;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Layout('layouts.guest'), Title('Portfolio Projects - Explore My Past and Current OpenSource Work')]
class Portfolio extends Component
{
    public mixed $items;
    public mixed $duka;

    public function showItem($item)
    {
        $this->redirectRoute('portfolio-item', $item);
    }

    public function mount()
    {
        $this->items = Storage::disk('public')->allFiles('portfolio');
        $this->duka = Storage::disk('public')->get('portfolio/dukatools.json');
    }

    public function render()
    {
        return view('livewire.pages.portfolio');
    }
}
