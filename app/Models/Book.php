<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $table = 'books'; // Your existing table name

    protected $fillable = [
        'title',
        'author',
        'bookdesc',
        'extra',
        'extraa',
        'downurl',
        'genres',
        'imageurl',
        'bookurl',
    ];

    /**
     * Relationship to get author details
     * This assumes the 'author' column in books table matches the 'name' column in authors table
     */
    public function authorDetails()
    {
        return $this->belongsTo(Author::class, 'author', 'name');
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
}
