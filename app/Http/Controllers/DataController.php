<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use DB;
use Validator;
use App\Version;
use App\Provinsi;
use App\Penjelasan;
use App\JenisKegiatan;
use App\Kegiatan;
use App\Kategori;
use App\Uraian;
use App\Sub1;
use App\Sub2;
use Carbon\Carbon;

class DataController extends Controller
{
    public function index(Request $request) {
        $versions = Version::where('status',0)->get();
        $kode_tabel = $request->kode_tabel;
        $kode_bagian = $request->kode_bagian;
        
        switch ($kode_tabel) {
            case '2':
                {
                   switch ($kode_bagian) {
                        case '1':
                            return view('makan_lembur', compact('versions'));
                            break;
                        case '2':
                            return view('jalan_dinas', compact('versions'));   
                            break;
                        case '3':
                            return view('honorarium', compact('versions'));   
                            break;
                        case '4':
                            return view('honorarium_tidak_tetap', compact('versions'));   
                            break;
                        case '5':
                        {
                            $kode_bagian_kategori = 18;
                            return view('uraian_default_var1', compact('versions','kode_bagian','kode_bagian_kategori'));   
                            break;
                        }
                        case '6':
                        {
                            $kode_bagian_kategori = 19;
                            return view('uraian_default_var1', compact('versions','kode_bagian','kode_bagian_kategori'));   
                            break;
                        }
                        case '7':
                        {
                            $kode_bagian_kategori = 20;
                            return view('uraian_default_var1', compact('versions','kode_bagian','kode_bagian_kategori'));   
                            break;
                        }
                        case '8':
                        {
                            $kode_bagian_kategori = 21;
                            return view('uraian_default_var1', compact('versions','kode_bagian','kode_bagian_kategori'));   
                            break;
                        }
                        
                        default:
                            # code...
                            break;
                    } 
                    break;
                }

            case '3':
                {
                    switch ($kode_bagian) {
                        case '2':
                            return view('jalan_dinas_1', compact('versions'));
                            break;
                        case '3':
                            return view('jalan_dinas_2', compact('versions'));   
                            break;
                        case '4':
                            return view('jalan_dinas_3', compact('versions'));   
                            break;
                        case '5':
                            return view('jalan_dinas_4', compact('versions'));   
                            break;
                        case '6':
                            return view('jalan_dinas_5', compact('versions'));   
                            break;
                        case '7':
                            return view('jalan_dinas_6', compact('versions'));   
                            break;
                        case '8':
                        {
                            // $provinsis = DB::table('version')
                            //                 ->select("version.status", "provinsi.provinsi", "uraian.provinsi_id")
                            //                 ->join('provinsi', 'version.id', '=', 'provinsi.version_id')
                            //                 ->join('uraian', 'provinsi.id', '=', 'uraian.provinsi_id')
                            //                 ->where('status',0)
                            //                 ->get();
                            // $provinsis = DB::table('version')
                            //                 ->leftjoin('provinsi','version.id','=','provinsi.version_id')
                            //                 ->leftjoin('uraian','provinsi.id','=','uraian.provinsi_id')
                            //                 ->where('version.status',0)
                            //                 ->get();

                            return view('jalan_dinas_7', compact('versions'/*,'provinsis'*/));
                            break;
                        }
                        case '10':
                            return view('honorarium_tt_uraian', compact('versions','kode_bagian'));   
                            break;
                        case '11':
                            return view('honorarium_tt_uraian', compact('versions','kode_bagian'));   
                            break;
                        case '12':
                            return view('honorarium_dosen', compact('versions'));   
                            break;
                        case '13':
                            return view('honorarium_tt_sub1', compact('versions'));   
                            break;
                        case '14':
                            return view('honorarium_tt_uraian', compact('versions','kode_bagian'));   
                            break;
                        case '15':
                            return view('honorarium_tt_uraian', compact('versions','kode_bagian'));   
                            break;
                        case '16':
                            return view('honorarium_tt_uraian', compact('versions','kode_bagian'));   
                            break;
                        case '17':
                            return view('honorarium_tt_sub2', compact('versions'));   
                            break;
                        
                        default:
                            # code...
                            break;
                    } 
                    break;
                }
            
            default:
                return view('docs', compact('versions'));
                break;
        }
    }
    public function getUraian($id) {
        $list_uraian_kegiatan = Uraian::where('kategori_id',$id)->get();
        return response()->json($list_uraian_kegiatan);
    }
    public function getSub1($id) {
        $list_sub1 = Sub1::where('uraian_id',$id)->get();
        return response()->json($list_sub1);
    }

