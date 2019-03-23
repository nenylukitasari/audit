<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use DB;
use Validator;
use App\JenisKegiatan;
use App\Kegiatan;
use App\Kategori;
use App\Uraian;
use App\Sub1;

class JenisKegiatanController extends Controller
{
    public function index() {
       	$jenis_kegiatans = JenisKegiatan::with('kategori')->get();
       	// dd($jenis_kegiatans);
       	return view('dokumen', compact('jenis_kegiatans'));
    }

    public function store(Request $request)
    {
        // $validator = Validator::make($request->all(), [
        //     'jenis_kegiatan'  => 'required',
        //     'nama_kegiatan' => 'required',
        // ]);

        // if ($validator->passes())
        // {
            $kegiatan= new Kegiatan;
            $kegiatan->jenis_kegiatan_id = $request->jenis_kegiatan;
            $kegiatan->nama_kegiatan = $request->nama_kegiatan;
            $kegiatan->save();
            return redirect('/dokumen');
        // }
        // else{
        //   	$messages = $validator->messages();
    	   //  return redirect('/dokumen')->withErrors($validator);
        // }
    }

    public function storejenis(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'jenis_kegiatan'  => 'required',
        ]);

        if ($validator->passes())
        {
            $jeniskegiatan= new JenisKegiatan;
            $jeniskegiatan->jenis_kegiatan = $request->jenis_kegiatan;
            $jeniskegiatan->save();
            return redirect('/dokumen');
        }
        else{
          	$messages = $validator->messages();
    	    return redirect('/dokumen')->withErrors($validator);
        }
    }

    public function getData(Request $request)
    {
        $id = $request->input('id');
        $data = Kegiatan::find($id);
        return response()->json($data);
    }
    public function getData2(Request $request)
    {
        $id = $request->input('id');
        $data = JenisKegiatan::find($id);
        return response()->json($data);
    }

    public function update(Request $request)
	{
		$data = $request->all();
		$kegiatan = Kegiatan::find($request->id_kegiatan);
		$kegiatan->jenis_kegiatan_id = $request->jenis_kegiatan;
        $kegiatan->nama_kegiatan = $request->nama_kegiatan;
        $kegiatan->save();
		return redirect('/dokumen');
	}
	public function update2(Request $request)
	{
		$data = $request->all();
		$jenis_kegiatan = JenisKegiatan::find($request->id_kegiatan2);
		$jenis_kegiatan->jenis_kegiatan = $request->jenis_kegiatan2;
        $jenis_kegiatan->save();
		return redirect('/dokumen');

	}
}
