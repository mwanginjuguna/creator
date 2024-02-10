<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Letter extends Model
{
    use HasFactory;

    protected $fillable = ['email', 'active', 'image_id', 'is_published'];

    public function unsubscribe()
    {
        $this->active = false;
    }

    public function image()
    {
        return $this->belongsTo(Image::class);
    }
}
