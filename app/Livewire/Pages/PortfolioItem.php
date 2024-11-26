<?php

namespace App\Livewire\Pages;

use App\Models\Order;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Layout('layouts.guest'), Title('Portfolio Projects - Explore My Past and Current OpenSource Work')]
class PortfolioItem extends Component
{
    public array $form = [];
    public mixed $item;
    public mixed $portfolioItem;

    public mixed $header;
    public mixed $keyFeatures;
    public mixed $otherFeatures;
    public mixed $benefits;
    public mixed $pricing;
    public string $name = '';
    public string $email = '';
    public string $companyName = '';
    public string $phoneNumber = '';
    public string $message = '';
    public bool $acceptedTnc = true;
    public bool $orderSaved = false;

    public function saveOrder()
    {
        $order = new Order([
            'customer_name' => $this->name,
            'email' => $this->email,
            'phone_number' => $this->phoneNumber,
            'product_name' => $this->header['title'],
            'product_description' => $this->header['description'],
            'features' => json_encode($this->portfolioItem['body']['key-features']),
            'extras' => json_encode($this->portfolioItem),
            'price' => $this->portfolioItem['footer']['pricing']['amount'],
            'message' => $this->message,
            'accepted_terms' => $this->acceptedTnc
        ]);

        if (isset($this->companyName)) {
            $order->company_name = $this->companyName;
            // save order logic
            $order->save();
        }

        // dispatch event to save order.
        $this->orderSaved = true;
        $this->reset(['name', 'email', 'companyName', 'phoneNumber','message', 'acceptedTnc']);
        $this->dispatch('order-saved');
        session()->flash('success', 'Order saved successfully.');
        $this->redirectRoute('portfolio-item', $this->item);
    }

    public function mount($item)
    {
        $this->item = Str::lower($item);
        $this->portfolioItem = json_decode(Storage::disk('public')->get("portfolio/$this->item.json"), true);

        $this->header = collect($this->portfolioItem['header']);

        $this->keyFeatures = collect($this->portfolioItem['body']['key-features']);
        $this->otherFeatures = collect($this->portfolioItem['body']['other-features']);
        $this->benefits = collect($this->portfolioItem['body']['benefits']);

        $this->pricing = collect($this->portfolioItem['footer']['pricing']);
        $this->message = "Hi, I am placing an order for: `{$this->portfolioItem['header']['title']}`. More details: ";

//        dd($this->portfolioItem);
    }
    public function render()
    {
        return view('livewire.pages.portfolio-item');
    }
}
