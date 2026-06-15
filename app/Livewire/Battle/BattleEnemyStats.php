<?php

namespace App\Livewire\Battle;

use Livewire\Component;
use Livewire\Attributes\Reactive;

class BattleEnemyStats extends Component
{
    public $enemy;

    #[Reactive]
    public int $enemyCurrentHp;

    #[Reactive]
    public int $enemyCurrentMp;

    public function render()
    {
        return view('livewire.battle.battle-enemy-stats');
    }
}
