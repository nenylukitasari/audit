<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\MakanLembur;
use App\KategoriMakan;
use App\BiayaKonsumsi;
use DB;
use Validator;
use Response;
use View;

class MakanController extends Controller
{
    
    protected $rules =
    [
        'title' => 'required',
        'satuan' => 'required|regex:/^[a-z ,.\'-]+$/i',
        'bruto' => 'required|numeric|regex:/^[a-z ,.\'-]+$/i'
    ];

    public function index() {
        $kategori_makans = KategoriMakan::with('makan_lembur_biaya_konsumsi')->get();
        // dd($kategori_makans);

        return view('makan_lembur', compact('kategori_makans'));
    }

    public function fetch(Request $request)
    {
        $data = [];
        if($request->has('q')){
            $search = $request->q;
            $data = DB::table("kategori_makan")
                    ->select("id","kategori_makan")
                    ->where('kategori_makan','LIKE',"%$search%")
                    ->get();
        }
        else {
            $data = DB::table("kategori_makan")
                    ->select("id","kategori_makan")
                    ->get();
        }
        return response()->json($data);
    }

    public function store(Request $request)
    {
        $validator = Validator::make(Input::all(), $this->rules);
        if ($validator->fails()) {
            return Response::json(array('errors' => $validator->getMessageBag()->toArray()));
        } else {
            $kategori_makans = new Kategori_makan();
            $kategori_makans->title = $request->title;
            $kategori_makans->satuan = $request->satuan;
            $kategori_makans->bruto = $request->bruto;
            $kategori_makans->save();
            return response()->json($kategori_makans);
        }
    }


}