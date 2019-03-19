<?php

use Illuminate\Database\Seeder;
use App\Kategori;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Kategori::create([
        	'kegiatan_id'			=> '1',
    		'kategori_kegiatan'		=> 'Satuan Biaya Uang Makan Pegawai Tetap',
       	]);

        Kategori::create([
        	'kegiatan_id'			=> '1',
    		'kategori_kegiatan'		=> 'Satuan Biaya Lembur',
    	]);

      	Kategori::create([
      		'kegiatan_id'			=> '1',
    		'kategori_kegiatan'		=> 'Satuan Biaya Konsumsi Penyelenggaraan Rapat atau Pertemuan Lain',
    	]);

        Kategori::create([
        	'kegiatan_id'			=> '2',
            'kategori_kegiatan'     => 'Satuan Uang Harian Perjalanan Dinas Dalam Negeri',
        ]);

        Kategori::create([
        	'kegiatan_id'			=> '2',
            'kategori_kegiatan'     => 'Satuan Uang Representasi',
        ]);

        Kategori::create([
        	'kegiatan_id'			=> '2',
            'kategori_kegiatan'     => 'Satuan Uang Harian Perjalanan Dinas Luar Negeri (Dalam US$)',
        ]);

        Kategori::create([
        	'kegiatan_id'			=> '2',
            'kategori_kegiatan'     => 'Satuan Biaya Rapat/Pertemuan di Luar Kantor',
        ]);

        Kategori::create([
        	'kegiatan_id'			=> '2',
            'kategori_kegiatan'     => 'Satuan Biaya Transportasi Kegiatan Dalam Kota',
        ]);

        Kategori::create([
        	'kegiatan_id'			=> '2',
            'kategori_kegiatan'     => 'Satuan Biaya Perjalanan Dinas Bagi Mahasiswa',
        ]);

        Kategori::create([
        	'kegiatan_id'			=> '2',
            'kategori_kegiatan'     => 'Satuan Biaya Taksi Perjalanan Dinas Dalam Negeri',
        ]);
    }
}
