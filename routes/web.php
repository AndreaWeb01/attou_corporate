<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('index');
});

// Route::get('/', [ContactController::class, 'index'])->name('index.contact');
Route::post('/', [ContactController::class, 'store'])->name('index.store');


