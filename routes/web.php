<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\ScreeningController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\AboutController;

use Illuminate\Support\Facades\Route;

Route::get('/', [LandingController::class, 'index'])->name('index');

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

    Route::get('/jadwal', [JadwalController::class, 'index'])->name('jadwal.index');
    Route::post('/jadwal', [JadwalController::class, 'save'])->name('jadwal.save');
    Route::get('/addjadwal', [JadwalController::class, 'add'])->name('jadwal.add');
    Route::get('/deletejadwal/{id}', [JadwalController::class, 'delete'])->name('jadwal.delete');
    Route::get('/editjadwal/{id}', [JadwalController::class, 'edit'])->name('jadwal.edit');
    Route::put('/updatejadwal/{id}', [JadwalController::class, 'update'])->name('jadwal.update');

    Route::get('/landing', [LandingController::class, 'index'])->name('landing.index');

    Route::get('/about', [AboutController::class, 'index'])->name('about.index');
    Route::post('/about', [AboutController::class, 'save'])->name('about.save');
    Route::get('/addabout', [AboutController::class, 'add'])->name('about.add');
    Route::get('/deleteabout/{id}', [AboutController::class, 'delete'])->name('about.delete');
    Route::get('/editabout/{id}', [AboutController::class, 'edit'])->name('about.edit');
    Route::put('/updateabout/{id}', [AboutController::class, 'update'])->name('about.update');


});

require __DIR__.'/auth.php';
