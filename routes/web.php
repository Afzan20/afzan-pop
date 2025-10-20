<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\PelangganController;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/pcr', function () {
    return 'Selamat Datang di Website Kampus PCR!';
})->name('mahasiswa.show');

// Route ::get('/mahasiswa/{param1}', [MahasiswaController::class, 'show'])->name('mahasiswa.show');

Route::get('/mahasiswa', function () {
    return 'Halo Mahasiswa';
});

Route::get('/nama/{afzan}', function ($param1) {
    return 'Nama saya: Afzan '.$param1;
});

Route::get('/nim/{param1?}', function ($param1 = '') {
    return 'NIM saya: 2457301004'.$param1;
});

Route::get('/about', function () {
    return view('halaman-about');
});

Route::get('/matakuliah', function (){
    return 'Menampilkan Data Matakuliah';
});

Route::get('/home', [HomeController::class, 'index']);
Route::get('/pegawai', [PegawaiController::class, 'index']);
Route::post('question/store', [QuestionController::class, 'store'])
		->name('question.store');

Route::get('/dashboard',[DashboardController::class, 'index'])->name('dashboard.index');
Route::resource('pelanggan', PelangganController::class);

