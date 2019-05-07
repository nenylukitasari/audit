<?php

use Illuminate\Database\Seeder;
use App\JenisKegiatan;

class JenisKegiatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        JenisKegiatan::create([
    		'jenis_kegiatan'		=> 'Standar Biaya Institut sebagai Batas Tertinggi',
            'version_id'            => '1',
            'kode_tabel'            => '1',
       	]);

        JenisKegiatan::create([
    		'jenis_kegiatan'		=> 'Standar Biaya Institut sebagai Estimasi Perencanaan Anggaran',
            'version_id'            => '1',
            'kode_tabel'            => '1',
    	]);
    }
}
