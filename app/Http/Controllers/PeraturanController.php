<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Response;
use App\PeraturanLain;
use App\Version;
use DB;
use Validator;

class PeraturanController extends Controller
{
    public function index()
    {   
        $version = Version::where('status',0)->first();
        $peraturan_lains = PeraturanLain::withTrashed()
        					->where('version_id', $version->id)
        					->orderBy('deleted_at', 'asc')
        					->get();

        $peraturan_lain_user = DB::table('peraturan_lain')->where('deleted_at', null)->get();
        return view('sbi.peraturan_lain', compact('peraturan_lains','version','peraturan_lain_user'));
    }

    public function upload(Request $request){
        $rules["file"] = 'required|file|mimes:pdf,jpeg,png,jpg,doc,docx,xlsx,xls,ppt,pptx,zip';
        $validator = Validator::make($request->all(), $rules);
        if ($validator->passes())
        {
            $file = $request->file('file');
            $upload_folder = 'data_file';
            $nama_file = $file->getClientOriginalName();

            // upload file
            $file->move($upload_folder,$nama_file);

            $peraturan_lain= new PeraturanLain;
            $peraturan_lain->version_id = $request->version;
            $peraturan_lain->nama_peraturan = $request->peraturan;
            $peraturan_lain->link_keterangan = $nama_file;
            $peraturan_lain->save();
            return redirect()->back()->with('message_success',"Berhasil mengupload file");
        }
        else
        {
            $messages=$validator->messages();
            return redirect()->back()->withErrors($validator);
        }
        // return redirect()->back()->with('message_error',"Gagal menambahkan data. Ekstensi file tidak didukung.");
    }

    public function download($filename)
    {
        $file_path = public_path('data_file') . "/" . $filename;
        return Response::download($file_path);
    }

    public function store(Request $request)
    {
    	$peraturan_lain= new PeraturanLain;
        $peraturan_lain->version_id = $request->version;
        $peraturan_lain->nama_peraturan = $request->peraturan;
        $peraturan_lain->link_keterangan = $request->keterangan;
        $peraturan_lain->save();
        return redirect()->back()->with('message_success',"Berhasil menambahkan data");
    }
    public function getData(Request $request)
    {
    	$id = $request->input('id');
    	$data = PeraturanLain::find($id);
    	return response()->json($data);
    }
    public function update(Request $request)
    {
    	switch ($request->kode) {
    		case '1':
    			{
			    	$peraturan_lain = PeraturanLain::find($request->edit_id_peraturan);
				    $peraturan_lain->nama_peraturan = $request->edit_peraturan;
				    $peraturan_lain->link_keterangan = $request->edit_keterangan;
				    $peraturan_lain->save();
    				break;
    			}
    		case '2':
	    		{
	    			$peraturan_lain = PeraturanLain::find($request->edit_id_peraturan2);
				    $peraturan_lain->nama_peraturan = $request->edit_peraturan2;
				    if ($request->edit_keterangan2 != null) {
				    	$peraturan_lain->link_keterangan = $request->edit_keterangan2;	
				    }
				    $peraturan_lain->save();
    				break;
	    		}
    			
    		default:
    			# code...
    			break;
    	}
	    return redirect()->back()->with('message_success',"Berhasil mengubah data");
    }

    public function destroy($id)
    {
        $peraturan_lain = PeraturanLain::find($id);
        $peraturan_lain->delete();
        return redirect()->back()->with('message_success',"Berhasil menghapus data");
    }
    public function restore($id)
    {
        $peraturan_lain = PeraturanLain::onlyTrashed()->find($id);
        $peraturan_lain->restore();
        return redirect()->back()->with('message_success',"Berhasil mengembalikan data");       
    }
}
