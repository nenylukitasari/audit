<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kategori;
use App\Uraian;
use App\Sub1;
use App\Kegiatan;
use DB;

class MakanController extends Controller
{
    public function index() {
       	// $kategoris = Kegiatan::with(['kategori'/*,'uraian'*/])->where('id', '=', 1)->get();
       	$kategoris = Kegiatan::where('id', 1)->get();
       	// dd($jenis_kegiatans);
       	return view('makan_lembur', compact('kategoris'));
    }

    public function store(Request $request)
    {
       // $validator = Validator::make($request->all(), [
       //      'kategori_makan'  => 'required',
       //      'uraian_kegiatan' => 'required',
       //      'var1' => 'required|numeric',
       //      'satuan' => 'required',
       //  ]);

       //  if ($validator->passes())
       //  {
            $makan_lembur= new Uraian;
            $makan_lembur->kategori_id = $request->kategori_kegiatan;
            $makan_lembur->uraian_kegiatan = $request->uraian_kegiatan;
            $makan_lembur->satuan = $request->satuan;
            $makan_lembur->var1 = $request->var1;
            $makan_lembur->save();
            return redirect('/1');
        // }
        
        // else {
        //    $messages = $validator->messages();
        //    return redirect('/1')->withErrors($validator);
        // }
    }
    public function storeKategori(Request $request)
    {
        $kategori= new Kategori;
        $kategori->kegiatan_id = 1;
        $kategori->kategori_kegiatan = $request->kategori_kegiatan;
        $kategori->save();
        return redirect('/1');
    }
    
    public function getUraian($id) {
        $list_uraian_kegiatan = Uraian::where('kategori_id',$id)->get();
        return response()->json($list_uraian_kegiatan);
    }
    public function storeSub1(Request $request)
    {
        // dd ($request->list_uraian_kegiatan);
        $sub1= new Sub1;
        $sub1->uraian_id = $request->list_uraian_kegiatan;
        $sub1->uraian_kegiatan = $request->uraian_kegiatan;
        $sub1->satuan = $request->satuan;
        $sub1->var1 = $request->var1;
        $sub1->save();
        return redirect('/1');
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
		return redirect('/1');
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
		return redirect('/1');
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
		return redirect('/1');
	}
}
