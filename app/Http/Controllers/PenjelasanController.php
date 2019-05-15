<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\penjelasan;

class PenjelasanController extends Controller
{
    public function index()
    {
    	$jelas = DB::table('penjelasan')->get();
    	//return view('penjelasan');
    	return view ("penjelasan", compact('jelas'));
    }
}
