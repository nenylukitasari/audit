<?php

use Illuminate\Database\Seeder;
use App\Berkas;

class BerkasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	berkas::create([
    		'kegiatan_id'		=> '1',
            'berkas'            => 'berkas1',
       	]);

       	berkas::create([
    		'kegiatan_id'		=> '2',
            'berkas'            => 'berkas2',
       	]);

       	berkas::create([
    		'kegiatan_id'		=> '3',
            'berkas'            => 'berkas3',
       	]);

       	berkas::create([
    		'kegiatan_id'		=> '4',
            'berkas'            => 'berkas4',
       	]);
       	berkas::create([
    		'kegiatan_id'		=> '5',
            'berkas'            => 'berkas5',
       	]);
       	berkas::create([
    		'kegiatan_id'		=> '6',
            'berkas'            => 'berkas6',
       	]);
       	berkas::create([
    		'kegiatan_id'		=> '7',
            'berkas'            => 'berkas7',
       	]);
       	berkas::create([
    		'kegiatan_id'		=> '8',
            'berkas'            => 'berkas8',
       	]);
       	berkas::create([
    		'kegiatan_id'		=> '9',
            'berkas'            => 'berkas9',
       	]);
       	berkas::create([
    		'kegiatan_id'		=> '10',
            'berkas'            => 'berkas10',
       	]);
       	berkas::create([
    		'kegiatan_id'		=> '11',
            'berkas'            => 'berkas11',
       	]);
       	berkas::create([
    		'kegiatan_id'		=> '12',
            'berkas'            => 'berkas12',
       	]);
       	berkas::create([
    		'kegiatan_id'		=> '13',
            'berkas'            => 'berkas13',
       	]);
       	berkas::create([
    		'kegiatan_id'		=> '14',
            'berkas'            => 'berkas14',
       	]);
       	berkas::create([
    		'kegiatan_id'		=> '1',
            'berkas'            => 'berkas11111',
       	]);
       	berkas::create([
    		'kegiatan_id'		=> '2',
            'berkas'            => 'berkas22222',
       	]);
       	berkas::create([
    		'kegiatan_id'		=> '3',
            'berkas'            => 'berkas33333',
       	]);

        
    }
}
