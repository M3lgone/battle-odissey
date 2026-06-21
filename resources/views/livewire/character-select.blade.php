<div class="flex-1 w-full flex flex-col items-center justify-center min-h-screen gap-12 p-4">
    <h2 class="text-yellow-400 text-3xl font-bold uppercase tracking-widest text-center shadow-black drop-shadow-md">
        Choose Your Character
    </h2>

    <div class="flex flex-col lg:flex-row lg:flex-wrap justify-center gap-8">
        @foreach($characters as $character)
        <div 
            wire:click="selectCharacter({{ $character->id }})"
            class="border-4 p-8 flex flex-col items-center gap-4 cursor-pointer transition-all transform hover:scale-105 rounded-xl
                {{ $selectedCharacter == $character->id ? 'border-red-500 bg-red-900/40' : 'border-yellow-400' }}">
            <img src="{{ asset('images/avatar/avatar-warrior.png') }}" alt="Warrior" class="w-32 h-32 object-cover">

            <h3 class="text-yellow-400 text-xl font-bold">{{ ucfirst($character->class) }}</h3>

            <p class="text-yellow-400 text-md">HP: {{ $character->max_health_points }}</p>
            <p class="text-yellow-400 text-md">MP: {{ $character->max_magic_points }}</p>
            <p class="text-yellow-400 text-md">ATK: {{ $character->attack }}</p>
            <p class="text-yellow-400 text-md">DEF: {{ $character->defense }}</p>
        </div>
        @endforeach
    </div>

    <button 
        wire:click="startAdventure"
        class="bg-gradient-to-b from-yellow-300 to-red-800 text-blue-950 rounded-lg px-8 py-3 text-xl font-bold transition-all transform hover:scale-105">
        Start Adventure
    </button>

</div>
