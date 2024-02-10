<?php

namespace App\Livewire\Forms;

use App\Models\Letter;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Livewire\Attributes\Validate;
use Livewire\Form;

class NewsletterForm extends Form
{
    #[Validate('required')]
    public string $email = '';

    public function exists(): Model|Builder|null
    {
        return Letter::query()->where('email', $this->email)->first();
    }

    public function store(): bool
    {
        $this->validate();

        if ($this->exists() === null)
        {
            Letter::create([
                'email' => $this->email,
                'active' => true
            ]);

            $this->reset();
            return true;

        } else {
            $this->reset();
            return false;
        }
    }
}
