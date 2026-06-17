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

    public function battles()
    {
        return $this->belongsToMany(Battle::class, 'battle_has_enemy');
    }

    public function skills()
    {
        return $this->belongsToMany(Skill::class, 'enemy_has_skill');
    }
}
