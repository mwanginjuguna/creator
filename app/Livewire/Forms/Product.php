<?php

namespace App\Livewire\Forms;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Livewire\Attributes\Validate;
use Livewire\Form;
use function Pest\Laravel\json;

class Product extends Form
{
    public string $name = '';
    public array $features = [];
    public string $description = '';
    public float $price = 1.50;
    public array $extras = [];
    public string $comments = '';
    public int $productId = 1;
    protected int $idCounter = 1;

    public function getLatestId()
    {
        $latestId = Storage::disk('public')->get('products/product-counter.json');
        $list = json_decode($latestId, true);
        $this->idCounter = $list['latestId'] ?? 1;
    }

    public function store()
    {
        $this->getLatestId();

        $this->productId = $this->idCounter;

        $jsData = json_encode($this->all());

        Storage::disk('public')->put('products/'.$this->name.'.json', $jsData);

        $this->idCounter++;

        Storage::disk('public')->put('products/product-counter.json', json_encode(['latestId' => $this->idCounter]));

        $this->reset();
    }
}
