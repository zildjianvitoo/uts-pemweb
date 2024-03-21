<?php

use App\Models\Note;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome', ["notes" => Note::all(), "kocak" => "Memememk"]);
});
