<?php

namespace App\Livewire\Forms;

use App\Models\Emails;
use Livewire\Attributes\Validate;
use Livewire\Form;

class ContactForm extends Form
{
    #[Validate('required')]
    public string $email = '';

    #[Validate('required')]
    public string $name = '';

    #[Validate('required')]
    public string $message = '';

    public function store()
    {
        $this->validate();

        Emails::create($this->all());

        $this->reset();
    }
}
