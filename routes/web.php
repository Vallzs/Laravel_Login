<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LatihanController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\TransaksiController;

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

// Route group admin
Route::group(['prefix' => '/admin'], function (){
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard.admin');

    //Route::group parent kategori
        Route::group(['prefix' => '/kategori'], function (){
            Route::get('/', [KategoriController::class, 'index'])->name('kategori.index');
            Route::get('/create', [KategoriController::class, 'create'])->name('create.kategori');

        });

        //Route::group parent transaksi
        Route::group(['prefix' => '/transaksi'], function (){
            Route::get('/', [TransaksiController::class, 'index'])->name('transaksi.index');
            Route::get('/create', [TransaksiController::class, 'create'])->name('create.transaksi');

        });

    Route::get('/transaksi', [TransaksiController::class, 'index'])->name('admin.transaksi');
    Route::get('/laporan', [LaporanController::class, 'index'])->name('admin.laporan');
});

//  Route UTS vs Referens Bu Eka
// Route::get('/mahasiswa', function(){
//     return view ('mahasiswa/index');
// });

// Route::group(['prefix' => '/mahasiswa', 'as'=> 'mahasiswa.'], function(){
//     Route::get('/pendaftaran', function(){
//         return 'Halaman Pendaftaran';
//     })->name('pendaftaran');
//     Route::get('/ujian', function(){
//         return 'Halaman Ujian';
//     })->name('ujian');

//     Route::get('/nilai', function(){
//         return 'Halaman Nilai';
//     })->name('nilai');

// });



























// Route::prefix('mahasiswa')->group(function () {

//     Route::get('pendaftaran', function () {
//         $title = 'Pendaftaran';
//         $text = 'Halaman Pendaftaran Mahasiswa';

//         return view('mahasiswa.index', compact('title', 'text'));
//     });

//     Route::get('ujian', function () {
//         $title = 'ujian';
//         $text = 'Halaman Ujian Mahasiswa';

//         return view('mahasiswa.index', compact('title', 'text'));
//     });

//     Route::get('nilai', function () {
//         $title = 'Nilai';
//         $text = 'Halaman Nilai Mahasiswa';

//         return view('mahasiswa.index', compact('title', 'text'));
//     });

// });


// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/home', function () {
    return view('home');
});


Route::get('/latihan', [LatihanController::class, 'home']);
Route::get('/beranda', [LatihanController::class, 'beranda']);
Route::get('/', [HomepageController::class, 'index']);
Route::get('/about', [HomepageController::class, 'about']);
Route::get('/kontak', [HomepageController::class, 'kontak']);
Route::get('/kategori', [HomepageController::class, 'kategori']);







