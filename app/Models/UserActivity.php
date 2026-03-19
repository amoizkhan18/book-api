<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserActivity extends Model
{
    protected $table = 'user_activity';

    protected $fillable = [
        'fcm_token',
        'last_book_title',
        'last_book_type',
        'last_book_url',
        'last_book_cover',
        'last_progress',
        'favorite_genres',
        'last_active_at',
    ];

    protected $casts = [
        'favorite_genres' => 'array',
        'last_active_at'  => 'datetime',
    ];
}
