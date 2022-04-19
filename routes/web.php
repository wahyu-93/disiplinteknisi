<?php

use App\Http\Controllers\DirektoratController;
use App\Http\Controllers\MitraController;
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