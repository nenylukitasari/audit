<?php

use Illuminate\Database\Seeder;
use App\Kda_Keterangan;

class KdaKeteranganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Kda_Keterangan::create([
    		'kondisi'          => 'Unit Kerja : S1 ARSITEKTUR pada bulan Juni tahun 2019 tidak mencairkan UMK.',
    		'kesimpulan'      => '-',
    		'saran'          => '-',
    		'rekomendasi'          => '-',
    		'tanggapan'          => '-',
    		'kda_id'          => '4',
    	]);
    }
}