    public function store(Request $request)
    {
        // $validator = Validator::make($request->all(), [
        //     'jenis_kegiatan'  => 'required',
        //     'nama_kegiatan' => 'required',
        // ]);

        // if ($validator->passes())
        // {
            // $kegiatan= new Kegiatan;
            // $kegiatan->jenis_kegiatan_id = $request->jenis_kegiatan;
            // $kegiatan->nama_kegiatan = $request->nama_kegiatan;
            // $kegiatan->save();
            // return redirect('/dokumen');
        // }
        // else{
        //      $messages = $validator->messages();
           //  return redirect('/dokumen')->withErrors($validator);
        // }
        switch ($request->kode_tabel) {
            case '1':
                {
                    $jenis_kegiatan = new JenisKegiatan;
                    $jenis_kegiatan->version_id = $request->version;
                    $jenis_kegiatan->jenis_kegiatan = $request->jenis_kegiatan;
                    $jenis_kegiatan->kode_tabel=1;
                    $jenis_kegiatan->save();
                    // return redirect('/dokumen')->with('message_success',"Berhasil menambahkan data");
                    break;
                }
            case '2':
                {
                    $kegiatan= new Kegiatan;
                    $kegiatan->jenis_kegiatan_id = $request->jenis_kegiatan;
                    $kegiatan->nama_kegiatan = $request->nama_kegiatan;
                    $kegiatan->kode_tabel=2;
                    $kegiatan->save();
                    // return redirect('/dokumen')->with('message_success',"Berhasil menambahkan data");
                    break;
                }
            case '3':
                {
                    $kategori= new Kategori;
                    $kategori->kegiatan_id = $request->kegiatan_id;
                    $kategori->kategori_kegiatan = $request->kategori_kegiatan;
                    $kategori->kode_tabel=3;
                    $kategori->kode_bagian = $request->kode_bagian;
                    $kategori->satuan = $request->satuan_kategori;
                    $kategori->var1 = $request->var1_kategori;
                    $kategori->save();
                    // return redirect()->back()->with('message_success',"Berhasil menambahkan data");
                    break;
                }
            case '4':
                {
                    $uraian= new Uraian;
                    $uraian->kategori_id = $request->kategori_kegiatan;
                    $uraian->uraian_kegiatan = $request->uraian_kegiatan;
                    $uraian->satuan = $request->satuan;
                    $uraian->var1 = $request->var1;
                    $uraian->var2 = $request->var2;
                    $uraian->var3 = $request->var3;
                    $uraian->var4 = $request->var4;
                    $uraian->kode_tabel=4;
                    $uraian->save();
                    // return redirect()->back()->with('message_success',"Berhasil menambahkan data");
                    break;
                }
            case '5':
                {
                    $sub1= new Sub1;
                    $sub1->uraian_id = $request->list_uraian_kegiatan;
                    $sub1->uraian_kegiatan = $request->uraian_kegiatan;
                    $sub1->satuan = $request->satuan;
                    $sub1->var1 = $request->var1;
                    $sub1->var2 = $request->var2;
                    $sub1->var3 = $request->var3;
                    $sub1->var4 = $request->var4;
                    $sub1->kode_tabel=5;
                    $sub1->save();
                    // return redirect()->back()->with('message_success',"Berhasil menambahkan data");
                    break;
                }
            case '6':
                {
                    $sub2= new Sub2;
                    $sub2->sub1_id = $request->list_sub1;
                    $sub2->uraian_kegiatan = $request->uraian_kegiatan;
                    $sub2->satuan = $request->satuan;
                    $sub2->var1 = $request->var1;
                    $sub2->kode_tabel=6;
                    $sub2->save();
                    // return redirect()->back()->with('message_success',"Berhasil menambahkan data");
                    break;
                }
            case '7':
                {
                    $penjelasan= new Penjelasan;
                    $penjelasan->version_id = $request->version;
                    $penjelasan->kegiatan_id = $request->penjelasan_kegiatan;
                    $penjelasan->kategori_id = $request->penjelasan_kategori;
                    $penjelasan->penjelasan = $request->penjelasan;
                    $penjelasan->kode_tabel=7;
                    $penjelasan->save();
                    break;
                }
                
                
                
            default:
                # code...
                break;
        }
        return redirect()->back()->with('message_success',"Berhasil menambahkan data");
    }
    public function getData(Request $request)
    {
         $kode_tabel = $request->input('kode_tabel');
         //return response()->json($kode_tabel);
         //print_r($kode_tabel);
         switch ($kode_tabel) {
            case '1':
                {
                    $id = $request->input('id');
                    $data = JenisKegiatan::find($id);
                    break;
                }
            case '2':
                {
                    $id = $request->input('id');
                    $data = Kegiatan::find($id);
                    break;
                }
            case '3':
                {
                    $id = $request->input('id');
                    $data = Kategori::find($id);
                    break;
                }
            case '4':
                {
                    $id = $request->input('id');
                    $data = Uraian::find($id);
                    break;
                }
            case '5':
                {
                    $id = $request->input('id');
                    $data = Sub1::find($id);
                    break;
                }
            case '6':
                {
                    $id = $request->input('id');
                    $data = Sub2::find($id);
                    break;
                }
            case '7':
                {
                    $id = $request->input('id');
                    $data = Penjelasan::find($id);
                    break;
                }
             
             default:
                 # code...
                 break;
         }
        return response()->json($data);
    }
    public function update(Request $request)
    {
        switch ($request->kode_tabel) {
            case '1':
                {
                    $jenis_kegiatan = JenisKegiatan::find($request->edit_id_jk);
                    $jenis_kegiatan->jenis_kegiatan = $request->edit_jenis_kegiatan;
                    $jenis_kegiatan->save();
                    break;
                }
            case '2':
                {
                    $kegiatan = Kegiatan::find($request->edit_id_kegiatan);
                    $kegiatan->jenis_kegiatan_id = $request->edit_jenis_kegiatan2;
                    $kegiatan->nama_kegiatan = $request->edit_nama_kegiatan;
                    $kegiatan->save();
                    break;
                }
            case '3':
                {
                    $kategori = Kategori::find($request->edit_id);
                    $kategori->kategori_kegiatan = $request->kategori_kegiatan1;
                    $kategori->save();
                    break;
                }
            case '4':
                {
                    $uraian = Uraian::find($request->edit_id2);
                    $uraian->kategori_id = $request->edit_kategori2;
                    $uraian->uraian_kegiatan = $request->uraian_kegiatan2;
                    $uraian->satuan = $request->satuan2;
                    $uraian->var1 = $request->edit_var1;
                    $uraian->var2 = $request->edit_var2;
                    $uraian->var3 = $request->edit_var3;
                    $uraian->var4 = $request->edit_var4;
                    $uraian->save();
                    break;
                }
            case '5':
                {
                    $sub1 = Sub1::find($request->edit_id3);
                    $sub1->uraian_id = $request->uraian3;
                    $sub1->uraian_kegiatan = $request->uraian_kegiatan3;
                    $sub1->satuan = $request->satuan3;
                    $sub1->var1 = $request->sub1_edit_var1;
                    $sub1->var2 = $request->sub1_edit_var2;
                    $sub1->var3 = $request->sub1_edit_var3;
                    $sub1->var4 = $request->sub1_edit_var4;
                    $sub1->save();
                    break;
                }
            case '6':
                {
                    $sub2 = Sub2::find($request->edit_id5);
                    $sub2->sub1_id = $request->edit_sub1_id;
                    $sub2->uraian_kegiatan = $request->edit_sub2_uraian;
                    $sub2->satuan = $request->edit_sub2_satuan;
                    $sub2->var1 = $request->edit_sub2_var1;
                    $sub2->save();
                    break;
                }
            case '7':
                {
                    $penjelasan = Penjelasan::find($request->edit_id4);
                    // $penjelasan->kegiatan_id = $request->uraian3;
                    $penjelasan->kategori_id = $request->edit_kategori4;
                    $penjelasan->penjelasan = $request->edit_penjelasan;
                    $penjelasan->save();
                    break;
                }
                
            default:
                # code...
                break;
        }
        return redirect()->back()->with('message_success',"Berhasil mengubah data");
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
    public function restore(Request $request,$id){
        $kegiatan = Kegiatan::onlyTrashed()->find($id);
        $kegiatan->restore();
        return redirect('/dokumen');
    }
}
    