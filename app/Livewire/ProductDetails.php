<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ProductDetails extends Component
{
    public $title;
    public $description;
    public $screenshot;
    public $demoLink;
    public $buyingLink;
    public $addToCartLink;
    public $coreFeatures;
    public $screenshots;
    public $extraFeatures;
    public $videoDemoLink;
    public $pricing;
    public $contactEmail;
    public $finalCTALink;

    public function mount(
        $title,
        $description,
        $screenshot,
        $demoLink,
        $buyingLink,
        $addToCartLink,
        $coreFeatures,
        $screenshots,
        $extraFeatures,
        $videoDemoLink,
        $pricing,
        $contactEmail,
        $finalCTALink
    ) {
        $this->title = $title;
        $this->description = $description;
        $this->screenshot = $screenshot;
        $this->demoLink = $demoLink;
        $this->buyingLink = $buyingLink;
        $this->addToCartLink = $addToCartLink;
        $this->coreFeatures = $coreFeatures;
        $this->screenshots = $screenshots;
        $this->extraFeatures = $extraFeatures;
        $this->videoDemoLink = $videoDemoLink;
        $this->pricing = $pricing;
        $this->contactEmail = $contactEmail;
        $this->finalCTALink = $finalCTALink;
    }

    public function render()
    {
        return view('livewire.product-details');
    }
}
