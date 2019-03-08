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
Route::post("tambah","MakanController@tambah_makan");
Route::get('/dokumen', function () {
    return view('dokumen');
});
Route::get('/tambahsbi', function () {
    return view('tambahsbi');
});

