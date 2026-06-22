<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Layout;
use App\Models\Character;

#[Layout('components.layouts.app')]
class CharacterSelect extends Component
{
    public $characters;
    public $selectedCharacter = null;

    public function mount()
    {
        $this->characters = Character::all();
    }

    public function selectCharacter($id)
    {
        $this->selectedCharacter = $id;
    }

    public function startAdventure()
    {
        if (!$this->selectedCharacter) {
            return; 
        }

        $character = Character::find($this->selectedCharacter);
        
        session()->put('characterCurrentHp', $character->max_health_points);
        session()->put('characterCurrentMp', $character->max_magic_points);
        session()->put('battles_won', 0);

        return redirect()->route('battle', [
                'character' => $this->selectedCharacter,
                'enemy' => 1
            ]);
    }

    public function render()
    {
        return view('livewire.character-select');
    }
}
