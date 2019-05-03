<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use DB;
use Validator;
use App\Version;
use App\JenisKegiatan;
use App\Kegiatan;
use App\Kategori;
use App\Uraian;
use App\Sub1;
use App\Sub2;
use Carbon\Carbon;

class VersiController extends Controller
{
    public function index(Request $request) {
        $versions = DB::table('version')->get();
        return view('pilih_versi', compact('versions'));
    }

    public function store(Request $request)
    {
        // ini_set('max_execution_time', 1800);
        // $uraians = Uraian::where('status','=', 0)
        //             ->with(['sub2' => function ($query) {
        //                 $query->where('sub1.status', '=', 0)
        //                 ->orWhere('sub2.status', '=', 0);
        //                 // ->whereNotIn('sub2.version',['{$request->versi}']);
        //             }])
        //             // ->union($jenis_kegiatans)
        //             ->get();
        // $jenis_kegiatans = JenisKegiatan::where('status','=', 0)
        //                     ->with(['kategori' => function ($query) {
        //                         $query->where('kategori.status', '=', 0) 
        //                         ->orWhere('kegiatan.status', '=', 0);
        //                     }])
        //                     // ->union($uraians)
        //                     ->get();
        // $jenis_kegiatans = JenisKegiatan::where('status','=', 0)->get();
        $versions = Version::where('status','=', 0)->get();
        foreach ($versions as $version) {
            $version = Version::find($version->id);
            $version->status = 1;
            $version->save();
            $new_version = $version->replicate();
            $new_version->version = $request->versi;
            $new_version->status = 0;
            $new_version->save();
            foreach ($version->jenis_kegiatan as $jk) {
                $jenis_kegiatan = JenisKegiatan::find($jk->id);
                $new_jenis_kegiatan = $jenis_kegiatan->replicate();
                $new_jenis_kegiatan->version_id = $new_version->id;
                $new_jenis_kegiatan->save();
                foreach ($jk->kegiatan as $kegiatan) {
                    $kegiatan = Kegiatan::find($kegiatan->id);
                    $new_kegiatan = $kegiatan->replicate();
                    $new_kegiatan->jenis_kegiatan_id = $new_jenis_kegiatan->id;
                    $new_kegiatan->save();
                    foreach ($kegiatan->kategori as $kategori) {
                        $kategori = Kategori::find($kategori->id);
                        $new_kategori = $kategori->replicate();
                        $new_kategori->kegiatan_id = $new_kegiatan->id;
                        $new_kategori->save();
                        foreach ($kategori->uraian as $uraian) {
                            $uraian = Uraian::find($uraian->id);
                            $new_uraian = $uraian->replicate();
                            $new_uraian->kategori_id = $new_kategori->id;
                            $new_uraian->save();
                            foreach ($uraian->sub1 as $sub1) {
                                $sub1 = Sub1::find($sub1->id);
                                $new_sub1 = $sub1->replicate();
                                $new_sub1->uraian_id = $new_uraian->id;
                                $new_sub1->save();
                                foreach ($sub1->sub2 as $sub2) {
                                    $sub2 = Sub2::find($sub2->id);
                                    $new_sub2 = $sub2->replicate();
                                    $new_sub2->sub1_id = $new_sub1->id;
                                    $new_sub2->save();
                                }
                            }
                        }
                    }
                }
            }
        }  


        // foreach ($jenis_kegiatans as $jk) {            
        //     $jenis_kegiatan = JenisKegiatan::find($jk->id);
        //     $jenis_kegiatan->status = 1;
        //     $jenis_kegiatan->save();
        //     $new_jenis_kegiatan = $jenis_kegiatan->replicate();
        //     $new_jenis_kegiatan->version = $request->versi;
        //     $new_jenis_kegiatan->status = 0;
        //     $new_jenis_kegiatan->save();
        //     foreach ($jk->kegiatan as $kegiatan) {
        //         $kegiatan = Kegiatan::find($kegiatan->id);
        //         $kegiatan->status = 1;
        //         $kegiatan->save();
        //         $new_kegiatan = $kegiatan->replicate();
        //         $new_kegiatan->version = $request->versi;
        //         $new_kegiatan->status = 0;
        //         $new_kegiatan->jenis_kegiatan_id = $new_jenis_kegiatan->id;
        //         $new_kegiatan->save();
        //         foreach ($kegiatan->kategori as $kategori) {
        //             $kategori = Kategori::find($kategori->id);
        //             $kategori->status = 1;
        //             $kategori->save();
        //             $new_kategori = $kategori->replicate();
        //             $new_kategori->version = $request->versi;
        //             $new_kategori->status = 0;
        //             $new_kategori->kegiatan_id = $new_kegiatan->id;
        //             $new_kategori->save();
        //             foreach ($kategori->uraian as $uraian) {
        //                 $uraian = Uraian::find($uraian->id);
        //                 $uraian->status = 1;
        //                 $uraian->save();
        //                 $new_uraian = $uraian->replicate();
        //                 $new_uraian->version = $request->versi;
        //                 $new_uraian->status = 0;
        //                 $new_uraian->kategori_id = $new_kategori->id;
        //                 $new_uraian->save();
        //                 foreach ($uraian->sub1 as $sub1) {
        //                     $sub1 = Sub1::find($sub1->id);
        //                     $sub1->status = 1;
        //                     $sub1->save();
        //                     $new_sub1 = $sub1->replicate();
        //                     $new_sub1->version = $request->versi;
        //                     $new_sub1->status = 0;
        //                     $new_sub1->uraian_id = $new_uraian->id;
        //                     $new_sub1->save();
        //                     foreach ($sub1->sub2 as $sub2) {
        //                         $sub2 = Sub2::find($sub2->id);
        //                         $sub2->status = 1;
        //                         $sub2->save();
        //                         $new_sub2 = $sub2->replicate();
        //                         $new_sub2->version = $request->versi;
        //                         $new_sub2->status = 0;
        //                         $new_sub2->sub1_id = $new_sub1->id;
        //                         $new_sub2->save();
        //                     }
        //                 }
        //             }
        //         }
        //     }
        // }  
        return redirect('/tambahsbi');
    }

    public function store2(Request $request)
    {
        $version = Version::find($request->versi_id);
        $version->status = 0;
        $version->save();
        return redirect('/versisbi');
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
        $data = Version::find($id);
        return response()->json($data);
    }
    public function update(Request $request)
    {
        $version = Version::find($request->edit_id);
        $version->version = $request->edit_version;        
        $version->save();
        return redirect('/pilihversi');
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
    