<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\JenisKegiatan;
use DB;

class JenisKegiatanController extends Controller
{
    public function index()
    {
        $jenis_kegiatan=DB::table('jenis_kegiatan')
        ->get();
		
		return view('welcome',compact('jenis_kegiatan'));
    }
}
