<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'excerpt', 'slug', 'body', 'status', 'is_public',
        'category', 'tag', 'user_id', 'category_id', 'tag_id', 'author'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function tags(): MorphToMany
    {
        return $this->morphToMany(Tag::class, 'taggable');
    }

    public function relatedPosts(): HasMany
    {
        return $this->hasMany(Post::class, 'category', 'category')
            ->where('id', '!=', $this->id)
            ->where('status', '=', 'Published')
            ->limit(3)
            ->latest();
    }

    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class);
    }

    public function images(): MorphMany
    {
        return $this->morphMany(Image::class, 'imageable');
    }

    public function documents(): MorphMany
    {
        return $this->morphMany(Document::class, 'documentable');
    }

    public function featuredImage(): BelongsTo
    {
        return $this->belongsTo(FeaturedImage::class);
    }

    public function getRouteKeyName(): string
    {
        return 'slug';
    }
}
