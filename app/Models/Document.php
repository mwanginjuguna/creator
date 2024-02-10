<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'description', 'slug', 'summary', 'analysis', 'review', 'author',
        'year_published', 'publisher', 'is_public', 'post_id'
    ];

    public function post() {
        $this->belongsTo(Post::class);
    }
}
