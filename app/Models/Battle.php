<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Battle extends Model
{
    protected $fillable = [
        'level',
        'result',
        'character_id',
    ];

    public function character()
    {
        return $this->belongsTo(Character::class);
    }

    public function enemies()
    {
        return $this->belongsToMany(Enemy::class, 'battle_has_enemy');
    }
}
