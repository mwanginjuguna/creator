<?php

namespace App\Livewire;

use App\Models\Emails;
use Livewire\Component;

class MessageList extends Component
{
    public $messages;

    public function render()
    {
        $this->messages = Emails::all();
        return view('livewire.message-list');
    }
}
