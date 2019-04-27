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

Route::get('/dokumen', 'JenisKegiatanController@index');
Route::post('/dokumen','JenisKegiatanController@store');
Route::delete('/dokumen/delete/{id}', 'JenisKegiatanController@destroy');
Route::delete('/dokumen/delete2/{id}', 'JenisKegiatanController@destroy2');
Route::post('/search_month','JenisKegiatanController@search_month');

// belum fix
Route::get('/dokumen/restore/{id}','JenisKegiatanController@restore');
Route::get('/dokumen/restore2/{id}','JenisKegiatanController@restore2');

Route::post('/dokumen/jenis-kegiatan','JenisKegiatanController@storejenis');
Route::get('/data/kegiatan','JenisKegiatanController@getData');
Route::get('/data/kegiatan2','JenisKegiatanController@getData2');
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
Route::get('getUraian/{id}','MakanController@getUraian');


Route::get('/2','JalanDinasController@index');
Route::get('/data/jalan_dinas','JalanDinasController@getData');
Route::post('/data/edit-jalan_dinas','JalanDinasController@getData');
Route::post('/jalan_dinas/update','JalanDinasController@update');
Route::post('/jalan_dinas/kategori_kegiatan','JalanDinasController@store');
Route::post('/search_month/jalan_dinas','JalanDinasController@search_month');

Route::get('/2/1','JalanDinasController@index_1');

Route::get('/2/2','JalanDinasController@index_2');
Route::post('/search_month/jalan_dinas_2','JalanDinasController@search_month2');
Route::post('/jalan_dinas/uraian','JalanDinasController@store2');
Route::get('/data/uraian','JalanDinasController@getData2');
Route::post('/jalan_dinas/update/uraian','JalanDinasController@update2');
Route::post('/data/edit-uraian','JalanDinasController@getData2');

Route::get('/2old','JalanDinasController@index2');

