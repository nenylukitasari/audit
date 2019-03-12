<?php

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
    return view('welcome');
});

Route::get('/makan_lembur_rapat','MakanController@index');
Route::post('/makan_lembur_rapat','MakanController@store');
// Route::post('/makan_lembur/update','MakanController@store');

Route::get('/dokumen', 'KegiatanController@index');
Route::post('tambah_kegiatan','KegiatanController@tambah_kegiatan');

Route::get('/perjalanan_dinas','MakanController@perjalanan_dinas');
