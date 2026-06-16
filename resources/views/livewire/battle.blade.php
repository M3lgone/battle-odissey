<div class="h-screen flex flex-col">

    <livewire:battle.battle-scene :character="$character" :enemy="$enemy" />

    <div class="bg-blue-950 border-t-2 border-yellow-400 grid grid-cols-4 gap-4 p-4">
        
        <livewire:battle.battle-actions/>

        <livewire:battle.battle-character-stats 
            :characterClass="$character->class"
            :characterCurrentHp="$characterCurrentHp"
            :characterCurrentMp="$characterCurrentMp"/>

        <livewire:battle.battle-log :battleLog="$battleLog"/>

        <livewire:battle.battle-enemy-stats 
            :enemyName="$enemy->enemy_name"
            :enemyCurrentHp="$enemyCurrentHp"
            :enemyCurrentMp="$enemyCurrentMp"/>

    </div>
</div>
