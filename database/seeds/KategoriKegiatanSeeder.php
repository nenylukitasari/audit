<?php

use Illuminate\Database\Seeder;
use App\KategoriKegiatan;

class KategoriKegiatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        KategoriKegiatan::create([
    		'kategori_kegiatan'		=> 'Standar Biaya Institut sebagai Batas Tertinggi',
       	]);

        KategoriKegiatan::create([
    		'kategori_kegiatan'		=> 'Standar Biaya Institut sebagai Estimasi Perencanaan Anggaran',
    	]);
    }
}
