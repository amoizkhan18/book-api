<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AudiobookAuthor extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'image',
        'description',
        'color',
        'display_order',
        'is_active'
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];

    /**
     * Relationship to get audiobooks by this author
     * Assumes 'author' column in audiobooks table matches 'name' column in audiobook_authors table
     */
    public function audiobooks()
    {
        return $this->hasMany(Audiobook::class, 'author', 'name');
    }
}
