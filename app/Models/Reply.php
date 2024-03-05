<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Reply extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'post_id', 'comment_id', 'reply_id', 'message'
    ];

    public function post(): BelongsTo
    {
        $this->belongsTo(Post::class);
    }

    public function user(): BelongsTo
    {
        $this->belongsTo(User::class);
    }

    public function comment(): BelongsTo
    {
        $this->belongsTo(Comment::class);
    }

    public function replies(): HasMany
    {
        $this->hasMany(Reply::class);
    }

}
