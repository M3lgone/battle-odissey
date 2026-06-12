<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\CharacterSelect;
use App\Livewire\Battle;

Route::get('/', function () {
    return view('menu');
});

Route::get('/character-select', CharacterSelect::class)->name('character.select');

Route::get('/battle/{character}/{enemy}', Battle::class)->name('battle');
