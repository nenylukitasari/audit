<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
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

    public function store(Request $request)
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
        return redirect('/versisbi')->with('message_success',"Berhasil menambahkan versi"); 
        //sleep(2);
        // return response()->json("berhasil");
        //exit(json_encode(['message_success'=>"Berhasil menambahkan versi"]));
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
        return redirect('/versisbi');
    }

    public function search(Request $request)
    {
        $key=$request->keywordsbi;

        // $search=Version::where('status',0)
        // ->whereHas('jenis_kegiatan', function ($query) use ($key){
        //     $query->where('jenis_kegiatan', 'like', "%{$key}%");
        //     })
        //     ->get();

        // $search = JenisKegiatan::where('jenis_kegiatan','like', "%{$key}%")
        //                     ->with(['version' => function ($query) use ($key) {            
        //                         $query->where('status','=', 0);
        //                     }])                        
        //                     ->get();

        $search = Version::where('status',0) 
                    ->with(['kegiatan' => function ($query) use ($key) {            
                        $query->where('jenis_kegiatan.jenis_kegiatan','like', "%{$key}%");
                        $query->orWhere('kegiatan.nama_kegiatan','like', "%{$key}%");
                            // ->with(['kategori' => function ($query) use ($key) {            
                            //     $query->where('kategori_kegiatan','like', "%{$key}%");
                            // }])                                              
                    }])                                              
                    ->get();

        // dd($search);
        
        return view('hasil_sbi', compact('search', 'key'));
        
        
    }

    // public function search(Request $request) {
        // dd($request->kode)
        // switch ($request->kode) {
        //  case '2':
        //     {
        // dd($request->keywordsbi);
                // $versions = Version::where('status','=', 0)->get();
                // foreach ($versions as $version) {
                //     foreach ($version->jenis_kegiatan as $jk) {
                //         $search = JenisKegiatan::where('jenis_kegiatan','like', "%{$request->keywordsbi}%")->get();
                //     }
                // }

                // $key=$request->keywordsbi;
                // dd($key);
                // $search = Version::where('status','=', 0)
                // ->whereHas('jenis_kegiatan', function($jk) use ($key) {
                //       $jk->where('jenis_kegiatan','like', "%{$key}%");  
                // })

                // ->get();

                // $search = JenisKegiatan::query()
                //    ->where('jenis_kegiatan', 'LIKE', "%{$key}%") 
                //    // ->orWhere('email', 'LIKE', "%{$searchTerm}%") 
                //    ->get();

                // dd($search);
                   



                            // ->with(['jenis_kegiatan' => function ($query) use ($key) {            
                            //     $query->where('jenis_kegiatan','like', "%{$key}%");  

                            //     // ->with(['kegiatan' => function ($query) use ($key) {            
                            //     //     $query->where('nama_kegiatan','like', "%{$key}%");  
                            //     // }])

                            // }])
                            // ->get();

                // dd($search);
                // break;
     //        }
         
     //     default:
     //         # code...
     //         break;
     // }
    //  return view('hasil_sbi', compact('search', 'key'));
     
    // }

    // public function search(Request $request)
    // {
    //      $query=$request->keywordsbi;
    //      // dd($query);
    //     // $versions = Version::where('status','=', 0)->get();
    //         // $searchResults = (new Search())
    //         // // ->registerAspect(VersionSearchAspect::class)
    //         // // ->where(Version::class, )
    //         //     // ->registerAspect(JenisKegiatan::class)
    //         //     //->registerModel(JenisKegiatan::class, 'jenis_kegiatan')
    //         //     ->registerModel(Kegiatan::class, 'nama_kegiatan')
    //         //     ->registerModel(Kategori::class, 'kategori_kegiatan')
    //         //     // // ->registerModel(Uraian::class, 'uraian_kegiatan')
    //         //     // // ->registerModel(Sub1::class, 'uraian_kegiatan')
    //         //     // // ->registerModel(Sub2::class, 'uraian_kegiatan')
    //         //     // // ->registerModel(Penjelasan::class, 'penjelasan')
    //         //     // // ->registerModel(PenjelasanSub1::class, 'penjelasan')
    //         //     // // ->registerModel(PenjelasanSub2::class, 'penjelasan')
    //         //     // // ->perform(Version::where('status','=', 0))
    //         //     ->perform($request->input('query'));
    //     // $searchTerm = $request->query;


    //     // $searchResults= Version::query()
    //     //                 ->where('status' , 0)
    //     //                 ->whereLike(['version'], $request->query)->get();


    //             $searchResults = (new Search())
    //                            ->registerAspect(VersionSearchAspect::class)
    //                            ->search($query);

    //     return view('hasil_sbi', compact('searchResults','query'));
    // }

    // public function search (Request $request)
    // {
    //     $query=$request->keywordsbi;
    //     // dd($query);

    //     // $search = Version::where('status', 0)
    //     //     ->search($query, null, true)
    //     //     ->with('jenis_kegiatan','kegiatan')
    //     //     ->get();

    //         // $users = User::search("John Doe", null, true)->get();

          

    //         // ->paginate(20);

    //     // $search = Version::search($query)
    //     //         ->with('jenis_kegiatan')
    //     //         ->paginate(5);


    //     return view('hasil_sbi', compact('search', 'query'));
    // }
            
}
