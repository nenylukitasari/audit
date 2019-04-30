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
    public function index(Request $request) {
        // $jenis_kegiatans = JenisKegiatan::with('kategori')->withTrashed()->get();        

        if($request->month_year == null || $request->month_year == date('Y-m')){
            $month = date('Y-m');                        

            $thn=explode("-",$month)[0];
            $bln=explode("-",$month)[1];

            $jenis_kegiatans = JenisKegiatan::whereMonth('updated_at','=', $bln)
                            ->whereYear('updated_at','=', $thn) 
                            ->where('version', '=', 0)
                            ->orderBy('id', 'desc')
                            ->with(['kegiatan' => function ($query) use ($thn,$bln) {            
                                $query->whereMonth('updated_at','=', $bln);
                                $query->whereYear('updated_at','=', $thn);
                                $query->where('version', '=', 0);
                            }])
                            ->get();

        }else{
            $month = date('Y-m', strtotime($request->month_year));            

            $thn=explode("-",$month)[0];
            $bln=explode("-",$month)[1];

            $jenis_kegiatans = JenisKegiatan::whereMonth('updated_at','=', $bln)
                            ->whereYear('updated_at','=', $thn)
                            ->where('version', '=', 1)
                            ->orderBy('id', 'desc')
                            ->with(['kegiatan' => function ($query) use ($thn,$bln) {
                                $query->whereMonth('updated_at','=', $bln);
                                $query->whereYear('updated_at','=', $thn);
                                $query->where('version', '=', 1);
                            }])
                            ->get();
        }                        

        /*$jeniskegiatan_id =  JenisKegiatan::select('id')->where('version', '=', 1)->get();

        for ($i=0; $i < count($jeniskegiatan_id); $i++) { 
            foreach ($jenis_kegiatans as $jenis_kegiatan) {
                
            }
            dd($jenis_kegiatan);

            $jenis_kegiatan = JenisKegiatan::find($jeniskegiatan_id[$i]->id);

            $version = date('Y-m', strtotime($jenis_kegiatan->updated_at));;

            
            
        }

        dd($jeniskegiatan_id[2]->id);*/
        
        // $jenis_kegiatans = JenisKegiatan::whereMonth('updated_at', $bln)->whereYear('updated_at', $thn)->get();

        // $kegiatans = Kegiatan::whereMonth('updated_at', $bln)->whereYear('updated_at', $thn)->get();
       /* $jenis_kegiatans = JenisKegiatan::with('kegiatan')->where(function($query) use ($thn,$bln)
        {
            $query->whereMonth('updated_at','=', $bln);
            $query->whereYear('updated_at','=', $thn);
        })->get();*/        

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
        //      $messages = $validator->messages();
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
        $kegiatan->version = 1;        
        $kegiatan->updated_at = new Carbon('last day of last month');
        $kegiatan->save(['timestamps' => false]);

        $new_kegiatan= new Kegiatan;
        $new_kegiatan->jenis_kegiatan_id = $request->jenis_kegiatan;
        $new_kegiatan->nama_kegiatan = $request->nama_kegiatan;
        $new_kegiatan->save();

        //Update parent_id child sesuai data terbaru
        $parentid_kategori = Kategori::where('kegiatan_id', '=', $kegiatan->id)->get();
        
        foreach ($parentid_kategori as $pk) {            
            $kategori = Kategori::find($pk->id);
            $kategori->updated_at = new Carbon('last day of last month');
            $new_kategori = $kategori->replicate();
            $new_kategori->kegiatan_id = $new_kegiatan->id;
            $new_kategori->save();
        }

        /*Kategori::where('kegiatan_id', '=', $kegiatan->id)
                ->update(['kegiatan_id' => $new_kegiatan->id]);*/

        return redirect('/dokumen');
    }

    public function update2(Request $request)
    {
        $data = $request->all();
        $jenis_kegiatan = JenisKegiatan::find($request->id_kegiatan2);
        $jenis_kegiatan->version = 1;
        $jenis_kegiatan->updated_at = new Carbon('last day of last month');
        $jenis_kegiatan->save(['timestamps' => false]);
        
        $new_jenis_kegiatan= new JenisKegiatan;
        $new_jenis_kegiatan->jenis_kegiatan = $request->jenis_kegiatan2;
        $new_jenis_kegiatan->save();

        //Update dan duplikat parent_id child sesuai data terbaru
        $parentid_kegiatan = Kegiatan::where('jenis_kegiatan_id', '=', $jenis_kegiatan->id)->get();
        
        foreach ($parentid_kegiatan as $pk) {            
            $kegiatan = Kegiatan::find($pk->id);
            $kegiatan->updated_at = new Carbon('last day of last month');
            $new_kegiatan = $kegiatan->replicate();
            $new_kegiatan->jenis_kegiatan_id = $new_jenis_kegiatan->id;
            $new_kegiatan->save();
        }

        /*Kegiatan::where('jenis_kegiatan_id', '=', $jenis_kegiatan->id)
                ->update(['jenis_kegiatan_id' => $new_jenis_kegiatan->id]);*/

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
       
        return view('dokumen', compact('jenis_kegiatans','month'));
    }

}
    