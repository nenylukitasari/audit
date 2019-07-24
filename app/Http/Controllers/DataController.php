<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use DB;
use Validator;
use App\Version;
use App\PeraturanLain;
use App\Provinsi;
use App\Penjelasan;
use App\PenjelasanSub1;
use App\PenjelasanSub2;
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
                        {   
                            $kode_bagian_kegiatan = $kode_bagian;
                            $kode_bagian_kategori = 1;
                            return view('sbi.kategori_sub1_var1', compact('versions','kode_bagian_kegiatan','kode_bagian_kategori'));
                            break;
                        }
                        case '2':
                        {
                            $kode_bagian_kegiatan = $kode_bagian;
                            return view('sbi.menu_kategori', compact('versions','kode_bagian_kegiatan'));   
                            break;
                        }
                        case '3':
                        {
                            $kode_bagian_kegiatan = $kode_bagian;
                            $kode_bagian_kategori = 9;
                            return view('sbi.kategori_sub1_var1', compact('versions','kode_bagian_kegiatan','kode_bagian_kategori'));   
                            break;
                        }
                        case '4':
                        {
                            $kode_bagian_kegiatan = $kode_bagian;
                            return view('sbi.menu_kategori', compact('versions','kode_bagian_kegiatan'));   
                            break;
                        }
                        case '5':
                        {
                            $kode_bagian_kategori = 18;
                            return view('sbi.kategori_uraian_var1', compact('versions','kode_bagian','kode_bagian_kategori'));   
                            break;
                        }
                        case '6':
                        {
                            $kode_bagian_kategori = 19;
                            return view('sbi.kategori_uraian_var1', compact('versions','kode_bagian','kode_bagian_kategori'));   
                            break;
                        }
                        case '7':
                        {
                            $kode_bagian_kategori = 20;
                            return view('sbi.kategori_uraian_var1', compact('versions','kode_bagian','kode_bagian_kategori'));   
                            break;
                        }
                        case '8':
                        {
                            $kode_bagian_kategori = 21;
                            return view('sbi.kategori_uraian_var1', compact('versions','kode_bagian','kode_bagian_kategori'));   
                            break;
                        }
                        case '9':
                        {
                            $kode_bagian_kegiatan = $kode_bagian;
                            return view('sbi.menu_kategori', compact('versions','kode_bagian_kegiatan'));   
                            break;
                        }
                        case '10':
                        {
                            $kode_bagian_kegiatan = $kode_bagian;
                            return view('sbi.menu_kategori', compact('versions','kode_bagian_kegiatan'));   
                            break;
                        }
                        case '11':
                        {
                            $kode_bagian_kegiatan = $kode_bagian;
                            return view('sbi.menu_kategori', compact('versions','kode_bagian_kegiatan'));   
                            break;
                        }
                        case '12':
                        {
                            $kode_bagian_kategori = 29;
                            $kode_bagian_kegiatan = $kode_bagian;
                            return view('sbi.kategori_var1', compact('versions','kode_bagian_kegiatan','kode_bagian_kategori'));   
                            break;
                        }
                        case '13':
                        {
                            $kode_bagian_kegiatan = $kode_bagian;
                            return view('sbi.menu_kategori', compact('versions','kode_bagian_kegiatan'));   
                            break;
                        }
                        case '14':
                        {
                            $kode_bagian_kegiatan = $kode_bagian;
                            return view('sbi.menu_kategori', compact('versions','kode_bagian_kegiatan'));   
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
                        {
                            $kode_bagian_kategori = $kode_bagian;
                            $kode_bagian_kegiatan = 2;
                            return view('sbi.jalan_dinas_1', compact('versions','kode_bagian_kategori','kode_bagian_kegiatan'));
                            break;
                        }
                        case '3':
                        {
                            $kode_bagian_kategori = $kode_bagian;
                            $kode_bagian_kegiatan = 2;
                            return view('sbi.jalan_dinas_2', compact('versions','kode_bagian_kegiatan','kode_bagian_kategori'));   
                            break;
                        }
                        case '4':
                        {
                            $kode_bagian_kategori = $kode_bagian;
                            $kode_bagian_kegiatan = 2;
                            return view('sbi.jalan_dinas_3', compact('versions','kode_bagian_kegiatan','kode_bagian_kategori'));   
                            break;
                        }
                        case '5':
                        {
                            $kode_bagian_kategori = $kode_bagian;
                            $kode_bagian_kegiatan = 2;
                            return view('sbi.uraian_sub1_var1', compact('versions','kode_bagian_kegiatan','kode_bagian_kategori'));   
                            break;
                        }
                        case '6':
                        {
                            $kode_bagian_kategori = $kode_bagian;
                            $kode_bagian_kegiatan = 2;
                            return view('sbi.uraian_var1', compact('versions','kode_bagian_kategori','kode_bagian_kegiatan'));   
                            break;
                        }
                        case '7':
                        {
                            $kode_bagian_kategori = $kode_bagian;
                            $kode_bagian_kegiatan = 2;
                            return view('sbi.jalan_dinas_6', compact('versions','kode_bagian_kategori','kode_bagian_kegiatan'));   
                            break;
                        }
                        case '8':
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

                        {
                            $kode_bagian_kategori = $kode_bagian;
                            $kode_bagian_kegiatan = 2;
                            return view('sbi.uraian_var1', compact('versions','kode_bagian_kategori','kode_bagian_kegiatan')); 
                            break;
                        }
                        case '10':
                        {
                            $kode_bagian_kategori = $kode_bagian;
                            $kode_bagian_kegiatan = 4;
                            return view('sbi.uraian_var1', compact('versions','kode_bagian_kategori','kode_bagian_kegiatan'));   
                            break;
                        }
                        case '11':
                        {
                            $kode_bagian_kategori = $kode_bagian;
                            $kode_bagian_kegiatan = 4;
                            return view('sbi.uraian_var1', compact('versions','kode_bagian_kategori','kode_bagian_kegiatan'));   
                            break;
                        }
                        case '12':
                        {
                            $kode_bagian_kategori = $kode_bagian;
                            $kode_bagian_kegiatan = 4;
                            return view('sbi.honorarium_dosen', compact('versions','kode_bagian_kategori','kode_bagian_kegiatan'));   
                            break;
                        }
                        case '13':
                        {
                            $kode_bagian_kategori = $kode_bagian;
                            $kode_bagian_kegiatan = 4;
                            return view('sbi.uraian_sub1_var1', compact('versions','kode_bagian_kategori','kode_bagian_kegiatan'));   
                            break;
                        }
                        case '14':
                        {
                            $kode_bagian_kategori = $kode_bagian;
                            $kode_bagian_kegiatan = 4;
                            return view('sbi.uraian_var1', compact('versions','kode_bagian_kategori','kode_bagian_kegiatan'));   
                            break;
                        }
                        case '15':
                        {
                            $kode_bagian_kategori = $kode_bagian;
                            $kode_bagian_kegiatan = 4;
                            return view('sbi.uraian_var1', compact('versions','kode_bagian_kategori','kode_bagian_kegiatan'));   
                            break;
                        }
                        case '16':
                        {
                            $kode_bagian_kategori = $kode_bagian;
                            $kode_bagian_kegiatan = 4;
                            return view('sbi.uraian_var1', compact('versions','kode_bagian_kategori','kode_bagian_kegiatan'));   
                            break;
                        }
                        case '17':
                        {
                            $kode_bagian_kategori = $kode_bagian;
                            $kode_bagian_kegiatan = 4;
                            return view('sbi.honorarium_tt_sub2_var1', compact('versions','kode_bagian_kategori','kode_bagian_kegiatan'));   
                            break;
                        }
                        case '22':
                        {
                            $kode_bagian_kategori = $kode_bagian;
                            $kode_bagian_kegiatan = 9;
                            return view('sbi.kategori_sub1_var3', compact('versions','kode_bagian_kegiatan','kode_bagian_kategori'));   
                            break;
                        }
                        case '23':
                        {
                            $kode_bagian_kategori = $kode_bagian;
                            $kode_bagian_kegiatan = 9;
                            return view('sbi.uraian_var1', compact('versions','kode_bagian_kategori','kode_bagian_kegiatan'));   
                            break;
                        }
                        case '24':
                        {
                            $kode_bagian_kategori = $kode_bagian;
                            $kode_bagian_kegiatan = 9;
                            return view('sbi.uraian_var1', compact('versions','kode_bagian_kategori','kode_bagian_kegiatan'));   
                            break;
                        }
                        case '25':
                        {
                            $kode_bagian_kategori = $kode_bagian;
                            $kode_bagian_kegiatan = 10;
                            return view('sbi.biaya_personel_sub2_var4', compact('versions','kode_bagian_kegiatan','kode_bagian_kategori'));   
                            break;
                        }
                        case '26':
                        {
                            $kode_bagian_kategori = $kode_bagian;
                            $kode_bagian_kegiatan = 10;
                            return view('sbi.biaya_non_personel_sub2_ket', compact('versions','kode_bagian_kegiatan','kode_bagian_kategori'));   
                            break;
                        }
                        case '27':
                        {
                            $kode_bagian_kategori = $kode_bagian;
                            $kode_bagian_kegiatan = 11;
                            return view('sbi.spmi_uraian_var3', compact('versions','kode_bagian_kegiatan','kode_bagian_kategori'));   
                            break;
                        }
                        case '28':
                        {
                            $kode_bagian_kategori = $kode_bagian;
                            $kode_bagian_kegiatan = 11;
                            return view('sbi.uraian_var1', compact('versions','kode_bagian_kategori','kode_bagian_kegiatan'));   
                            break;
                        }
                        case '30':
                        {
                            $kode_bagian_kategori = $kode_bagian;
                            $kode_bagian_kegiatan = 13;
                            return view('sbi.uraian_var1', compact('versions','kode_bagian_kategori','kode_bagian_kegiatan'));   
                            break;
                        }
                        case '31':
                        {
                            $kode_bagian_kategori = $kode_bagian;
                            $kode_bagian_kegiatan = 13;
                            return view('sbi.uraian_var1', compact('versions','kode_bagian_kategori','kode_bagian_kegiatan'));   
                            break;
                        }
                        case '32':
                        {
                            $kode_bagian_kategori = $kode_bagian;
                            $kode_bagian_kegiatan = 13;
                            return view('sbi.inap_uraian_var4', compact('versions','kode_bagian_kategori','kode_bagian_kegiatan'));   
                            break;
                        }
                        case '33':
                        {
                            $kode_bagian_kategori = $kode_bagian;
                            $kode_bagian_kegiatan = 13;
                            return view('sbi.pesawat_uraian_var2', compact('versions','kode_bagian_kategori','kode_bagian_kegiatan'));   
                            break;
                        }
                        case '34':
                        {
                            $kode_bagian_kegiatan = 14;
                            $kode_bagian_kategori = $kode_bagian;
                            return view('sbi.subkategori_sub1_var1', compact('versions','kode_bagian_kegiatan','kode_bagian_kategori'));   
                            break;
                        }
                        case '35':
                        {
                            $kode_bagian_kegiatan = 14;
                            $kode_bagian_kategori = $kode_bagian;
                            return view('sbi.subkategori_sub1_var1', compact('versions','kode_bagian_kegiatan','kode_bagian_kategori'));   
                            break;
                        }
                        case '36':
                        {
                            $kode_bagian_kegiatan = 14;
                            $kode_bagian_kategori = $kode_bagian;
                            return view('sbi.subkategori_var3', compact('versions','kode_bagian_kegiatan','kode_bagian_kategori'));   
                            break;
                        }
                        case '37':
                        {
                            $kode_bagian_kegiatan = 14;
                            $kode_bagian_kategori = $kode_bagian;
                            return view('sbi.subkategori_sub1_var1', compact('versions','kode_bagian_kegiatan','kode_bagian_kategori'));   
                            break;
                        }
                        case '38':
                        {
                            $kode_bagian_kegiatan = 14;
                            $kode_bagian_kategori = $kode_bagian;
                            return view('sbi.subkategori_sub1_var1', compact('versions','kode_bagian_kegiatan','kode_bagian_kategori'));   
                            break;
                        }
                        case '39':
                        {
                            $kode_bagian_kegiatan = 14;
                            $kode_bagian_kategori = $kode_bagian;
                            return view('sbi.subkategori_sub1_var1', compact('versions','kode_bagian_kegiatan','kode_bagian_kategori'));   
                            break;
                        }
                        case '40':
                        {
                            $kode_bagian_kegiatan = 14;
                            $kode_bagian_kategori = $kode_bagian;
                            return view('sbi.subkategori_sub1_var1', compact('versions','kode_bagian_kegiatan','kode_bagian_kategori'));   
                            break;
                        }

                        default:
                            # code...
                            break;
                    } 
                    break;
                }
            
            default:
                return view('sbi.docs', compact('versions'));
                break;
        }
    }
   
    public function getDataId(Request $request) {
        switch ($request->kode_tabel) {
            case '4':
            {
                $list_uraian_kegiatan = Uraian::where('kategori_id',$request->id)->get();
                return response()->json($list_uraian_kegiatan);
                break;
            }
            case '5':
            {
                $list_sub1 = Sub1::where('uraian_id',$request->id)->get();
                return response()->json($list_sub1);
                break;
            }
            case '7':
            {
                $list_penjelasan = Penjelasan::where('kategori_id',$request->id)->get();
                return response()->json($list_penjelasan);
            }
            case '70':
            {
                $list_penjelasan = Penjelasan::where('kegiatan_id',$request->id)->get();
                return response()->json($list_penjelasan);
            }
            case '8':
            {
                $list_penjelasan_sub1 = PenjelasanSub1::where('penjelasan_id',$request->id)->get();
                return response()->json($list_penjelasan_sub1);
            }
             
            default:
                # code...
                break;
        }
    }

    public function search(Request $request)
    {
        $key=$request->keywordsbi;
        $version=Version::where('status',0)->first();
        $jenis_kegiatan= JenisKegiatan::select('id')->where('version_id', $version->id)->get()->toArray();
        // dd($jenis_kegiatan);
        $tampung_jenis_kegiatan = array();
        for ($i=0; $i < count($jenis_kegiatan); $i++) { 
            $tampung_jenis_kegiatan[$i] = $jenis_kegiatan[$i]['id'];
        }

        $kegiatan = Kegiatan::select('id')->wherein('jenis_kegiatan_id', $tampung_jenis_kegiatan)->get()->toArray();
        $tampung_kegiatan = array();
        for ($i=0; $i < count($kegiatan); $i++) { 
            $tampung_kegiatan[$i] = $kegiatan[$i]['id'];
        }

        $kategori = Kategori::select('id')->wherein('kegiatan_id', $tampung_kegiatan)->get()->toArray();
        $tampung_kategori = array();
        for ($i=0; $i < count($kategori); $i++) { 
            $tampung_kategori[$i] = $kategori[$i]['id'];
        }

        $uraian = Uraian::select('id')->wherein('kategori_id', $tampung_kategori)->get()->toArray();
        $tampung_uraian = array();
        for ($i=0; $i < count($uraian); $i++) { 
            $tampung_uraian[$i] = $uraian[$i]['id'];
        }

        $sub1 = Sub1::select('id')->wherein('uraian_id', $tampung_uraian)->get()->toArray();
        $tampung_sub1 = array();
        for ($i=0; $i < count($sub1); $i++) { 
            $tampung_sub1[$i] = $sub1[$i]['id'];
        }

        $search1 = JenisKegiatan::where('version_id', '=', "{$version->id}")
                ->where('jenis_kegiatan','like', "%{$key}%")
                ->get();
                // dd($search1);
        $search2 = Kegiatan::wherein('jenis_kegiatan_id', $tampung_jenis_kegiatan)
                ->where('nama_kegiatan','like', "%{$key}%")
                ->get();
                // dd($search2);
        $search_tampung = $search2->merge($search1);
        $search3 = Kategori::wherein('kegiatan_id', $tampung_kegiatan)
                ->where('kategori_kegiatan','like', "%{$key}%")
                ->get();        
        $search_tampung2 = $search_tampung->merge($search3);

        $search4 = DB::table('kategori')->join('uraian','kategori.id','=','uraian.kategori_id')
        ->select('kategori.kategori_kegiatan','kategori.kode_tabel','kategori.kode_bagian','uraian.uraian_kegiatan')
        ->wherein('uraian.kategori_id',$tampung_kategori)
        ->where('uraian.uraian_kegiatan','like', "%{$key}%")
        ->get();

        $search5 = DB::table('kategori')->join('uraian','kategori.id','=','uraian.kategori_id')
        ->join('sub1','uraian.id','=','sub1.uraian_id')
        ->select('kategori.kategori_kegiatan','kategori.kode_tabel','kategori.kode_bagian','sub1.uraian_kegiatan')
        ->wherein('sub1.uraian_id',$tampung_uraian)
        ->where('sub1.uraian_kegiatan','like', "%{$key}%")
        ->get();
        $search_45 = $search4->merge($search5);

        $search6 = DB::table('kategori')->join('uraian','kategori.id','=','uraian.kategori_id')
        ->join('sub1','uraian.id','=','sub1.uraian_id')
        ->join('sub2','sub1.id','=','sub2.sub1_id')
        ->select('kategori.kategori_kegiatan','kategori.kode_tabel','kategori.kode_bagian','sub2.uraian_kegiatan')
        ->wherein('sub2.sub1_id',$tampung_sub1)
        ->where('sub2.uraian_kegiatan','like', "%{$key}%")
        ->get();
        $search_tampung_45 = $search_45->merge($search6);

        // dd($search4);

        // $search = $search_tampung2->merge($search_tampung_45);
        $search = $search_tampung2->union($search_tampung_45);

        // dd($search);
        $count=count($search);
        
        return view('hasil_sbi', compact('search', 'key','count'));   
    }

    public function store(Request $request)
    {
        switch ($request->kode_tabel) {
            case '1':
                {
                    $jenis_kegiatan = new JenisKegiatan;
                    $jenis_kegiatan->version_id = $request->version;
                    $jenis_kegiatan->jenis_kegiatan = $request->jenis_kegiatan;
                    $jenis_kegiatan->kode_tabel=1;
                    $jenis_kegiatan->save();
                    break;
                }
            case '2':
                {
                    $last_row=Kegiatan::all()->last();
                    $current_kode_bagian = $last_row->kode_bagian;
                    $kegiatan= new Kegiatan;
                    $kegiatan->jenis_kegiatan_id = $request->jenis_kegiatan;
                    $kegiatan->nama_kegiatan = $request->nama_kegiatan;
                    $kegiatan->kode_tabel=2;
                    $kegiatan->kode_bagian = $current_kode_bagian+1;
                    $kegiatan->save();
                    break;
                }
            case '3':
                {
                    $last_row=Kategori::all()->last();
                    $current_kode_bagian = $last_row->kode_bagian;

                    $kategori= new Kategori;
                    $kategori->kegiatan_id = $request->kegiatan_id;
                    $kategori->kategori_kegiatan = $request->kategori_kegiatan;
                    $kategori->kode_tabel=3;
                    if ($request->kode_bagian == null) {
                        $kategori->kode_bagian = $current_kode_bagian+1;
                    }
                    else
                        $kategori->kode_bagian = $request->kode_bagian;
                    $kategori->satuan = $request->satuan_kategori;
                    $kategori->var1 = $request->var1_kategori;
                    $kategori->save();
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
                    break;
                }
            case '5':
                {
                    $sub1= new Sub1;
                    $sub1->uraian_id = $request->list_uraian_kegiatan;
                    $sub1->uraian_kegiatan = $request->uraian_kegiatan;
                    $sub1->satuan = $request->satuan;
                    $sub1->keterangan = $request->keterangan;
                    $sub1->var1 = $request->var1;
                    $sub1->var2 = $request->var2;
                    $sub1->var3 = $request->var3;
                    $sub1->var4 = $request->var4;
                    $sub1->kode_tabel=5;
                    $sub1->save();
                    break;
                }
            case '6':
                {
                    $sub2= new Sub2;
                    $sub2->sub1_id = $request->list_sub1;
                    $sub2->uraian_kegiatan = $request->uraian_kegiatan;
                    $sub2->satuan = $request->satuan;
                    $sub2->keterangan = $request->keterangan;
                    $sub2->var1 = $request->var1;
                    $sub2->var2 = $request->var2;
                    $sub2->var3 = $request->var3;
                    $sub2->var4 = $request->var4;
                    $sub2->kode_tabel=6;
                    $sub2->save();
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
            case '8':
                {
                    $penjelasan_sub1= new PenjelasanSub1;
                    $penjelasan_sub1->penjelasan_id = $request->list_penjelasan;
                    $penjelasan_sub1->penjelasan = $request->penjelasan_sub1;
                    $penjelasan_sub1->kode_tabel=8;
                    $penjelasan_sub1->save();
                    break;
                }
            case '9':
                {
                    $penjelasan_sub2= new PenjelasanSub2;
                    $penjelasan_sub2->penjelasan_sub1_id = $request->list_penjelasan_sub1;
                    $penjelasan_sub2->penjelasan = $request->penjelasan_sub2;
                    $penjelasan_sub2->kode_tabel=9;
                    $penjelasan_sub2->save();
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
            case '8':
                {
                    $id = $request->input('id');
                    $data = PenjelasanSub1::find($id);
                    break;
                }
            case '9':
                {
                    $id = $request->input('id');
                    $data = PenjelasanSub2::find($id);
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
                    $kategori->satuan = $request->edit_kategori_satuan;
                    $kategori->var1 = $request->edit_kategori_var1;
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
                    $sub1->keterangan = $request->sub1_edit_keterangan;
                    $sub1->var1 = $request->sub1_edit_var1;
                    $sub1->var2 = $request->sub1_edit_var2;
                    $sub1->var3 = $request->sub1_edit_var3;
                    $sub1->var4 = $request->sub1_edit_var4;
                    $sub1->save();
                    break;
                }
            case '6':
                {
                    $sub2 = Sub2::find($request->edit_id6);
                    $sub2->sub1_id = $request->edit_sub1_id;
                    $sub2->uraian_kegiatan = $request->edit_sub2_uraian;
                    $sub2->satuan = $request->edit_sub2_satuan;
                    $sub2->keterangan = $request->edit_sub2_keterangan;
                    $sub2->var1 = $request->edit_sub2_var1;
                    $sub2->var2 = $request->edit_sub2_var2;
                    $sub2->var3 = $request->edit_sub2_var3;
                    $sub2->var4 = $request->edit_sub2_var4;
                    $sub2->save();
                    break;
                }
            case '7':
                {
                    $penjelasan = Penjelasan::find($request->edit_id4);
                    $penjelasan->kegiatan_id = $request->edit_kegiatan4;
                    $penjelasan->kategori_id = $request->edit_kategori4;
                    $penjelasan->penjelasan = $request->edit_penjelasan;
                    $penjelasan->save();
                    break;
                }
            case '8':
                {
                    $penjelasan_sub1 = PenjelasanSub1::find($request->edit_id5);
                    $penjelasan_sub1->penjelasan_id = $request->edit_penjelasan_id;
                    $penjelasan_sub1->penjelasan = $request->edit_penjelasan_sub1;
                    $penjelasan_sub1->save();
                    break;
                }
            case '9':
                {
                    $penjelasan_sub2 = PenjelasanSub2::find($request->edit_id7);
                    $penjelasan_sub2->penjelasan_sub1_id = $request->edit_penjelasan_sub1_id;
                    $penjelasan_sub2->penjelasan = $request->edit_penjelasan_sub2;
                    $penjelasan_sub2->save();
                    break;
                }                
            default:
                # code...
                break;
        }
        return redirect()->back()->with('message_success',"Berhasil mengubah data");
    }

    public function destroy(Request $request)
    {
        // dd($request->kode_tabel);
        switch ($request->kode_tabel) {
            case '3':
                $kategori = Kategori::find($request->id);
                $kategori->delete();
                break;
            
            default:
                # code...
                break;
        }
        return redirect()->back()->with('message_success',"Berhasil menghapus data");
    }

}
    