<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('menu');
});

Route::get('/character-select', function () {
    return view('character-select');
})->name('character.select');
