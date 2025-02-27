<?php

namespace App\Livewire\Pages;

use Illuminate\Support\Facades\Session;
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

        Session::flash('success', 'We have successfully received your email. We will keep you updated. Thank you!');
    }

    public function render()
    {
        $this->uri = request()->fullUrl();
        return view('livewire.pages.waiting-list');
    }
}
