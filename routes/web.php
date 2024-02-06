<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BodegaController;
use App\Http\Controllers\VinoController;

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

Route::get('/', [BodegaController::class, 'index'])->name('bodegas.index');


Route::get('/bodegas', [BodegaController::class, 'index'])->name('bodegas.index');
Route::get('/bodegas/create', [BodegaController::class, 'create'])->name('bodegas.create');
Route::post('/bodegas', [BodegaController::class, 'store'])->name('bodegas.store');
Route::delete('/bodegas/{bodega}', [BodegaController::class, 'destroy'])->name('bodegas.destroy');
Route::get('/bodegas/{bodega}', [BodegaController::class, 'show'])->name('bodegas.show');
Route::get('/bodegas/{bodega}/add-vinos', [BodegaController::class, 'addVinos'])->name('bodegas.vinos.add');
Route::post('/bodegas/{bodega}/add-vinos', [BodegaController::class, 'storeVinos'])->name('bodegas.vinos.store');

Route::get('/vinos/create', [VinoController::class, 'create'])->name('vinos.create');
Route::post('/vinos', [VinoController::class, 'store'])->name('vinos.store');
Route::get('/vinos/{vino}', [VinoController::class, 'show'])->name('vinos.show');
Route::delete('/vinos/{vino}', [VinoController::class, 'destroy'])->name('vinos.destroy');