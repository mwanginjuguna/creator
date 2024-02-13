<?php

namespace App\Livewire;

use App\Models\Letter;
use Livewire\Component;

class SubscriberList extends Component
{
    public $subscribers;

    public function render()
    {
        $this->subscribers = Letter::query()->where('active',  true)->get();

        return view('livewire.subscriber-list');
    }
}
