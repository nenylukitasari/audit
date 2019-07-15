<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\kda;

use App\kda_keterangan;
use App\Kda_pelengkap;
use App\Kda_template;
use Validator;
use App\Kda_temuan;
use App\Berkas;
use App\Kegiatan;
use App\Version;
use Carbon;

class KdaController extends Controller
{
    public function index()
	{
		 $namabulan = array(
				                '01' => 'Januari',
				                '02' => 'Februari',
				                '03' => 'Maret',
				                '04' => 'April',
				                '05' => 'Mei',
				                '06' => 'Juni',
				                '07' => 'Juli',
				                '08' => 'Agustus',
				                '09' => 'September',
				                '10' => 'Oktober',
				                '11' => 'November',
				                '12' => 'Desember',
				        );
		$kda = DB::table('kda')->orderBy('kda.masa_audit','DESC')->get();
		foreach ($kda as $key => $value) {
			$tahun = date("y",strtotime($value->masa_audit));
			$value->bulan = $namabulan[date("m",strtotime($value->masa_audit))];
			$value->tahun = "20${tahun}";
		}
		//dd($kda);
		// $unit = DB::table('unit')->get();
    	//$kda = DB::table('kda')->get();
    	//return response()->json($kda);
		return view ("kdasemua", compact('kda'));
	}
	public function indexmember()
	{
		 $namabulan = array(
				                '01' => 'Januari',
				                '02' => 'Februari',
				                '03' => 'Maret',
				                '04' => 'April',
				                '05' => 'Mei',
				                '06' => 'Juni',
				                '07' => 'Juli',
				                '08' => 'Agustus',
				                '09' => 'September',
				                '10' => 'Oktober',
				                '11' => 'November',
				                '12' => 'Desember',
				        );
		$kda = DB::table('kda')->where('kda.created_by', $_SESSION['username'])->orderBy('kda.masa_audit','DESC')->get();
		foreach ($kda as $key => $value) {
			$tahun = date("y",strtotime($value->masa_audit));
			$value->bulan = $namabulan[date("m",strtotime($value->masa_audit))];
			$value->tahun = "20${tahun}";
		}
		//dd($kda);
		// $unit = DB::table('unit')->get();
    	//$kda = DB::table('kda')->get();
    	//return response()->json($kda);
		return view ("kda", compact('kda'));
	}
	public function berkas()
	{
		//$berkas = kegiatan::with('berkas')->get();
		$berkas = kegiatan::all();
		//dd($berkas);
		return view ("penjelasan", compact('berkas'));

	}
	public function BerkasAdd(Request $request)
	{
		$berkas = new Berkas;
        $berkas->kegiatan_id = $request->kegiatan;
        $berkas->berkas = $request->berkas;
        $berkas->save();
		return redirect()->back()->with('message_success',"Berhasil menambah data berkas");

	}
	public function BerkasDelete($id)
    {
        $berkas = Berkas::find($id);
        $berkas->delete();
        return redirect()->back()->with('message_success',"Berhasil menghapus data");
    }
    public function dataBerkas(Request $request)
    {
        $id = $request->input('id');
        $data = Berkas::find($id);
        return response()->json($data);
    }
    public function updateBerkas(Request $request)
    {
        
            $berkas = Berkas::find($request->edit_id_berkas);
    	    $berkas->kegiatan_id = $request->edit_id_kegiatan;
            $berkas->berkas = $request->edit_berkas;
            $berkas->save();
    	    return redirect()->back()->with('message_success',"Berhasil mengubah data berkas");
    }

