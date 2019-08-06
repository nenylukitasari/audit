<?php

use Illuminate\Database\Seeder;
use App\Sumberdana;

class SumberdanaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        sumberdana::create([
            'jenis_dana'    => 'Non PNBP',
       	]);
       	sumberdana::create([
            'jenis_dana'    => 'BPPTNBH',
       	]);
       	sumberdana::create([
            'jenis_dana'    => 'APBN-K',
       	]);
       	sumberdana::create([
            'jenis_dana'    => 'APBN',
       	]);

    }
}
