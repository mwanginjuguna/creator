<?php

namespace App\Livewire\Pages;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Layout('layouts.guest'), Title('Shop - Quality Products to Grow Online')]
class Shop extends Component
{
    public function render()
    {
        return view('livewire.pages.shop');
    }
}
