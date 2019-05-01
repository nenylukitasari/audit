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

// Route::get('/', function () {
//     return view('login2');
// });
Route::get('/', 'AuthController@login2');

//yasin
Route::get('/login', 'AuthController@showLogin')->name('login');
Route::get('/tujuan', 'AuthController@tujuan');
Route::get('/logout2', 'AuthController@logout2')->name('logout2');
Route::get('/hak', function () { return view('hak');});

Route::group(['middleware' => 'SemuaRole'], function () {
	// punya neny
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

	// create sbi
	Route::get('/tambahsbi','VersiController@index');
	Route::post('/versi','VersiController@store');


// punya yasin
	Route::get('/buatkda', 'KdaController@buatkda');
	Route::get('/kda', 'KdaController@index');
	Route::post("tambahkda1","KdaController@tambahkda1");
	Route::post("tambahkda2","KdaController@tambahkda2");
	Route::post("tambahkda3","KdaController@tambahkda3");
	Route::post('/kda/data', 'KdaController@getkda');
	Route::post('/kda/kelengkapan', 'KdaController@getkelengkapan');
	Route::get('/kda/kelengkapan/update', 'KdaController@updatekelengkapan');
	Route::post('/kda/keterangan', 'KdaController@getketerangan');
	Route::post('/kda/update', 'KdaController@updatekda');
	Route::post('/temuan/temuanlama', 'TemuanController@gettemuanlama');
	Route::get('/temuan/update', 'TemuanController@updatetemuan');

	Route::get('pdf/{id}',  'PdfController@downloadpdf');
	Route::get('print',  'PdfController@print');

	Route::get('/temuankda', 'TemuanController@index');

	Route::get('/kdasendiri', 'KdaController@indexmember');
	Route::get('/temuankdasendiri', 'TemuanController@indexmember');
	Route::post('/kda/temuan', 'TemuanController@gettemuan');


	Route::get('/templatekda', 'KdaController@template');
	Route::get('/summernote/template','SummernoteController@pilihtemplate')->name('summernotetemplate');
	Route::put('/summernote/update/{summernote}','SummernoteController@update')->name('summernoteUpdate');

	Route::get('/kdatriwulan', 'KdaController@triwulan');
	Route::get('download/triwulan/{tahun}/{sesi?}', [
    'as' => 'downloadtriwulan',
    'uses' => 'PdfController@downloadkdatriwulanfix',
	]);

});
