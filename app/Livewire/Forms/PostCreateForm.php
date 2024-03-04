<?php

namespace App\Livewire\Forms;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\RedirectResponse;
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

    public string $category = '';

    public string $tag = '';

    #[Rule('required')]
    public string $body = '';

    public function saveCategory()
    {
        return Category::create([
            'title' => $this->category,
            'slug' => Str::slug($this->category)
        ]);
    }

    public function saveTag()
    {
        return Tag::create([
            'title' => $this->tag,
            'slug' => Str::slug($this->tag)
        ]);
    }

    public function checkSlugExists($slug): bool
    {
        $post = Post::where('slug', '=', $slug)->first();
        return (bool)$post;
    }

    public function updateSlug(string $slug, int $iteration=1): string
    {
        $newSlug = '';
        $num = 1;
        if ($iteration === 1) {
            $newSlug = $slug . '-' . $this->tag;
        } elseif ($iteration === 2) {
            $newSlug = $slug . '-' . $this->tag. '-' . $this->category;
        } elseif ($iteration === 3) {
            $newSlug = $slug . '-' . $this->tag. '-' . $this->category.'-'.$num;
        } else {
            $num += $iteration;
            $newSlug = $slug . '-' . $this->tag. '-' . $this->category.'-'.$num;
        }

        return $newSlug;
    }

    public function save(): RedirectResponse
    {
        $this->validate();

        $slug =Str::slug($this->title);

        while ($this->checkSlugExists($slug) === true) {
            $slug = $this->updateSlug($slug);
        }

        $post = Post::create([
            'title' => $this->title,
            'excerpt' => $this->excerpt,
            'slug' => $slug,
            'body' => $this->body,
            'category' => $this->category,
            'tag' => $this->tag,
            'status' => 'Draft',
            'is_public' => false,
            'author' => 'Francis Njuguna'
        ]);

        $post->tag_id = $this->saveTag()->id;

        $post->category_id = $this->saveCategory()->id;

        $post->save();

        $this->reset();

        return redirect()->route('admin-posts');
    }
}
