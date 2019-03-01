<?php

use Illuminate\Database\Seeder;
use App\Kegiatan;

class KegiatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Kegiatan::create([
        	'id_jenis_kegiatan' => '1',
    		'nama_kegiatan'		=> 'Satuan Biaya Uang Makan, Lembur, dan Konsumsi Rapat',
    	]);

    	Kegiatan::create([
    		'id_jenis_kegiatan' => '1',
    		'nama_kegiatan'		=> 'Standar Biaya Perjalanan Dinas',
    	]);

    	Kegiatan::create([
        	'id_jenis_kegiatan' => '1',
    		'nama_kegiatan'		=> 'Standar Biaya Honorarium',
    	]);

    	Kegiatan::create([
    		'id_jenis_kegiatan' => '1',
    		'nama_kegiatan'		=> 'Standar Biaya Honorarium Tidak Tetap',
    	]);

    	Kegiatan::create([
        	'id_jenis_kegiatan' => '1',
    		'nama_kegiatan'		=> 'Standar Biaya Pengembangan Kompetensi',
    	]);

    	Kegiatan::create([
    		'id_jenis_kegiatan' => '1',
    		'nama_kegiatan'		=> 'Standar Biaya Honorarium Penelitian/Perekayasaan',
    	]);

    	Kegiatan::create([
        	'id_jenis_kegiatan' => '1',
    		'nama_kegiatan'		=> 'Standar Biaya Insentif Publikasi',
    	]);

    	Kegiatan::create([
    		'id_jenis_kegiatan' => '1',
    		'nama_kegiatan'		=> 'Standar Biaya Penulisan Buku',
    	]);


    	Kegiatan::create([
    		'id_jenis_kegiatan' => '1',
    		'nama_kegiatan'		=> 'Standar Biaya Penghargaan, Program Kewirausahaan, dan Kepesertaan Kegiatan Bagi Mahasiswa',
    	]);

    	Kegiatan::create([
        	'id_jenis_kegiatan' => '1',
    		'nama_kegiatan'		=> 'Standar Biaya Layanan Kerjasama Profesional',
    	]);

    	Kegiatan::create([
    		'id_jenis_kegiatan' => '1',
    		'nama_kegiatan'		=> 'Standar Biaya Penghargaan Pelaksanaan SPMI (Sistem Penjaminan Mutu Internal)',
    	]);

    	Kegiatan::create([
    		'id_jenis_kegiatan' => '1',
    		'nama_kegiatan'		=> 'Standar Biaya Seragam Dinas/Kegiatan',
    	]);	

    	Kegiatan::create([
        	'id_jenis_kegiatan' => '2',
    		'nama_kegiatan'		=> 'Standar Biaya Perencanaan Perjalanan Dinas',
    	]);

    	Kegiatan::create([
    		'id_jenis_kegiatan' => '2',
    		'nama_kegiatan'		=> 'Standar Biaya Keperluan Operasional',
    	]);

    }
}
