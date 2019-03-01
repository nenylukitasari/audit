<?php

use Illuminate\Database\Seeder;
use App\JenisKegiatan;

class JenisKegiatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        JenisKegiatan::create([
    		'jenis_kegiatan'		=> 'Batas Tertinggi',
    		'link_jenis_kegiatan'	=> '/lampiranI',
       	]);

       	JenisKegiatan::create([
    		'jenis_kegiatan'		=> 'Estimasi untuk Perencanaan Anggaran',
    		'link_jenis_kegiatan'	=> '/lampiranII',
       	]);
    }
}
