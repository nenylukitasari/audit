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
            'berkas'    => 'Surat Tugas',
       	]);
      berkas::create([
        'kegiatan_id'   => '1',
            'berkas'    => 'Daftar hadir',
        ]);
      berkas::create([
        'kegiatan_id'   => '1',
            'berkas'    => 'Daftar Penerima lembur',
        ]);
      berkas::create([
        'kegiatan_id'   => '1',
            'berkas'    => 'Undangan',
        ]);
      berkas::create([
        'kegiatan_id'   => '1',
            'berkas'    => 'Daftar Hadir',
        ]);
      berkas::create([
        'kegiatan_id'   => '1',
            'berkas'    => 'Kwitansi',
        ]);

       	berkas::create([
    		'kegiatan_id'		=> '2',
            'berkas'            => 'Surat perjalanan dinas',
       	]);
        berkas::create([
        'kegiatan_id'   => '2',
            'berkas'            => 'Surat tugas',
        ]);
        berkas::create([
        'kegiatan_id'   => '2',
            'berkas'            => 'Tiket + Boarding pass',
        ]);
        berkas::create([
        'kegiatan_id'   => '2',
            'berkas'            => 'Hotel',
        ]);
        berkas::create([
        'kegiatan_id'   => '2',
            'berkas'            => 'Laporan kegiatan',
        ]);
        berkas::create([
        'kegiatan_id'   => '2',
            'berkas'            => 'taxi',
        ]);

       	berkas::create([
    		'kegiatan_id'		=> '3',
            'berkas'            => 'Perjanjian Kontrak Kerja',
       	]);
        berkas::create([
        'kegiatan_id'   => '3',
            'berkas'            => 'Daftar hadir',
        ]);
        berkas::create([
        'kegiatan_id'   => '3',
            'berkas'            => 'Daftar penerima honorer',
        ]);

       	berkas::create([
    		'kegiatan_id'		=> '4',
            'berkas'            => 'Urusan langsung dengan Kantor Audit Internal ITS',
       	]);
       	berkas::create([
    		'kegiatan_id'		=> '5',
            'berkas'            => 'Urusan langsung dengan Kantor Audit Internal ITS',
       	]);
       	berkas::create([
    		'kegiatan_id'		=> '6',
            'berkas'            => 'Urusan langsung dengan Kantor Audit Internal ITS',
       	]);
       	berkas::create([
    		'kegiatan_id'		=> '7',
            'berkas'            => 'Urusan langsung dengan Kantor Audit Internal ITS',
       	]);
       	berkas::create([
    		'kegiatan_id'		=> '8',
            'berkas'            => 'Urusan langsung dengan Kantor Audit Internal ITS',
       	]);
       	berkas::create([
    		'kegiatan_id'		=> '9',
            'berkas'            => 'Urusan langsung dengan Kantor Audit Internal ITS',
       	]);
       	berkas::create([
    		'kegiatan_id'		=> '10',
            'berkas'            => 'Urusan langsung dengan Kantor Audit Internal ITS',
       	]);
       	berkas::create([
    		'kegiatan_id'		=> '11',
            'berkas'            => 'Urusan langsung dengan Kantor Audit Internal ITS',
       	]);
       	berkas::create([
    		'kegiatan_id'		=> '12',
            'berkas'            => 'Urusan langsung dengan Kantor Audit Internal ITS',
       	]);
       	berkas::create([
        'kegiatan_id'   => '13',
            'berkas'            => 'Surat perjalanan dinas',
        ]);
        berkas::create([
        'kegiatan_id'   => '13',
            'berkas'            => 'Surat tugas',
        ]);
        berkas::create([
        'kegiatan_id'   => '13',
            'berkas'            => 'Tiket + Boarding pass',
        ]);
        berkas::create([
        'kegiatan_id'   => '13',
            'berkas'            => 'Hotel',
        ]);
        berkas::create([
        'kegiatan_id'   => '13',
            'berkas'            => 'Laporan kegiatan',
        ]);
        berkas::create([
        'kegiatan_id'   => '13',
            'berkas'            => 'taxi',
        ]);
       	berkas::create([
    		'kegiatan_id'		=> '14',
            'berkas'            => 'Urusan langsung dengan Kantor Audit Internal ITS',
       	]);

        
    }
}
