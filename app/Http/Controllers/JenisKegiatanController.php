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
use Carbon\Carbon;

class JenisKegiatanController extends Controller
{
    public function index() {
        // $jenis_kegiatans = JenisKegiatan::with('kategori')->withTrashed()->get();
        $month = date('Y-m');
        $thn=explode("-",$month)[0];
        $bln=explode("-",$month)[1];
        // $jenis_kegiatans = JenisKegiatan::whereMonth('updated_at', $bln)->whereYear('updated_at', $thn)->get();

        // $kegiatans = Kegiatan::whereMonth('updated_at', $bln)->whereYear('updated_at', $thn)->get();
        $jenis_kegiatans = JenisKegiatan::with('kegiatan')->where(function($query) use ($thn,$bln)
        {
            $query->whereMonth('updated_at', $bln);
            $query->whereYear('updated_at', $thn);
        })->get();
        return view('docs', compact('jenis_kegiatans','month'));
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
       /* $validator = Validator::make($request->all(), [
            'jenis_kegiatan'  => 'required',
        ]);

        if ($validator->passes())
        {*/
            $jeniskegiatan= new JenisKegiatan;
            $jeniskegiatan->jenis_kegiatan = $request->jenis_kegiatan;
            $jeniskegiatan->save();
            return redirect('/dokumen');
        // }
        /*else{
          	$messages = $validator->messages();
    	    return redirect('/dokumen')->withErrors($validator);
        }*/
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
        //update data
		// $data = $request->all();
		// $kegiatan = Kegiatan::find($request->id_kegiatan);
		// $kegiatan->jenis_kegiatan_id = $request->jenis_kegiatan;
  //       $kegiatan->nama_kegiatan = $request->nama_kegiatan;
  //       $kegiatan->save();
		// return redirect('/dokumen');

        //using version
        $data = $request->all();
        $kegiatan = Kegiatan::find($request->id_kegiatan);
        // $kegiatan->delete();
        $kegiatan->updated_at = Carbon::now();
        $kegiatan->save(['timestamps' => false]);
        $new_kegiatan= new Kegiatan;
        $new_kegiatan->jenis_kegiatan_id = $request->jenis_kegiatan;
        $new_kegiatan->nama_kegiatan = $request->nama_kegiatan;
        $new_kegiatan->save();
        return redirect('/dokumen');
	}
	public function update2(Request $request)
	{
		$data = $request->all();
		$jenis_kegiatan = JenisKegiatan::find($request->id_kegiatan2);
        // $jenis_kegiatan->delete();
        $jenis_kegiatan->updated_at = Carbon::now();
        $jenis_kegiatan->save(['timestamps' => false]);
        $new_jenis_kegiatan= new JenisKegiatan;
		$new_jenis_kegiatan->jenis_kegiatan = $request->jenis_kegiatan2;
        $new_jenis_kegiatan->save();
		return redirect('/dokumen');
	}

    public function destroy($id)
    {
        $kegiatan = Kegiatan::find($id);
        $kegiatan->delete();
        return redirect('/dokumen');
        /*if($kegiatan->delete()){// this Is Soft Delete
            return redirect()->back()->with('message_success',"Delete Successfully");
        }else{
            return redirect()->back()->with('message_success',"Sorry please try again");
        }*/

        // Force Delete
        //$kegiatan = Post::find($id);
        /*$kegiatan = Post::find($id);
        if($kegiatan->forceDelete()){// this Is Soft Delete
            return redirect()->back()->with('message_success',"Delete Successfully");
        }else{
            return redirect()->back()->with('message_success',"Sorry please try again");
        }*/
    }

     public function destroy2($id)
    {
        $jenis_kegiatan = JenisKegiatan::find($id);
        $jenis_kegiatan->delete();
        return redirect('/dokumen');
    }

    public function restore(Request $request,$id){
        $kegiatan = Kegiatan::onlyTrashed()->find($id);
        $kegiatan->restore();
        return redirect('/dokumen');
    }

    public function restore2(Request $request,$id){
        $jenis_kegiatan = JenisKegiatan::onlyTrashed()->find($id);
        $jenis_kegiatan->restore();
        return redirect('/dokumen');
    }

    public function search_month(Request $request)
    {
        $month = $request->month_year;
        $thn=explode("-",$month)[0];
        $bln=explode("-",$month)[1];

        $jenis_kegiatans = JenisKegiatan::whereMonth('updated_at', $bln)->whereYear('updated_at', $thn)->get();
       
        return view('docs', compact('jenis_kegiatans','month'));
    }

}
