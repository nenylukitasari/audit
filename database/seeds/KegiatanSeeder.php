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
		      'jenis_kegiatan_id'			=> '1',
    		  'nama_kegiatan'      			=> 'Satuan Biaya Uang Makan, Lembur, dan Konsumsi Rapat',
       	]);
       	Kegiatan::create([
		      'jenis_kegiatan_id'			=> '1',
    		  'nama_kegiatan'      			=> 'Standar Biaya Perjalanan Dinas',
       	]);
       	Kegiatan::create([
		      'jenis_kegiatan_id'			=> '1',
    		  'nama_kegiatan'      			=> 'Standar Biaya Honorarium',
       	]);
       	Kegiatan::create([
		      'jenis_kegiatan_id'			=> '1',
    		  'nama_kegiatan'      			=> 'Standar Biaya Honorarium Tidak Tetap',
       	]);
       	Kegiatan::create([
		      'jenis_kegiatan_id'			=> '1',
    		  'nama_kegiatan'      			=> 'Standar Biaya Pengembangan Kompetensi',
       	]);
       	Kegiatan::create([
		      'jenis_kegiatan_id'			=> '1',
    		  'nama_kegiatan'      			=> 'Standar Biaya Honorarium Penelitian/Perekayasaan',
       	]);
       	Kegiatan::create([
		      'jenis_kegiatan_id'			=> '1',
    		  'nama_kegiatan'      			=> 'Standar Biaya Insentif Publikasi',
       	]);
       	Kegiatan::create([
		      'jenis_kegiatan_id'			=> '1',
    		  'nama_kegiatan'      			=> 'Standar Biaya Penulisan Buku',
       	]);
       	Kegiatan::create([
		      'jenis_kegiatan_id'			=> '1',
    		  'nama_kegiatan'      			=> 'Standar Biaya Penghargaan, Program Kewirausahaan, dan Kepesertaan Kegiatan Bagi Mahasiswa',
       	]);
       	Kegiatan::create([
		      'jenis_kegiatan_id'			=> '1',
    		  'nama_kegiatan'      			=> 'Standar Biaya Layanan Kerjasama Profesional',
       	]);
   		Kegiatan::create([
		      'jenis_kegiatan_id'			=> '1',
    		  'nama_kegiatan'      			=> 'Standar Biaya Penghargaan Pelaksanaan SPMI (Sistem Penjaminan Mutu Internal)',
       	]);
       	Kegiatan::create([
		      'jenis_kegiatan_id'			=> '1',
    		  'nama_kegiatan'      			=> 'Standar Biaya Seragam Dinas/Kegiatan',
       	]);
       	Kegiatan::create([
		      'jenis_kegiatan_id'			=> '2',
    		  'nama_kegiatan'      			=> 'Standar Biaya Perencanaan Perjalanan Dinas',
       	]);
       	Kegiatan::create([
		      'jenis_kegiatan_id'			=> '2',
    		  'nama_kegiatan'      			=> 'Standar Biaya Keperluan Operasional',
       	]);
    }
}
