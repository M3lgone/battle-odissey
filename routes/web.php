<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\CharacterSelect;

Route::get('/', function () {
    return view('menu');
});

Route::get('/character-select', CharacterSelect::class)->name('character.select');

Route::get('/battle/{character}', function ($character) {
    return view('battle', ['characterId' => $character]);
})->name('battle');
