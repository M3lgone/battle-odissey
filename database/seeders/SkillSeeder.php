<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Skill;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Warrior skill
        Skill::create([
        'skill_name' => 'Slash',
        'description' => 'A powerful attack',
        'damage_skill' => 20,
        'skill_cost_magic_points' => 15,
    ]);

        // Goblin skill
        Skill::create([
        'skill_name' => 'Hack',
        'description' => 'A quick slash',
        'damage_skill' => 15,
        'skill_cost_magic_points' => 5,
    ]);

        // Troll skill
        Skill::create([
        'skill_name' => 'Smash',
        'description' => 'A big smash',
        'damage_skill' => 25,
        'skill_cost_magic_points' => 10,
    ]);

        //Orc skill
        Skill::create([
        'skill_name' => 'Rampage',
        'description' => 'A strong rampage',
        'damage_skill' => 35,
        'skill_cost_magic_points' => 25,
    ]);

    }
}
