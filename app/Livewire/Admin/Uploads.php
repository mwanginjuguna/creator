<?php

namespace App\Livewire\Admin;

use App\Models\Document;
use App\Models\Image;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithFileUploads;

class Uploads extends Component
{
    use WithFileUploads;

    public object $images;
    public object $documents;

    public array $uploadedFiles = [];
    public string $title = '';
    public string $description = '';
    public string $type = '';
    public string $author = '';
    public string $publisher = '';
    public string $yearPublished = '';

    public function saveFiles() {
        foreach ($this->uploadedFiles as $file) {
            $slug = Str::slug($this->title);
            $filename = $slug.'.'.$file->extension();

            if ($this->type === 'document') {
                Document::create([
                    'title' => $this->title,
                    'slug' => $filename,
                    'description' => $this->description,
                    'is_public' => true,
                    'author' => $this->author,
                    'publisher' => $this->publisher,
                    'year_published' => now()->year
                ]);

                // Storage::putFileAs('public/documents', $file, $filename);

                $file->storePubliclyAs('documents', $filename, 'public');
            } elseif ($this->type === 'image') {
                Image::create([
                    'title' => $this->title,
                    'slug' => $slug,
                    'description' => $this->description,
                    'alt' => $this->title,
                    'filename' => $filename
                ]);

                $file->storePubliclyAs('images', $filename, 'public');
            }
        }

        $this->redirectRoute('admin-uploads');
    }

    public function removeDoc($id)
    {
        $file = Document::query()->where('id', '=', $id)->first();

        Storage::disk('public')->delete('documents/'.$file->slug);
        $file->delete();
    }

    public function removeImg($id)
    {
        $img = Image::query()->where('id', '=', $id)->first();

        Storage::disk('public')->delete('images/'.$img->filename);
        $img->delete();
    }

    public function render()
    {
        $this->images = Image::all();
        $this->documents = Document::all();

        return view('livewire.admin.uploads');
    }
}
