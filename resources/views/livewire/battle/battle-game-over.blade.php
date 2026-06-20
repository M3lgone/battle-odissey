<div class="absolute inset-0 z-50 flex flex-col items-center justify-center bg-blue-950/95 backdrop-blur-sm border-4 border-red-800">
    <h1 class="text-7xl font-black text-red-500 tracking-[0.2em] mb-4">
        GAME OVER
    </h1>
    <p class="text-yellow-400 text-xl mb-12 italic opacity-80">
        Your journey ends here...
    </p>
    <button type="button" wire:click="restartGame" class="bg-gradient-to-b from-yellow-300 to-red-800 text-blue-950 rounded-lg px-12 py-4 text-2xl font-bold transition-all transform hover:scale-105">
        Return to menu
    </button>
</div>