	public function buatkda()
	{
		$unit = DB::table('unit')->get();

		//$berkas = kegiatan::all();
		$versions = Version::where('id',1)->get();
		$summernote = DB::table('Kda_template')->where('id','>' ,4)->get();
        return view("buatkda", compact('unit','summernote', 'versions'));
	}
	public function triwulan()
	{
		//$kda = DB::table('kda')->leftjoin('unit','kda.unit','=','unit.id_unit')->get();
    	//$kda = DB::table('kda')->get();
    	//return response()->json($kda);
		$now = Carbon::now();
		$tahun = $now->year;
		$bulan = 12;
		// echo $now->month;
		// echo $now->weekOfYear;
		// echo $now->day;


		//printf("Now: %s", Carbon::now());
		return view ("triwulan", compact('tahun','bulan'));
	}
	public function tambahkda1(Request $request)
    {
    	$input = $request->all();
    	//dd($input);
    	$rules = [];
    	$rules["unit"] = 'required';
    	$rules["masa_audit"] = 'required';
    	$rules["bulan_audit"] = 'required';
    	$messages = [
		    'required' => 'Lengkapi dahulu data :attribute .',
		];
    	$validator = Validator::make($request->all(), $rules, $messages);
    	if ($validator->passes())
    	{
    		$tanggaltampung = $input['masa_audit'];
	        $tanggaltampung .="-01";

	        $kda= new kda;
	        $kda->unit = $input['unit'];
	        $kda->masa_audit = $tanggaltampung;
	        $kda->bulan_audit = $input['bulan_audit'];
	        $kda->jenis = 1;
	        $kda->created_by = $input['auditor'];
	        $kda->save();

	        $jumlah = count($input['kelengkapan']);
	        for ($i=0; $i < $jumlah; ++$i) 
	        {

	            $ket= new Kda_pelengkap;        
	            $ket->kelengkapan = $input['kelengkapan'][$i];
	            $ket->kesediaan= $input['kesediaan'][$i];
	            $ket->jumlah= $input['jumlah'][$i];
	            $ket->nominal = $input['nom'][$i];
	            $ket->kda_id= $kda->id_kda;
	            $ket->save();  
	        }
	        return response()->json(['success'=>'done']);

    	}
    	return response()->json(['error'=>$validator->errors()->all()]);

        
        
    }
    public function tambahkda2(Request $request)
    {
        $input = $request->all();
        // dd($input);
        // exit;
        $rules = [];
        $messages = [
		    'required' => 'Lengkapi dahulu data :attribute .',
		];
        $rules["unit"] = 'required';
        $rules["masa_audit"] = 'required';
    	$rules["bulan_audit"] = 'required';
        foreach($request->input('kwitansi') as $key => $value) {
            $rules["kwitansi.{$key}"] = 'required';
            $rules["nominal.{$key}"] = 'required';
            $rules["keterangan.{$key}"] = 'required';
        }


        $validator = Validator::make($request->all(), $rules, $messages);


        if ($validator->passes())
        {
           $tanggaltampung = $input['masa_audit'];
            $tanggaltampung .="-01";

            $kda= new kda;
            $kda->unit = $input['unit'];
            $kda->masa_audit = $tanggaltampung;
            $kda->bulan_audit = $input['bulan_audit'];
            $kda->jenis = 2;
            $kda->kode_temuan = $input['kode_temuan'];
            $kda->created_by = $input['auditor'];
            $kda->save();

            $jumlah2 = count($input['kelengkapan']);
            for ($i=0; $i < $jumlah2; ++$i) 
            {

                $ket= new Kda_pelengkap;        
                $ket->kelengkapan = $input['kelengkapan'][$i];
                $ket->kesediaan= $input['kesediaan'][$i];
                $ket->jumlah= $input['jumlah'][$i];
                $ket->nominal = $input['nom'][$i];
                $ket->kda_id= $kda->id_kda;
                $ket->save();  
            }

            $jumlah = count($input['kwitansi']);
            for ($i=0; $i < $jumlah; ++$i) 
            {

                $temuan= new Kda_temuan;        
                $temuan->kwitansi = $input['kwitansi'][$i];
                $temuan->nominal= $input['nominal'][$i];
                $temuan->keterangan= $input['keterangan'][$i];
                $temuan->kda_id= $kda->id_kda;
                $temuan->save();  
            }
            return response()->json(['success'=>'done']);            
        }
        return response()->json(['error'=>$validator->errors()->all()]);
    }
    public function tambahkda3(Request $request)
    {
    	$input = $request->all();
    	$rules = [];
    	$rules["unit"] = 'required';
    	$rules["masa_audit"] = 'required';
    	$rules["bulan_audit"] = 'required';
    	$messages = [
		    'required' => 'Lengkapi dahulu data :attribute .',
		];
    	$validator = Validator::make($request->all(), $rules, $messages);
    	if ($validator->passes())
    	{
    		$tanggaltampung = $input['masa_audit'];
	        $tanggaltampung .="-01";

	        $kda= new kda;
	        $kda->unit = $input['unit'];
	        $kda->masa_audit = $tanggaltampung;
	        $kda->bulan_audit = $input['bulan_audit'];
	        $kda->jenis = 3;
	        $kda->created_by = $input['auditor'];
	        $kda->save();

	        $jumlah = count($input['kelengkapan']);
	        for ($i=0; $i < $jumlah; ++$i) 
	        {

	            $ket= new Kda_pelengkap;        
	            $ket->kelengkapan = $input['kelengkapan'][$i];
	            $ket->kesediaan= $input['kesediaan'][$i];
	            $ket->jumlah= $input['jumlah'][$i];
	            $ket->nominal = $input['nom'][$i];
	            $ket->kda_id= $kda->id_kda;
	            $ket->save();  
	        }
	        return response()->json(['success'=>'done']);

    	}
    	return response()->json(['error'=>$validator->errors()->all()]);
        
    }
    public function tambahkda4(Request $request)
    {
    	$input = $request->all();
    	$rules = [];
    	$rules["unit"] = 'required';
    	$rules["masa_audit"] = 'required';
    	$rules["bulan_audit"] = 'required';
    	$rules["kondisi"] = 'required';
    	$messages = [
		    'required' => 'Lengkapi dahulu data :attribute .',
		];
    	$validator = Validator::make($request->all(), $rules, $messages);
    	if ($validator->passes())
    	{
    		$tanggaltampung = $input['masa_audit'];
	        $tanggaltampung .="-01";

	        $kda= new kda;
	        $kda->unit = $input['unit'];
	        $kda->masa_audit = $tanggaltampung;
	        $kda->bulan_audit = $input['bulan_audit'];
	        $kda->jenis = 4;
	        $kda->created_by = $input['auditor'];
	        $kda->save();

            $ket= new kda_keterangan;        
           	$ket->kondisi = $input['kondisi'];
           	$ket->kesimpulan = $input['kesimpulan'];
           	$ket->saran = $input['saran'];
           	$ket->rekomendasi = $input['rekomendasi'];
           	$ket->tanggapan = $input['tanggapan'];
            $ket->kda_id= $kda->id_kda;
            $ket->save();

	        return response()->json(['success'=>'done']);

    	}
    	return response()->json(['error'=>$validator->errors()->all()]);
        
    }
    
