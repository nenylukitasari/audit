<?php

use Illuminate\Database\Seeder;
use App\KategoriMakan;

class KategoriMakanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        KategoriMakan::create([
    		'kategori_makan'		=> 'Satuan Biaya Uang Makan Pegawai Tetap',
       	]);

        KategoriMakan::create([
    		'kategori_makan'		=> 'Satuan Biaya Lembur',
    	]);

      	KategoriMakan::create([
    		'kategori_makan'		=> 'Satuan Biaya Konsumsi Penyelenggaraan Rapat atau Pertemuan Lain',
    	]);
    }
}
