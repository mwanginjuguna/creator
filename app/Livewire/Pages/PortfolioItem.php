<?php

namespace App\Livewire\Pages;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Layout('layouts.guest'), Title('Portfolio Projects - Explore My Past and Current OpenSource Work')]
class PortfolioItem extends Component
{
    public mixed $item;
    public mixed $portfolioItem;

    public mixed $header;
    public mixed $keyFeatures;
    public mixed $otherFeatures;
    public mixed $benefits;
    public mixed $pricing;

    public function mount($item)
    {
        $this->item = Str::lower($item);
        $this->portfolioItem = json_decode(Storage::disk('public')->get("portfolio/$this->item.json"), true);

        $this->header = collect($this->portfolioItem['header']);

        $this->keyFeatures = collect($this->portfolioItem['body']['key-features']);
        $this->otherFeatures = collect($this->portfolioItem['body']['other-features']);
        $this->benefits = collect($this->portfolioItem['body']['benefits']);

        $this->pricing = collect($this->portfolioItem['footer']['pricing']);

//        dd($this->portfolioItem);
    }
    public function render()
    {
        return view('livewire.pages.portfolio-item');
    }
}
