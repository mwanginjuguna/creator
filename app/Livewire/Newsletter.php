<?php

namespace App\Livewire;

use Livewire\Component;

class Newsletter extends Component
{
    public string $email;
    public bool $hasJoined;

    public function signup()
    {
        $this->hasJoined = true;
        // add to newsletter list
    }
    public function render()
    {
        return view('livewire.newsletter');
    }
}
