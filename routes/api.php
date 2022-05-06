<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\PenjualanController;
use App\Http\Controllers\PelangganController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::controller(PelangganController::class)->group(function ($id) {
    Route::post('/v1/pelanggan/create', 'store');
    Route::get('/v1/pelanggan/get', 'index');
    Route::get('/v1/pelanggan/get/{KODE_PELANGGAN}', 'show');
    Route::patch('/v1/pelanggan/update/{KODE_PELANGGAN}', 'update');
    Route::post('/v1/pelanggan/delete/{KODE_PELANGGAN}', 'destroy');
});
 
Route::controller(BarangController::class)->group(function () {
    Route::post('/v1/barang/create', 'store');
    Route::get('/v1/barang/get', 'index');
    Route::get('/v1/barang/get/{KODE}', 'show');
    Route::patch('/v1/barang/update/{KODE}', 'update');
    Route::post('/v1/barang/delete/{KODE}', 'destroy');
});

Route::controller(PenjualanController::class)->group(function () {
    Route::post('/v1/penjualan/create', 'store');
    Route::get('/v1/penjualan/get', 'index');
    Route::get('/v1/penjualan/get/{ID_NOTA}', 'show');
    Route::patch('/v1/penjualan/update/{ID_NOTA}', 'update');
    Route::post('/v1/penjualan/delete/{ID_NOTA}', 'destroy');
});
