<div class="flex flex-col items-center justify-center min-h-screen gap-8">
    <h2 class="text-yellow-400 text-3xl font-bold">Choose Your Character</h2>

    @foreach($characters as $character)
    <div 
        wire:click="selectCharacter({{ $character->id }})"
        class="border-2 p-8 flex flex-col items-center gap-4 cursor-pointer transition
               {{ $selectedCharacter == $character->id ? 'border-white bg-red-400/20' : 'border-yellow-400' }}">
        <img src="{{ asset('images/avatar-warrior.png') }}" alt="Warrior" class="w-32 h-32 object-cover">
        <h3 class="text-yellow-400 text-xl font-bold">{{ ucfirst($character->class) }}</h3>
        <p class="text-yellow-400">HP: {{ $character->max_health_points }}</p>
        <p class="text-yellow-400">MP: {{ $character->max_magic_points }}</p>
        <p class="text-yellow-400">ATK: {{ $character->attack }}</p>
        <p class="text-yellow-400">DEF: {{ $character->defense }}</p>
    </div>
    @endforeach

    <button 
        wire:click="startAdventure"
        class="text-yellow-400 border-2 border-yellow-400 px-8 py-3 text-lg font-bold hover:bg-yellow-400 hover:text-blue-950 transition">
        Start Adventure
    </button>
</div>
