<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kategori;
use App\Uraian;
use App\Sub1;
use App\Kegiatan;
// use App\Provinsi;
use DB;

class JalanDinasController extends Controller
{
    public function index() {
       	$kategoris = Kegiatan::where('id', 2)->get();
        // $provinsis = DB::table('provinsi')->leftjoin('uraian','provinsi.id','=','uraian.provinsi_id')->orderBy('provinsi.id')->get();
        // $provinsis = Provinsi::all();
       	// dd($kategoris);
       	return view('jalan_dinas', compact('kategoris'/*,'provinsis'*/));
    }

    public function index2() {
        $kategoris = Kegiatan::where('id', 2)->get();
        // $provinsis = DB::table('provinsi')->leftjoin('uraian','provinsi.id','=','uraian.provinsi_id')->orderBy('provinsi.id')->get();
        // $provinsis = Provinsi::all();
        // dd($kategoris);
        return view('jalan_dinas2', compact('kategoris'/*,'provinsis'*/));
    }

    public function store(Request $request)
    {
        $jalan_dinas= new Uraian;
        $jalan_dinas->kategori_id = $request->kategori_kegiatan;
        $jalan_dinas->uraian_kegiatan = $request->uraian_kegiatan;
        $jalan_dinas->satuan = $request->satuan;
        $jalan_dinas->var1 = $request->var1;
        $jalan_dinas->save();
        return redirect('/2');
    }

    public function getData1(Request $request)
    {
        $id = $request->input('id');
        $data = Kategori::find($id);
        return response()->json($data);
    }
    public function getData2(Request $request)
    {
        $id = $request->input('id');
        $data = Uraian::find($id);
        return response()->json($data);
    }
    public function getData3(Request $request)
    {
        $id = $request->input('id');
        $data = Sub1::find($id);
        return response()->json($data);
    }

    public function update(Request $request)
	{
		$data = $request->all();
		$edit = Kategori::find($request->id_kegiatan1);
		$edit->kategori_kegiatan = $request->kategori_kegiatan1;
        $edit->save();
		return redirect('/2');
	}
	public function update2(Request $request)
	{
		$data = $request->all();
		$edit = Uraian::find($request->id_kegiatan2);
		$edit->kategori_id = $request->kategori2;
		$edit->uraian_kegiatan = $request->uraian_kegiatan2;
		$edit->satuan = $request->satuan2;
		$edit->var1 = $request->var12;
        $edit->save();
		return redirect('/2');
	}
	public function update3(Request $request)
	{
		$data = $request->all();
		$edit = Sub1::find($request->id_kegiatan3);
		$edit->uraian_id = $request->uraian3;
		$edit->uraian_kegiatan = $request->uraian_kegiatan3;
		$edit->satuan = $request->satuan3;
		$edit->var1 = $request->var13;
        $edit->save();
		return redirect('/2');
	}
}
