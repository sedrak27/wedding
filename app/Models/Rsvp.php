<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rsvp extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'attend',
        'guest_count',
        'invited_by',
        'ip_address',
        'user_agent',
        'location',
        'desired_song',
    ];
}
