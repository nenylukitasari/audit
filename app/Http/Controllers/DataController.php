<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Validator;
use App\JenisKegiatan;
use App\Kegiatan;
use App\Kategori;
use App\Uraian;
use App\Sub1;
use App\Sub2;

class DataController extends Controller
{
    public function index(Request $request) {
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

        return view('docs', compact('jenis_kegiatans','month'));
    }
}
