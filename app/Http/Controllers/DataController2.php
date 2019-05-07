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
        if ($request->id == 1)
        {
            $kategoris = Kegiatan::where('id', 1)->where('status',0)->get();
            return view('makan_lembur', compact('kategoris'));
        }
        
    }
}
