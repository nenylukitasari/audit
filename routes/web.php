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

/*Route::get('/makan_lembur_rapat', function () {
    return view('makan_lembur_rapat');
});*/
/*Route::get('/','JenisKegiatanController@index');*/
Route::get('/makan_lembur_rapat','MakanController@index');
Route::get('/dokumen', function () {
    return view('dokumen');
});
Route::get('/add-sbi', function () {
    return view('tambahsbi');
});
/*Route::get('/lampiranI','LampiranController@lampiranI');
Route::get('/lampiranII','LampiranController@lampiranII');
*/
