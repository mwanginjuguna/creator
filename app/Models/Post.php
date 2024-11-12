<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

class Post extends Model
{
    use HasFactory;
    protected $with = ['user', 'category'];

    protected $fillable = [
        'title', 'excerpt', 'slug', 'body', 'status', 'is_public',
        'user_id', 'category_id', 'tag_id', 'author'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
    /**
     * Get all of the tags for the post.
     */
    public function tags(): MorphToMany
    {
        return $this->morphToMany(Tag::class, 'taggable');
    }

    public function relatedPosts(): HasMany
    {
        return $this->hasMany(Post::class, 'category_id', 'category_id')
            ->where('id', '!=', $this->id)
            ->where('status', '=', 'Published')
            ->limit(3)
            ->latest();
    }

    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class);
    }

    public function replies(): HasMany
    {
        return $this->hasMany(Reply::class);
    }

    public function documents(): HasMany
    {
        return $this->hasMany(Document::class);
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
