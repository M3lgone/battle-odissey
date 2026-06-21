<x-layouts.app>
    <div class="flex flex-col items-center justify-center min-h-screen gap-64">
        
        <div class="flex flex-col items-center justify-center border-4 border-yellow-400 rounded-2xl p-10 md:p-16 gap-20 shadow-2xl">

            <img src="{{ asset('images/logo/logo-battle-odissey.png') }}" alt="Battle Odyssey" class="w-[800px]">

            <a href="{{ route('character.select') }}" class="bg-gradient-to-b from-yellow-300 to-red-800 text-blue-950 rounded-lg px-8 py-3 text-xl font-bold transition-all transform hover:scale-105">
                New Game
            </a>
        </div>
    </div>
</x-layouts.app>