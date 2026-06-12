<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Layout;
use App\Models\Character;
use App\Models\Enemy;
use App\Models\Battle as BattleModel;

#[Layout('components.layouts.app')]

class Battle extends Component
{
    public $character;
    public $enemy;
    public $battle;

    public int $characterCurrentHp;
    public int $characterCurrentMp;
    public int $enemyCurrentHp;
    public int $enemyCurrentMp;
    public $selectedEnemy = null;

    public function mount($character)
    {
        $this->character = Character::find($character);
        $this->enemy = Enemy::first();

        $this->characterCurrentHp = $this->character->max_health_points;
        $this->characterCurrentMp = $this->character->max_magic_points;
        $this->enemyCurrentHp = $this->enemy->max_health_points;
        $this->enemyCurrentMp = $this->enemy->max_magic_points;

        $this->battle = BattleModel::create([
            'level' => '1',
            'character_id' => $this->character->id,
        ]);

        $this->battle->enemies()->attach($this->enemy->id);
    }

    public function attack()
    {
        $damage = $this->character->attack;
        $this->enemyCurrentHp = max(0, $this->enemyCurrentHp - $damage);
    }

    public function render()
    {
        return view('livewire.battle');
    }
}
