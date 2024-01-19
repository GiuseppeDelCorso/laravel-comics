<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    $dati = config("data");
    return view('home', $dati);
})->name("fumetti");
