<x-layouts.app>
    <div class="flex flex-col items-center justify-center min-h-screen gap-16">
        
        <div class="flex flex-col items-center justify-center bg-blue-950 border-4 border-yellow-400 rounded-2xl p-12 md:p-16 gap-12 shadow-2xl">
            
            <div class="text-center flex flex-col gap-4">
                <h1 class="text-yellow-400 text-8xl font-bold">404</h1>
                <h2 class="text-red-800 text-3xl font-bold">Error Not Found</h2>
            </div>

            <a href="{{ url('/') }}" class="bg-gradient-to-b from-yellow-300 to-red-800 text-blue-950 rounded-lg px-8 py-3 text-xl font-bold transition-all transform hover:scale-105">
                Return to Menu
            </a>
            
        </div>
    </div>
</x-layouts.app>