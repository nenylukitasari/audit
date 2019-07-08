<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Collection;
use DB;
use Validator;
use App\Version;
use App\JenisKegiatan;
use App\PeraturanLain;
use App\VersionSearchAspect;
use App\Kegiatan;
use App\Kategori;
use App\Penjelasan;
use App\PenjelasanSub1;
use App\PenjelasanSub2;
use App\Uraian;
use App\Sub1;
use App\Sub2;
use App\Provinsi;
use Carbon\Carbon;
use Spatie\Searchable\Search;

class VersiController extends Controller
{
    public function index() {
        $versions = DB::table('version')
        ->orderBy('status', 'asc')
        ->get();
        return view('versisbi', compact('versions'));
    }
    public function index2() {
        $versions = DB::table('version')
        ->orderBy('status', 'asc')
        ->get();
        return view('versitableload', compact('versions'));
    }
    public function store(Request $request)
    {
        $rules["versi"] = 'required';
        $messages = [
            'required' => 'Lengkapi dahulu data :attribute.',
        ];
        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->passes())
        {
            $versions = Version::where('status','=', 0)->get();
            foreach ($versions as $version) {
                $version = Version::find($version->id);
                $version->status = 1;
                $version->save();
                $new_version = $version->replicate();
                $new_version->version = $request->versi;
                $new_version->status = 0;
                $new_version->save();
                // foreach ($version->provinsi as $provinsi) {
                //         $provinsi = Provinsi::find($provinsi->id);
                //         $new_provinsi = $provinsi->replicate();
                //         $new_provinsi->version_id = $new_version->id;
                //         $new_provinsi->save();
                //     }
                foreach ($version->peraturan_lain as $pl) {
                    $peraturan_lain = PeraturanLain::find($pl->id);
                    $new_peraturan_lain = $peraturan_lain->replicate();
                    $new_peraturan_lain->version_id = $new_version->id;
                    $new_peraturan_lain->save();
                }
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
                        foreach ($kegiatan->penjelasan as $penjelasan_kegiatan) {
                            $penjelasan_kegiatan = Penjelasan::find($penjelasan_kegiatan->id);
                            $new_penjelasan_kegiatan = $penjelasan_kegiatan->replicate();
                            $new_penjelasan_kegiatan->version_id = $new_version->id;
                            if($new_penjelasan_kegiatan->kegiatan_id != null)
                                $new_penjelasan_kegiatan->kegiatan_id = $new_kegiatan->id;
                            $new_penjelasan_kegiatan->save();
                                foreach ($penjelasan_kegiatan->penjelasan_sub1 as $penjelasan_kegiatan_sub1) {
                                    $penjelasan_kegiatan_sub1 = PenjelasanSub1::find($penjelasan_kegiatan_sub1->id);
                                    $new_penjelasan_kegiatan_sub1 = $penjelasan_kegiatan_sub1->replicate();
                                    $new_penjelasan_kegiatan_sub1->penjelasan_id = $new_penjelasan_kegiatan->id;
                                    $new_penjelasan_kegiatan_sub1->save();
                                    foreach ($penjelasan_kegiatan_sub1->penjelasan_sub2 as $penjelasan_kegiatan_sub2) {
                                        $penjelasan_kegiatan_sub2 = PenjelasanSub2::find($penjelasan_kegiatan_sub2->id);
                                        $new_penjelasan_kegiatan_sub2 = $penjelasan_kegiatan_sub2->replicate();
                                        $new_penjelasan_kegiatan_sub2->penjelasan_sub1_id = $new_penjelasan_kegiatan_sub1->id;
                                        $new_penjelasan_kegiatan_sub2->save();
                                    }
                                }
                            }
                        foreach ($kegiatan->kategori as $kategori) {
                            $kategori = Kategori::find($kategori->id);
                            $new_kategori = $kategori->replicate();
                            $new_kategori->kegiatan_id = $new_kegiatan->id;
                            $new_kategori->save();
                            foreach ($kategori->penjelasan as $penjelasan) {
                                $penjelasan = Penjelasan::find($penjelasan->id);
                                $new_penjelasan = $penjelasan->replicate();
                                $new_penjelasan->version_id = $new_version->id;
                                if ($new_penjelasan->kategori_id != null) 
                                    $new_penjelasan->kategori_id = $new_kategori->id;
                                $new_penjelasan->save();
                                foreach ($penjelasan->penjelasan_sub1 as $penjelasan_sub1) {
                                    $penjelasan_sub1 = PenjelasanSub1::find($penjelasan_sub1->id);
                                    $new_penjelasan_sub1 = $penjelasan_sub1->replicate();
                                    $new_penjelasan_sub1->penjelasan_id = $new_penjelasan->id;
                                    $new_penjelasan_sub1->save();
                                    }
                                }
                            foreach ($kategori->uraian as $uraian) {
                                $uraian = Uraian::find($uraian->id);
                                $new_uraian = $uraian->replicate();
                                $new_uraian->kategori_id = $new_kategori->id;
                                // belum bisa update provinsi_id
                                // $version_provinsi = Provinsi::where('version_id', '=', $new_version->id);
                                // if ($new_uraian->provinsi_id != null) {
                                //     foreach ($version_provinsi as $prov) {
                                //         $new_uraian->provinsi_id = $prov->id;
                                //     }
                                // }
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
            return response()->json(['success'=>'done']);
        }
        return response()->json(['error'=>$validator->errors()->all()]);
    }

    public function pilihversi(Request $request)
    {
        $old_versions = Version::where('status','=', 0)->get();
        foreach ($old_versions as $old_version) {
            $old_version->status = 1;
            $old_version->save();   
        }
        $version = Version::find($request->versi_id);
        $version->status = 0;
        $version->save();
        return redirect('/versisbi');
    }
    public function getData(Request $request)
    {
        $id = $request->input('id');
        $data = Version::find($id);
        return response()->json($data);
    }
    public function update(Request $request)
    {
        $version = Version::find($request->id2);
        $version->version = $request->edit_version;        
        $version->save();
        return redirect('/versisbi')->with('message_success',"Berhasil mengubah versi"); 
    }
}
