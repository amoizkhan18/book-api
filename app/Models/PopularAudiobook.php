<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PopularAudiobook extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'author',
        'bookdesc',
        'imageurl',
        'audiolinks',
        'genres',
        'color',
        'order',
        'is_active',
    ];

    protected $casts = [
        'audiolinks' => 'array', // Automatically cast JSON to array
        'genres' => 'array', // Automatically cast JSON to array
        'is_active' => 'boolean',
        'order' => 'integer',
    ];

    /**
     * Scope to get only active popular audiobooks
     */
    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    /**
     * Scope to order audiobooks by custom order field
     */
    public function scopeOrdered($query)
    {
        return $query->orderBy('order', 'asc')->orderBy('created_at', 'desc');
    }
}
