<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Temuan;
use App\kda;
use App\kda_keterangan;
use App\kda_keterangan2;
use PDF;
use DB;
use Zipper;
use File;
use Redirect;
use Session;

class PdfController extends Controller
{
    public function downloadkdatriwulanfix($tahun, $sesi)
	{
		if ($sesi ==1) $bulan =1;
		elseif ($sesi ==2) $bulan = 4;
		elseif ($sesi == 3) $bulan = 7;
		else $bulan = 10;

		$path = "zip/";
		$zipnama = "triwulan_{$sesi}_{$tahun}.zip";
		$path .= $zipnama;
		$data = kda::select('id_kda', 'jenis','bulan_audit')
		->whereRaw("(MONTH(bulan_audit) = {$bulan} OR MONTH(bulan_audit) = {$bulan}+1 OR MONTH(bulan_audit) = {$bulan}+2 ) AND YEAR(bulan_audit) =  {$tahun}")
		->get();

		foreach ($data as $id) {
			$download = $this->filepdf($id->id_kda);
	    	$file = $download[0];
	    	$nama = $download[1];
			$pdfnama = "file_kda/triwulan_{$sesi}_{$tahun}/";
			File::isDirectory($pdfnama) or File::makeDirectory($pdfnama);
			$pdfnama .= $nama;
			$file->save($pdfnama);
		}
		$files = glob("file_kda/triwulan_{$sesi}_{$tahun}/*");
		Zipper::make($path)->add($files)->close();
		if(file_exists($path))
		{
			return response()->download($path);

		}
		else
		{
			Session::flash('message', 'Tidak ada data KDA'); 
			Session::flash('alert-class', 'alert-danger');
			return Redirect::back(); 
		}
	}
	public function filepdf($id)
    {
        $kda = DB::table('kda')->where('id_kda',$id)->leftjoin('unit','kda.unit','=','unit.id_unit')->first();
        // $data = DB::table('kda_data')->where('kda_id',$id)->first();
        $temuan = DB::table('temuan')->where('kda_id',$id)->where('status',0)->get();
        $kda_ket = DB::table('kda_keterangan2')->where('kda_id',$id)->get();
        $ket = DB::table('kda_keterangan')->where('kda_id',$id)->first();
        $bulan = date("m",strtotime($kda->bulan_audit));
        $bulanlalu = date("m",strtotime($kda->masa_audit));
        // $bulanlalu = date("m",strtotime("{$kda->bulan_audit} -1 Month"));
        $tahun = date("y",strtotime($kda->bulan_audit));
        // $tahun = $kda->bulan_audit.getFullYear();
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
  
        $pdfnama = $kda->id_kda."-".$kda->nama."-".$kda->bulan_audit.".pdf";
        if ($kda->jenis == 1)
				{
					$summernotes = DB::table('summernotes')->where('id',1)->first();
					$view = view('pdf', ['summernotes' => $summernotes]);
					$contents = $view->render();

				}
				elseif ($kda->jenis == 2) {
					$summernotes = DB::table('summernotes')->where('id',2) ->first();
					$view = view('pdf', ['summernotes' => $summernotes]);
					$contents = $view->render();
					//untuk mencatat temuan sebelumnya
					$semuakda = kda::select('id_kda')->where('unit', $kda->unit)
					->whereRaw(" MONTH(bulan_audit) < {$bulan}  AND YEAR(bulan_audit) =  20{$tahun}")
					->get();
					//dd($semuakda);
					$temuan1 = db::table('temuan')->leftjoin('kda','temuan.kda_id','=','kda.id_kda')->whereIn('kda_id', $semuakda)
					->where('temuan.status',0)
					->orderBy('kda.bulan_audit')->get();
					$temuan2 = json_decode($temuan1);
					$table = '';
					$katapembuka = '<ul><li style="text-align: justify; ">&nbsp; &nbsp; Hasil audit dokumen SPJ diketahui bahwa pengelolaan administrasi keuangan tahun tahun$ yang dilaksanakan BPP di Unit Kerja : unit$ yang belum ditindaklanjuti, antara lain:</li></ul>';
					if($temuan2){
						$table .= $katapembuka;
						for ($i=1; $i < 13 ; $i++) { 
						$temuanawal = 0;
						foreach ($temuan2 as $key => $value) { 
						$month = date("m",strtotime($value->bulan_audit));
						$bulannama = $namabulan[date("m",strtotime($value->bulan_audit))];
							if ($month == $i) {
								$temuanawal++;
								if ($temuanawal == 1)
								{
									$j = 1;
									$table .= 'Bulan '.$bulannama;
									$table .= "<table class='tabel1' style='width:100%'>
								<thead>
								<tr>
									<th align='center' width=5%>No</th>
									<th align='center' width=30%>No. Kwitansi</th>
									<th align='center' width=20%>Nominal (Rp)</th>
									<th align='center' width=45%>Uraian Temuan</th>
								</tr>
								</thead>
								<tbody>
												<tr>
												<td align='center'>".$j."</td>
												<td align='center'>".$value->kwitansi."</td>
												<td align='right'>".number_format($value->nominal, 0, ',', '.')."&nbsp;&nbsp;</td>
												<td align='center'>".$value->keterangan."</td>
												</tr>";

								}
								else
								{
									$j++;
									$table .= "<tr>
												<td align='center'>".$j."</td>
												<td align='center'>".$value->kwitansi."</td>
												<td align='right'>".number_format($value->nominal, 0, ',', '.')."&nbsp;&nbsp;</td>
												<td align='center'>".$value->keterangan."</td>
												</tr>";

								}
							}
						
						
						}
							if ($temuanawal != 0) {
								$table .="</tbody>
									</table><br>";
							}
						}
					}
					
					$contents = str_replace("temuanlama$", $table, $contents);
					if ($kda->kode_temuan == "1.04") {
						$contents = str_replace("deskripsi_temuan$", "Administrasi", $contents);	
					}
					else
					{
						$contents = str_replace("deskripsi_temuan$", "Kerugian Negara", $contents);		
					}
					$contents = str_replace("kode_temuan$", $kda->kode_temuan, $contents);
					//akhir untuk mencatat temuan sebelumnya
					
				}
				elseif ($kda->jenis == 3) {
					$summernotes = DB::table('summernotes')->where('id',3) ->first();
					$view = view('pdf', ['summernotes' => $summernotes]);
					$contents = $view->render();
					$contents = str_replace("kondisi$", $ket->kondisi, $contents);
					$contents = str_replace("kesimpulan$", $ket->kesimpulan, $contents);
					$contents = str_replace("saran$", $ket->saran, $contents);
					$contents = str_replace("rekomendasi$", $ket->rekomendasi, $contents);
					$contents = str_replace("tanggapan$", $ket->tanggapan, $contents);
				}
				else {
					$summernotes = DB::table('summernotes')->where('id',4) ->first();
					$view = view('pdf', ['summernotes' => $summernotes]);
					$contents = $view->render();
					$contents = str_replace("kondisi$", $ket->kondisi, $contents);
					$contents = str_replace("kesimpulan$", $ket->kesimpulan, $contents);
					$contents = str_replace("saran$", $ket->saran, $contents);
					$contents = str_replace("rekomendasi$", $ket->rekomendasi, $contents);
					$contents = str_replace("tanggapan$", $ket->tanggapan, $contents);
				}

				$contents = str_replace("unit$", $kda->nama, $contents);
				$contents = str_replace("masaaudit$", "{$namabulan[$bulanlalu]} 20{$tahun}", $contents);
				$contents = str_replace("bulanaudit$", "{$namabulan[$bulan]} 20{$tahun}", $contents);
				$contents = str_replace("bulan$", $namabulan[$bulanlalu], $contents);
				$contents = str_replace("tahun$", "20{$tahun}", $contents);
				$tanggalttd = $this->tgl_indo($kda->bulan_audit);
				$contents = str_replace("tanggalttd$", $tanggalttd, $contents);
				$contents = str_replace("auditor$", $kda->created_by, $contents);

				if ($kda_ket == NULL) {
				}
				else{
					//untuk mencatat kda keterangan2
					
					$i = 1;
					$list_keterangan='';
					$keterangans = '<table align="center" style="width:100%">
								<thead>
								  <tr>
								  	<th rowspan="2" align="center">No</th>
								    <th rowspan="2" align="center">Kelengkapan</th>
								    <th colspan="3" align="center">Keterangan</th>
								  </tr>
								  <tr>
								    <th align="center">Ada /Tidak ada</th>
								    <th align="center">Jumlah</th>
								    <th align="center">Nominal (Rp)</th>
								  </tr>
								</thead>
								<tbody>';
					if ($kda_ket->count() > 0) {
						foreach ($kda_ket as $kda_ket) {
							if ($kda_ket->nominal == null) {
								$list_keterangan .=
									'<tr>
										<td align="center">'.$i.'</td>
										<td align="left">&nbsp;&nbsp;'.$kda_ket->kelengkapan.'</td>
										<td align="center">'.$kda_ket->kesediaan.'</td>
										<td align="center">'.$kda_ket->jumlah.'</td>
										<td align="right">'.$kda_ket->nominal.'&nbsp;&nbsp;</td>
									</tr>';
									$i++;		
							}
							else
							{
								$list_keterangan .=
									'<tr>
										<td align="center">'.$i.'</td>
										<td align="left">&nbsp;&nbsp;'.$kda_ket->kelengkapan.'</td>
										<td align="center">'.$kda_ket->kesediaan.'</td>
										<td align="center">'.$kda_ket->jumlah.'</td>
										<td align="right">'.number_format($kda_ket->nominal, 0, ',', '.').'&nbsp;&nbsp;</td>
									</tr>';
									$i++;
							}
						
								}
					$keterangans .= $list_keterangan;
					$keterangans .= '</tbody>
							</table>';
					}
					else
					{
						$keterangans .= '<tr>
										<td>-</td>
										<td>-</td>
										<td>-</td>
										<td>-</td>
									</tr></tbody>
							</table>';
					}
					
					$contents = str_replace("kdaketerangan2$", $keterangans, $contents);
					
				}
				
				//untuk mencatata temuan sekarang
					$j = 1;
					$list_temuan='';
					$temuansekarang = "<table class='tabel1' style='width:100%'>
								<thead>
								<tr>
									<th align='center' width=5%>No</th>
									<th align='center' width=30%>No. Kwitansi</th>
									<th align='center' width=20%>Nominal (Rp)</th>
									<th align='center' width=45%>Uraian Temuan</th>
								</tr>
								</thead>
								<tbody>
								";
					if ($temuan->count() > 0) {
						foreach ($temuan as $tem) {
						$list_temuan .=
									'<tr>
										<td align="center">'.$j.'</td>
										<td align="center">'.$tem->kwitansi.'</td>
										<td align="right">'.number_format($tem->nominal, 0, ',', '.').'&nbsp;&nbsp;</td>
										<td align="center">'.$tem->keterangan.'</td>
									</tr>';
									$j++;
								}
					$temuansekarang .= $list_temuan;
					$temuansekarang .= '</tbody>
							</table>';
					}
					else
					{
						$temuansekarang .= '<tr>
										<td align="center">-</td>
										<td align="center">-</td>
										<td align="right">-&nbsp;&nbsp;</td>
										<td align="center">-</td>
									</tr></tbody>
							</table>';
					}
					
					$contents = str_replace("temuan$", $temuansekarang, $contents);
					//akhir untuk mencatata temuan sekarang
			$pdf = PDF::loadHTML($contents);            
			$sheet = $pdf->setPaper('a4', 'potrait');
			//$sheet->save($pdfnama);
			//return $sheet;
			return array($sheet,$pdfnama);
        	//return $sheet->download($pdfnama);
    }

    public function tgl_indo($tanggal){
		$bulan = array (
			1 =>   'Januari',
			'Februari',
			'Maret',
			'April',
			'Mei',
			'Juni',
			'Juli',
			'Agustus',
			'September',
			'Oktober',
			'November',
			'Desember'
		);
		$pecahkan = explode('-', $tanggal);
		
		// variabel pecahkan 0 = tanggal
		// variabel pecahkan 1 = bulan
		// variabel pecahkan 2 = tahun
	 
		return $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
	}

	public function downloadpdf($id)
    {
    	$download = $this->filepdf($id);
    	$file = $download[0];
    	$nama = $download[1];
    	return $file->download($nama);

    }
    public function print()
    {
    	$summernotes = DB::table('summernotes')->where('id',2) ->first();
		return view ("pdf", compact('summernotes'));
    }
}
