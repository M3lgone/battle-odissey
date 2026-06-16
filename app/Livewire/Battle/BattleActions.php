<?php

namespace App\Livewire\Battle;

use Livewire\Component;
use Livewire\Attributes\On;

class BattleActions extends Component
{
    public $character;
    public $enemy;
    public $selectedEnemy = null;
    public bool $enemyIsDefending = false;
    public bool $showSkills = false;

    public function attack()
    {
        if (!$this->selectedEnemy) {
            return;
        }

        $damage = $this->character->attack;

        if ($this->enemyIsDefending) {
            $damage = max(1, $this->character->attack - $this->enemy->defense);
        }

        $this->dispatch('characterAttacked', damage: $damage);
        $this->selectedEnemy = null;
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
