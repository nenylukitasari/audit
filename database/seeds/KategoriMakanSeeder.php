<?php

use Illuminate\Database\Seeder;
use App\KategoriMakan;

class KategoriMakanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        KategoriMakan::create([
    		'kategori_makan'		=> 'Satuan Biaya Uang Makan Pegawai Tetap',
       	]);

        KategoriMakan::create([
    		'kategori_makan'		=> 'Satuan Biaya Lembur',
    	]);

      	KategoriMakan::create([
    		'kategori_makan'		=> 'Satuan Biaya Konsumsi Penyelenggaraan Rapat atau Pertemuan Lain',
    	]);

        KategoriMakan::create([
            'kategori_makan'        => 'Satuan Uang Harian Perjalanan Dinas Dalam Negeri',
        ]);

        KategoriMakan::create([
            'kategori_makan'        => 'Satuan Uang Representasi',
        ]);

        KategoriMakan::create([
            'kategori_makan'        => 'Satuan Uang Harian Perjalanan Dinas Luar Negeri (Dalam US$)',
        ]);

        KategoriMakan::create([
            'kategori_makan'        => 'Satuan Biaya Rapat/Pertemuan di Luar Kantor',
        ]);

        KategoriMakan::create([
            'kategori_makan'        => 'Satuan Biaya Transportasi Kegiatan Dalam Kota',
        ]);

        KategoriMakan::create([
            'kategori_makan'        => 'Satuan Biaya Perjalanan Dinas Bagi Mahasiswa',
        ]);

        KategoriMakan::create([
            'kategori_makan'        => 'Satuan Biaya Taksi Perjalanan Dinas Dalam Negeri',
        ]);

        


    }
}
