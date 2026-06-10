<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Enemy extends Model
{
    protected $fillable = [
        'enemy_name',
        'max_health_points',
        'max_magic_points',
        'attack',
        'defense',
    ];
}
