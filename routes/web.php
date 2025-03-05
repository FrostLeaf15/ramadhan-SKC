<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\InputController;

Route::get('/about', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('menu');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/home/puasa', function () {
    return view('home/puasa');
});

Route::get('/home/mengaji', function () {
    return view('home/mengaji');
});

Route::get('/home/teraweh', function () {
    return view('home/teraweh');
});

Route::get('/home/ceramah', function () {
    return view('home/ceramah');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Halaman Input (Hanya untuk Siswa & Admin)
Route::middleware(['auth', 'role:siswa', 'role:admin'])->get('/input', [InputController::class, 'index'])->name('input');

// Halaman Dashboard (Hanya untuk Guru & Admin)
Route::middleware(['auth', 'role:guru', 'role:admin'])->get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

require __DIR__.'/auth.php';
