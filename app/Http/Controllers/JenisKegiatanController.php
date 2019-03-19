<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\JenisKegiatan;
use App\Kegiatan;
use App\Kategori;
use App\Uraian;
use App\Sub1;

class JenisKegiatanController extends Controller
{
    public function index() {
       	$jenis_kegiatans = JenisKegiatan::with('kategori')->get();
       	// dd($jenis_kegiatans);
       	return view('dokumen', compact('jenis_kegiatans'));
    }
}
