<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Makan;
use DB;

class MakanController extends Controller
{
     public function index()
    {
        $makan_lembur=DB::table('makan_lembur_rapat')
        /*->select('kategori_kegiatan','uraian_kegiatan','satuan','bruto')*/
        /*->where('id','>',0)*/
        ->groupBy('kategori_kegiatan')
        /*->orderBy('kategori_kegiatan', 'desc')*/
        /*->having('kategori_kegiatan','>',0)*/
        ->get();

        /*return $makan_lembur;*/
		
		return view('makan_lembur_rapat',compact('makan_lembur'));
    }
}