<div class="h-screen flex flex-col">

    <livewire:battle.battle-scene :character="$character" :enemy="$enemy" />

    <div class="bg-blue-950 border-t-2 border-yellow-400 grid grid-cols-4 gap-4 p-4">
        
        <div class="border-2 border-yellow-400 p-4 flex flex-col gap-3">
            <h3 class="text-yellow-400 font-bold">Actions</h3>

            <button
                wire:click="attack"
                class="text-yellow-400 border border-yellow-400 py-2 hover:bg-yellow-400 hover:text-blue-950 transition">
                Attack
            </button>

            <button
                wire:click="defend"
                class="text-yellow-400 border border-yellow-400 py-2 hover:bg-yellow-400 hover:text-blue-950 transition">
                Defend
            </button>

            <button
            wire:click="toggleSkills"
            class="text-yellow-400 border border-yellow-400 py-2 hover:bg-yellow-400 hover:text-blue-950 transition">
            Skill
        </button>

        @if($showSkills)
            @foreach($character->skills as $skill)
                <button
                    wire:click="selectSkill({{ $skill->id }})"
                    class="text-yellow-400 border border-yellow-400 py-2 hover:bg-yellow-400 hover:text-blue-950 transition
                        {{ $selectedSkill == $skill->id ? 'bg-yellow-400 text-blue-950' : '' }}">
                    {{ $skill->skill_name }}
                </button>
            @endforeach
        @endif

        </div>

        <livewire:battle.battle-character-stats 
            :character="$character"
            :characterCurrentHp="$characterCurrentHp"
            :characterCurrentMp="$characterCurrentMp"/>

        <div class="border-2 border-yellow-400 p-4 h-32 overflow-y-auto" style="-ms-overflow-style: none; scrollbar-width: none;">
            <h3 class="text-yellow-400 font-bold mb-2">Battle Log</h3>
            @foreach($battleLog as $action)
                <p class="text-yellow-400 text-sm">{{ $action }}</p>
            @endforeach
        </div>

        <livewire:battle.battle-enemy-stats 
            :enemy="$enemy"
            :enemyCurrentHp="$enemyCurrentHp"
            :enemyCurrentMp="$enemyCurrentMp"/>

    </div>
</div>
