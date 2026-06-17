<?php

namespace App\Livewire\Battle;

use Livewire\Component;
use Livewire\Attributes\Reactive;

class BattleLog extends Component
{
    #[Reactive]
    public array $battleLog;

    public function render()
    {
        return view('livewire.battle.battle-log');
    }
}
