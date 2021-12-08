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

Route::middleware(['auth', 'checkLevel:admin,pejabat,instruktur'])->group(function () {

    Route::get('/', 'MainController@index')->name('home');
    Route::resource('data-siswa', 'SiswaController');
    // Route::get('tentang', 'MainController@about')->name('about');
    // Route::get('galeri', 'MainController@galeri')->name('galeri');
    // Route::get('struktur-organisasi', 'MainController@structure')->name('structure');

    Route::middleware(['checkLevel:admin,pejabat'])->group(function () {

        Route::resource('daftar-nilai', 'NilaiController');
        Route::resource('mata-pelajaran', 'MataPelajaranController');
        Route::resource('tahun-akademik', 'TahunAkademikController');
        Route::resource('data-pengguna', 'DataPenggunaController');
        
    });
    
    Route::middleware(['checkLevel:instruktur'])->group(function () {

        Route::resource('nilai-siswa', 'NilaiSiswaController');
        
    });
    
});

require __DIR__.'/auth.php';
