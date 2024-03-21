<?php

use App\Http\Controllers\NoteController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome', ["kocak" => "Memememk"]);
});

Route::resource("/notes", NoteController::class);
