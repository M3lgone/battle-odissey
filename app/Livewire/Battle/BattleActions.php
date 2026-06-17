<?php

namespace App\Livewire\Battle;

use Livewire\Component;
use Livewire\Attributes\On;

class BattleActions extends Component
{
    public $selectedEnemy = null;
    public array $skills = [];
    public bool $showSkills = false;

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

    public function showSkillsMenu()
    {
        $this->showSkills = !$this->showSkills;
    }

    public function selectSkill($id)
    {
        if (!$this->selectedEnemy) {
            return;
        }

        $this->dispatch('skillSelected', $id);
        $this->selectedEnemy = null;
        $this->showSkills = false;
    }


    #[On('enemySelected')]
    public function onEnemySelected($enemyId)
    {
        $this->selectedEnemy = $enemyId;
    }

    public function flee()
    {
        $this->dispatch('characterFled');
    }

    public function render()
    {
        return view('livewire.battle.battle-actions');
    }
}
