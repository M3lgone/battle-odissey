<?php

namespace App\Livewire\Battle;

use Livewire\Component;
use Livewire\Attributes\On;

class BattleLog extends Component
{
    public array $battleLog = [];

    #[On('battleLog')]
    public function addLog(string $message): void
    {
        $this->battleLog[] = $message;
    }

    public function render()
    {
        return view('livewire.battle.battle-log');
    }
}
