<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\MakanLembur;
use App\KategoriMakan;
use App\BiayaKonsumsi;
use DB;
use Validator;

class MakanController extends Controller
{
    public function index() {
        $kategori_makans = KategoriMakan::with('makan_lembur_biaya_konsumsi')
        ->where('kategori_makan.id','<=',3)->get();
        // dd($kategori_makans);
        $kategoris=DB::table('kategori_makan')->get();

        return view('makan_lembur', compact('kategori_makans','kategoris'));
    }

    public function perjalanan_dinas() {
        $kategori_makans = KategoriMakan::with('makan_lembur_biaya_konsumsi')
        ->where('kategori_makan.id','>',3)
        ->where('kategori_makan.id','<=',20)->get();
        // dd($kategori_makans);
        $kategoris=DB::table('kategori_makan')
        ->where('kategori_makan.id','>',3)->get();

        return view('makan_lembur', compact('kategori_makans','kategoris'));
    }

    public function tambah_makan(Request $request)
    {
        $input = $request->all();
        dd($input);

            //print_r($input);
        // $rules = [];


        // foreach($request->input('uraian_kegiatan') as $key => $value) {
        //     $rules["uraian_kegiatan.{$key}"] = 'required';
        //     $rules["satuan.{$key}"] = 'required';
        //     $rules["bruto.{$key}"] = 'required|numeric';
        // }


        // $validator = Validator::make($request->all(), $rules);


        // if ($validator->passes())
        // {
            // $makan_lembur= new makan_lembur;
            // $makan_lembur->kategori_makan_id = $input['kategori_makan'];
            // $makan_lembur->uraian_kegiatan = $input['uraian_kegiatan'];
            // $makan_lembur->satuan = $input['satuan'];
            // $makan_lembur->bruto = $input['bruto'];
            // $makan_lembur->save();
            $makan_lembur= new makan_lembur;
            $makan_lembur->kategori_makan_id = 1;
            $makan_lembur->uraian_kegiatan = "lalal";
            $makan_lembur->satuan = "yeyey";
            $makan_lembur->bruto = 450000;
            $makan_lembur->save();
            
            //return print_r($input);
            return response()->json(['success'=>'done']);
    }
}