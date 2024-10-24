<?php

namespace App\Livewire\Actions;

use App\Models\Order;

class SaveNewOrder
{
    public static function save($productData)
    {
        Order::create($productData);
    }
}
