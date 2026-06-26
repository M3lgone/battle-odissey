<div class="flex-1 w-full flex flex-col items-center justify-center bg-blue-950 text-white p-8">
    
    <h1 class="text-5xl font-extrabold text-yellow-400 mb-8 uppercase tracking-widest drop-shadow-lg">
        Victory!
    </h1>

    <div class="bg-blue-940 border border-yellow-400 rounded-lg p-8 max-w-2xl w-full mb-10 shadow-2xl text-center">
        <p class="text-white text-xl md:text-2xl mb-6">
            You defeated your enemy. The next challenge.. <span class="text-red-700 font-bold uppercase">{{ $nextEnemy->enemy_name }}</span>.
        </p>

        <div class="flex flex-col sm:flex-row justify-around items-center border-t border-stone-700 pt-6">
            <div class="text-lg">
                <span class="text-yellow-400 block mb-1">Current HP</span>
                <span class="text-red-400 font-bold text-2xl">{{ $currentHp }} / {{ $character->max_health_points }}</span>
            </div>
            <div class="text-lg">
                <span class="text-yellow-400 block mb-1">Current MP</span>
                <span class="text-blue-500 font-bold text-2xl">{{ $currentMp }} / {{ $character->max_magic_points }}</span>
            </div>
        </div>
    </div>

    <div class="flex flex-col md:flex-row gap-6 w-full max-w-2xl">
        
        <button wire:click="continueWithoutRest" class="flex-1 p-6 bg-gradient-to-b from-yellow-300 to-red-800 text-blue-950 rounded-lg transition-all transform hover:scale-105 group text-left">
            <h3 class="text-2xl font-bold text-blue-800 uppercase mb-2">Next</h3>
            <p class="text-white">Continue without rest. Keep your current health and MP.</p>
        </button>

        <button wire:click="restAndNext" class="flex-1 p-6 bg-gradient-to-b from-yellow-300 to-red-800 text-blue-950 rounded-lg transition-all transform hover:scale-105 group text-left">
            <h3 class="text-2xl font-bold text-blue-800 uppercase mb-2">Rest & Next</h3>
            <p class="text-white">Recover your health and MP, then face the next battle.</p>
        </button>

    </div>
</div>