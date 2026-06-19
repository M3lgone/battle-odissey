<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\CharacterSelect;
use App\Livewire\Battle;
use App\Livewire\BetweenBattles;

Route::get('/', function () {
    return view('menu');
});

Route::get('/character-select', CharacterSelect::class)->name('character.select');

Route::get('/battle/{character}/{enemy}', Battle::class)->name('battle');

Route::get('/between-battles/{character}/{nextEnemy}', BetweenBattles::class)->name('between-battles');
