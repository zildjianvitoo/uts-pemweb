<?php

use App\Http\Controllers\NoteController;
use Illuminate\Support\Facades\Route;

// Route::redirect('/', '/notes', 301);

Route::get("/", function () {
    return view("home");
});

Route::resource("/notes", NoteController::class);
