<?php
use App\Http\Controllers\MataKuliahController;
use App\Http\Controllers\NilaiController;
use App\Http\Controllers\KrsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::resource('matakuliah', MataKuliahController::class);
Route::resource('nilai', NilaiController::class);
Route::resource('krs', KrsController::class);