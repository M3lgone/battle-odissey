<div class="border-2 border-yellow-400 rounded-lg p-4 h-full min-h-[200px] flex flex-col">
    <h3 class="text-yellow-400 font-bold mb-3">
        {{ $showSkills ? 'Skills' : 'Actions' }}
    </h3>

    @if($showSkills)
        <div class="flex-1 min-h-0 flex flex-col gap-2 overflow-y-auto overflow-x-hidden p-1 -mx-1">
            @foreach($skills as $skill)
                <button wire:click="selectSkill({{ $skill['id'] }})" class="bg-gradient-to-b from-yellow-300 to-red-800 text-blue-950 rounded-lg py-2 font-bold flex justify-between px-3 text-sm transition-all transform hover:scale-103">
                    <span>{{ $skill['skill_name'] }}</span>
                    <span class="text-blue-500">{{ $skill['skill_cost_magic_points'] }} MP</span>
                </button>
            @endforeach
        </div>

        <div class="mt-auto pt-2 pb-1 px-1">
            <button wire:click="showSkillsMenu" class="w-full bg-gradient-to-b from-yellow-300 to-red-800 text-blue-950 rounded-lg py-2 font-bold transition-all transform hover:scale-103">
                Back
            </button>
        </div>

    @else
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
    @endif
</div>
