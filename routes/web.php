<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\MasterController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/master', [MasterController::class, 'master']);
Route::get('/dashboard', [AdminController::class, 'index']);
Route::get('/dataPenjualan', [AdminController::class, 'dataPenjualan']);
Route::get('/dataPembelian', [AdminController::class, 'dataPembelian']);
Route::get('/dataBarang', [AdminController::class, 'dataBarang']);
Route::get('/dataSuplier', [AdminController::class, 'dataSuplier']);
Route::get('/dataUser', [AdminController::class, 'dataUser']);

//Login
Route::get('/login', function () {
    return view('login');
});
