<?php

namespace App\Http\Controllers;

use App\Kda_template;
use Illuminate\Http\Request;
use DB;

class SummernoteController extends Controller
{
    public function index()
    {
        $summernote = DB::table('kda_template')->where('id', 4)->get();
        //return $summernote;
        return view('summernote',compact('summernote'));
    }

    public function store(Request $request)
    {
        $tipe= $request->tipe;
        $detail=$request->summernoteInput;
        
        $dom = new \domdocument();
        $dom->loadHtml($detail, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
        $images = $dom->getelementsbytagname('img');
        
        //loop over img elements, decode their base64 src and save them to public folder,
        //and then replace base64 src with stored image URL.
        foreach($images as $k => $img){
            $data = $img->getattribute('src');
            
            list($type, $data) = explode(';', $data);
            list(, $data)      = explode(',', $data);
            
            $data = base64_decode($data);
            $image_name= time().$k.'.png';
            $path = public_path() .'/'. $image_name;
            
            file_put_contents($path, $data);
            
            $img->removeattribute('src');
            $img->setattribute('src', $image_name);
        }
        
        $detail = $dom->savehtml();
        $summernote = new Summernote;
        $summernote->tipe = $tipe;
        $summernote->content = $detail;
        $summernote->save();
        return redirect('/summernote_display');
    }

    public function show(Summernote $summernote)
    {
        $summernote = DB::table('kda_template')->get();
        //return $summernote;
        return view('summernote_display',compact('summernote'));
    }

    public function update(Request $request, Summernote $summernote)
    {
        // dd($request);
        // exit;
        // $summernote->id = 5;
        $summernote->tipe = $request->tipe;
        $summernote->content = $request->konten;
        $summernote->save();
        return redirect('/templatekda');
    }

    public function pilihtemplate(Request $request)
    {
        $id = $request->input('id');
        $summernote = DB::table('kda_template')->where('id', $id)->first();

        return response()->json($summernote);
        //return $summernote;
    }
}
