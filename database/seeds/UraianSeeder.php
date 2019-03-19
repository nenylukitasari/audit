<?php

use Illuminate\Database\Seeder;
use App\Uraian;

class UraianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Uraian::create([
    		'kategori_id'			=> '1',
    		'uraian_kegiatan'		=> 'Golongan IV/Setara',
    		'satuan'				=> 'Orang/Hari',
    		'bruto'					=> '41000',
    	]);

        Uraian::create([
    		'kategori_id'			=> '1',
    		'uraian_kegiatan'		=> 'Golongan III/Setara',
    		'satuan'				=> 'Orang/Hari',
    		'bruto'					=> '37000',
    	]);

    	Uraian::create([
    		'kategori_id'			=> '1',
    		'uraian_kegiatan'		=> 'Golongan II dan I/Setara',
    		'satuan'				=> 'Orang/Hari',
    		'bruto'					=> '35000',
    	]);

    	 Uraian::create([
    		'kategori_id'			=> '2',
    		'uraian_kegiatan'		=> 'Golongan IV/Setara',
    		'satuan'				=> 'Orang/Hari',
    		'bruto'					=> '25000',
    	]);

        Uraian::create([
    		'kategori_id'			=> '2',
    		'uraian_kegiatan'		=> 'Golongan III/Setara',
    		'satuan'				=> 'Orang/Jam',
    		'bruto'					=> '20000',
    	]);

    	Uraian::create([
    		'kategori_id'			=> '2',
    		'uraian_kegiatan'		=> 'Golongan II/Setara',
    		'satuan'				=> 'Orang/Jam',
    		'bruto'					=> '17000',
    	]);
    	Uraian::create([
    		'kategori_id'			=> '2',
    		'uraian_kegiatan'		=> 'Golongan I/Setara',
    		'satuan'				=> 'Orang/Jam',
    		'bruto'					=> '13000',
    	]);

    	Uraian::create([
    		'kategori_id'			=> '3',
    		'uraian_kegiatan'		=> 'Rapat Koordinasi/Workshop/Seminar/FGD/Kegiatan Sejenis',
    	]);

    	Uraian::create([
    		'kategori_id'			=> '3',
    		'uraian_kegiatan'		=> 'Rapat/Kegiatan Mengundang Pejabat Tingkat Menteri/Eselon I/Setara',	
    	]);
    }
}
