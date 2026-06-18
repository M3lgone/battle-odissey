<div class="h-screen flex flex-col">

    <livewire:battle.battle-scene :character="$character" :enemy="$enemy" />

    <div class="bg-blue-950 border-t-2 border-yellow-400 grid grid-cols-4 gap-4 p-4">
        
        <livewire:battle.battle-actions :skills="$character->skills->toArray()"/>

        <livewire:battle.battle-character-stats 
            :characterClass="$character->class"
            :characterCurrentHp="$characterCurrentHp"
            :characterCurrentMp="$characterCurrentMp"
            :maxHp="$character->max_health_points"
            :maxMp="$character->max_magic_points"/>

        <livewire:battle.battle-log :battleLog="$battleLog"/>

        @if($battleResult === \App\Enums\BattleResult::Win->value)
            <div class="flex items-center justify-center">
                <button type="button" wire:click="goToBetweenBattles" class="w-full h-full bg-gradient-to-b from-yellow-300 to-red-800 text-blue-950 rounded-lg px-8 py-3 text-xl font-bold transition-all transform hover:scale-102">
                    Continue
                </button>
            </div>
        @else
        <livewire:battle.battle-enemy-stats 
            :enemyName="$enemy->enemy_name"
            :enemyCurrentHp="$enemyCurrentHp"
            :enemyCurrentMp="$enemyCurrentMp"
            :maxHp="$enemy->max_health_points"
            :maxMp="$enemy->max_magic_points"/>
        @endif

    </div>
</div>
