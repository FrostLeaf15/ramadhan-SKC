<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\InputController;
use App\Http\Controllers\PuasaController;
use App\Http\Controllers\NgajiController;
use App\Http\Controllers\TerawehController;
use App\Http\Controllers\CeramahController;


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

// untuk kegiatan ramadhan start
Route::resource('puasa', PuasaController::class);
Route::resource('ngaji', NgajiController::class);
Route::resource('teraweh', TerawehController::class);
Route::resource('ceramah', CeramahController::class);
// untuk kegiatan ramadhan end

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Aktifkan jika sudah selesai

    // Role Siswa
    // Route::middleware('role:siswa')->group(function () {
    //     Route::get('/home', [InputController::class, 'index'])->name('input.index');
    //     Route::get('/home/puasa', [InputController::class, 'index'])->name('input.index');
    //     Route::get('/home/ngaji', [InputController::class, 'index'])->name('input.index');
    //     Route::get('/home/teraweh', [InputController::class, 'index'])->name('input.index');
    //     Route::get('/home/ceramah', [InputController::class, 'index'])->name('input.index');
    // });

    // // Role Guru
    // Route::middleware('role:guru')->group(function () {
    //     Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
    // });

    // // Role Admin
    // Route::middleware('role:admin')->group(function () {
    //     Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
    //     Route::get('/home', [InputController::class, 'index'])->name('input.index');
    //     Route::get('/home/puasa', [InputController::class, 'index'])->name('input.index');
    //     Route::get('/home/ngaji', [InputController::class, 'index'])->name('input.index');
    //     Route::get('/home/teraweh', [InputController::class, 'index'])->name('input.index');
    //     Route::get('/home/ceramah', [InputController::class, 'index'])->name('input.index');
    // });
});


require __DIR__ . '/auth.php';
