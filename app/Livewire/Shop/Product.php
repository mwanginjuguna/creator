<?php

namespace App\Livewire\Shop;

use Illuminate\Support\Facades\Storage;
use Livewire\Component;

class Product extends Component
{
    public \App\Livewire\Forms\Product $form;

    public string $product;

    public array $allProducts = [];
    public array $allFeatures = [];
    public array $extraDetails = [];

    public string $features = '';
    public string $extras = '';

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

    public function render()
    {
        $this->getProducts();

        return view('livewire.shop.product');
    }
}
