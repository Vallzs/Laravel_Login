<?php

use App\Http\Controllers\LatihanController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KategoriController;
use Illuminate\Support\Facades\Auth;
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

Route::get('', function () {
  return view('homepage.index');
  });

  Route::get( '/latihan', [LatihanController::class, 'index']);

  Route::get('/beranda', [LatihanController::class, 'beranda']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/homepage', [App\Http\Controllers\HomepageController::class, 'index']);

Route::get('/about', [HomepageController::class, 'about']);
Route::get('/kategori', [HomepageController::class, 'kategori']);
Route::get('/admin', [DashboardController::class, 'dashboard']);

// Route kategori Group
Route::prefix('/mahasiswa')->group(function(){

    Route::get('/pendaftaran', function() {
            return 'Halaman Pendaftaran';
    }) ->name('mahasiswa.pendaftaran');

    Route::get('/ujian', function() {
        return 'Halaman Ujian';
    }) ->name('mahasiswa.ujian');

    Route::get('/nilai', function() {
    return 'Halaman Nilai';
    }) ->name('mahasiswa.nilai');

});
