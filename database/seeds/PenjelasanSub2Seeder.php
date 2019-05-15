<?php

use Illuminate\Database\Seeder;
use App\PenjelasanSub2;

class PenjelasanSub2Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PenjelasanSub2::create([
            'penjelasan_sub1_id'    => '28',
            'kode_tabel'     => '9',
            'penjelasan'     => 'Program Diploma I maksimal 1 Tahun.',
        ]);
        PenjelasanSub2::create([
            'penjelasan_sub1_id'    => '28',
            'kode_tabel'     => '9',
            'penjelasan'     => 'Program  Diploma III maksimal 3 tahun.',
        ]);
        PenjelasanSub2::create([
            'penjelasan_sub1_id'    => '28',
            'kode_tabel'     => '9',
            'penjelasan'     => 'Program Pendidikan Strata I (S1) maksimal 4 tahun.',
        ]);
        PenjelasanSub2::create([
            'penjelasan_sub1_id'    => '28',
            'kode_tabel'     => '9',
            'penjelasan'     => 'Program Pendidikan Strata II (S2/Magister) atau yang setara maksimal 2 tahun.',
        ]);
        PenjelasanSub2::create([
            'penjelasan_sub1_id'    => '28',
            'kode_tabel'     => '9',
            'penjelasan'     => 'Program Pendidikan Strata III (S3/Doktoral) atau setara maksimal 3 tahun.',
        ]);
    }
}
