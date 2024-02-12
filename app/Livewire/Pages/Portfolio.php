<?php

namespace App\Livewire\Pages;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Layout('layouts.guest'), Title('Portfolio Projects - Explore My Past and Current OpenSource Work')]
class Portfolio extends Component
{
    public function render()
    {
        return view('livewire.pages.portfolio');
    }
}
