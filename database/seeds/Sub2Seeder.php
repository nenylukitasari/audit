<?php

use Illuminate\Database\Seeder;
use App\Sub2;

class Sub2Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Sub2::create([
    		'sub1_id'				=> '1',
    		'uraian_kegiatan'		=> 'Makan',
    		'satuan'				=> 'Orang/Kali',
    		'var1'					=> '44000',
    	]);
        Sub2::create([
            'sub1_id'               => '2',
            'uraian_kegiatan'       => 'MINUM',
            'satuan'                => 'Orang/Kali',
            'var1'                  => '44000',
        ]);
    }
}
