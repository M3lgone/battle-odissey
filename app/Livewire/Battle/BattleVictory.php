<?php

namespace App\Livewire\Battle;

use Livewire\Component;

class BattleVictory extends Component
{
    public function finishGame()
    {
        session()->forget(['character_current_hp', 'character_current_mp']);
        
        return $this->redirect('/', navigate: true);
    }
    
    public function render()
    {
        return view('livewire.battle.battle-victory');
    }
}
