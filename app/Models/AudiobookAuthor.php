<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AudiobookAuthor extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',        // Display name: "William Shakespeare"
        'db_name',     // Database name: "Shakespeare, William, 1564-1616"
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
     * Get audiobooks by this author using db_name for matching
     */
    public function audiobooks()
    {
        return $this->hasMany(Audiobook::class, 'author', 'db_name');
    }

    /**
     * Get audiobook count for this author
     */
    public function getAudiobookCountAttribute()
    {
        return Audiobook::where('author', 'LIKE', "%{$this->db_name}%")->count();
    }
}
