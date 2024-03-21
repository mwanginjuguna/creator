<?php

namespace App\Livewire\Pages\Posts;

use App\Livewire\Forms\PostCreateForm;
use App\Models\Post;
use Illuminate\Support\Str;
use Livewire\Attributes\Rule;
use Livewire\Component;

class PostEdit extends Component
{
    public string $title = '';
    public string $excerpt = '';
    public string $category = '';
    public string $tag = '';
    public string $body = '';
    public string $bodyMarkdown = '';

    public Post $post;

    public function update()
    {

        // $post = Post::query()->where('id', '=', $this->post->id)->first();
        $this->post->update([
            'title' => $this->title,
            'excerpt' => $this->excerpt,
            'category' => $this->category,
            'tag' => $this->tag,
            'body' => $this->body
        ]);

        $this->redirectRoute('admin-posts');
    }

    public function bodyMarkdown()
    {
        $this->bodyMarkdown = Str::markdown($this->body);
    }

    public function mount(Post $post)
    {
        $this->title = $post->title;
        $this->excerpt = $post->excerpt;
        $this->category = $post->category;
        $this->tag = $post->tag;
        $this->body = $post->body;

        $this->post = $post;
    }

    public function render()
    {
        $this->bodyMarkdown();

        return view('livewire.pages.posts.post-edit');
    }
}
