<?php

namespace App\Http\Controllers;
use DB;
use Validator;
use App\Kegiatan;
use App\KategoriKegiatan;

use Illuminate\Http\Request;

class KegiatanController extends Controller
{
    public function index() {
        $kategori_kegiatans = KategoriKegiatan::with('kegiatan')->get();
        // dd($kategori_kegiatans);
        $kegiatans=DB::table('kategori_kegiatan')->get();
       	return view('dokumen', compact('kategori_kegiatans','kegiatans'));
    }

    public function tambah_kegiatan(Request $request){
    	$input = $request->all();
        $rules = [];


        foreach($request->input('kegiatan') as $key => $value) {
            $rules["kegiatan.{$key}"] = 'required';
        }

        $validator = Validator::make($request->all(), $rules);	

        if ($validator->passes())
        {
        	$kegiatan = new Kegiatan;
        	$kegiatan->kategori_kegiatan_id = $input['kategori_kegiatan'];
        	$jumlah = count($input['kegiatan']);
        	for ($i=0; $i < $jumlah; ++$i) 
        	{
	        	$kegiatan->kegiatan = $input['kegiatan'];    		
	        	$kegiatan->save();
        	}
        	return response()->json(['success'=>'done']);            
        }
    	return response()->json(['error'=>$validator->errors()->all()]);
    }
}
