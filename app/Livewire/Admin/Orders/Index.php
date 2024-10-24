<?php

namespace App\Livewire\Admin\Orders;

use App\Models\Order;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Layout('layouts.app'), Title('Customer Orders')]
class Index extends Component
{
    public function render()
    {
        $orders = Order::query();
        return view('livewire.admin.orders.index', [
            'orders' => $orders->latest()->paginate(10)
        ]);
    }
}
