<?php

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




Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\SiswaController::class, 'index'])->name('home');
Route::get('/tes', [App\Http\Controllers\SiswaController::class, 'test']);
Route::post('/tes/balik', [App\Http\Controllers\SiswaController::class, 'test']);
Route::middleware('role:user')->post('home/create', [App\Http\Controllers\SiswaController::class, 'store'])->name('siswa.store');
Route::middleware('role:user')->post('/home/edit', [App\Http\Controllers\SiswaController::class, 'update'])->name('siswa.update');

Route::middleware('role:user')->post('ayah/create', [App\Http\Controllers\AyahController::class, 'store'])->name('ayah.store');
Route::middleware('role:user')->post('ayah/edit', [App\Http\Controllers\AyahController::class, 'update'])->name('ayah.update');

Route::middleware('role:user')->post('ibu/create', [App\Http\Controllers\IbuController::class, 'store'])->name('ibu.store');
Route::middleware('role:user')->post('ibu/edit', [App\Http\Controllers\IbuController::class, 'update'])->name('ibu.update');

Route::middleware('role:user')->post('foto/create', [App\Http\Controllers\FotoController::class, 'store'])->name('foto.store');
Route::middleware('role:user')->post('akta/create', [App\Http\Controllers\AktaController::class, 'store'])->name('foto.store');
Route::middleware('role:user')->post('kk/create', [App\Http\Controllers\KkController::class, 'store'])->name('foto.store');


