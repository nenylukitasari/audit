<?php

use Illuminate\Database\Seeder;
use App\Kda;

class kdaseederfinal extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Kda::create([
    		'unit'          => 'S1 DESAIN INTERIOR',
    		'masa_audit'      => '2019-06-01',
    		'bulan_audit'          => '2019-07-12',
    		'jenis'          => '1',
    		'kode_temuan'          => '',
    		'created_by'          => 'M. Azka Yasin',
    	]);
    	Kda::create([
    		'unit'          => 'S1 TEKNIK GEOFISIKA',
    		'masa_audit'      => '2019-03-01',
    		'bulan_audit'          => '2019-04-26',
    		'jenis'          => '2',
    		'kode_temuan'          => '1.04',
    		'created_by'          => 'M. Azka Yasin',
    	]);
    	Kda::create([
    		'unit'          => 'S1 TEKNIK LINGKUNGAN',
    		'masa_audit'      => '2019-06-01',
    		'bulan_audit'          => '2019-07-13',
    		'jenis'          => '3',
    		'kode_temuan'          => '',
    		'created_by'          => 'Neny Lukitasari',
    	]);
    	Kda::create([
    		'unit'          => 'S1 ARSITEKTUR',
    		'masa_audit'      => '2019-06-01',
    		'bulan_audit'          => '2019-07-14',
    		'jenis'          => '4',
    		'kode_temuan'          => '',
    		'created_by'          => 'Neny Lukitasari',
    	]);
    	Kda::create([
    		'unit'          => 'S1 TEKNIK GEOFISIKA',
    		'masa_audit'      => '2019-04-01',
    		'bulan_audit'          => '2019-05-27',
    		'jenis'          => '2',
    		'kode_temuan'          => '1.04',
    		'created_by'          => 'M. Azka Yasin',
    	]);
    	Kda::create([
    		'unit'          => 'S1 TEKNIK GEOFISIKA',
    		'masa_audit'      => '2019-05-01',
    		'bulan_audit'          => '2019-06-13',
    		'jenis'          => '2',
    		'kode_temuan'          => '1.04',
    		'created_by'          => 'M. Azka Yasin',
    	]);
    }
}
