<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Image extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'description', 'slug', 'index', 'alt', 'filename'
    ];

    /**
     * Get the parent imageable model (post, page, HVCO, etc).
     */
    public function imageable(): MorphTo
    {
        return $this->morphTo();
    }

    public function featuredImages(): HasMany
    {
        return $this->hasMany(FeaturedImage::class);
    }
}
