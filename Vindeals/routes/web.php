<?php

use App\Http\Controllers\AdvertisementController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::post('/language/change', [LanguageController::class, 'changeLanguageForCurrentUser'])->name('language.change');
});

Route::middleware(['auth', 'rolecheck:isAdverteerder'])->group(function () {
    Route::get('/advertisement/test', [AdvertisementController::class, 'test']);
});

Route::middleware(['auth', 'rolecheck:heeftZakelijkAccount'])->group(function () {
    
});

require __DIR__.'/auth.php';
