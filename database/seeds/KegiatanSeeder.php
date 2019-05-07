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
		      'jenis_kegiatan_id'			  => '1',
    		  'nama_kegiatan'      			=> 'Satuan Biaya Uang Makan, Lembur, dan Konsumsi Rapat',
          'kode_tabel'              => '2',
          'kode_bagian'             => '1',
       	]);
       	Kegiatan::create([
		      'jenis_kegiatan_id'			  => '1',
    		  'nama_kegiatan'      			=> 'Standar Biaya Perjalanan Dinas',
          'kode_tabel'              => '2',
          'kode_bagian'             => '2',
       	]);
       	Kegiatan::create([
		      'jenis_kegiatan_id'			  => '1',
    		  'nama_kegiatan'      			=> 'Standar Biaya Honorarium',
          'kode_tabel'              => '2',
          'kode_bagian'             => '3',
       	]);
       	Kegiatan::create([
		      'jenis_kegiatan_id'			  => '1',
    		  'nama_kegiatan'      			=> 'Standar Biaya Honorarium Tidak Tetap',
          'kode_tabel'              => '2',
          'kode_bagian'             => '4',
       	]);
       	Kegiatan::create([
		      'jenis_kegiatan_id'			  => '1',
    		  'nama_kegiatan'      			=> 'Standar Biaya Pengembangan Kompetensi',
          'kode_tabel'              => '2',
          'kode_bagian'             => '5',
       	]);
       	Kegiatan::create([
		      'jenis_kegiatan_id'			  => '1',
    		  'nama_kegiatan'      			=> 'Standar Biaya Honorarium Penelitian/Perekayasaan',
          'kode_tabel'              => '2',
          'kode_bagian'             => '6',
       	]);
       	Kegiatan::create([
		      'jenis_kegiatan_id'			  => '1',
    		  'nama_kegiatan'      			=> 'Standar Biaya Insentif Publikasi',
          'kode_tabel'              => '2',
          'kode_bagian'             => '7',
       	]);
       	Kegiatan::create([
		      'jenis_kegiatan_id'			  => '1',
    		  'nama_kegiatan'      			=> 'Standar Biaya Penulisan Buku',
          'kode_tabel'              => '2',
          'kode_bagian'             => '8',
       	]);
       	Kegiatan::create([
		      'jenis_kegiatan_id'			  => '1',
    		  'nama_kegiatan'      			=> 'Standar Biaya Penghargaan, Program Kewirausahaan, dan Kepesertaan Kegiatan Bagi Mahasiswa',
          'kode_tabel'              => '2',
          'kode_bagian'             => '9',
       	]);
       	Kegiatan::create([
		      'jenis_kegiatan_id'			  => '1',
    		  'nama_kegiatan'      			=> 'Standar Biaya Layanan Kerjasama Profesional',
          'kode_tabel'              => '2',
          'kode_bagian'             => '10',
       	]);
   		Kegiatan::create([
		      'jenis_kegiatan_id'			  => '1',
    		  'nama_kegiatan'      			=> 'Standar Biaya Penghargaan Pelaksanaan SPMI (Sistem Penjaminan Mutu Internal)',
          'kode_tabel'              => '2',
          'kode_bagian'             => '11',
       	]);
       	Kegiatan::create([
		      'jenis_kegiatan_id'			  => '1',
    		  'nama_kegiatan'      			=> 'Standar Biaya Seragam Dinas/Kegiatan',
          'kode_tabel'              => '2',
          'kode_bagian'             => '12',
       	]);
       	Kegiatan::create([
		      'jenis_kegiatan_id'			  => '2',
    		  'nama_kegiatan'      			=> 'Standar Biaya Perencanaan Perjalanan Dinas',
          'kode_tabel'              => '2',
          'kode_bagian'             => '13',
       	]);
       	Kegiatan::create([
		      'jenis_kegiatan_id'			  => '2',
    		  'nama_kegiatan'      			=> 'Standar Biaya Keperluan Operasional',
          'kode_tabel'              => '2',
          'kode_bagian'             => '14',
       	]);
    }
}
