<div class="border-2 border-yellow-400 p-4 h-32 overflow-y-auto" style="-ms-overflow-style: none; scrollbar-width: none;">
    <h3 class="text-yellow-400 font-bold mb-2">Battle Log</h3>
    @foreach($battleLog as $action)
    <p class="text-yellow-400 text-sm">{{ $action }}</p>
    @endforeach
</div>