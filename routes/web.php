<?php

use App\Http\Controllers\AdminHomeController;
use App\Http\Controllers\AdminPelangganController;
use App\Http\Controllers\AdminKategoriController;
use App\Http\Controllers\AdminProdukController;
use App\Http\Controllers\AdminTransaksiController;
use App\Http\Controllers\AdminOmzetController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::prefix('admin')->group(function () {
    Route::prefix('dashboard')->name('dashboard.')->group(function () {
        Route::get('/', [AdminHomeController::class, 'index'])->name('index');
    });

    Route::prefix('adminPelanggan')->name('pelanggan.')->group(function () {
        Route::get('/', [AdminPelangganController::class, 'index'])->name('index');
        Route::get('/create', [AdminPelangganController::class, 'create_view'])->name('create');
        Route::post('/create', [AdminPelangganController::class, 'create_process'])->name('create.process');
        Route::get('/delete/{id}', [AdminPelangganController::class, 'delete'])->name('delete');
    });

    Route::prefix('adminKategori')->name('kategori.')->group(function () {
        Route::get('/', [AdminKategoriController::class, 'index'])->name('index');
        Route::get('/create', [AdminKategoriController::class, 'create_view'])->name('create');
        Route::post('/create', [AdminKategoriController::class, 'create_process'])->name('create.process');
        Route::get('/update/{id}', [AdminKategoriController::class, 'update_view'])->name('update');
        Route::post('/update/{id}', [AdminKategoriController::class, 'update_process'])->name('update.process');
        Route::get('/delete/{id}', [AdminKategoriController::class, 'delete'])->name('delete');
    });

    Route::prefix('adminProduk')->name('produk.')->group(function () {
        Route::get('/', [AdminProdukController::class, 'index'])->name('index');
        Route::get('/create', [AdminProdukController::class, 'create_view'])->name('create');
        Route::post('/create', [AdminProdukController::class, 'create_process'])->name('create.process');
        Route::get('/delete/{id}', [AdminProdukController::class, 'delete'])->name('delete');
    });

    Route::prefix('adminTransaksi')->name('transaksi.')->group(function () {
        Route::get('/', [AdminTransaksiController::class, 'index'])->name('index');
        Route::get('/create', [AdminTransaksiController::class, 'create_view'])->name('create');
        Route::post('/create', [AdminTransaksiController::class, 'create_process'])->name('create.process');
        Route::get('/delete/{id}', [AdminTransaksiController::class, 'delete'])->name('delete');
    });

    Route::prefix('adminOmzet')->name('omzet.')->group(function () {
        Route::get('/', [AdminOmzetController::class, 'index'])->name('index');
        Route::get('/create', [AdminOmzetController::class, 'create_view'])->name('create');
        Route::post('/create', [AdminOmzetController::class, 'create_process'])->name('create.process');
        Route::get('/delete/{id}', [AdminOmzetController::class, 'delete'])->name('delete');
    });
}); 