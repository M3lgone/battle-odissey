<?php

namespace App\Livewire\Battle;

use Livewire\Component;
use Livewire\Attributes\Reactive;

class BattleCharacterStats extends Component
{
    public string $characterClass;

    #[Reactive]
    public int $characterCurrentHp;

    #[Reactive]
    public int $characterCurrentMp;

    public int $maxHp;
    public int $maxMp;

    public function render()
    {
        return view('livewire.battle.battle-character-stats');
    }
}
