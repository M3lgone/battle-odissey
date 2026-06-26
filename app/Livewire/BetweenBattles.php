<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Layout;
use App\Models\Character;
use App\Models\Enemy;

#[Layout('components.layouts.app')]
class BetweenBattles extends Component
{
    public $character;
    public $nextEnemy;
    public $currentHp;
    public $currentMp;

    public function mount($character, $nextEnemy)
    {
        $this->character = Character::find($character);
        $this->nextEnemy = Enemy::find($nextEnemy);

        if (!$this->nextEnemy) {
            return $this->redirect('/', navigate: true);
        }
        $this->currentHp = session('character_current_hp', $this->character->max_health_points);
        $this->currentMp = session('character_current_mp', $this->character->max_magic_points);
    }

    public function continueWithoutRest()
    {
        return $this->redirectRoute('battle', [
            'character' => $this->character->id,
            'enemy' => $this->nextEnemy->id
        ], navigate: true);
    }

    public function restAndNext()
    {
        session()->put('character_current_hp', $this->character->max_health_points);
        session()->put('character_current_mp', $this->character->max_magic_points);

        return $this->redirectRoute('battle', [
            'character' => $this->character->id,
            'enemy' => $this->nextEnemy->id
        ], navigate: true);
    }

    public function render()
    {
        return view('livewire.between-battles');
    }
}
