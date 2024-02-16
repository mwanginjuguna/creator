<?php

namespace App\Livewire\Forms;

use App\Models\Category;
use Illuminate\Support\Str;
use Livewire\Attributes\Rule;
use Livewire\Form;

class CategoryCreateForm extends Form
{
    #[Rule('required')]
    public string $title = '';

    public string $description = '';

    public string $body = '';

    public function store()
    {
        $this->validate();

        $data = [
            'title' => $this->title,
            'description' => $this->description,
            'slug' => Str::slug($this->title),
            'body' => $this->body
        ];
        dd($data);

        Category::create([
            'title' => $this->title,
            'description' => $this->description,
            'slug' => Str::slug($this->title),
            'body' => $this->body
        ]);

        $this->reset();
    }
}
