<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
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

    // Relationship to get books by this author
    public function books()
    {
        return $this->hasMany(Book::class, 'author', 'name');
    }
}
