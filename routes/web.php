<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\MatakuliahController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\ProdiController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/mahasiswa', [MahasiswaController::class, 'index']);
Route::get('/mahasiswa/createmhs', [MahasiswaController::class, 'create']);
Route::post('/mahasiswa', [MahasiswaController::class, 'store']);
Route::get('/mahasiswa/{id}/editmhs', [MahasiswaController::class, 'edit']);
Route::put('/mahasiswa/{id}', [MahasiswaController::class, 'update']);
Route::delete('/mahasiswa/{id}', [MahasiswaController::class, 'destroy']);


Route::get('/dosen', [DosenController::class, 'index']);
Route::get('/dosen/createdsn', [DosenController::class, 'create']);
Route::post('/dosen', [DosenController::class, 'store']);
Route::get('/dosen/{id}/editdsn', [DosenController::class, 'edit']);
Route::put('/dosen/{id}', [DosenController::class, 'update']);
Route::delete('dosen/{id}', [DosenController::class, 'destroy']);


Route::get('/matakuliah', [MatakuliahController::class, 'index']);
Route::get('/matakuliah/createmkl', [MatakuliahController::class, 'create']);
Route::post('/matakuliah', [MatakuliahController::class, 'store']);
Route::get('/matakuliah/{id}/editmkl', [MatakuliahController::class, 'edit']);
Route::put('/matakuliah/{id}', [MatakuliahController::class, 'update']);
Route::delete('matakuliah/{id}', [MatakuliahController::class, 'destroy']);


Route::get('/prodi', [ProdiController::class, 'index']);
Route::get('/prodi/createprd', [ProdiController::class, 'create']);
Route::post('/prodi', [ProdiController::class, 'store']);
Route::get('/prodi/{id}/editprd', [ProdiController::class, 'edit']);
Route::put('/prodi/{id}', [ProdiController::class, 'update']);
Route::delete('prodi/{id}', [ProdiController::class, 'destroy']);