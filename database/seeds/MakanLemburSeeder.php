<?php

use Illuminate\Database\Seeder;
use App\MakanLembur;

class MakanLemburSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        MakanLembur::create([
    		'id_kategori_makan'		=> '1',
    		'uraian_kegiatan'		=> 'Golongan IV/Setara',
    		'satuan'				=> 'Orang/Hari',
    		'bruto'					=> '41000',
    	]);

        MakanLembur::create([
    		'id_kategori_makan'		=> '1',
    		'uraian_kegiatan'		=> 'Golongan III/Setara',
    		'satuan'				=> 'Orang/Hari',
    		'bruto'					=> '37000',
    	]);

    	MakanLembur::create([
    		'id_kategori_makan'		=> '1',
    		'uraian_kegiatan'		=> 'Golongan II dan I/Setara',
    		'satuan'				=> 'Orang/Hari',
    		'bruto'					=> '35000',
    	]);

    	 MakanLembur::create([
    		'id_kategori_makan'		=> '2',
    		'uraian_kegiatan'		=> 'Golongan IV/Setara',
    		'satuan'				=> 'Orang/Hari',
    		'bruto'					=> '25000',
    	]);

        MakanLembur::create([
    		'id_kategori_makan'		=> '2',
    		'uraian_kegiatan'		=> 'Golongan III/Setara',
    		'satuan'				=> 'Orang/Jam',
    		'bruto'					=> '20000',
    	]);

    	MakanLembur::create([
    		'id_kategori_makan'		=> '2',
    		'uraian_kegiatan'		=> 'Golongan II/Setara',
    		'satuan'				=> 'Orang/Jam',
    		'bruto'					=> '17000',
    	]);
    	MakanLembur::create([
    		'id_kategori_makan'		=> '2',
    		'uraian_kegiatan'		=> 'Golongan I/Setara',
    		'satuan'				=> 'Orang/Jam',
    		'bruto'					=> '13000',
    	]);


    	MakanLembur::create([
    		'id_kategori_makan'		=> '3',
    		'uraian_kegiatan'		=> 'Rapat Koordinasi/Workshop/Seminar/FGD/Kegiatan Sejenis',
    		
    	]);
    	MakanLembur::create([
    		'id_kategori_makan'		=> '3',
    		'uraian_kegiatan'		=> 'Rapat/Kegiatan Mengundang Pejabat Tingkat Menteri/Eselon I/Setara',
    		
    	]);
    }
}