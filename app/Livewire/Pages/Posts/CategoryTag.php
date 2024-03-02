<?php

namespace App\Livewire\Pages\Posts;

use App\Livewire\Forms\CategoryCreateForm;
use App\Livewire\Forms\TagCreateForm;
use App\Models\Category;
use App\Models\Tag;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Layout('layouts.app'), Title('Customize Categories & Tags')]
class CategoryTag extends Component
{
    public TagCreateForm $tagForm;

    public CategoryCreateForm $categoryForm;

    public function saveCategory()
    {
        $this->categoryForm->store();
    }

    public function saveTag()
    {
        $this->tagForm->store();
    }

    public function render()
    {
        return view('livewire.pages.posts.category-tag', [
            'categories' => Category::all(),
            'tags' => Tag::all(),
        ]);
    }
}
