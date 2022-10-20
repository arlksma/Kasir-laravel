<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\JenisController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\Transaksi_detailController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin',[AdminController::class,'index']);
Route::get('/admin/create',[AdminController::class,'create']);
Route::post('/admin/store',[AdminController::class,'store']);
Route::get('/admin/{id}/edit',[AdminController::class,'edit']);
Route::put('/admin/{id}',[AdminController::class,'update']);
Route::delete('/admin/{id}',[AdminController::class,'destroy']);

Route::get('/barang',[BarangController::class,'index']);
Route::get('/barang/create',[BarangController::class,'create']);
Route::post('/barang/store',[BarangController::class,'store']);
Route::get('/barang/{id}/edit',[BarangController::class,'edit']);
Route::put('/barang/{id}',[BarangController::class,'update']);
Route::delete('/barang/{id}',[BarangController::class,'destroy']);

Route::get('/jenis',[JenisController::class,'index']);
Route::get('/jenis/create',[JenisController::class,'create']);
Route::post('/jenis/store',[JenisController::class,'store']);
Route::get('/jenis/{id}/edit',[JenisController::class,'edit']);
Route::put('/jenis/{id}',[JenisController::class,'update']);
Route::delete('/jenis/{id}',[JenisController::class,'destroy']);

Route::get('/supplier',[SupplierController::class,'index']);
Route::get('/supplier/create',[SupplierController::class,'create']);
Route::post('/supplier/store',[SupplierController::class,'store']);
Route::get('/supplier/{id}/edit',[SupplierController::class,'edit']);
Route::put('/supplier/{id}',[SupplierController::class,'update']);
Route::delete('/supplier/{id}',[SupplierController::class,'destroy']);

Route::get('/transaksi',[TransaksiController::class,'index']);
Route::get('/transaksi/create',[TransaksiController::class,'create']); 
Route::post('/transaksi/store',[TransaksiController::class,'store']);
Route::get('/transaksi/{id}/edit',[TransaksiController::class,'edit']);
Route::put('/transaksi/{id}',[TransaksiController::class,'update']);
Route::delete('/transaksi/{id}',[TransaksiController::class,'destroy']);

Route::get('/detail/{id}',[Transaksi_detailController::class,'index']);

