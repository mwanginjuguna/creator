<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'excerpt', 'slug', 'body', 'status', 'is_public',
        'category_id', 'tag_id', 'author'
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class);
    }

    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class);
    }

    public function replies(): HasMany
    {
        return $this->hasMany(Reply::class);
    }

    public function images(): HasMany
    {
        return $this->hasMany(Image::class);
    }

    public function documents(): HasMany
    {
        return $this->hasMany(Document::class);
    }

    public function featuredImage(): BelongsTo
    {
        return $this->belongsTo(FeaturedImage::class);
    }
}
