<?php

use App\Http\Controllers\DirektoratController;
use App\Http\Controllers\MitraController;
use App\Http\Controllers\NikNakerController;
use App\Http\Controllers\PendidikanController;
use App\Http\Controllers\PosisiMitraController;
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

Route::get('/', function () {
    return view('layout.index');
});

Route::get('/dashboard',function(){
    return view('dashboard.dashboard');
});

Route::resource('pendidikan', PendidikanController::class);
Route::resource('direktorat', DirektoratController::class);
Route::resource('mitra', MitraController::class);
Route::resource('posisi', PosisiMitraController::class);

Route::get('nik-naker', [NikNakerController::class, 'index'])->name('nik.naker.index');
Route::get('nik-naker/create', [NikNakerController::class, 'create'])->name('nik.naker.create');
Route::post('nik-naker/store', [NikNakerController::class, 'store'])->name('nik.naker.store');
Route::get('nik-naker/{id}/edit', [NikNakerController::class, 'edit'])->name('nik.naker.edit');
Route::put('nik-naker/{id}/edit', [NikNakerController::class, 'update'])->name('nik.naker.update');
Route::delete('nik-naker/{id}', [NikNakerController::class, 'delete'])->name('nik.naker.delete');