<?php

namespace App\Livewire;

use App\Livewire\Forms\ContactForm;
use Livewire\Component;

class ContactMe extends Component
{
    public bool $sent;

    public ContactForm $form;

    public function sendMessage()
    {
        $this->form->store();
        $this->sent = true;
    }

    public function render()
    {
        return view('livewire.contact-me');
    }
}
