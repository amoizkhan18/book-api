<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Audiobook extends Model
{
    protected $table = 'audiobooks';

    public $timestamps = false;

    protected $fillable = [
        'title',
        'author',
        'imageurl',
        'genres',
        'bookdesc',
        'bookurl',
        'audiolinks',
    ];

    protected $casts = [
        'genres' => 'array',
    ];

    public function getGenresAttribute($value)
    {
        if (is_string($value)) {
            $decoded = json_decode($value, true);
            return $decoded ?? [$value];
        }
        return $value;
    }
}
