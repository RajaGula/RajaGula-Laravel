<?php

use App\Http\Controllers\LoginController;

use App\Http\Controllers\AdminHomeController;
use App\Http\Controllers\AdminPelangganController;
use App\Http\Controllers\AdminKategoriController;
use App\Http\Controllers\AdminProdukController;
use App\Http\Controllers\AdminTransaksiController;
use App\Http\Controllers\AdminOmzetController;

use App\Http\Controllers\PelangganActivityController;
use App\Http\Controllers\PelangganCartController;

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

Route::get('login', 'App\Http\Controllers\AuthController@index')->name('login');
Route::get('register', 'App\Http\Controllers\AuthController@register')->name('register');
Route::post('proses_register', 'App\Http\Controllers\AuthController@proses_register')->name('proses_register');
Route::post('proses_login', 'App\Http\Controllers\AuthController@proses_login')->name('proses_login');
Route::get('logout', 'App\Http\Controllers\AuthController@logout')->name('logout');



Route::prefix('admin')->group(function () {
    Route::prefix('dashboard')->name('dashboard.')->group(function () {
        Route::get('/', [AdminHomeController::class, 'index'])->name('index')->middleware('auth');
    });

    Route::prefix('adminPelanggan')->name('pelanggan.')->group(function () {
        Route::get('/', [AdminPelangganController::class, 'index'])->name('index')->middleware('auth');
        Route::get('/create', [AdminPelangganController::class, 'create_view'])->name('create')->middleware('auth');
        Route::post('/create', [AdminPelangganController::class, 'create_process'])->name('create.process')->middleware('auth');
        Route::get('/delete/{id}', [AdminPelangganController::class, 'delete'])->name('delete')->middleware('auth');
    });

    Route::prefix('adminKategori')->name('kategori.')->group(function () {
        Route::get('/', [AdminKategoriController::class, 'index'])->name('index')->middleware('auth');
        Route::get('/create', [AdminKategoriController::class, 'create_view'])->name('create')->middleware('auth');
        Route::post('/create', [AdminKategoriController::class, 'create_process'])->name('create.process')->middleware('auth');
        Route::get('/update/{id}', [AdminKategoriController::class, 'update_view'])->name('update')->middleware('auth');
        Route::post('/update/{id}', [AdminKategoriController::class, 'update_process'])->name('update.process')->middleware('auth');
        Route::get('/delete/{id}', [AdminKategoriController::class, 'delete'])->name('delete')->middleware('auth');
    });

    Route::prefix('adminProduk')->name('produk.')->group(function () {
        Route::get('/', [AdminProdukController::class, 'index'])->name('index')->middleware('auth');
        Route::get('/create', [AdminProdukController::class, 'create_view'])->name('create')->middleware('auth');
        Route::post('/create', [AdminProdukController::class, 'create_process'])->name('create.process')->middleware('auth');
        Route::get('/update/{id}', [AdminProdukController::class, 'update_view'])->name('update')->middleware('auth');
        Route::post('/update/{id}', [AdminProdukController::class, 'update_process'])->name('update.process')->middleware('auth');
        Route::get('/delete/{id}', [AdminProdukController::class, 'delete'])->name('delete')->middleware('auth');
    });

    Route::prefix('adminTransaksi')->name('transaksi.')->group(function () {
        Route::get('/', [AdminTransaksiController::class, 'index'])->name('index')->middleware('auth');
        Route::get('/create', [AdminTransaksiController::class, 'create_view'])->name('create')->middleware('auth');
        Route::post('/create', [AdminTransaksiController::class, 'create_process'])->name('create.process')->middleware('auth');
        Route::get('/delete/{id}', [AdminTransaksiController::class, 'delete'])->name('delete')->middleware('auth');
    });

    Route::prefix('adminOmzet')->name('omzet.')->group(function () {
        Route::get('/', [AdminOmzetController::class, 'index'])->name('index')->middleware('auth');
        Route::get('/create', [AdminOmzetController::class, 'create_view'])->name('create')->middleware('auth');
        Route::post('/create', [AdminOmzetController::class, 'create_process'])->name('create.process')->middleware('auth');
        Route::get('/delete/{id}', [AdminOmzetController::class, 'delete'])->name('delete')->middleware('auth');
    });
}); 

Route::prefix('/')->group(function () {
    Route::prefix('/activity')->name('activity.')->group(function () {
        Route::get('/', [PelangganActivityController::class, 'index'])->name('index');
    });

    Route::prefix('/cart')->name('cart.')->group(function () {
        Route::get('/', [PelangganCartController::class, 'index'])->name('index');
    });
}); 