    public function updatekda(Request $request)
    {
        $data = $request->all();
        //dd($data);
        $kda = kda::find($request->idkda);
        //$kda->update($data, ['except'=>'_token']);
        $kda->update(['bulan_audit' => $request->bulan_audit]);
        return redirect()->back()->with('message_success',"Berhasil mengupdate data kda");
        //return redirect('/kda');

    }
    public function template()
	{

		$summernote = DB::table('kda_template')->get();
		//dd($summernote);
        return view("templatekda", compact('summernote'));
	}
	public function getkda(Request $request)
	{
		$id = $request->input('id');
		//$kda = kda::find($id)->join('unit');
		$kda = db::table('kda')->where('kda.id_kda',$id)->first();
		return response()->json($kda);
	}
	public function getkelengkapan(Request $request)
	{
		$id = $request->input('id');
		//$kda = kda::find($id)->join('unit');
		$kda_ket = db::table('Kda_pelengkap')->where('kda_id',$id)->get();

		foreach ($kda_ket as $key => $data) {
			if ($data->nominal != null) {
				$data->nominal = round($data->nominal, 0);	
			}
			$data = $kda_ket;
			
		}
		// dd($kda_ket);
		return response()->json($data);
	}
	public function getketerangan(Request $request)
	{
		$id = $request->input('id');
		$keterangan = DB::table('kda_keterangan')->where('kda_id',$id)->first();
		return response()->json($keterangan);
	}
	public function updatekelengkapan(Request $request)
	{
		$data = $request->all();
		// dd($data);
		$jumlah = count($data['kelengkapan']) ;
		$tambah = count($data['hapus']) ;

		for ($i=0; $i < $jumlah ; $i++) {
			if($i < $tambah)
			{
				$kda_ket = Kda_pelengkap::find($data['id'][$i]);
				if ($data['hapus'][$i] == 1) {
					$kda_ket->delete();
				}
				else
				{
					$updatedata = [
		            'kelengkapan' => $data['kelengkapan'][$i],
		            'jumlah' =>$data['jumlah'][$i],
		            'nominal' => $data['nominal'][$i],
		            'kesediaan' => $data['kesediaan'][$i]
			        ];
			        $kda_ket->update($updatedata);
				}
			}
			else
			{
				$ket = new Kda_pelengkap;
			    $ket->kda_id = $data['id_kda'];
			    $ket->kelengkapan = $data['kelengkapan'][$i];
			    $ket->kesediaan = $data['kesediaan'][$i];
			    $ket->jumlah = $data['jumlah'][$i];
			    $ket->nominal = $data['nominal'][$i];
			    $ket->save();
			}
			
		
		}
		return redirect()->back()->with('message_success',"Berhasil mengupdate data kelengkapan");
		//return redirect('/kda');
	}
	public function updateketerangan(Request $request)
	{

		$data = $request->all();
		$kda = kda_keterangan::find($request->id);
		//return ($data);
		$kda->update($data, ['except'=>'_token']);
		return redirect()->back();
		//return redirect('/kda');

	}
}
