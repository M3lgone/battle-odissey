<?php

namespace App\Livewire\Battle;

use Livewire\Component;

class BattleCharacterStats extends Component
{
    public $character;
    public int $characterCurrentHp;
    public int $characterCurrentMp;


    public function render()
    {
        return view('livewire.battle.battle-character-stats');
    }
}
