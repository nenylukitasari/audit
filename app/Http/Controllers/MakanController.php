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
        $kategori_makans = KategoriMakan::with('makan_lembur_biaya_konsumsi')->get();
        // dd($kategori_makans);
        $kategoris=DB::table('kategori_makan')->get();

        return view('makan_lembur', compact('kategori_makans','kategoris'));
    }

    public function tambah_makan(Request $request)
    {
        $input = $request->all();

            //print_r($input);
        $rules = [];


        foreach($request->input('uraian_kegiatan') as $key => $value) {
            $rules["uraian_kegiatan.{$key}"] = 'required';
            $rules["satuan.{$key}"] = 'required';
            $rules["bruto.{$key}"] = 'required|numeric';
        }


        $validator = Validator::make($request->all(), $rules);


        if ($validator->passes())
        {
            $makan_lembur= new makan_lembur;
            $makan_lembur->kategori_makan_id = $input['kategori_makan'][0];
            $makan_lembur->uraian_kegiatan = $input['uraian_kegiatan'][0];
            $makan_lembur->satuan = $input['satuan'][0];
            $makan_lembur->bruto = $input['bruto'][0];
            $makan_lembur->save();
            
            //return print_r($input);
            return response()->json(['success'=>'done']);            
        }
        return response()->json(['error'=>$validator->errors()->all()]);
    }
}