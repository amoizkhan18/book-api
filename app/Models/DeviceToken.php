<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DeviceToken extends Model
{
    protected $table = 'device_tokens';

    protected $fillable = [
        'fcm_token',
        'device_id',
        'device_model',
        'android_version',
        'app_version',
        'last_active_at',
    ];

    protected $casts = [
        'last_active_at' => 'datetime',
    ];
}
