<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\ScreeningController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landing.index');
})->name('index');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/pasien', [PasienController::class, 'index'])->name('pasien.index');
    Route::post('/pasien', [PasienController::class, 'save'])->name('pasien.save');
    Route::get('/addpasien', [PasienController::class, 'add'])->name('pasien.add');
    Route::get('/deletepasien/{id}', [PasienController::class, 'delete'])->name('pasien.delete');
    Route::get('/editpasien/{id}', [PasienController::class, 'edit'])->name('pasien.edit');
    Route::put('/updatepasien/{id}', [PasienController::class, 'update'])->name('pasien.update');

    Route::get('/screening', [ScreeningController::class, 'index'])->name('screening.index');
    Route::post('/screening', [ScreeningController::class, 'save'])->name('screening.save');
    Route::get('/addscreening', [ScreeningController::class, 'add'])->name('screening.add');
    Route::get('/deletescreening/{id}', [ScreeningController::class, 'delete'])->name('screening.delete');
    Route::get('/editscreening/{id}', [ScreeningController::class, 'edit'])->name('screening.edit');
    Route::put('/updatescreening/{id}', [ScreeningController::class, 'update'])->name('screening.update');
    Route::get('/kirimscreening/{id}', [ScreeningController::class, 'kirim'])->name('screening.kirim');

});

require __DIR__.'/auth.php';
