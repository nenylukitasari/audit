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
       	$kegiatans = Kegiatan::where('nama_kegiatan', 'LIKE' , "Standar Biaya Perjalanan Dinas%")->get();
        // $provinsis = DB::table('provinsi')->leftjoin('uraian','provinsi.id','=','uraian.provinsi_id')->orderBy('provinsi.id')->get();
        // $provinsis = Provinsi::all();
       	// dd($kegiatans);
       	return view('jalan_dinas', compact('kegiatans'/*,'provinsis'*/));
    }
    public function index_1() {
        $uraians = Uraian::where('kategori_id', 4)->get();
        return view('jalan_dinas_1', compact('uraians'));
    }
    public function index_2() {
        $kegiatans = Kegiatan::where('nama_kegiatan', 'LIKE' , "Standar Biaya Perjalanan Dinas%")->get();
        // $kategoris = Kategori::where('id', 5)->get();
        return view('jalan_dinas_2', compact(/*'kategoris',*/'kegiatans'));
    }
    public function index2() {
        $kegiatans = Kegiatan::where('id', 2)->get();
        return view('jalan_dinas2', compact('kegiatans'/*,'provinsis'*/));
    }
    public function store(Request $request)
    {
        $jalan_dinas= new Kategori;
        $jalan_dinas->kategori_kegiatan = $request->kategori_kegiatan;
        $jalan_dinas->kegiatan_id = 2;
        $jalan_dinas->save();
        return redirect('/2');
    }
    public function store2(Request $request)
    {
        $jalan_dinas= new Uraian;
        $jalan_dinas->kategori_id = $request->id;
        $jalan_dinas->uraian_kegiatan = $request->uraian_kegiatan;
        $jalan_dinas->satuan = $request->satuan;
        $jalan_dinas->var1 = $request->var1;
        $jalan_dinas->var2 = $request->var2;
        $jalan_dinas->save();
        return redirect()->back();
    }
    public function getData(Request $request)
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
        $edit = Kategori::find($request->id_kegiatan1);
        $edit->kategori_kegiatan = $request->kategori_kegiatan1;
        $edit->save();
        return redirect()->back();
    }
}
