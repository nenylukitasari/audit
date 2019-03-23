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

// Route::get('/makan_lembur_rapat','MakanController@index');

// Route::post('/makan_lembur/update','MakanController@store');

Route::get('/dokumen', 'JenisKegiatanController@index');
Route::post('/dokumen','JenisKegiatanController@store');
Route::post('/dokumen/jenis-kegiatan','JenisKegiatanController@storejenis');
Route::get('/data/kegiatan','JenisKegiatanController@getData');
Route::post('/data/edit-kegiatan','JenisKegiatanController@getData');
Route::post('/data/edit-kegiatan2','JenisKegiatanController@getData2');
Route::post('/dokumen/update','JenisKegiatanController@update');
Route::post('/dokumen/update2','JenisKegiatanController@update2');

Route::get('/1','MakanController@index');
Route::post('/makan_lembur','MakanController@store');
Route::post('/makan_lembur/kategori','MakanController@storeKategori');
Route::post('/makan_lembur/sub1','MakanController@storeSub1');
Route::get('/data/makan1','MakanController@getData1');
Route::get('/data/makan2','MakanController@getData2');
Route::get('/data/makan3','MakanController@getData3');
Route::post('/makan_lembur/update','MakanController@update');
Route::post('/makan_lembur/update2','MakanController@update2');
Route::post('/makan_lembur/update3','MakanController@update3');
Route::post('/data/edit-makan1','MakanController@getData1');
Route::post('/data/edit-makan2','MakanController@getData2');
Route::post('/data/edit-makan3','MakanController@getData3');

Route::get('/2','JalanDinasController@index');
