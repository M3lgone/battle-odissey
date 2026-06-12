<div class="h-screen flex flex-col">

    <div class="flex-1 bg-cover bg-center bg-no-repeat relative" 
        style="background-image: url({{ asset('images/background-wood.png') }})">
        
        <img src="{{ asset('images/warrior.png') }}" alt="Warrior" 
            class="absolute bottom-64 left-60 w-96 h-96 object-contain">

        <img src="{{ asset('images/goblin.png') }}" alt="Goblin" 
            class="absolute bottom-64 right-40 w-96 h-96 object-contain">

    </div>

    <div class="bg-blue-950 border-t-2 border-yellow-400 grid grid-cols-4 gap-4 p-4">
        
        <div class="border-2 border-yellow-400 p-4 flex flex-col gap-3">
            <h3 class="text-yellow-400 font-bold">Actions</h3>
            <button
                wire:click="attack"
                class="text-yellow-400 border border-yellow-400 py-2 hover:bg-yellow-400 hover:text-blue-950 transition">
                Attack
            </button>
        </div>

        <div class="border-2 border-yellow-400 p-4">
            <h3 class="text-yellow-400 font-bold mb-2">{{ ucfirst($character->class) }}</h3>
            <p class="text-yellow-400">HP: {{ $character->max_health_points }}</p>
            <p class="text-yellow-400">MP: {{ $character->max_magic_points }}</p>
        </div>

        <div class="border-2 border-yellow-400 p-4">
            <h3 class="text-yellow-400 font-bold mb-2">Log</h3>
        </div>

        <div class="border-2 border-yellow-400 p-4">
            <h3 class="text-yellow-400 font-bold mb-2">{{ $enemy->enemy_name }}</h3>
            <p class="text-yellow-400">HP: {{ $enemyCurrentHp }}</p>
            <p class="text-yellow-400">MP: {{ $enemy->max_magic_points }}</p>
        </div>

    </div>
</div>
