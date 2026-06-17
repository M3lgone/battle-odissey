<?php

namespace App\Livewire\Battle;

use Livewire\Component;
use Livewire\Attributes\Reactive;

class BattleEnemyStats extends Component
{
    public string $enemyName;

    #[Reactive]
    public int $enemyCurrentHp;

    #[Reactive]
    public int $enemyCurrentMp;

    public int $maxHp;
    public int $maxMp;

    public function render()
    {
        return view('livewire.battle.battle-enemy-stats');
    }
}
