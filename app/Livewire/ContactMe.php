<?php

namespace App\Livewire;

use Livewire\Component;

class ContactMe extends Component
{
    public bool $sent;
    public string $email;
    public string $name;
    public string $message;

    public function sendMessage()
    {
        $this->sent = true;
    }

    public function render()
    {
        return view('livewire.contact-me');
    }
}
