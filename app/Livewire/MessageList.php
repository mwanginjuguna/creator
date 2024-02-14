<?php

namespace App\Livewire;

use App\Models\Emails;
use Livewire\Component;

class MessageList extends Component
{
    public function render()
    {
        return view('livewire.message-list', [
            'messages' => Emails::all()
        ]);
    }
}
