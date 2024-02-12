<?php

namespace App\Livewire\Pages;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Layout('layouts.guest'), Title('Who is Francis Mwangi Kanothe?')]
class About extends Component
{
    public function render()
    {
        return view('livewire.pages.about');
    }
}
