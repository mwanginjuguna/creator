<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class CallToAction extends Model
{
    /** @use HasFactory<\Database\Factories\CallToActionFactory> */
    use HasFactory;

    protected $fillable = [
        'title',
        'url',
        'button_text',
        'description',
        'image_url',
        'call_to_actionable_id',
        'call_to_actionable_type',
    ];

    /**
     * Get the parent call_to_actionable model (e.g., Product, Course).
     */
    public function callToActionable(): MorphTo
    {
        return $this->morphTo();
    }
}
