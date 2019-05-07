<?php

use Illuminate\Database\Seeder;
use App\Sub2;

class Sub2Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Sub2::create([
    		'sub1_id'				=> '161',
            'kode_tabel'            => '6',
    		'uraian_kegiatan'		=> 'Menteri/Pejabat setingkat Menteri',
    		'satuan'				=> 'Orang/Jam',
    		'var1'					=> '1700000',
    	]);
        Sub2::create([
            'sub1_id'               => '161',
            'kode_tabel'            => '6',
            'uraian_kegiatan'       => 'Pejabat Eselon I/yang disetarakan',
            'satuan'                => 'Orang/Jam',
            'var1'                  => '1400000',
        ]);
        Sub2::create([
            'sub1_id'               => '161',
            'kode_tabel'            => '6',
            'uraian_kegiatan'       => 'Pejabat Eselon II/yang disetarakan',
            'satuan'                => 'Orang/Jam',
            'var1'                  => '1000000',
        ]);
        Sub2::create([
            'sub1_id'               => '161',
            'kode_tabel'            => '6',
            'uraian_kegiatan'       => 'Pejabat Eselon III/yang disetarakan',
            'satuan'                => 'Orang/Jam',
            'var1'                  => '900000',
        ]);
        Sub2::create([
            'sub1_id'               => '161',
            'kode_tabel'            => '6',
            'uraian_kegiatan'       => 'Praktisi/Pakar/Profesional',
            'satuan'                => 'Orang/Jam',
            'var1'                  => '1700000',
        ]);
        Sub2::create([
            'sub1_id'               => '162',
            'kode_tabel'            => '6',
            'uraian_kegiatan'       => 'Moderator Seminar',
            'satuan'                => 'Orang/Datang',
            'var1'                  => '700000',
        ]);
        Sub2::create([
            'sub1_id'               => '162',
            'kode_tabel'            => '6',
            'uraian_kegiatan'       => 'Pembawa Acara',
            'satuan'                => 'Orang/Datang',
            'var1'                  => '400000',
        ]);
        Sub2::create([
            'sub1_id'               => '163',
            'kode_tabel'            => '6',
            'uraian_kegiatan'       => 'Menteri/Pejabat setingkat Menteri',
            'satuan'                => 'Orang/Jam',
            'var1'                  => '2550000',
        ]);
        Sub2::create([
            'sub1_id'               => '163',
            'kode_tabel'            => '6',
            'uraian_kegiatan'       => 'Pejabat Eselon I/yang disetarakan',
            'satuan'                => 'Orang/Jam',
            'var1'                  => '2100000',
        ]);
        Sub2::create([
            'sub1_id'               => '163',
            'kode_tabel'            => '6',
            'uraian_kegiatan'       => 'Pejabat Eselon II/yang disetarakan',
            'satuan'                => 'Orang/Jam',
            'var1'                  => '1500000',
        ]);
        Sub2::create([
            'sub1_id'               => '163',
            'kode_tabel'            => '6',
            'uraian_kegiatan'       => 'Pejabat Eselon III/yang disetarakan',
            'satuan'                => 'Orang/Jam',
            'var1'                  => '1350000',
        ]);
        Sub2::create([
            'sub1_id'               => '163',
            'kode_tabel'            => '6',
            'uraian_kegiatan'       => 'Praktisi/Pakar/Profesional',
            'satuan'                => 'Orang/Jam',
            'var1'                  => '2550000',
        ]);
        Sub2::create([
            'sub1_id'               => '164',
            'kode_tabel'            => '6',
            'uraian_kegiatan'       => 'Moderator Seminar',
            'satuan'                => 'Orang/Datang',
            'var1'                  => '1050000',
        ]);
        Sub2::create([
            'sub1_id'               => '164',
            'kode_tabel'            => '6',
            'uraian_kegiatan'       => 'Pembawa Acara',
            'satuan'                => 'Orang/Datang',
            'var1'                  => '600000',
        ]);
    }
}
