<x-layouts.app>
    <div class="flex flex-col items-center justify-center min-h-screen gap-64">
        <img src="{{ asset('images/logo-battle-odissey.png') }}" alt="Battle Odyssey" class="w-[800px]">

        <a href="{{ route('character.select') }}" class="bg-gradient-to-b from-yellow-300 to-red-900 text-blue-950 px-8 py-3 text-lg font-bold hover:opacity-90 transition">
            Start
        </a>
    </div>
</x-layouts.app>