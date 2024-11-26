<?php

namespace App\Livewire\Shop;

use App\Livewire\Forms\OrderRequestForm;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;

class Product extends Component
{
    public \App\Livewire\Forms\Product $form;

    public OrderRequestForm $orderRequestForm;

    public mixed $product = null;

    public array $allProducts = [];
    public array $allFeatures = [];
    public array $extraDetails = [];

    public string $features = '';
    public string $extras = '';

    public bool $orderSaved = false;

    public function convertFeatures()
    {
        $this->allFeatures = array_filter(explode('|', $this->features));
        $this->form->features = array_map('trim', $this->allFeatures);
    }

    public function convertExtras()
    {
        $this->extraDetails = array_filter(explode('|', $this->extras));
        $this->form->extras = array_map('trim', $this->extraDetails);
    }

    public function save()
    {
        $this->convertFeatures();
        $this->convertExtras();
        $this->form->store();
        $this->reset();

        $this->redirectRoute('admin-shop');
    }

    public function getProducts()
    {
        $products = Storage::disk('public')->files('products');

        foreach ($products as $product) {
            $pr = Storage::disk('public')->get($product);

            $this->allProducts[] = json_decode($pr, true);
        }

        // dd($this->allProducts);
    }

    public function getProduct(): array|string
    {
        return $this->allProducts[$this->product];
    }

    public function openModal($productId)
    {
        $this->product = Arr::first($this->allProducts, fn ($pr) => $pr['productId'] === $productId);
        $this->orderRequestForm->message = "Hi, I am placing an order for: `{$this->product['name']}`. More details: ";
        $this->orderRequestForm->product = $this->product;
        $this->dispatch('open-modal', 'product-order-form');
    }

    public function placeOrder()
    {
        // Place order logic
        $this->orderRequestForm->saveOrder();

        $this->dispatch('order-saved');
        $this->dispatch('close');
    }

    public function render()
    {
        $this->getProducts();

        return view('livewire.shop.product');
    }
}
