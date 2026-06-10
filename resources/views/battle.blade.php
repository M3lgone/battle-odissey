<x-layouts.app>
    <div class="min-h-screen bg-cover bg-center bg-no-repeat flex flex-col items-center justify-center gap-8" 
         style="background-image: url('{{ asset('images/background-wood.png') }}')">

         <img src="{{ asset('images/warrior.png') }}" alt="Warrior" 
             class="absolute bottom-64 left-60 w-96 h-96 object-contain">

        <img src="{{ asset('images/goblin.png') }}" alt="Goblin" 
             class="absolute bottom-64 right-40 w-96 h-96 object-contain">

    </div>
</x-layouts.app>