<div class="border-2 border-yellow-400 p-4 flex flex-col gap-3">
    <h3 class="text-yellow-400 font-bold">Actions</h3>

    <button
        wire:click="attack"
        class="text-yellow-400 border border-yellow-400 py-2 hover:bg-yellow-400 hover:text-blue-950 transition">
        Attack
    </button>
{{--
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
--}}
</div>
