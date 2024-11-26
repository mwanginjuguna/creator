<?php

namespace App\Livewire\Pages;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

class PortfolioProducts extends Component
{
    public mixed $items;
    public array $contents;
    public mixed $duka;

    public function showItem($item)
    {
        $this->redirectRoute('portfolio-item', $item);
    }

    public function mount()
    {
        $allFiles = Storage::disk('public')->allFiles('portfolio');
        foreach ($allFiles as $file) {
            // extract content of each json file as an array ['fileName' => [$filecCntents]
            $fileName = str_replace('.json', '', Str::after( $file, 'portfolio/'));
            $excerpt = json_decode(Storage::disk('public')->get($file), true);
            $this->contents[$fileName] = $excerpt['header'];
        }

        $this->items = $allFiles;

        $this->duka = Storage::disk('public')->get('portfolio/dukatools.json');
    }

    public function render()
    {
        return view('livewire.pages.portfolio-products');
    }
}
