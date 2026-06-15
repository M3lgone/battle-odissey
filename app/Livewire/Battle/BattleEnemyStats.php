<?php

namespace App\Livewire\Battle;

use Livewire\Component;

class BattleEnemyStats extends Component
{
    public $enemy;
    public int $enemyCurrentHp;
    public int $enemyCurrentMp;

    public function render()
    {
        return view('livewire.battle.battle-enemy-stats');
    }
}
