<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
    protected $fillable = [
        'class',
        'attack',
        'defense',
        'max_health_points',
        'max_magic_points',
    ];
}
