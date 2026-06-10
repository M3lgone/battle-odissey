<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('menu');
});

Route::get('/character-select', function () {
    $characters = \App\Models\Character::all();
    return view('character-select', compact('characters'));
})->name('character.select');
