<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Audiobook extends Model
{
    use HasFactory;

    protected $table = 'audiobooks';
    public $timestamps = false; 

    protected $fillable = [
        'title',
        'author',
        'imageurl',
        'extra',
        'genres',
        'bookdesc',
        'bookurl',
        'audiolinks',
    ];

    /**
     * Relationship to get author details
     * This assumes the 'author' column in audiobooks table matches the 'name' column in audiobook_authors table
     */
    public function authorDetails()
    {
        return $this->belongsTo(AudiobookAuthor::class, 'author', 'name');
    }

    /**
     * Accessor to ensure genres is always an array
     * This helps when genres are stored as JSON string
     */
    public function getGenresAttribute($value)
    {
        if (is_string($value)) {
            $decoded = json_decode($value, true);
            return $decoded ?? [$value];
        }
        return $value;
    }

    /**
     * Accessor to ensure audiolinks is always an array
     * This helps when audiolinks are stored as JSON string
     */
    public function getAudiolinksAttribute($value)
    {
        if (is_string($value)) {
            $decoded = json_decode($value, true);
            return $decoded ?? [$value];
        }
        return $value;
    }
}
