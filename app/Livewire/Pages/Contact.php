<?php

namespace App\Livewire\Pages;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Layout('layouts.guest'), Title('Contact MK Brand - Get In Touch and Receive Instant Offers')]
class Contact extends Component
{
    public function render()
    {
        return view('livewire.pages.contact');
    }
}
