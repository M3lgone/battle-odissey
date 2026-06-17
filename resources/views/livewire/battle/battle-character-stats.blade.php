<div class="border-2 border-yellow-400 p-4">
    <h3 class="text-yellow-400 font-bold mb-2">{{ ucfirst($characterClass) }}</h3>

    <div class="mb-3">
        <div class="flex justify-between text-yellow-400 text-sm font-bold mb-1">
            <span>HP</span>
            <span>{{ $characterCurrentHp }} / {{ $maxHp }}</span>
        </div>
        <div class="w-full bg-slate-700 rounded-full h-2.5">
            <div class="bg-red-500 h-2.5 rounded-full transition-all duration-300 ease-out" 
                 style="width: {{ max(0, ($characterCurrentHp / $maxHp) * 100) }}%">
            </div>
        </div>
    </div>

    <div>
        <div class="flex justify-between text-yellow-400 text-sm font-bold mb-1">
            <span>MP</span>
            <span>{{ $characterCurrentMp }} / {{ $maxMp }}</span>
        </div>
        <div class="w-full bg-slate-700 rounded-full h-2.5">
            <div class="bg-blue-500 h-2.5 rounded-full transition-all duration-300 ease-out" 
                 style="width: {{ max(0, ($characterCurrentMp / $maxMp) * 100) }}%">
            </div>
        </div>
    </div>
</div>