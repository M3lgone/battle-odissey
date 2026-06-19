<?php

namespace App\Livewire\Battle;

use Livewire\Component;
use Livewire\Attributes\Reactive;

class BattleScene extends Component
{
    public $character;
    public $enemy;

    #[Reactive]
    public $selectedEnemy;

    public function selectEnemy($id)
    {
        $this->dispatch('enemySelected', enemyId: $id);
    }

    public function render()
    {
        return view('livewire.battle.battle-scene');
    }
}
