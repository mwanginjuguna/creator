<?php

namespace App\Livewire\Pages;

use Livewire\Component;

class WaitingList extends Component
{
    public string $email = '';
    public string $uri = '';

    public bool $saved = false;

    public function save()
    {
        \App\Models\WaitingList::create([
            'email' => $this->email,
            'uri' => $this->uri,
        ]);
        $this->saved = true;
    }

    public function render()
    {
        $this->uri = request()->fullUrl();
        return view('livewire.pages.waiting-list');
    }
}
