<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MakanLembur;
use App\KategoriMakan;
use DB;

class MakanController extends Controller
{
    /*public function index()
    {
        $makan_lembur=DB::table('makan_lembur')
        /*->join('kategori_makan', function ($join){
            $join->on('kategori_makan.id_kategori_makan', '=', 'makan_lembur.id_kategori_makan')
                 ->where('kategori_makan.id_kategori_makan', '=', 1);
        })->get();

        ->join('kategori_makan', 'kategori_makan.id_kategori_makan','=','makan_lembur.id_kategori_makan')
        ->select('kategori_makan.kategori_makan','makan_lembur.uraian_kegiatan','makan_lembur.satuan','makan_lembur.bruto')
        ->get();

        return view('makan_lembur',compact('kategori_makan','makan_lembur'));
    }

    public function index() {
    $kategori_makan = KategoriMakan::with('makan_lembur')->get();    
        return View::make('makan_lembur', array(
            'kategori_makan' => $kategori_makan
            ));
    }*/

    public function index() {
        $makan_1 = MakanLembur::all() 
        ->where('kategori_makan.kategori_makan_id', '=', 1);
        $makan_2 = MakanLembur::all() 
        ->where('kategori_makan.kategori_makan_id', '=', 2);
        $makan_3 = MakanLembur::all() 
        ->where('kategori_makan.kategori_makan_id', '=', 3);
        /*$kategori_makan=DB::table('kategori_makan')->get();*/

    return view('makan_lembur', compact('makan_1','makan_2','makan_3'));
    }
}