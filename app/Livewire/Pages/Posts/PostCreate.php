<?php

namespace App\Livewire\Pages\Posts;

use App\Livewire\Forms\PostCreateForm;
use App\Models\Category;
use App\Models\Tag;
use Illuminate\Support\Str;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Layout('layouts.app'), Title('Create a New Post')]
class PostCreate extends Component
{
    public PostCreateForm $form;

    public function save()
    {
        $this->form->save();
    }

    public function render()
    {
        return view('livewire.pages.posts.post-create', [
            'categories' => Category::all(),
            'tags' => Tag::all(),
            'bodyMarkdown' => Str::markdown($this->form->body)
        ]);
    }
}
