<?php

namespace App\Livewire;

use App\Livewire\Forms\QuoteRequestForm;
use Livewire\Component;

class QuoteRequest extends Component
{
    public QuoteRequestForm $form;

    public bool $quoteSaved = false;

    public function save()
    {
        $this->form->saveQuote();
        $this->quoteSaved = true;
    }

    public function render()
    {
        return view('livewire.quote-request');
    }
}
