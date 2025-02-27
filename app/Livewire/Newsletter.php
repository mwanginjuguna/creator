<?php

namespace App\Livewire;

use App\Livewire\Forms\NewsletterForm;
use Illuminate\Support\Facades\Session;
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

        Session::flash('success', 'You have been successfully subscribed to our newsletter. Thanks.');
    }
    public function render()
    {
        return view('livewire.newsletter');
    }
}
