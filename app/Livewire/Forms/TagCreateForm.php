<?php

namespace App\Livewire\Forms;

use App\Models\Tag;
use Illuminate\Support\Str;
use Livewire\Attributes\Rule;
use Livewire\Form;

class TagCreateForm extends Form
{
    #[Rule('required')]
    public string $title = '';

    public string $description = '';

    /**
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store()
    {
        $this->validate();

        $tag = Tag::create([
            'title' => $this->title,
            'description' => $this->description,
            'slug' => Str::slug($this->title)
        ]);

        $this->reset();
    }
}
