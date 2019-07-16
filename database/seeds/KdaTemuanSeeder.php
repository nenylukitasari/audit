<?php

use Illuminate\Database\Seeder;
use App\Kda_temuan;

class KdaTemuanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Kda_temuan::create([
    		'kwitansi'          => '024/110201100/IV/2019',
    		'keterangan'      => 'Belum melampirkan foto barang ',
    		'nominal'          => '500000',
    		'kda_id'          => '2',
    	]);
    	Kda_temuan::create([
    		'kwitansi'          => '025/110201100/IV/2019',
    		'keterangan'      => 'Tidak ada bukti kwitansi',
    		'nominal'          => '750000',
    		'kda_id'          => '5',
    	]);
    	Kda_temuan::create([
    		'kwitansi'          => '026/110201100/IV/2019',
    		'keterangan'      => 'Tidak ada bukti kwitansi',
    		'nominal'          => '400000',
    		'kda_id'          => '5',
    	]);
    	Kda_temuan::create([
    		'kwitansi'          => '027/110201100/IV/2019',
    		'keterangan'      => 'Tidak ada bukti kwitansi',
    		'nominal'          => '350000',
    		'kda_id'          => '6',
    	]);
    }
}
