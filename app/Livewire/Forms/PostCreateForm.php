<?php

namespace App\Livewire\Forms;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Support\Str;
use Livewire\Attributes\Rule;
use Livewire\Attributes\Validate;
use Livewire\Form;

class PostCreateForm extends Form
{
    #[Rule('required|min:5')]
    public string $title = '';

    #[Rule('required|max:200')]
    public string $excerpt = '';

    #[Rule('required')]
    public int $categoryId = 0;

    #[Rule('required')]
    public int $tagId = 0;

    public mixed $category;

    public mixed $tag;

    #[Rule('required')]
    public string $body = '';

    public function getCategory()
    {
        $this->category = Category::query()->where('id', $this->categoryId)
                ->pluck('title')
                ->first() ?? null;
    }

    public function getTag()
    {
        $this->tag = Tag::query()->where('id', $this->tagId)
                ->pluck('title')
                ->first() ?? null;
    }

    public function save()
    {
        $this->validate();

        $post = Post::create([
            'title' => $this->title,
            'excerpt' => $this->excerpt,
            'slug' => Str::slug($this->title,'-'),
            'category_id' => $this->categoryId,
            'tag_id' => $this->tagId,
            'status' => 'Draft',
            'is_public' => false,
            'author' => 'Francis Njuguna'
        ]);

        $this->reset();

        dd($post);
    }
}
