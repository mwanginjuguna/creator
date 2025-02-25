<?php

namespace App\Livewire\Pages\Posts;

use App\Livewire\Forms\CategoryCreateForm;
use App\Livewire\Forms\TagCreateForm;
use App\Models\Category;
use App\Models\Tag;
use Illuminate\Support\Facades\Session;
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
        Session::flash('success', 'Category created successfully.');
    }

    public function saveTag()
    {
        $this->tagForm->store();
        Session::flash('success', 'Tag created successfully.');
    }

    public function render()
    {
        return view('livewire.pages.posts.category-tag', [
            'categories' => Category::all(),
            'tags' => Tag::all(),
        ]);
    }
}
