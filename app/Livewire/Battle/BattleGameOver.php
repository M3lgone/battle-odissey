<?php

namespace App\Livewire\Battle;

use Livewire\Component;

class BattleGameOver extends Component
{
    public function restartGame()
    {
        session()->forget([
            'character_current_hp', 
            'character_current_mp', 
            'battles_won'
        ]); 

        return redirect('/');
    }
    
    public function render()
    {
        return view('livewire.battle.battle-game-over');
    }
}
