<?php

use Illuminate\Database\Seeder;
use App\Sub1;

class Sub1Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Sub1::create([
    		'uraian_id'				=> '8',
    		'uraian_kegiatan'		=> 'Makan',
    		'satuan'				=> 'Orang/Kali',
    		'bruto'					=> '44000',
    	]);
    	Sub1::create([
    		'uraian_id'				=> '8',
    		'uraian_kegiatan'		=> 'Kudapan',
    		'satuan'				=> 'Orang/Kali',
    		'bruto'					=> '23000',
    	]);


    	Sub1::create([
    		'uraian_id'				=> '9',
    		'uraian_kegiatan'		=> 'Makan',
    		'satuan'				=> 'Orang/Kali',
    		'bruto'					=> '110000',
    		
    	]);
    	Sub1::create([
    		'uraian_id'				=> '9',
    		'uraian_kegiatan'		=> 'Kudapan',
    		'satuan'				=> 'Orang/Kali',
    		'bruto'					=> '49000',
    		
    	]);
    }
}
