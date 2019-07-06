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
            'version_id'         => '1',
            'nama_peraturan'     => 'Peraturan Rektor Tahun 2019',
            'link_keterangan'    => 'http://google.com',
        ]);
    }
}
