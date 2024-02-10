<?php

namespace App\Livewire;

use App\Livewire\Forms\NewsletterForm;
use Livewire\Component;

class Newsletter extends Component
{
    public NewsletterForm $form;

    public bool $hasJoined;
    public bool $exists;

    public function signup()
    {
        // add to newsletter list
        $add = $this->form->store();

        $add ? $this->exists = false : $this->exists = true;

        $this->hasJoined = true;
    }
    public function render()
    {
        return view('livewire.newsletter');
    }
}
