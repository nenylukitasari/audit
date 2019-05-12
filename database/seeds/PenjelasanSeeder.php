<?php

use Illuminate\Database\Seeder;
use App\Penjelasan;

class PenjelasanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Penjelasan::create([
            'version_id'     => '1',
            'kategori_id'    => '1',
            'kode_tabel'     => '7',
            'penjelasan'     => 'Uang Makan diberikan secara bulanan dan dihitung berdasarkan jumlah hari masuk kerja.',
        ]);
        Penjelasan::create([
            'version_id'     => '1',
            'kategori_id'    => '2',
            'kode_tabel'     => '7',
            'penjelasan'     => 'Uang Lembur merupakann kompensasi bagi tenaga kependidikan tetap yang melakukan kerja lembur berdasarkan surat perintah dan otorisasi dari pejabat yang berwenang',
        ]);
        Penjelasan::create([
            'version_id'     => '1',
            'kategori_id'    => '2',
            'kode_tabel'     => '7',
            'penjelasan'     => 'Uang lembur diberikan kepada tenaga kependidikan tetap kecuali Kepala Biro/setara ke atas yang melakukan kerja lembur',
        ]);
        Penjelasan::create([
            'version_id'     => '1',
            'kategori_id'    => '2',
            'kode_tabel'     => '7',
            'penjelasan'     => 'Besar uang lembur pada hari libur kerja adalah sebesar 200% (dua ratus persen) dari besar uang lembur hari kerja',
        ]);
        Penjelasan::create([
            'version_id'     => '1',
            'kategori_id'    => '2',
            'kode_tabel'     => '7',
            'penjelasan'     => 'Konsumsi lembur diberikan setelah bekerja lembur sekurang-kurangnya 2 (dua) jam secara berturut-turut dan diberikan maksimal 1 (satu) kali per hari',
        ]);
        Penjelasan::create([
            'version_id'     => '1',
            'kategori_id'    => '2',
            'kode_tabel'     => '7',
            'penjelasan'     => 'Dalam hal kerja lembur yang dilakukan pada hari libur selama 8 (delapan) jam atau lebih, konsumsi lembur diberikan maksimal 2 (dua) kali',
        ]);
        Penjelasan::create([
            'version_id'     => '1',
            'kategori_id'    => '2',
            'kode_tabel'     => '7',
            'penjelasan'     => 'Besar uang lembur pada Hari Raya Idul Fitri (2 hari) sebesar 300% (tiga ratus persen) dari besar uang lembur hari kerja',
        ]);
        Penjelasan::create([
            'version_id'     => '1',
            'kategori_id'    => '2',
            'kode_tabel'     => '7',
            'penjelasan'     => 'Persyaratan lembur : surat tugas pimpinan unit dilengkapi dengan data absen finger print dan perincian jam lembur yang disahkan oleh pimpinan unit kerja',
        ]);
        Penjelasan::create([
            'version_id'     => '1',
            'kategori_id'    => '2',
            'kode_tabel'     => '7',
            'penjelasan'     => 'Batasan maksimal jam lembur dalam 1 bulan adalah 40 jam',
        ]);
        Penjelasan::create([
            'version_id'     => '1',
            'kategori_id'    => '2',
            'kode_tabel'     => '7',
            'penjelasan'     => 'Perhitungan jam lembur berdasarkan pembulatan kebawah dan diberikan untuk lembur yang dilakukan secara berturut-turut',
        ]);
        Penjelasan::create([
            'version_id'     => '1',
            'kegiatan_id'    => '5',
            'kode_tabel'     => '7',
            'penjelasan'     => 'COBACOBA',
        ]);
        Penjelasan::create([
            'version_id'     => '1',
            'kegiatan_id'    => '5',
            'kode_tabel'     => '7',
            'penjelasan'     => 'COBACOBA LAGI HEHE',
        ]);
    }
}
