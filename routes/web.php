<?php

use App\Http\Controllers\MateriController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('landingPage');
});

Route::get('/dashboard', [MenuController::class, 'main'])
    ->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard/materi', [MateriController::class, 'showMateri']);
    Route::get('/dashboard/materi/{id_kategori}', [MateriController::class, 'kategori']);

    Route::get('/dashboard/ubah-premium/{id}', [PembayaranController::class, 'viewBayar']);
    Route::post('/ubah-premium', [PembayaranController::class, 'prosesBayar']);

    Route::get('/dashboard/materi/buka-materi/{id_materi}', [MateriController::class, 'materi']);
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Kostum Login

require __DIR__.'/auth.php';