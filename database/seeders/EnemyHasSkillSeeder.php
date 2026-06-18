<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EnemyHasSkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {   // hack skill
        DB::table('enemy_has_skill')->insert([
            'enemy_id' => 1,
            'skill_id' => 2,
        ]);
        // smash skill
        DB::table('enemy_has_skill')->insert([
            'enemy_id' => 2,
            'skill_id' => 3,
        ]);
        // rampage skill
        DB::table('enemy_has_skill')->insert([
            'enemy_id' => 3,
            'skill_id' => 4,
        ]);
    }
}
