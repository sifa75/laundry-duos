<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\AdministrasiController;
use App\Models\Pelanggan;
use App\Models\Administrasi;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('dashboard');
});

Route::get('/dashboard', function () {

    $totalPelanggan = Pelanggan::count();
    $totalAdministrasi = Administrasi::count();
    $totalKg = Administrasi::sum('jumlah_kg');
    $totalPendapatan = Administrasi::sum('total_harga');

    return view('dashboard', compact(
        'totalPelanggan',
        'totalAdministrasi',
        'totalKg',
        'totalPendapatan'
    ));

})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {

    Route::get('/administrasis/laporan', [AdministrasiController::class, 'laporan'])
    ->name('administrasis.laporan');

    Route::get('/administrasis/pdf', [AdministrasiController::class, 'pdf'])
    ->name('administrasis.pdf');

    Route::get('/administrasis/{id}/struk', [AdministrasiController::class, 'struk'])
    ->name('administrasis.struk');

    Route::resource('pelanggans', PelangganController::class);
    Route::resource('administrasis', AdministrasiController::class);

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
