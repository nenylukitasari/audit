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

    public function perjalanan_dinas() {
        $kategori_makans = KategoriMakan::with('makan_lembur_biaya_konsumsi')
        ->where('kategori_makan.id','>',3)
        ->where('kategori_makan.id','<=',20)->get();
        // dd($kategori_makans);
        $kategoris=DB::table('kategori_makan')
        ->where('kategori_makan.id','>',3)->get();

        return view('makan_lembur', compact('kategori_makans','kategoris'));
    }

    public function store(Request $r)
    {
        $validator = Validator::make($r->all(), [
            'kategori_makan'  => 'required',
            'uraian_kegiatan' => 'required',
            'bruto' => 'required|numeric',
            'satuan' => 'required',
        ]);

        // $validator = Validator::make($request->all(), $rules);


        if ($validator->passes())
        {
            $makan_lembur= new MakanLembur;
            $makan_lembur->kategori_makan_id = $r->kategori_makan;
            $makan_lembur->uraian_kegiatan = $r->uraian_kegiatan;
            $makan_lembur->satuan = $r->satuan;
            $makan_lembur->bruto = $r->bruto;
            $makan_lembur->save();
            
            return redirect('/makan_lembur_rapat');
            //return response()->json(['success'=>'Record is successfully added']);
           //return response()->json(['success'=>'Added new records.']);
           // return response()->json(['success'=>'done']);
            
             //return redirect('register')->withErrors($validator);
            // return response()->json(['success'=>'done']); 
        }
        
        return response()->json(['error'=>$validator->errors()->all()]);
        
             // return response()->json(['errors'=>$validator->errors()->all()]);

        // // else {
        //  return redirect('/makan_lembur_rapat')->withErrors($validator);
             // return redirect()->back()->withErrors($validator->errors());
        // }
        

    }
}