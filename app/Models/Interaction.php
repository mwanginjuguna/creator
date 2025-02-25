<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Interaction extends Model
{
    /** @use HasFactory<\Database\Factories\InteractionFactory> */
    use HasFactory;

    protected $fillable = [
        'interactable_id',
        'interactable_type',
        'user_id',
        'session_id',
        'type',
        'url',
        'ip_address',
        'user_agent',
        'interacted_at',
    ];

    protected $casts = [
        'interacted_at' => 'datetime',
    ];

    public function interactable(): MorphTo
    {
        return $this->morphTo();
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
