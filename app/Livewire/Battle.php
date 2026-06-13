<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Layout;
use App\Models\Character;
use App\Models\Enemy;
use App\Models\Battle as BattleModel;

#[Layout('components.layouts.app')]

class Battle extends Component
{
    public $character;
    public $enemy;
    public $battle;

    public int $characterCurrentHp;
    public int $characterCurrentMp;
    public int $enemyCurrentHp;
    public int $enemyCurrentMp;
    public $selectedEnemy = null;
    public array $battleLog = [];
    public bool $characterIsDefending = false;

    public function mount($character, $enemy)
    {
        $this->character = Character::find($character);
        $this->enemy = Enemy::find($enemy);

        $this->initializeCombatStats();

        $this->battle = BattleModel::create([
            'level' => '1',
            'character_id' => $this->character->id,
        ]);

        $this->battle->enemies()->attach($this->enemy->id);
    }

    private function initializeCombatStats(): void
    {
        $this->characterCurrentHp = $this->character->max_health_points;
        $this->characterCurrentMp = $this->character->max_magic_points;
        $this->enemyCurrentHp = $this->enemy->max_health_points;
        $this->enemyCurrentMp = $this->enemy->max_magic_points;
    }

    public function selectEnemy($id)
    {
        $this->selectedEnemy = $id;
    }

    public function getEnemyName(): string
    {
        return $this->enemy->enemy_name;
    }

    public function attack()
    {
        if (!$this->selectedEnemy) {
            return;
        }
        $damage = $this->character->attack;
        $this->enemyCurrentHp = max(0, $this->enemyCurrentHp - $damage);
        $this->addLog("You attacked {$this->getEnemyName()} for {$damage} damage.");
        $this->selectedEnemy = null;

        $this->enemyTurn();
    }

    public function defend()
    {
        $this->characterIsDefending = true;
        $this->addLog("You are defending.");
        $this->enemyTurn();

    }

    private function enemyTurn()
    {
        $damage = $this->enemy->attack;

        if ($this->characterIsDefending) {
            $damage = max(1, $this->enemy->attack - $this->character->defense);
            $this->characterIsDefending = false;
        }
        $this->characterCurrentHp = max(0, $this->characterCurrentHp - $damage);
        $this->addLog("{$this->getEnemyName()} attacked you for {$damage} damage.");
    }

    private function addLog(string $message): void
    {
        $this->battleLog[] = $message;
    }

    public function render()
    {
        return view('livewire.battle');
    }
}
