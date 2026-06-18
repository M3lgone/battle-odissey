<div class="flex-1 bg-cover bg-center bg-no-repeat relative" 
     style="background-image: url('{{ asset('images/backgrounds/bg-' . $enemy->id . '.png') }}')">
        
    <img src="{{ asset('images/characters/warrior.png') }}" alt="Warrior" 
         class="absolute bottom-64 left-60 w-96 h-96 object-contain">

    <img src="{{ asset('images/enemies/' . strtolower($enemy->enemy_name) . '.png') }}" alt="{{ $enemy->enemy_name }}" 
         wire:click="selectEnemy({{ $enemy->id }})"
         class="absolute bottom-64 right-40 w-96 h-96 object-contain cursor-pointer transition duration-200 {{ $selectedEnemy == $enemy->id ? 'drop-shadow-[0_0_12px_red]' : 'hover:drop-shadow-[0_0_12px_red]' }}">
</div>
