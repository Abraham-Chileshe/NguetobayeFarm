<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\LocaleController;

// Route for the about page


Route::get('/', function () {
    return view('index');
});

Route::get('locale/{lang}', [LocaleController::class, 'setLocale']);
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery');
Route::get('/blog', [BlogController::class, 'index'])->name('blog');