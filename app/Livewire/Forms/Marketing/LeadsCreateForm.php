<?php

namespace App\Livewire\Forms\Marketing;

use Livewire\Attributes\Validate;
use Livewire\Form;

class LeadsCreateForm extends Form
{
    #[Validate('required')]
    public string $name = '';
    #[Validate('required|email')]
    public string $email = '';

    public function store()
    {
        $this->validate();
        // Store lead data in your database
        //CreateLeadAction
    }
}
