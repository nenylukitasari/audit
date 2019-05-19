<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Temuan;
use App\kda;
use App\kda_keterangan;
use App\kda_keterangan2;
use Validator;
use DB;
use PDF;


class TemuanController extends Controller
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
        $kda = DB::table('kda')->leftjoin('unit','kda.unit','=','unit.id_unit')->where('kda.jenis', 2)->orderBy('kda.masa_audit','DESC')->get();
        foreach ($kda as $key => $value) {
            $tahun = date("y",strtotime($value->masa_audit));
            $value->bulan = $namabulan[date("m",strtotime($value->masa_audit))];
            $value->tahun = "20${tahun}";
        }
        $unit = DB::table('unit')->get();
        return view ("temuansemua", compact('kda','unit'));
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

        $kda = DB::table('kda')->leftjoin('unit','kda.unit','=','unit.id_unit')->where(['kda.jenis' => 2, 'kda.created_by' => $_SESSION['username']])->orderBy('kda.masa_audit','DESC')->get();
        foreach ($kda as $key => $value) {
            $tahun = date("y",strtotime($value->masa_audit));
            $value->bulan = $namabulan[date("m",strtotime($value->masa_audit))];
            $value->tahun = "20${tahun}";
        }
        $unit = DB::table('unit')->get();
        return view ("temuan", compact('kda','unit'));
    }
    public function gettemuan(Request $request)
	{
		$id = $request->input('id');
		$temuan = DB::table('temuan')->where('kda_id',$id)->get();
        //$kda = DB::table('kda')->whereIn('id_kda', $id)->get();
        //return ($kda);
        foreach ($temuan as $key => $data) {
            if ($data->nominal != null) {
                $data->nominal = round($data->nominal, 0);  
            }
            $data = $temuan;
            
        }
		return response()->json($data);
	}
    public function konfirmasitemuan(Request $request)
    {

        $data = $request->all();
        // dd($data);
        $jumlah = count($data);
        $data = $request->checkbox;
        temuan::whereIn('id', $data)
        ->update([
            'status' => '1'
        ]);
        return redirect()->back();
        //return redirect('/temuankda');

    }
    public function updatetemuan(Request $request)
    {
        $data = $request->all();
        // dd($data);
        $jumlah = count($data['kwitansi']) ;
        $tambah = count($data['hapus']) ;

        for ($i=0; $i < $jumlah ; $i++) {
            if($i < $tambah)
            {
                $temuan = temuan::find($data['id'][$i]);
                if ($data['hapus'][$i] == 1) {
                    $temuan->delete();
                }
                else
                {
                    $updatedata = [
                    'kwitansi' => $data['kwitansi'][$i],
                    'nominal' =>$data['nominal'][$i],
                    'keterangan' => $data['keterangan'][$i]
                    ];
                    $temuan->update($updatedata);
                }
            }
            else
            {
                $tem = new temuan;
                $tem->kda_id = $data['id_kda'];
                $tem->kwitansi = $data['kwitansi'][$i];
                $tem->nominal = $data['nominal'][$i];
                $tem->keterangan = $data['keterangan'][$i];
                $tem->save();
            }
            
        
        }
        return redirect()->back();
        //return redirect('/temuankda');

    }

    public function gettemuanlama(Request $request){
        //untuk mencatat temuan sebelumnya (belum kondisi yg status 1)
        $unit = $request->input('unit');
        $bulan = $request->input('bulan');
        $tahun = $request->input('tahun');
        $semuakda = kda::select('id_kda')->where('unit', $unit)
        ->whereRaw(" MONTH(masa_audit) < {$bulan}  AND YEAR(masa_audit) =  {$tahun}")
        ->get();
        $temuan1 = db::table('temuan')->join('kda','temuan.kda_id','=','kda.id_kda')->whereIn('kda_id', $semuakda)
        ->where('temuan.status',0)
        ->orderBy('kda.masa_audit')->get();
        return response()->json($temuan1);
    }
}
