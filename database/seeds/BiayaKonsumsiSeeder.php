<?php

use Illuminate\Database\Seeder;
use App\BiayaKonsumsi;

class BiayaKonsumsiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BiayaKonsumsi::create([
    		'makan_lembur_id'		=> '8',
    		'uraian_kegiatan'		=> 'Makan',
    		'satuan'				=> 'Orang/Kali',
    		'bruto'					=> '44000',
    	]);
    	BiayaKonsumsi::create([
    		'makan_lembur_id'		=> '8',
    		'uraian_kegiatan'		=> 'Kudapan',
    		'satuan'				=> 'Orang/Kali',
    		'bruto'					=> '23000',
    	]);


    	BiayaKonsumsi::create([
    		'makan_lembur_id'		=> '9',
    		'uraian_kegiatan'		=> 'Makan',
    		'satuan'				=> 'Orang/Kali',
    		'bruto'					=> '110000',
    		
    	]);
    	BiayaKonsumsi::create([
    		'makan_lembur_id'		=> '9',
    		'uraian_kegiatan'		=> 'Kudapan',
    		'satuan'				=> 'Orang/Kali',
    		'bruto'					=> '49000',
    		
    	]);
    }
}
