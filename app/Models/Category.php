<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'slug', 'body'];

    public function posts()
    {
        $this->hasMany(Post::class, 'category', 'title');
    }
}
