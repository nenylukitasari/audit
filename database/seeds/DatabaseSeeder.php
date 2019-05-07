<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            VersionSeeder::class,
            JenisKegiatanSeeder::class,
            KegiatanSeeder::class,
            // KategoriSeeder::class,
            // ProvinsiSeeder::class,
            // UraianSeeder::class,
            // Sub1Seeder::class,
            // Sub2Seeder::class,
            // PenjelasanSeeder::class,
            template_summernote::class,
            Unitseeder::class,
        ]);
    }
}
