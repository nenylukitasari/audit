<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MakanLembur;
use DB;

class MakanController extends Controller
{
     public function index()
    {
        $makan_lembur=DB::table('makan_lembur')
        ->join('kategori_makan', 'kategori_makan.id_kategori_makan','=','makan_lembur.id_kategori_makan')
        ->select('kategori_makan.kategori_makan','makan_lembur.uraian_kegiatan','makan_lembur.satuan','makan_lembur.bruto')
        /*->select('kategori_kegiatan','uraian_kegiatan','satuan','bruto')*/
        /*->where('id','>',0)*/
        ->groupBy('kategori_makan.kategori_makan')
        /*->orderBy('id_makan_lembur', 'ASC')*/
        /*->having('kategori_kegiatan','>',0)*/
        ->get()
        ->toArray();

        /*return $makan_lembur;*/
		
		return view('makan_lembur',compact('makan_lembur'));
    }
}