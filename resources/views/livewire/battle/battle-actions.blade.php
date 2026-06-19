<div class="border-2 border-yellow-400 rounded-lg p-4 h-50 flex flex-col">
    <h3 class="text-yellow-400 font-bold mb-3">Actions</h3>

    <div class="grid grid-cols-2 gap-2">
        <button wire:click="attack" class="bg-gradient-to-b from-yellow-300 to-red-800 text-blue-950 rounded-lg py-2 font-bold transition-all transform hover:scale-103">
            Attack
        </button>

        <button wire:click="defend" class="bg-gradient-to-b from-yellow-300 to-red-800 text-blue-950 rounded-lg py-2 font-bold transition-all transform hover:scale-103">
            Defend
        </button>

        <button wire:click="showSkillsMenu" class="bg-gradient-to-b from-yellow-300 to-red-800 text-blue-950 rounded-lg py-2 font-bold transition-all transform hover:scale-103">
            Skill
        </button>

        <button wire:click="flee" class="bg-gradient-to-b from-yellow-300 to-red-800 text-blue-950 rounded-lg py-2 font-bold transition-all transform hover:scale-103">
            Flee
        </button>
    </div>

    @if($showSkills)
        <div class="flex flex-col gap-2 mt-2">
            @foreach($skills as $skill)
                <button wire:click="selectSkill({{ $skill['id'] }})" class="bg-gradient-to-b from-yellow-300 to-red-800 text-blue-950 rounded-lg py-2 hover:bg-yellow-400 hover:text-blue-950 font-bold flex justify-between px-3 text-sm transition-all transform hover:scale-103">
                    <span>{{ $skill['skill_name'] }}</span>
                    <span class="text-blue-500">{{ $skill['skill_cost_magic_points'] }} MP</span>
                </button>
            @endforeach
        </div>
    @endif
</div>
