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

Route::get('/', 'AuthController@login2');
Auth::routes();

//yasin
Route::get('/login', 'AuthController@login2')->name('login');
Route::get('/tujuan', 'AuthController@tujuan');
Route::get('/logout2', 'AuthController@logout2')->name('logout2');
Route::get('/hak', function () { return view('hak');});

Route::group(['middleware' => 'Admin'], function () {
	//punya yasin
	Route::get('/templatekda', 'KdaController@template')->name('templatekda');
	Route::get('/summernote/template','SummernoteController@pilihtemplate')->name('summernotetemplate');
	Route::put('/summernote/update/{summernote}','SummernoteController@update')->name('summernoteUpdate');
	Route::post('/berkas/add', 'KdaController@BerkasAdd');
	Route::post('/berkas/delete/{id}', 'KdaController@BerkasDelete');

	Route::get('/users', 'UserController@index');
	Route::post('/users', 'UserController@store');
	Route::post('/data/user','UserController@getData');
	Route::post('/user/update','UserController@update');
	Route::post('/user/delete/{id}','UserController@destroy');
	Route::post('/user/restore/{id}','UserController@restore');
	Route::post('/versi','VersiController@store');
	Route::get('/versisbi','VersiController@index');
	Route::get('/loadversi','VersiController@index2');
	Route::post('/pilihversi','VersiController@pilihversi');
	Route::post('/data/version','VersiController@getData');
	Route::post('/sbi/update','VersiController@update');
});
Route::group(['middleware' => 'Pimpinan'], function () {

});
Route::group(['middleware' => 'BukanAuditor'], function () {
	Route::get('/kda/semua', 'KdaController@index');
	Route::get('/kda/laporan', 'KdaController@triwulan');
	Route::get('/temuankda/semua', 'TemuanController@index');
	Route::get('download/triwulan/{tahun}/{sesi?}', [
    'as' => 'downloadtriwulan',
    'uses' => 'PdfController@downloadkdatriwulanfix',
	]);

});

Route::group(['middleware' => 'SemuaRole'], function () {
 	// punya neny
	Route::get('/dokumen', 'DataController@index')->name('dokumen');
	Route::get('/datapegawai', function () {return view('cari_pegawai');});
	Route::get('/peraturanlain','PeraturanController@index');
	Route::post('/upload', 'PeraturanController@upload');
	Route::get('download/{filename}', 'PeraturanController@download');
	Route::post('/peraturan/update/{kode}','PeraturanController@update');
	Route::post('/getdataPeraturan','PeraturanController@getData');
	Route::post('/peraturan/store','PeraturanController@store');
	Route::post('/peraturan/delete/{id}','PeraturanController@destroy');
	Route::post('/peraturan/restore/{id}','PeraturanController@restore');
	Route::get('/home', function () {return view('home');});
	Route::get('/datasbi', function () {return view('cari_sbi');});
	Route::post('/data/search','DataController@search');
	Route::get('/berkas', 'KdaController@berkas');
	Route::post('/dokumen/{kode_tabel}','DataController@store');
	Route::post('/data/kegiatan','DataController@getData');
	Route::post('/getdata','DataController@getData');
	Route::get('/data/{kode_tabel}/{kode_bagian}','DataController@index');
	Route::post('/dokumen/update/{kode_tabel}','DataController@update');
	Route::post('/data/update/{kode_tabel}','DataController@update');
	Route::post('/data/add/{kode_tabel}','DataController@store');
	Route::get('getDataId/{id}','DataController@getDataId');
	Route::post('/data/update/{kode_tabel}','DataController@update');
	// Route::post('/data/delete/{id}/{kode_tabel}','DataController@destroy');
	
	// punya yasin
	Route::get('/buatkda', 'KdaController@buatkda');
	Route::post("tambahkda1","KdaController@tambahkda1");
	Route::post("tambahkda2","KdaController@tambahkda2");
	Route::post("tambahkda3","KdaController@tambahkda3");
	Route::post("tambahkda4","KdaController@tambahkda4");
	Route::post('/kda/data', 'KdaController@getkda');
	Route::post('/kda/kelengkapan', 'KdaController@getkelengkapan');
	Route::post('/kda/kelengkapan/update', 'KdaController@updatekelengkapan');
	Route::post('/kda/keterangan', 'KdaController@getketerangan');
	Route::post('/keterangan/update', 'KdaController@updateketerangan');
	Route::post('/kda/update', 'KdaController@updatekda');
	Route::post('/temuan/temuanlama', 'TemuanController@gettemuanlama');
	Route::post('/temuan/update', 'TemuanController@updatetemuan');
	Route::post('/temuan/konfirmasi', 'TemuanController@konfirmasitemuan');

	Route::get('pdf/{id}',  'PdfController@downloadpdf');
	Route::get('print',  'PdfController@print');

	Route::get('/kda/sendiri', 'KdaController@indexmember');
	Route::get('/temuankda/sendiri', 'TemuanController@indexmember');
	Route::post('/kda/temuan', 'TemuanController@gettemuan');

	Route::get('/penjelasan', 'PenjelasanController@index');
});
