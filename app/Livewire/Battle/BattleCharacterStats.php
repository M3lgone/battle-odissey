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

    public function render()
    {
        return view('livewire.battle.battle-character-stats');
    }
}
