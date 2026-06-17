<?php

namespace App\Livewire\Battle;

use Livewire\Component;

class BattleScene extends Component
{
    public $character;
    public $enemy;
    public $selectedEnemy = null;

    public function selectEnemy($id)
    {
        $this->selectedEnemy = $id;
        $this->dispatch('enemySelected', enemyId: $id);
    }

    public function render()
    {
        return view('livewire.battle.battle-scene');
    }
}
