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
	Route::get('/dokumen', 'DataController@index')->name('dokumen');
	Route::post('/dokumen/{kode_tabel}','DataController@store');
	Route::post('/data/kegiatan','DataController@getData');
	Route::post('/getdata','DataController@getData');
	Route::get('/data/{kode_tabel}/{kode_bagian}','DataController@index');
	Route::post('/dokumen/update/{kode_tabel}','DataController@update');
	Route::post('/data/update/{kode_tabel}','DataController@update');

	Route::post('/data/add/{kode_tabel}','DataController@store');
	Route::get('getUraian/{id}','DataController@getUraian');
	Route::post('/data/update/{kode_tabel}','DataController@update');

	Route::get('/tambahsbi', function () { return view('tambahsbi'); });
	Route::post('/versi','VersiController@store');
	Route::get('/versisbi','VersiController@index');
	Route::post('/pilihversi','VersiController@pilihversi');
	Route::post('/data/version','VersiController@getData');
	Route::post('/sbi/update','VersiController@update');

	// Route::delete('/dokumen/delete/{id}', 'JenisKegiatanController@destroy');
	// Route::delete('/dokumen/delete2/{id}', 'JenisKegiatanController@destroy2');

	// belum fix
	// Route::get('/dokumen/restore/{id}','JenisKegiatanController@restore');
	// Route::get('/dokumen/restore2/{id}','JenisKegiatanController@restore2');

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
	Route::post('/keterangan/update', 'KdaController@updateketerangan');
	Route::post('/kda/update', 'KdaController@updatekda');
	Route::post('/temuan/temuanlama', 'TemuanController@gettemuanlama');
	Route::get('/temuan/update', 'TemuanController@updatetemuan');

	Route::get('pdf/{id}',  'PdfController@downloadpdf');
	Route::get('print',  'PdfController@print');

	Route::get('/temuankda', 'TemuanController@index');

	Route::get('/kdasendiri', 'KdaController@indexmember');
	Route::get('/temuankdasendiri', 'TemuanController@indexmember');
	Route::post('/kda/temuan', 'TemuanController@gettemuan');


	Route::get('/templatekda', 'KdaController@template')->name('templatekda');
	Route::get('/summernote/template','SummernoteController@pilihtemplate')->name('summernotetemplate');
	Route::put('/summernote/update/{summernote}','SummernoteController@update')->name('summernoteUpdate');

	Route::get('/kdatriwulan', 'KdaController@triwulan');
	Route::get('download/triwulan/{tahun}/{sesi?}', [
    'as' => 'downloadtriwulan',
    'uses' => 'PdfController@downloadkdatriwulanfix',
	]);

});
