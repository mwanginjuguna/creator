<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visitor extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'ip_address', 'user_agent', 'url', 'path', 'referer'
    ];

    public function isBot(): bool
    {
        return str_contains($this->user_agent, 'bot');
    }
}
