<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/willa', [PageController::class, 'villa'])->name('villa');
Route::get('/galeria', [PageController::class, 'gallery'])->name('gallery');
Route::get('/kontakt', [PageController::class, 'contact'])->name('contact');
Route::get('/polityka-prywatnosci', [PageController::class, 'privacyPolicy'])->name('privacyPolicy');
Route::get('/regulamin', [PageController::class, 'regulations'])->name('regulations');
