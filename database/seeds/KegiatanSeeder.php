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
    		  'kegiatan'	       			=> 'Satuan Biaya Uang Makan, Lembur, dan Konsumsi Rapat',
		      'kategori_kegiatan_id'	=> '1',
       	]);
       	Kegiatan::create([
    		  'kegiatan'	       			=> 'Standar Biaya Perjalanan Dinas',
		      'kategori_kegiatan_id'	=> '1',
       	]);
       	Kegiatan::create([
    		  'kegiatan'	       			=> 'Standar Biaya Honorarium',
		      'kategori_kegiatan_id'	=> '1',
       	]);
       	Kegiatan::create([
    		  'kegiatan'	       			=> 'Standar Biaya Honorarium Tidak Tetap',
		      'kategori_kegiatan_id'	=> '1',
       	]);
       	Kegiatan::create([
    		  'kegiatan'	       			=> 'Standar Biaya Pengembangan Kompetensi',
		      'kategori_kegiatan_id'	=> '1',
       	]);
       	Kegiatan::create([
    		  'kegiatan'	       			=> 'Standar Biaya Honorarium Penelitian/Perekayasaan',
		      'kategori_kegiatan_id'	=> '1',
       	]);
       	Kegiatan::create([
    		  'kegiatan'	       			=> 'Standar Biaya Insentif Publikasi',
		      'kategori_kegiatan_id'	=> '1',
       	]);
       	Kegiatan::create([
    		  'kegiatan'	       			=> 'Standar Biaya Penulisan Buku',
		      'kategori_kegiatan_id'	=> '1',
       	]);
       	Kegiatan::create([
    		  'kegiatan'	       			=> 'Standar Biaya Penghargaan, Program Kewirausahaan, dan Kepesertaan Kegiatan Bagi Mahasiswa',
		      'kategori_kegiatan_id'	=> '1',
       	]);
       	Kegiatan::create([
    		  'kegiatan'	       			=> 'Standar Biaya Layanan Kerjasama Profesional',
		      'kategori_kegiatan_id'	=> '1',
       	]);
   		Kegiatan::create([
    		  'kegiatan'	       			=> 'Standar Biaya Penghargaan Pelaksanaan SPMI (Sistem Penjaminan Mutu Internal)',
		      'kategori_kegiatan_id'	=> '1',
       	]);
       	Kegiatan::create([
    		  'kegiatan'	       			=> 'Standar Biaya Seragam Dinas/Kegiatan',
		      'kategori_kegiatan_id'	=> '1',
       	]);
       	Kegiatan::create([
    		  'kegiatan'	       			=> 'Standar Biaya Perencanaan Perjalanan Dinas',
		      'kategori_kegiatan_id'	=> '2',
       	]);
       	Kegiatan::create([
    		  'kegiatan'	       			=> 'Standar Biaya Keperluan Operasional',
		      'kategori_kegiatan_id'	=> '2',
       	]);
    }
}
