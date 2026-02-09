<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrendingBook extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'author',
        'bookdesc',
        'imageurl',
        'bookurl',
        'genres',
        'order',
        'is_active',
    ];

    protected $casts = [
        'genres' => 'array', // Automatically cast JSON to array
        'is_active' => 'boolean',
        'order' => 'integer',
    ];

    /**
     * Scope to get only active trending books
     */
    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    /**
     * Scope to order books by custom order field
     */
    public function scopeOrdered($query)
    {
        return $query->orderBy('order', 'asc')->orderBy('created_at', 'desc');
    }
}