<?php

namespace App\Livewire;

use App\Livewire\Forms\QuoteRequestForm;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class QuoteRequest extends Component
{
    public QuoteRequestForm $form;

    public bool $quoteSaved = false;

    public function save()
    {
        $this->form->saveQuote();
        Session::flash('success', 'We have received your quote!');
        $this->quoteSaved = true;
    }

    public function render()
    {
        return view('livewire.quote-request');
    }
}
