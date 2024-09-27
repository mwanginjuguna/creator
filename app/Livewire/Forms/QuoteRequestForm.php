<?php

namespace App\Livewire\Forms;

use App\Models\QuoteRequest;
use Livewire\Attributes\Validate;
use Livewire\Form;

class QuoteRequestForm extends Form
{
    public string $name = '';
    public string $email = '';
    public string $companyName = '';
    public string $phoneNumber = '';
    public string $product = '';
    public string $message = '';
    public bool $acceptedTnc = true;

    public function saveQuote(): bool
    {
        $qr = QuoteRequest::create([
            'name' => $this->name,
            'email' => $this->email,
            'company_name' => $this->companyName,
            'phone_number' => $this->phoneNumber,
            'product' => $this->product,
            'message' => $this->message,
            'accepted_tnc' => $this->acceptedTnc
        ]);

        $this->reset();

        return true;
    }
}
