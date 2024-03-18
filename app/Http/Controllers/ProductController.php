<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function shop()
    {
        return view('livewire.shop.shop-index');
    }
}
