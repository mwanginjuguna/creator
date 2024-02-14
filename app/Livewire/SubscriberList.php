<?php

namespace App\Livewire;

use App\Models\Letter;
use Livewire\Component;

class SubscriberList extends Component
{
    public function render()
    {
        return view('livewire.subscriber-list', [
            'subscribers' => Letter::query()
                ->where('active',  true)
                ->select(['id','email'])
                ->get()
        ]);
    }
}
