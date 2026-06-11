<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Enemy;

class EnemySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Enemy::create([
            'enemy_name' => 'Goblin',
            'max_health_points' => 80,
            'max_magic_points' => 30,
            'attack' => 10,
            'defense' => 5,
        ]);
    }
}
