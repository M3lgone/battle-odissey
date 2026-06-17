<div class="border-2 border-yellow-400 p-4 h-50 flex flex-col">
    <h3 class="text-yellow-400 font-bold mb-3">Actions</h3>

    <div class="grid grid-cols-2 gap-2">
        <button wire:click="attack" class="text-yellow-400 border border-yellow-400 py-2 hover:bg-yellow-400 hover:text-blue-950 transition">
            Attack
        </button>

        <button wire:click="defend" class="text-yellow-400 border border-yellow-400 py-2 hover:bg-yellow-400 hover:text-blue-950 transition">
            Defend
        </button>

        <button wire:click="showSkillsMenu" class="text-yellow-400 border border-yellow-400 py-2 hover:bg-yellow-400 hover:text-blue-950 transition">
            Skill
        </button>

        <button wire:click="flee" class="text-yellow-400 border border-yellow-400 py-2 hover:bg-yellow-400 hover:text-blue-950 transition">
            Flee
        </button>
    </div>

    @if($showSkills)
        <div class="flex flex-col gap-2 mt-2">
            @foreach($skills as $skill)
                <button wire:click="selectSkill({{ $skill['id'] }})" class="text-yellow-400 border border-yellow-400 py-2 hover:bg-yellow-400 hover:text-blue-950 transition flex justify-between px-3 text-sm">
                    <span>{{ $skill['skill_name'] }}</span>
                    <span class="text-cyan-400">{{ $skill['skill_cost_magic_points'] }} MP</span>
                </button>
            @endforeach
        </div>
    @endif
</div>
