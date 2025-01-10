<?php

namespace App\Livewire\Pages\Offers;

use App\Livewire\Forms\OrderRequestForm;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Arr;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Layout('layouts.guest'), Title('Authoritative Personal Fitness Website')]
class FitnessWebsite extends Component
{

    public OrderRequestForm $orderRequestForm;
    public $product = [];
    public $orderSaved = false;
    public $package = 'starter';

    public function openModal(string $product, $package = 'starter', $price = 4500)
    {
        $this->orderRequestForm->message = "Hi, I am placing an order for: `{$this->product['name']}`. More details: ";
        $this->orderRequestForm->product = $this->product;
        $this->dispatch('open-modal', 'product-order-form');
    }

    /** Places a fitness website order, saves it, and redirects back home */
    public function placeOrder()
    {
        // Place order logic
        $this->orderRequestForm->saveOrder();
        $this->orderSaved = true;

        // register user
        $this->orderRequestForm->registerUser();

        $this->dispatch('order-saved');
        $this->dispatch('close');

        sleep(2);
        $this->redirect(RouteServiceProvider::HOME, navigate: true);
    }

    public function render()
    {
        $this->product = [
            'productId' => 99999,
            'name' => 'Fitness Trainer Website',
            'description' => 'Fitness trainer website',
            'hours' => '6 hours',
            'features' => '',
            'extras' => '',
            'price' => 4500
        ];

        return view('livewire.pages.offers.fitness-website');
    }
}
