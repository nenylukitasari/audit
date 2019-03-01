<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kegiatan;
use DB;

class LampiranController extends Controller
{
    public function lampiranI()
    {
        $lampiranI=DB::table('kegiatan')
        ->join('jenis_kegiatan', function ($join){
            $join->on('jenis_kegiatan.id_jenis_kegiatan', '=', 'kegiatan.id_jenis_kegiatan')
                 ->where('kegiatan.id_jenis_kegiatan', '=', 1);
        })->get();
		return view('lampiranI',compact('lampiranI'));
    }

    public function lampiranII()
    {
        $lampiranII=DB::table('kegiatan')
        ->join('jenis_kegiatan', function ($join){
            $join->on('jenis_kegiatan.id_jenis_kegiatan', '=', 'kegiatan.id_jenis_kegiatan')
                 ->where('kegiatan.id_jenis_kegiatan', '=', 2);
        })->get();
		return view('lampiranII',compact('lampiranII'));
    }
}
