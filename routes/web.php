<?php
use App\Http\Controllers\MataKuliahController;
use App\Http\Controllers\NilaiController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::resource('matakuliah', MataKuliahController::class);
Route::resource('nilai', NilaiController::class);
