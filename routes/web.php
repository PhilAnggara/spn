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

Route::middleware(['auth', 'checkLevel:admin,pejabat'])->group(function () {

    Route::get('/', 'MainController@index')->name('home');
    Route::resource('data-siswa', 'SiswaController');
    Route::resource('daftar-nilai', 'NilaiController');
    Route::get('tentang', 'MainController@about')->name('about');
    Route::get('galeri', 'MainController@galeri')->name('galeri');
    Route::get('struktur-organisasi', 'MainController@structure')->name('structure');
    
});

require __DIR__.'/auth.php';
