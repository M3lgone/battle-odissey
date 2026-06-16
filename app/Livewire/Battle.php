<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\On;
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
    public bool $enemyIsDefending = false;
    public $selectedSkill = null;

    public function mount($character, $enemy)
    {
        $this->character = Character::find($character);
        $this->character->load('skills');

        $this->enemy = Enemy::find($enemy);
        $this->enemy->load('skills');

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

    #[On('enemySelected')]
    public function onEnemySelected($enemyId)
    {
        $this->selectedEnemy = $enemyId;
    }

    public function getEnemyName(): string
    {
        return $this->enemy->enemy_name;
    }

    #[On('characterAttacked')]
    public function onCharacterAttacked()
    {
        $this->characterIsDefending = false;
        $damage = $this->character->attack;

        if ($this->enemyIsDefending) {
            $damage = max(1, $this->character->attack - $this->enemy->defense);
            $this->enemyIsDefending = false;
        }

        $this->enemyCurrentHp = max(0, $this->enemyCurrentHp - $damage);
        $this->addLog("You attacked {$this->getEnemyName()} for {$damage} damage.");

        $this->enemyTurn();
    }

    #[On('characterDefended')]
    public function onCharacterDefend()
    {
        $this->characterIsDefending = true;
        $this->addLog("You are defending.");
        $this->enemyTurn();
    }

    #[On('skillSelected')]
    public function selectSkill($id)
    {
        if (!$this->selectedEnemy) {
            return;
        }

        $this->selectedSkill = $id;
        $this->skill();
    }

    public function skill()
    {
        if (!$this->selectedSkill) {
            return;
        }

        $this->characterIsDefending = false;
        $skill = $this->character->skills->find($this->selectedSkill);

        if ($this->characterCurrentMp < $skill->skill_cost_magic_points) {
            $this->addLog("Not enough MP to use {$skill->skill_name}.");
            return;
        }

        $this->characterCurrentMp -= $skill->skill_cost_magic_points;
        $damage = $skill->damage_skill;

        if ($this->enemyIsDefending) {
            $damage = max(1, $skill->damage_skill - $this->enemy->defense);
            $this->enemyIsDefending = false;
        }

        $this->enemyCurrentHp = max(0, $this->enemyCurrentHp - $damage);
        $this->addLog("You used {$skill->skill_name} for {$damage} damage.");
        $this->selectedSkill = null;

        $this->enemyTurn();
    }

    private function enemyTurn()
    {
        $action = rand(1, 3);

        if ($action === 1) {
            // Attack
            $damage = $this->enemy->attack;

            if ($this->characterIsDefending) {
                $damage = max(1, $this->enemy->attack - $this->character->defense);
            }
            $this->characterCurrentHp = max(0, $this->characterCurrentHp - $damage);
            $this->addLog("{$this->getEnemyName()} attacked you for {$damage} damage.");

        } elseif ($action === 2) {
            // Defense
            $this->enemyIsDefending = true;
            $this->addLog("{$this->getEnemyName()} is defending.");

        } elseif ($action === 3) {
            // Skill
            $skill = $this->enemy->skills->random();

            $this->enemyCurrentMp -= $skill->skill_cost_magic_points;
            $damage = $skill->damage_skill;

            if ($this->characterIsDefending) {
                $damage = max(1, $skill->damage_skill - $this->character->defense);
            }

            $this->characterCurrentHp = max(0, $this->characterCurrentHp - $damage);
            $this->addLog("{$this->getEnemyName()} cast {$skill->skill_name} dealing {$damage} damage!");
        }
    }

    private function addLog(string $message): void
    {
        $this->battleLog[] = $message;

        if (count($this->battleLog) > 4) {
            array_shift($this->battleLog);
        }
    }

    #[On('characterFled')]
    public function onCharacterFlee()
    {
        $this->characterIsDefending = false;

        $escapeSuccess = rand(1, 2) === 1;

        if ($escapeSuccess) {
            return $this->redirect('/', navigate: true);

        } else {
            $this->addLog("You failed to escape! {$this->getEnemyName()} blocks your way.");
            $this->enemyTurn();
        }
    }

    public function render()
    {
        return view('livewire.battle');
    }
}
