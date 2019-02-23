<?php

use Illuminate\Database\Seeder;
use App\Makan;

class makan_lembur_rapat_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Makan::create([
    		'kategori_kegiatan'		=> 'Satuan Biaya Uang Makan Pegawai Tetap',
    		'uraian_kegiatan'		=> 'Golongan IV/Setara',
    		'satuan'				=> 'Orang/Hari',
    		'bruto'					=> '41000',
    	]);

        Makan::create([
    		'kategori_kegiatan'		=> 'Satuan Biaya Uang Makan Pegawai Tetap',
    		'uraian_kegiatan'		=> 'Golongan III/Setara',
    		'satuan'				=> 'Orang/Hari',
    		'bruto'					=> '37000',
    	]);

    	Makan::create([
    		'kategori_kegiatan'		=> 'Satuan Biaya Uang Makan Pegawai Tetap',
    		'uraian_kegiatan'		=> 'Golongan II dan I/Setara',
    		'satuan'				=> 'Orang/Hari',
    		'bruto'					=> '35000',
    	]);

    	 Makan::create([
    		'kategori_kegiatan'		=> 'Satuan Biaya Lembur',
    		'uraian_kegiatan'		=> 'Golongan IV/Setara',
    		'satuan'				=> 'Orang/Hari',
    		'bruto'					=> '25000',
    	]);

        Makan::create([
    		'kategori_kegiatan'		=> 'Satuan Biaya Lembur',
    		'uraian_kegiatan'		=> 'Golongan III/Setara',
    		'satuan'				=> 'Orang/Jam',
    		'bruto'					=> '20000',
    	]);

    	Makan::create([
    		'kategori_kegiatan'		=> 'Satuan Biaya Lembur',
    		'uraian_kegiatan'		=> 'Golongan II/Setara',
    		'satuan'				=> 'Orang/Jam',
    		'bruto'					=> '17000',
    	]);
    	Makan::create([
    		'kategori_kegiatan'		=> 'Satuan Biaya Lembur',
    		'uraian_kegiatan'		=> 'Golongan I/Setara',
    		'satuan'				=> 'Orang/Jam',
    		'bruto'					=> '13000',
    	]);
    }
}
