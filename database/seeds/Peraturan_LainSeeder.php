<?php

use Illuminate\Database\Seeder;
use App\PeraturanLain;

class Peraturan_LainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PeraturanLain::create([
            'version_id'    => '1',
            'peraturan'     => 'Peraturan LALALA',
            'keterangan'    => 'http://google.com',
            'kode_tabel'    => '10',
        ]);
    }
}
