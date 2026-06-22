<div class="flex-1 min-h-[50vh] lg:min-h-0 bg-cover bg-center bg-no-repeat relative overflow-hidden bg-[length:100%_100%]" 
     style="background-image: url('{{ asset('images/backgrounds/bg-' . $enemy->id . '.png') }}')">
        
    <img src="{{ asset('images/characters/warrior.png') }}" alt="Warrior" 
         class="absolute bottom-8 left-4 w-48 h-48 md:bottom-16 md:left-12 md:w-64 md:h-64 lg:bottom-24 lg:left-24 lg:w-72 lg:h-72 xl:bottom-64 xl:left-60 xl:w-96 xl:h-96 h-auto max-h-[45vh] object-contain transition duration-300 {{ $isPlayerTurn ? 'drop-shadow-[0_0_12px_cyan]' : 'opacity-90' }}">

    <img src="{{ asset('images/enemies/' . strtolower($enemy->enemy_name) . '.png') }}" alt="{{ $enemy->enemy_name }}" 
         wire:click="selectEnemy({{ $enemy->id }})"
         class="absolute top-8 right-4 w-48 h-48 md:top-auto md:bottom-16 md:right-12 md:w-64 md:h-64 lg:bottom-24 lg:right-24 lg:w-72 lg:h-72 xl:bottom-64 xl:right-40 xl:w-96 xl:h-96 h-auto max-h-[45vh] object-contain cursor-pointer transition duration-200 {{ $selectedEnemy == $enemy->id ? 'drop-shadow-[0_0_12px_red]' : 'hover:drop-shadow-[0_0_12px_red]' }}">
</div>
