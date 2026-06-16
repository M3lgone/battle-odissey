<?php

namespace App\Livewire\Battle;

use Livewire\Component;
use Livewire\Attributes\On;

class BattleActions extends Component
{
    public $selectedEnemy = null;

    public function attack()
    {
        if (!$this->selectedEnemy) {
            return;
        }

        $this->dispatch('characterAttacked');
        $this->selectedEnemy = null;
    }

    public function defend()
    {
        $this->dispatch('characterDefended');
    }


    #[On('enemySelected')]
    public function onEnemySelected($enemyId)
    {
        $this->selectedEnemy = $enemyId;
    }

    public function render()
    {
        return view('livewire.battle.battle-actions');
    }
}
