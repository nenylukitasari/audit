<?php

use Illuminate\Database\Seeder;
use App\Uraian;

class UraianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Uraian::create([
    		'kode_tabel'            => '4',
            'kategori_id'			=> '1',
    		'uraian_kegiatan'		=> 'Golongan IV/Setara',
    		'satuan'				=> 'Orang/Hari',
    		'var1'					=> '41000',
    	]);

        Uraian::create([
    		'kode_tabel'            => '4',
            'kategori_id'			=> '1',
    		'uraian_kegiatan'		=> 'Golongan III/Setara',
    		'satuan'				=> 'Orang/Hari',
    		'var1'					=> '37000',
    	]);

    	Uraian::create([
    		'kode_tabel'            => '4',
            'kategori_id'			=> '1',
    		'uraian_kegiatan'		=> 'Golongan II dan I/Setara',
    		'satuan'				=> 'Orang/Hari',
    		'var1'					=> '35000',
    	]);

    	 Uraian::create([
    		'kode_tabel'            => '4',
            'kategori_id'			=> '2',
    		'uraian_kegiatan'		=> 'Golongan IV/Setara',
    		'satuan'				=> 'Orang/Hari',
    		'var1'					=> '25000',
    	]);

        Uraian::create([
    		'kode_tabel'            => '4',
            'kategori_id'			=> '2',
    		'uraian_kegiatan'		=> 'Golongan III/Setara',
    		'satuan'				=> 'Orang/Jam',
    		'var1'					=> '20000',
    	]);

    	Uraian::create([
    		'kode_tabel'            => '4',
            'kategori_id'			=> '2',
    		'uraian_kegiatan'		=> 'Golongan II/Setara',
    		'satuan'				=> 'Orang/Jam',
    		'var1'					=> '17000',
    	]);
    	Uraian::create([
    		'kode_tabel'            => '4',
            'kategori_id'			=> '2',
    		'uraian_kegiatan'		=> 'Golongan I/Setara',
    		'satuan'				=> 'Orang/Jam',
    		'var1'					=> '13000',
    	]);

    	Uraian::create([
    		'kode_tabel'            => '4',
            'kategori_id'			=> '3',
    		'uraian_kegiatan'		=> 'Rapat Koordinasi/Workshop/Seminar/FGD/Kegiatan Sejenis',
    	]);

    	Uraian::create([
    		'kode_tabel'            => '4',
            'kategori_id'			=> '3',
    		'uraian_kegiatan'		=> 'Rapat/Kegiatan Mengundang Pejabat Tingkat Menteri/Eselon I/Setara',	
    	]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '4',
            // 'provinsi_id'           => '1',
            'uraian_kegiatan'       => 'Aceh',
            'satuan'                => 'OH',
            'var1'                  => '360000',
            'var2'                  => '140000',
            'var3'                  => '110000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '4',
            // 'provinsi_id'           => '2',
            'uraian_kegiatan'       => 'Sumatera Utara',
            'satuan'                => 'OH',
            'var1'                  => '370000',
            'var2'                  => '150000',
            'var3'                  => '110000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '4',
            // 'provinsi_id'           => '3',
            'uraian_kegiatan'       => 'Riau',
            'satuan'                => 'OH',
            'var1'                  => '370000',
            'var2'                  => '150000',
            'var3'                  => '110000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '4',
            // 'provinsi_id'           => '4',
            'uraian_kegiatan'       => 'Kepulauan Riau',
            'satuan'                => 'OH',
            'var1'                  => '370000',
            'var2'                  => '150000',
            'var3'                  => '110000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '4',
            // 'provinsi_id'           => '5',
            'uraian_kegiatan'       => 'Jambi',
            'satuan'                => 'OH',
            'var1'                  => '370000',
            'var2'                  => '150000',
            'var3'                  => '110000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '4',
            // 'provinsi_id'           => '6',
            'uraian_kegiatan'       => 'Sumatera Barat',
            'satuan'                => 'OH',
            'var1'                  => '380000',
            'var2'                  => '150000',
            'var3'                  => '110000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '4',
            // 'provinsi_id'           => '7',
            'uraian_kegiatan'       => 'Sumatera Selatan',
            'satuan'                => 'OH',
            'var1'                  => '380000',
            'var2'                  => '150000',
            'var3'                  => '110000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '4',
            // 'provinsi_id'           => '8',
            'uraian_kegiatan'       => 'Lampung',
            'satuan'                => 'OH',
            'var1'                  => '380000',
            'var2'                  => '150000',
            'var3'                  => '110000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '4',
            // 'provinsi_id'           => '9',
            'uraian_kegiatan'       => 'Bengkulu',
            'satuan'                => 'OH',
            'var1'                  => '380000',
            'var2'                  => '150000',
            'var3'                  => '110000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '4',
            // 'provinsi_id'           => '10',
            'uraian_kegiatan'       => 'Bangka Belitung',
            'satuan'                => 'OH',
            'var1'                  => '410000',
            'var2'                  => '160000',
            'var3'                  => '120000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '4',
            // 'provinsi_id'           => '11',
            'uraian_kegiatan'       => 'Banten',
            'satuan'                => 'OH',
            'var1'                  => '370000',
            'var2'                  => '150000',
            'var3'                  => '110000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '4',
            // 'provinsi_id'           => '12',
            'uraian_kegiatan'       => 'Jawa Barat',
            'satuan'                => 'OH',
            'var1'                  => '430000',
            'var2'                  => '170000',
            'var3'                  => '130000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '4',
            // 'provinsi_id'           => '13',
            'uraian_kegiatan'       => 'DKI Jakarta',
            'satuan'                => 'OH',
            'var1'                  => '530000',
            'var2'                  => '210000',
            'var3'                  => '160000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '4',
            // 'provinsi_id'           => '14',
            'uraian_kegiatan'       => 'Jawa Tengah',
            'satuan'                => 'OH',
            'var1'                  => '370000',
            'var2'                  => '150000',
            'var3'                  => '110000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '4',
            // 'provinsi_id'           => '15',
            'uraian_kegiatan'       => 'DI Yogyakarta',
            'satuan'                => 'OH',
            'var1'                  => '420000',
            'var2'                  => '170000',
            'var3'                  => '130000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '4',
            // 'provinsi_id'           => '16',
            'uraian_kegiatan'       => 'Jawa Timur',
            'satuan'                => 'OH',
            'var1'                  => '410000',
            'var2'                  => '160000',
            'var3'                  => '120000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '4',
            // 'provinsi_id'           => '17',
            'uraian_kegiatan'       => 'Bali',
            'satuan'                => 'OH',
            'var1'                  => '480000',
            'var2'                  => '190000',
            'var3'                  => '140000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '4',
            // 'provinsi_id'           => '18',
            'uraian_kegiatan'       => 'Nusa Tenggara Barat',
            'satuan'                => 'OH',
            'var1'                  => '440000',
            'var2'                  => '180000',
            'var3'                  => '130000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '4',
            // 'provinsi_id'           => '19',
            'uraian_kegiatan'       => 'Nusa Tenggara Timur',
            'satuan'                => 'OH',
            'var1'                  => '430000',
            'var2'                  => '170000',
            'var3'                  => '130000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '4',
            // 'provinsi_id'           => '20',
            'uraian_kegiatan'       => 'Kalimantan Barat',
            'satuan'                => 'OH',
            'var1'                  => '380000',
            'var2'                  => '150000',
            'var3'                  => '110000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '4',
            // 'provinsi_id'           => '21',
            'uraian_kegiatan'       => 'Kalimantan Tengah',
            'satuan'                => 'OH',
            'var1'                  => '360000',
            'var2'                  => '140000',
            'var3'                  => '110000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '4',
            // 'provinsi_id'           => '22',
            'uraian_kegiatan'       => 'Kalimantan Selatan',
            'satuan'                => 'OH',
            'var1'                  => '380000',
            'var2'                  => '150000',
            'var3'                  => '110000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '4',
            // 'provinsi_id'           => '23',
            'uraian_kegiatan'       => 'Kalimantan Timur',
            'satuan'                => 'OH',
            'var1'                  => '430000',
            'var2'                  => '170000',
            'var3'                  => '130000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '4',
            // 'provinsi_id'           => '24',
            'uraian_kegiatan'       => 'Kalimantan Utara',
            'satuan'                => 'OH',
            'var1'                  => '430000',
            'var2'                  => '170000',
            'var3'                  => '130000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '4',
            // 'provinsi_id'           => '25',
            'uraian_kegiatan'       => 'Sulawesi Utara',
            'satuan'                => 'OH',
            'var1'                  => '370000',
            'var2'                  => '150000',
            'var3'                  => '110000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '4',
            // 'provinsi_id'           => '26',
            'uraian_kegiatan'       => 'Gorontalo',
            'satuan'                => 'OH',
            'var1'                  => '370000',
            'var2'                  => '150000',
            'var3'                  => '110000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '4',
            // 'provinsi_id'           => '27',
            'uraian_kegiatan'       => 'Sulawesi Barat',
            'satuan'                => 'OH',
            'var1'                  => '410000',
            'var2'                  => '160000',
            'var3'                  => '120000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '4',
            // 'provinsi_id'           => '28',
            'uraian_kegiatan'       => 'Sulawesi Selatan',
            'satuan'                => 'OH',
            'var1'                  => '430000',
            'var2'                  => '170000',
            'var3'                  => '130000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '4',
            // 'provinsi_id'           => '29',
            'uraian_kegiatan'       => 'Sulawesi Tengah',
            'satuan'                => 'OH',
            'var1'                  => '370000',
            'var2'                  => '150000',
            'var3'                  => '110000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '4',
            // 'provinsi_id'           => '30',
            'uraian_kegiatan'       => 'Sulawesi Tenggara',
            'satuan'                => 'OH',
            'var1'                  => '380000',
            'var2'                  => '150000',
            'var3'                  => '110000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '4',
            // 'provinsi_id'           => '31',
            'uraian_kegiatan'       => 'Maluku',
            'satuan'                => 'OH',
            'var1'                  => '380000',
            'var2'                  => '150000',
            'var3'                  => '110000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '4',
            // 'provinsi_id'           => '32',
            'uraian_kegiatan'       => 'Maluku Utara',
            'satuan'                => 'OH',
            'var1'                  => '430000',
            'var2'                  => '170000',
            'var3'                  => '130000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '4',
            // 'provinsi_id'           => '33',
            'uraian_kegiatan'       => 'Papua',
            'satuan'                => 'OH',
            'var1'                  => '580000',
            'var2'                  => '230000',
            'var3'                  => '170000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '4',
            // 'provinsi_id'           => '34',
            'uraian_kegiatan'       => 'Papua Barat',
            'satuan'                => 'OH',
            'var1'                  => '480000',
            'var2'                  => '190000',
            'var3'                  => '140000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '5',
            'uraian_kegiatan'       => 'Rektor dan Wakil Rektor',
            'satuan'                => 'OH',
            'var1'                  => '250000',
            'var2'                  => '125000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '5',
            'uraian_kegiatan'       => 'Sekretaris Institut, Direktur, Kepala Lembaga, Kepala Badan, Dekan, Kepala Kantor, Kepala Biro',
            'satuan'                => 'OH',
            'var1'                  => '200000',
            'var2'                  => '100000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '5',
            'uraian_kegiatan'       => 'Wakil Dekan, Sekretaris Lembaga, Kepala Subdirektorat, Kepala Unit, Kepala Departemen, Kepala Perpustakan, Kepala Bagian',
            'satuan'                => 'OH',
            'var1'                  => '150000',
            'var2'                  => '75000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '6',
            'uraian_kegiatan'       => 'Amerika Utara',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '6',
            'uraian_kegiatan'       => 'Amerika Selatan',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '6',
            'uraian_kegiatan'       => 'Amerika Tengah',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '6',
            'uraian_kegiatan'       => 'Eropa Barat',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '6',
            'uraian_kegiatan'       => 'Eropa Utara',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '6',
            'uraian_kegiatan'       => 'Eropa Selatan',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '6',
            'uraian_kegiatan'       => 'Asia Tenggara',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '6',
            'uraian_kegiatan'       => 'Asia Pasifik',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '7',
            'uraian_kegiatan'       => 'Biaya Paket Kegiatan',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '7',
            'uraian_kegiatan'       => 'Uang Harian',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '8',
            'uraian_kegiatan'       => 'Satuan Biaya Transportasi Kegiatan Dalam Kota (PP)',
            'satuan'                => 'O/Kali',
            'var1'                  => '150000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '9',
            'uraian_kegiatan'       => 'Perjalanan Dalam Negeri',
            'satuan'                => 'OH',
            'var1'                  => '200000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '9',
            'uraian_kegiatan'       => 'Perjalanan Luar Negeri',
            'satuan'                => 'OH',
            'var1'                  => '400000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '10',
            'uraian_kegiatan'       => 'Aceh',
            // 'provinsi_id'           => '1',
            'satuan'                => 'Orang/Kali',
            'var1'                  => '123000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '10',
            'uraian_kegiatan'       => 'Sumatera Utara',
            // 'provinsi_id'           => '2',
            'satuan'                => 'Orang/Kali',
            'var1'                  => '232000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '10',
            'uraian_kegiatan'       => 'Riau',
            // 'provinsi_id'           => '3',
            'satuan'                => 'Orang/Kali',
            'var1'                  => '94000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '10',
            'uraian_kegiatan'       => 'Kepulauan Riau',
            // 'provinsi_id'           => '4',
            'satuan'                => 'Orang/Kali',
            'var1'                  => '137000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '10',
            'uraian_kegiatan'       => 'Jambi',
            // 'provinsi_id'           => '5',
            'satuan'                => 'Orang/Kali',
            'var1'                  => '147000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '10',
            'uraian_kegiatan'       => 'Sumatera Barat',
            // 'provinsi_id'           => '6',
            'satuan'                => 'Orang/Kali',
            'var1'                  => '190000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '10',
            'uraian_kegiatan'       => 'Sumatera Selatan',
            // 'provinsi_id'           => '7',
            'satuan'                => 'Orang/Kali',
            'var1'                  => '128000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '10',
            'uraian_kegiatan'       => 'Lampung',
            // 'provinsi_id'           => '8',
            'satuan'                => 'Orang/Kali',
            'var1'                  => '167000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '10',
            'uraian_kegiatan'       => 'Bengkulu',
            // 'provinsi_id'           => '9',
            'satuan'                => 'Orang/Kali',
            'var1'                  => '109000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '10',
            'uraian_kegiatan'       => 'Bangka Belitung',
            // 'provinsi_id'           => '10',
            'satuan'                => 'Orang/Kali',
            'var1'                  => '90000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '10',
            'uraian_kegiatan'       => 'Banten',
            // 'provinsi_id'           => '11',
            'satuan'                => 'Orang/Kali',
            'var1'                  => '446000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '10',
            'uraian_kegiatan'       => 'Jawa Barat',
            // 'provinsi_id'           => '12',
            'satuan'                => 'Orang/Kali',
            'var1'                  => '166000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '10',
            'uraian_kegiatan'       => 'DKI Jakarta',
            // 'provinsi_id'           => '13',
            'satuan'                => 'Orang/Kali',
            'var1'                  => '256000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '10',
            'uraian_kegiatan'       => 'Jawa Tengah',
            // 'provinsi_id'           => '14',
            'satuan'                => 'Orang/Kali',
            'var1'                  => '75000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '10',
            'uraian_kegiatan'       => 'DI Yogyakarta',
            // 'provinsi_id'           => '15',
            'satuan'                => 'Orang/Kali',
            'var1'                  => '118000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '10',
            'uraian_kegiatan'       => 'Jawa Timur',
            // 'provinsi_id'           => '16',
            'satuan'                => 'Orang/Kali',
            'var1'                  => '194000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '10',
            'uraian_kegiatan'       => 'Bali',
            // 'provinsi_id'           => '17',
            'satuan'                => 'Orang/Kali',
            'var1'                  => '159000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '10',
            'uraian_kegiatan'       => 'Nusa Tenggara Barat',
            // 'provinsi_id'           => '18',
            'satuan'                => 'Orang/Kali',
            'var1'                  => '231000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '10',
            'uraian_kegiatan'       => 'Nusa Tenggara Timur',
            // 'provinsi_id'           => '19',
            'satuan'                => 'Orang/Kali',
            'var1'                  => '108000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '10',
            'uraian_kegiatan'       => 'Kalimantan Barat',
            // 'provinsi_id'           => '20',
            'satuan'                => 'Orang/Kali',
            'var1'                  => '135000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '10',
            'uraian_kegiatan'       => 'Kalimantan Tengah',
            // 'provinsi_id'           => '21',
            'satuan'                => 'Orang/Kali',
            'var1'                  => '111000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '10',
            'uraian_kegiatan'       => 'Kalimantan Selatan',
            // 'provinsi_id'           => '22',
            'satuan'                => 'Orang/Kali',
            'var1'                  => '150000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '10',
            'uraian_kegiatan'       => 'Kalimantan Timur',
            // 'provinsi_id'           => '23',
            'satuan'                => 'Orang/Kali',
            'var1'                  => '450000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '10',
            'uraian_kegiatan'       => 'Kalimantan Utara',
            // 'provinsi_id'           => '24',
            'satuan'                => 'Orang/Kali',
            'var1'                  => '102000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '10',
            'uraian_kegiatan'       => 'Sulawesi Utara',
            // 'provinsi_id'           => '25',
            'satuan'                => 'Orang/Kali',
            'var1'                  => '138000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '10',
            'uraian_kegiatan'       => 'Gorontalo',
            // 'provinsi_id'           => '26',
            'satuan'                => 'Orang/Kali',
            'var1'                  => '240000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '10',
            'uraian_kegiatan'       => 'Sulawesi Barat',
            // 'provinsi_id'           => '27',
            'satuan'                => 'Orang/Kali',
            'var1'                  => '313000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '10',
            'uraian_kegiatan'       => 'Sulawesi Selatan',
            // 'provinsi_id'           => '28',
            'satuan'                => 'Orang/Kali',
            'var1'                  => '145000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '10',
            'uraian_kegiatan'       => 'Sulawesi Tengah',
            // 'provinsi_id'           => '29',
            'satuan'                => 'Orang/Kali',
            'var1'                  => '165000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '10',
            'uraian_kegiatan'       => 'Sulawesi Tenggara',
            // 'provinsi_id'           => '30',
            'satuan'                => 'Orang/Kali',
            'var1'                  => '171000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '10',
            'uraian_kegiatan'       => 'Maluku',
            // 'provinsi_id'           => '31',
            'satuan'                => 'Orang/Kali',
            'var1'                  => '240000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '10',
            'uraian_kegiatan'       => 'Maluku Utara',
            // 'provinsi_id'           => '32',
            'satuan'                => 'Orang/Kali',
            'var1'                  => '215000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '10',
            'uraian_kegiatan'       => 'Papua',
            // 'provinsi_id'           => '33',
            'satuan'                => 'Orang/Kali',
            'var1'                  => '431000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '10',
            'uraian_kegiatan'       => 'Papua Barat',
            // 'provinsi_id'           => '34',
            'satuan'                => 'Orang/Kali',
            'var1'                  => '182000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '11',
            'uraian_kegiatan'       => 'Ketua MWA',
            'satuan'                => 'Orang/Bulan',
            'var1'                  => '8800000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '11',
            'uraian_kegiatan'       => 'Sekretaris Eksekutif MWA',
            'satuan'                => 'Orang/Bulan',
            'var1'                  => '7480000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '11',
            'uraian_kegiatan'       => 'Ketua Komisi',
            'satuan'                => 'Orang/Bulan',
            'var1'                  => '6160000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '11',
            'uraian_kegiatan'       => 'Ketua Komite Audit',
            'satuan'                => 'Orang/Bulan',
            'var1'                  => '6160000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '11',
            'uraian_kegiatan'       => 'Sekretaris Komisi',
            'satuan'                => 'Orang/Bulan',
            'var1'                  => '4840000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '11',
            'uraian_kegiatan'       => 'Sekretaris Komite Audit',
            'satuan'                => 'Orang/Bulan',
            'var1'                  => '4840000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '11',
            'uraian_kegiatan'       => 'Anggota MWA',
            'satuan'                => 'Orang/Bulan',
            'var1'                  => '3960000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '11',
            'uraian_kegiatan'       => 'Anggota Komite Audit',
            'satuan'                => 'Orang/Bulan',
            'var1'                  => '3080000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '11',
            'uraian_kegiatan'       => 'Staf Ahli',
            'satuan'                => 'Orang/Bulan',
            'var1'                  => '3080000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '12',
            'uraian_kegiatan'       => 'Ketua Senat',
            'satuan'                => 'Orang/Bulan',
            'var1'                  => '8800000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '12',
            'uraian_kegiatan'       => 'Sekretaris Senat',
            'satuan'                => 'Orang/Bulan',
            'var1'                  => '7480000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '13',
            'uraian_kegiatan'       => 'Sidang Pleno',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '13',
            'uraian_kegiatan'       => 'Sidang Komisi',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '13',
            'uraian_kegiatan'       => 'Sidang Komisi Harian',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '13',
            'uraian_kegiatan'       => 'Rapat Tim Adhoc',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '14',
            'uraian_kegiatan'       => 'Ketua',
            'satuan'                => 'Orang/Kegiatan',
            'var1'                  => '300000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '14',
            'uraian_kegiatan'       => 'Sekretaris',
            'satuan'                => 'Orang/Kegiatan',
            'var1'                  => '250000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '14',
            'uraian_kegiatan'       => 'Anggota',
            'satuan'                => 'Orang/Kegiatan',
            'var1'                  => '200000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '15',
            'uraian_kegiatan'       => 'Auditor',
            'satuan'                => 'Orang/Bulan',
            'var1'                  => '1500000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '16',
            'uraian_kegiatan'       => 'Kuasa Pengguna Anggaran',
            'satuan'                => 'Orang/Bulan',
            'var1'                  => '4500000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '16',
            'uraian_kegiatan'       => 'Pejabat Pembuat Komitmen',
            'satuan'                => 'Orang/Bulan',
            'var1'                  => '2750000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '16',
            'uraian_kegiatan'       => 'Pejabat Penandatangan Surat Perintah Membayar dan Releaser',
            'satuan'                => 'Orang/Bulan',
            'var1'                  => '3500000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '16',
            'uraian_kegiatan'       => 'Pejabat Penguji Surat Perintah Membayar dan Approval',
            'satuan'                => 'Orang/Bulan',
            'var1'                  => '3000000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '16',
            'uraian_kegiatan'       => 'Bendahara Penerimaan dan Pengeluaran',
            'satuan'                => 'Orang/Bulan',
            'var1'                  => '2850000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '16',
            'uraian_kegiatan'       => 'Pengelola Keuangan dan Anggaran',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '17',
            'uraian_kegiatan'       => 'Tim Teknis',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '17',
            'uraian_kegiatan'       => 'Tim Perencana Swakelola',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '17',
            'uraian_kegiatan'       => 'Batasan Total Honorarium untuk Tim Perencana Swakelola',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '17',
            'uraian_kegiatan'       => 'Tim Pengelola',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '17',
            'uraian_kegiatan'       => 'Batasan Total Honorarium untuk Tim Pengelola',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '18',
            'uraian_kegiatan'       => 'Panitia Pengadaan Barang (Konstruksi)',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '18',
            'uraian_kegiatan'       => 'Panitia Pengadaan Barang (Non Konstruksi)',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '18',
            'uraian_kegiatan'       => 'Panitia Pengadaan Jasa',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '18',
            'uraian_kegiatan'       => 'Panitia Penerima Hasil Pekerjaan',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '19',
            'uraian_kegiatan'       => 'Rapat Pimpinan Penetapan Penerimaan Mahasiswa Baru',
            'satuan'                => 'Orang/Kegiatan',
            'var1'                  => '550000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '19',
            'uraian_kegiatan'       => 'Penulis Naskah Soal Seleksi Program Diploma',
            'satuan'                => 'Orang/Kegiatan',
            'var1'                  => '1500000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '19',
            'uraian_kegiatan'       => 'Pengawas Seleksi Program Diploma',
            'satuan'                => 'Orang/Kegiatan',
            'var1'                  => '300000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '19',
            'uraian_kegiatan'       => 'Manajemen Berkas Program Diploma',
            'satuan'                => 'Orang/Kegiatan',
            'var1'                  => '300000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '19',
            'uraian_kegiatan'       => 'Pelaksana Seleksi Program Diploma',
            'satuan'                => 'Orang/Kegiatan',
            'var1'                  => '300000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '19',
            'uraian_kegiatan'       => 'Pembantu Pelaksanaan Seleksi Program Diploma',
            'satuan'                => 'Orang/Kegiatan',
            'var1'                  => '250000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '19',
            'uraian_kegiatan'       => 'Penulis Naskah dan Koreksi Soal Seleksi Program Lintas Jalur',
            'satuan'                => 'Orang/Kegiatan',
            'var1'                  => '500000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '20',
            'uraian_kegiatan'       => 'Honorarium Pengajar',
            'satuan'                => 'SKS/Hadir',
            'var1'                  => '250000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '20',
            'uraian_kegiatan'       => 'Honorarium Pembimbing Utama',
            'satuan'                => 'Mhs Lulus',
            'var1'                  => '1500000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '20',
            'uraian_kegiatan'       => 'Honorarium Pembimbing Pendamping',
            'satuan'                => 'Mhs Lulus',
            'var1'                  => '750000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '20',
            'uraian_kegiatan'       => 'Honorarium Penguji Proposal/Tesis',
            'satuan'                => 'Orang/Mhs',
            'var1'                  => '200000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '20',
            'uraian_kegiatan'       => 'Honorarium Dosen Wali',
            'satuan'                => 'Mhs/Semester',
            'var1'                  => '35000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '21',
            'uraian_kegiatan'       => 'Pengajar',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '21',
            'uraian_kegiatan'       => 'Pengawas',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '21',
            'uraian_kegiatan'       => 'Penterjemah dan Interpreter',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '22',
            'uraian_kegiatan'       => 'Ketua',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '22',
            'uraian_kegiatan'       => 'Sekretaris',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '22',
            'uraian_kegiatan'       => 'Dosen Pengajar',
            'satuan'                => 'Orang/Jam',
            'var1'                  => '150000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '22',
            'uraian_kegiatan'       => 'Asisten Pengajar',
            'satuan'                => 'Orang/Jam',
            'var1'                  => '50000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '22',
            'uraian_kegiatan'       => 'Pembimbing Tugas Akhir',
            'satuan'                => 'Peserta Lulus',
            'var1'                  => '150000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '22',
            'uraian_kegiatan'       => 'Penguji Ujian Tugas Akhir',
            'satuan'                => 'Orang/Peserta',
            'var1'                  => '75000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '23',
            'uraian_kegiatan'       => 'Honorarium',
            'satuan'                => 'Orang/Hari',
            'var1'                  => '75000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '23',
            'uraian_kegiatan'       => 'Uang Makan',
            'satuan'                => 'Orang/Hari',
            'var1'                  => '25000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '23',
            'uraian_kegiatan'       => 'Uang Lembur/Kelebihan Jam Kerja',
            'satuan'                => 'Orang/Jam',
            'var1'                  => '12500',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '24',
            'uraian_kegiatan'       => 'Honorarium (termasuk uang makan)',
            'satuan'                => 'Orang/Bulan',
            'var1'                  => '3308000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '24',
            'uraian_kegiatan'       => 'Uang Lembur',
            'satuan'                => 'Orang/Jam',
            'var1'                  => '13000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '24',
            'uraian_kegiatan'       => 'Uang Makan Lembur',
            'satuan'                => 'Orang/Hari',
            'var1'                  => '30000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '25',
            'uraian_kegiatan'       => 'Wakil Ketua MWA',
            'satuan'                => 'Orang/Datang',
            'var1'                  => '7500000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '25',
            'uraian_kegiatan'       => 'Ketua Komisi MWA',
            'satuan'                => 'Orang/Datang',
            'var1'                  => '7500000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '25',
            'uraian_kegiatan'       => 'Anggota MWA',
            'satuan'                => 'Orang/Datang',
            'var1'                  => '5000000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '25',
            'uraian_kegiatan'       => 'Anggota Komite Audit',
            'satuan'                => 'Orang/Datang',
            'var1'                  => '2000000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '26',
            'uraian_kegiatan'       => 'Dosen Pengajar',
            'satuan'                => 'Orang/Jam',
            'var1'                  => '150000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '26',
            'uraian_kegiatan'       => 'Asisten Pengajar',
            'satuan'                => 'Orang/Jam',
            'var1'                  => '50000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '26',
            'uraian_kegiatan'       => 'Pembimbing Tugas Akhir',
            'satuan'                => 'Peserta Lulus',
            'var1'                  => '150000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '26',
            'uraian_kegiatan'       => 'Penguji Ujian Tugas Akhir',
            'satuan'                => 'Orang/Peserta',
            'var1'                  => '75000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '27',
            'uraian_kegiatan'       => 'Pengajar',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '27',
            'uraian_kegiatan'       => 'Pembimbing',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '27',
            'uraian_kegiatan'       => 'Penguji',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '28',
            'uraian_kegiatan'       => 'Pengajar',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '28',
            'uraian_kegiatan'       => 'Pengawas',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '28',
            'uraian_kegiatan'       => 'Terjemahan',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '29',
            'uraian_kegiatan'       => 'Lulusan D3',
            'satuan'                => 'Orang/Jam',
            'var1'                  => '20000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '29',
            'uraian_kegiatan'       => 'Lulusan S1',
            'satuan'                => 'Orang/Jam',
            'var1'                  => '25000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '29',
            'uraian_kegiatan'       => 'Lulusan S2',
            'satuan'                => 'Orang/Jam',
            'var1'                  => '30000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '30',
            'uraian_kegiatan'       => 'Jenjang D3',
            'satuan'                => 'Orang/Jam',
            'var1'                  => '15000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '30',
            'uraian_kegiatan'       => 'Jenjang S1',
            'satuan'                => 'Orang/Jam',
            'var1'                  => '20000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '30',
            'uraian_kegiatan'       => 'Jenjang S2',
            'satuan'                => 'Orang/Jam',
            'var1'                  => '25000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '30',
            'uraian_kegiatan'       => 'Jenjang S3',
            'satuan'                => 'Orang/Jam',
            'var1'                  => '30000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '31',
            'uraian_kegiatan'       => 'Koreksi Tugas oleh Asisten Penilai (Grader)',
            'satuan'                => 'Tugas/Mhs',
            'var1'                  => '2000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '31',
            'uraian_kegiatan'       => 'Asisten',
            'satuan'                => 'Orang/Datang',
            'var1'                  => '45000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '31',
            'uraian_kegiatan'       => 'Pembantu Pengawas',
            'satuan'                => 'Orang/Jam',
            'var1'                  => '25000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '32',
            'uraian_kegiatan'       => 'Seminar/Workshop/Sarasehan/Diseminasi/Rakor/Sosialisasi/FGD/Kegiatan Dosen Tamu/Kegiatan Pelatihan/Kegiatan Sejenis Tingkat Lokal/Nasional',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '32',
            'uraian_kegiatan'       => 'Seminar/Workshop/Sarasehan/Diseminasi/Rakor/Sosialisasi/FGD/Kegiatan Dosen Tamu/Kegiatan Pelatihan/Kegiatan Sejenis Tingkat Internasional',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '32',
            'uraian_kegiatan'       => 'Honorarium Rohaniawan',
            'satuan'                => 'Orang/Datang',
            'var1'                  => '400000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '32',
            'uraian_kegiatan'       => 'Honorarium Instruktur Olahraga',
            'satuan'                => 'Orang/Datang',
            'var1'                  => '200000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '33',
            'uraian_kegiatan'       => 'Biaya Pendaftaran Diklat, Seminar, Workshop',
            'satuan'                => 'Orang/Kali',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '33',
            'uraian_kegiatan'       => 'Biaya Tes Bahasa Asing',
            'satuan'                => 'Orang/Kali',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '33',
            'uraian_kegiatan'       => 'Biaya Pelaksanaan Uji Kompetensi/Sertifikasi',
            'satuan'                => 'Orang/Kali',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '34',
            'uraian_kegiatan'       => 'Biaya Pendidikan',
            'satuan'                => 'Orang/Tahun',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '35',
            'uraian_kegiatan'       => 'Peneliti/Perekayasa Utama',
            'satuan'                => 'Orang/Jam',
            'var1'                  => '60000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '35',
            'uraian_kegiatan'       => 'Peneliti/Perekayasa Madya',
            'satuan'                => 'Orang/Jam',
            'var1'                  => '50000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '35',
            'uraian_kegiatan'       => 'Peneliti/Perekayasa Muda',
            'satuan'                => 'Orang/Jam',
            'var1'                  => '40000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '35',
            'uraian_kegiatan'       => 'Peneliti/Perekayasa Pertama',
            'satuan'                => 'Orang/Jam',
            'var1'                  => '35000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '36',
            'uraian_kegiatan'       => 'Pembantu Peneliti/Perekayasa',
            'satuan'                => 'Orang/Jam',
            'var1'                  => '25000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '36',
            'uraian_kegiatan'       => 'Koordinator Peneliti/Perekayasa',
            'satuan'                => 'Orang/Bulan',
            'var1'                  => '4200000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '36',
            'uraian_kegiatan'       => 'Sekretariat Peneliti/Perekayasa',
            'satuan'                => 'Orang/Bulan',
            'var1'                  => '300000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '36',
            'uraian_kegiatan'       => 'Pengolah Data',
            'satuan'                => 'Penelitian/Perekayasaan',
            'var1'                  => '1540000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '36',
            'uraian_kegiatan'       => 'Petugas Survey',
            'satuan'                => 'Orang/Responden',
            'var1'                  => '20000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '36',
            'uraian_kegiatan'       => 'Pembantu Lapangan',
            'satuan'                => 'Orang/Hari',
            'var1'                  => '80000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '38',
            'uraian_kegiatan'       => 'Q1',
            'satuan'                => 'Judul',
            'var1'                  => '25000000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '38',
            'uraian_kegiatan'       => 'Q2',
            'satuan'                => 'Judul',
            'var1'                  => '20000000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '38',
            'uraian_kegiatan'       => 'Q3',
            'satuan'                => 'Judul',
            'var1'                  => '15000000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '38',
            'uraian_kegiatan'       => 'Q4',
            'satuan'                => 'Judul',
            'var1'                  => '10000000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '42',
            'uraian_kegiatan'       => 'Naskah buku untuk diterbitkan penerbit nasional',
            'satuan'                => 'Judul',
            'var1'                  => '7500000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '42',
            'uraian_kegiatan'       => 'Naskah buku untuk diterbitkan penerbit internasional',
            'satuan'                => 'Judul',
            'var1'                  => '20000000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '43',
            'uraian_kegiatan'       => 'Naskah buku untuk diterbitkan penerbit nasional',
            'satuan'                => 'Judul',
            'var1'                  => '7500000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '43',
            'uraian_kegiatan'       => 'Naskah buku untuk diterbitkan penerbit internasional',
            'satuan'                => 'Judul',
            'var1'                  => '20000000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '44',
            'uraian_kegiatan'       => 'Program DIKTI',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '44',
            'uraian_kegiatan'       => 'Program Non DIKTI',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '45',
            'uraian_kegiatan'       => 'Program DIKTI',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '45',
            'uraian_kegiatan'       => 'Program Non DIKTI',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '46',
            'uraian_kegiatan'       => 'Program DIKTI',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '46',
            'uraian_kegiatan'       => 'Program Non DIKTI',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '47',
            'uraian_kegiatan'       => 'Kewirausahaan Individu',
            'satuan'                => 'Kegiatan',
            'var1'                  => '10000000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '47',
            'uraian_kegiatan'       => 'Kewirausahaan Kelompok',
            'satuan'                => 'Kegiatan',
            'var1'                  => '15000000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '48',
            'uraian_kegiatan'       => 'Biaya Seminar Internasional Terindex',
            'satuan'                => 'Orang/Kali',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '48',
            'uraian_kegiatan'       => 'Biaya Kursus/Tes Bahasa Asing',
            'satuan'                => 'Orang/Kali',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '48',
            'uraian_kegiatan'       => 'Biaya Pelaksanaan Uji Kompetensi/Sertifikasi',
            'satuan'                => 'Orang/Kali',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '49',
            'uraian_kegiatan'       => 'Biaya Personel sebagai Tenaga Ahli dengan Pendidikan S-1',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '49',
            'uraian_kegiatan'       => 'Biaya Personel sebagai Tenaga Ahli dengan Pendidikan S-2',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '49',
            'uraian_kegiatan'       => 'Biaya Personel sebagai Tenaga Ahli dengan Pendidikan S-3',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '49',
            'uraian_kegiatan'       => 'Biaya Personel sebagai Tenaga Sub Profesional',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '49',
            'uraian_kegiatan'       => 'Biaya Personel sebagai Tenaga Pendukung (Supporting Staff)',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '49',
            'uraian_kegiatan'       => 'Biaya Personel sebagai Tenaga Ahli dengan Mitra Luar Negeri',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '49',
            'uraian_kegiatan'       => 'Biaya Personel Kegiatan Training',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '50',
            'uraian_kegiatan'       => 'Biaya Reimbursable',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '50',
            'uraian_kegiatan'       => 'Fixed Unit Rate',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '51',
            'uraian_kegiatan'       => 'S1 Kelompok A',
            'satuan'                => 'Unit',
            'var1'                  => '75000000',
            'var2'                  => '60000000',
            'var3'                  => '50000000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '51',
            'uraian_kegiatan'       => 'S1 Kelompok B',
            'satuan'                => 'Unit',
            'var1'                  => '60000000',
            'var2'                  => '50000000',
            'var3'                  => '40000000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '51',
            'uraian_kegiatan'       => 'S2',
            'satuan'                => 'Unit',
            'var1'                  => '50000000',
            'var2'                  => '40000000',
            'var3'                  => '30000000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '51',
            'uraian_kegiatan'       => 'Diploma',
            'satuan'                => 'Unit',
            'var1'                  => '50000000',
            'var2'                  => '40000000',
            'var3'                  => '30000000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '51',
            'uraian_kegiatan'       => 'S3',
            'satuan'                => 'Unit',
            'var1'                  => '50000000',
            'var2'                  => '40000000',
            'var3'                  => '30000000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '52',
            'uraian_kegiatan'       => 'Juara I',
            'satuan'                => 'Unit',
            'var1'                  => '50000000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '52',
            'uraian_kegiatan'       => 'Juara II',
            'satuan'                => 'Unit',
            'var1'                  => '40000000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '52',
            'uraian_kegiatan'       => 'Juara III',
            'satuan'                => 'Unit',
            'var1'                  => '30000000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '60',
            'uraian_kegiatan'       => 'Kabupaten Bangkalan',
            'satuan'                => 'O/Kali',
            'var1'                  => '225000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '60',
            'uraian_kegiatan'       => 'Kabupaten Banyuwangi',
            'satuan'                => 'O/Kali',
            'var1'                  => '285000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '60',
            'uraian_kegiatan'       => 'Kabupaten Bondowoso',
            'satuan'                => 'O/Kali',
            'var1'                  => '255000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '60',
            'uraian_kegiatan'       => 'Kabupaten Gresik',
            'satuan'                => 'O/Kali',
            'var1'                  => '225000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '60',
            'uraian_kegiatan'       => 'Kabupaten Jember',
            'satuan'                => 'O/Kali',
            'var1'                  => '261000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '60',
            'uraian_kegiatan'       => 'Kabupaten Jombang',
            'satuan'                => 'O/Kali',
            'var1'                  => '235000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '60',
            'uraian_kegiatan'       => 'Kabupaten Lamongan',
            'satuan'                => 'O/Kali',
            'var1'                  => '225000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '60',
            'uraian_kegiatan'       => 'Kabupaten Lumajang',
            'satuan'                => 'O/Kali',
            'var1'                  => '261000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '60',
            'uraian_kegiatan'       => 'Kabupaten Magetan',
            'satuan'                => 'O/Kali',
            'var1'                  => '253000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '60',
            'uraian_kegiatan'       => 'Kabupaten Nganjuk',
            'satuan'                => 'O/Kali',
            'var1'                  => '245000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '60',
            'uraian_kegiatan'       => 'Kabupaten Ngawi',
            'satuan'                => 'O/Kali',
            'var1'                  => '253000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '60',
            'uraian_kegiatan'       => 'Kabupaten Pacitan',
            'satuan'                => 'O/Kali',
            'var1'                  => '285000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '60',
            'uraian_kegiatan'       => 'Kabupaten Pamekasan',
            'satuan'                => 'O/Kali',
            'var1'                  => '243000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '60',
            'uraian_kegiatan'       => 'Kabupaten Pasuruan',
            'satuan'                => 'O/Kali',
            'var1'                  => '228000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '60',
            'uraian_kegiatan'       => 'Kabupaten Ponorogo',
            'satuan'                => 'O/Kali',
            'var1'                  => '255000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '60',
            'uraian_kegiatan'       => 'Kabupaten Sampang',
            'satuan'                => 'O/Kali',
            'var1'                  => '235000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '60',
            'uraian_kegiatan'       => 'Kabupaten Sidoarjo',
            'satuan'                => 'O/Kali',
            'var1'                  => '240000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '60',
            'uraian_kegiatan'       => 'Kabupaten Situbondo',
            'satuan'                => 'O/Kali',
            'var1'                  => '255000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '60',
            'uraian_kegiatan'       => 'Kabupaten Sumenep',
            'satuan'                => 'O/Kali',
            'var1'                  => '255000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '60',
            'uraian_kegiatan'       => 'Kabupaten Trenggalek',
            'satuan'                => 'O/Kali',
            'var1'                  => '245000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '60',
            'uraian_kegiatan'       => 'Kabupaten Tuban',
            'satuan'                => 'O/Kali',
            'var1'                  => '245000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '60',
            'uraian_kegiatan'       => 'Kabupaten Tulungagung',
            'satuan'                => 'O/Kali',
            'var1'                  => '245000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '60',
            'uraian_kegiatan'       => 'Kota Batu',
            'satuan'                => 'O/Kali',
            'var1'                  => '242000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '60',
            'uraian_kegiatan'       => 'Kota Blitar',
            'satuan'                => 'O/Kali',
            'var1'                  => '255000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '60',
            'uraian_kegiatan'       => 'Kota Bojonegoro',
            'satuan'                => 'O/Kali',
            'var1'                  => '225000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '60',
            'uraian_kegiatan'       => 'Kota Kediri',
            'satuan'                => 'O/Kali',
            'var1'                  => '235000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '60',
            'uraian_kegiatan'       => 'Kota Madiun',
            'satuan'                => 'O/Kali',
            'var1'                  => '245000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '60',
            'uraian_kegiatan'       => 'Kota Malang',
            'satuan'                => 'O/Kali',
            'var1'                  => '228000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '60',
            'uraian_kegiatan'       => 'Kota Mojokerto',
            'satuan'                => 'O/Kali',
            'var1'                  => '225000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '60',
            'uraian_kegiatan'       => 'Kota Probolinggo',
            'satuan'                => 'O/Kali',
            'var1'                  => '228000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '61',
            'uraian_kegiatan'       => 'Kota Bekasi',
            'satuan'                => 'O/Kali',
            'var1'                  => '284000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '61',
            'uraian_kegiatan'       => 'Kabupaten Bekasi',
            'satuan'                => 'O/Kali',
            'var1'                  => '284000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '61',
            'uraian_kegiatan'       => 'Kabupaten Bogor',
            'satuan'                => 'O/Kali',
            'var1'                  => '300000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '61',
            'uraian_kegiatan'       => 'Kota Bogor',
            'satuan'                => 'O/Kali',
            'var1'                  => '300000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '61',
            'uraian_kegiatan'       => 'Kota Depok',
            'satuan'                => 'O/Kali',
            'var1'                  => '275000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '61',
            'uraian_kegiatan'       => 'Kota Tangerang',
            'satuan'                => 'O/Kali',
            'var1'                  => '286000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '61',
            'uraian_kegiatan'       => 'Kota Tangerang Selatan',
            'satuan'                => 'O/Kali',
            'var1'                  => '286000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '61',
            'uraian_kegiatan'       => 'Kabupaten Tangerang',
            'satuan'                => 'O/Kali',
            'var1'                  => '310000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '61',
            'uraian_kegiatan'       => 'Kepulauan Seribu',
            'satuan'                => 'O/Kali',
            'var1'                  => '428000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '62',
            'uraian_kegiatan'       => 'Aceh',
            'var1'                  => '4420000',
            'var2'                  => '3526000',
            'var3'                  => '1294000',
            'var4'                  => '556000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '62',
            'uraian_kegiatan'       => 'Sumatera Utara',
            'var1'                  => '4960000',
            'var2'                  => '1518000',
            'var3'                  => '1100000',
            'var4'                  => '530000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '62',
            'uraian_kegiatan'       => 'Riau',
            'var1'                  => '3820000',
            'var2'                  => '3119000',
            'var3'                  => '1650000',
            'var4'                  => '852000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '62',
            'uraian_kegiatan'       => 'Kepulauan Riau',
            'var1'                  => '4275000',
            'var2'                  => '1854000',
            'var3'                  => '1037000',
            'var4'                  => '792000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '62',
            'uraian_kegiatan'       => 'Jambi',
            'var1'                  => '4000000',
            'var2'                  => '3337000',
            'var3'                  => '1212000',
            'var4'                  => '520000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '62',
            'uraian_kegiatan'       => 'Sumatera Barat',
            'var1'                  => '5236000',
            'var2'                  => '3332000',
            'var3'                  => '1353000',
            'var4'                  => '650000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '62',
            'uraian_kegiatan'       => 'Sumatera Selatan',
            'var1'                  => '8447000',
            'var2'                  => '3083000',
            'var3'                  => '1571000',
            'var4'                  => '861000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '62',
            'uraian_kegiatan'       => 'Lampung',
            'var1'                  => '4491000',
            'var2'                  => '2067000',
            'var3'                  => '1140000',
            'var4'                  => '400000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '62',
            'uraian_kegiatan'       => 'Bengkulu',
            'var1'                  => '2071000',
            'var2'                  => '1628000',
            'var3'                  => '1546000',
            'var4'                  => '572000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '62',
            'uraian_kegiatan'       => 'Bangka Belitung',
            'var1'                  => '3827000',
            'var2'                  => '2838000',
            'var3'                  => '1957000',
            'var4'                  => '622000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '62',
            'uraian_kegiatan'       => 'Banten',
            'var1'                  => '5725000',
            'var2'                  => '2373000',
            'var3'                  => '1000000',
            'var4'                  => '718000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '62',
            'uraian_kegiatan'       => 'Jawa Barat',
            'var1'                  => '5381000',
            'var2'                  => '2755000',
            'var3'                  => '1006000',
            'var4'                  => '570000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '62',
            'uraian_kegiatan'       => 'DKI Jakarta',
            'var1'                  => '8720000',
            'var2'                  => '1490000',
            'var3'                  => '992000',
            'var4'                  => '610000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '62',
            'uraian_kegiatan'       => 'Jawa Tengah',
            'var1'                  => '4242000',
            'var2'                  => '1480000',
            'var3'                  => '954000',
            'var4'                  => '486000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '62',
            'uraian_kegiatan'       => 'DI Yogyakarta',
            'var1'                  => '5017000',
            'var2'                  => '2695000',
            'var3'                  => '1384000',
            'var4'                  => '845000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '62',
            'uraian_kegiatan'       => 'Jawa Timur',
            'var1'                  => '4400000',
            'var2'                  => '1605000',
            'var3'                  => '1076000',
            'var4'                  => '664000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '62',
            'uraian_kegiatan'       => 'Bali',
            'var1'                  => '4890000',
            'var2'                  => '1946000',
            'var3'                  => '990000',
            'var4'                  => '910000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '62',
            'uraian_kegiatan'       => 'Nusa Tenggara Barat',
            'var1'                  => '3500000',
            'var2'                  => '2648000',
            'var3'                  => '1418000',
            'var4'                  => '580000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '62',
            'uraian_kegiatan'       => 'Nusa Tenggara Timur',
            'var1'                  => '3000000',
            'var2'                  => '1493000',
            'var3'                  => '1355000',
            'var4'                  => '550000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '62',
            'uraian_kegiatan'       => 'Kalimantan Barat',
            'var1'                  => '2654000',
            'var2'                  => '1538000',
            'var3'                  => '1125000',
            'var4'                  => '538000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '62',
            'uraian_kegiatan'       => 'Kalimantan Tengah',
            'var1'                  => '4901000',
            'var2'                  => '3391000',
            'var3'                  => '1160000',
            'var4'                  => '659000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '62',
            'uraian_kegiatan'       => 'Kalimantan Selatan',
            'var1'                  => '4797000',
            'var2'                  => '3316000',
            'var3'                  => '1500000',
            'var4'                  => '540000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '62',
            'uraian_kegiatan'       => 'Kalimantan Timur',
            'var1'                  => '4000000',
            'var2'                  => '2188000',
            'var3'                  => '1507000',
            'var4'                  => '804000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '62',
            'uraian_kegiatan'       => 'Kalimantan Utara',
            'var1'                  => '4000000',
            'var2'                  => '2188000',
            'var3'                  => '1507000',
            'var4'                  => '804000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '62',
            'uraian_kegiatan'       => 'Sulawesi Utara',
            'var1'                  => '4919000',
            'var2'                  => '2290000',
            'var3'                  => '924000',
            'var4'                  => '782000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '62',
            'uraian_kegiatan'       => 'Gorontalo',
            'var1'                  => '4168000',
            'var2'                  => '2549000',
            'var3'                  => '1909000',
            'var4'                  => '764000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '62',
            'uraian_kegiatan'       => 'Sulawesi Barat',
            'var1'                  => '4076000',
            'var2'                  => '2581000',
            'var3'                  => '1075000',
            'var4'                  => '704000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '62',
            'uraian_kegiatan'       => 'Sulawesi Selatan',
            'var1'                  => '4820000',
            'var2'                  => '1550000',
            'var3'                  => '1020000',
            'var4'                  => '665000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '62',
            'uraian_kegiatan'       => 'Sulawesi Tengah',
            'var1'                  => '2309000',
            'var2'                  => '2027000',
            'var3'                  => '1567000',
            'var4'                  => '951000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '62',
            'uraian_kegiatan'       => 'Sulawesi Tenggara',
            'var1'                  => '2475000',
            'var2'                  => '2059000',
            'var3'                  => '1297000',
            'var4'                  => '786000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '62',
            'uraian_kegiatan'       => 'Maluku',
            'var1'                  => '3467000',
            'var2'                  => '3240000',
            'var3'                  => '1048000',
            'var4'                  => '667000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '62',
            'uraian_kegiatan'       => 'Maluku Utara',
            'var1'                  => '3440000',
            'var2'                  => '3175000',
            'var3'                  => '1073000',
            'var4'                  => '480000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '62',
            'uraian_kegiatan'       => 'Papua',
            'var1'                  => '3859000',
            'var2'                  => '3318000',
            'var3'                  => '2521000',
            'var4'                  => '829000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '62',
            'uraian_kegiatan'       => 'Papua Barat',
            'var1'                  => '3872000',
            'var2'                  => '3212000',
            'var3'                  => '2056000',
            'var4'                  => '600000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Jakarta',
            'satuan'                => 'Ambon',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Jakarta',
            'satuan'                => 'Balikpapan',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Jakarta',
            'satuan'                => 'Banda Aceh',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Jakarta',
            'satuan'                => 'Bandar Lampung',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Jakarta',
            'satuan'                => 'Banjarmasin',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Jakarta',
            'satuan'                => 'Batam',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Jakarta',
            'satuan'                => 'Bengkulu',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Jakarta',
            'satuan'                => 'Biak',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Jakarta',
            'satuan'                => 'Denpasar',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Jakarta',
            'satuan'                => 'Gorontalo',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Jakarta',
            'satuan'                => 'Jambi',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Jakarta',
            'satuan'                => 'Jayapura',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Jakarta',
            'satuan'                => 'Yogyakarta',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Jakarta',
            'satuan'                => 'Kendari',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Jakarta',
            'satuan'                => 'Kupang',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Jakarta',
            'satuan'                => 'Makassar',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Jakarta',
            'satuan'                => 'Malang',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Jakarta',
            'satuan'                => 'Mamuju',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Jakarta',
            'satuan'                => 'Manado',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Jakarta',
            'satuan'                => 'Manokwari',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Jakarta',
            'satuan'                => 'Mataram',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Jakarta',
            'satuan'                => 'Medan',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Jakarta',
            'satuan'                => 'Padang',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Jakarta',
            'satuan'                => 'Palangkaraya',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Jakarta',
            'satuan'                => 'Palembang',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Jakarta',
            'satuan'                => 'Palu',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Jakarta',
            'satuan'                => 'Pangkal Pinang',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Jakarta',
            'satuan'                => 'Pekanbaru',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Jakarta',
            'satuan'                => 'Pontianak',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Jakarta',
            'satuan'                => 'Semarang',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Jakarta',
            'satuan'                => 'Solo',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Jakarta',
            'satuan'                => 'Surabaya',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Jakarta',
            'satuan'                => 'Ternate',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Jakarta',
            'satuan'                => 'Timika',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Ambon',
            'satuan'                => 'Denpasar',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Ambon',
            'satuan'                => 'Jayapura',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Ambon',
            'satuan'                => 'Kendari',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Ambon',
            'satuan'                => 'Makassar',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Ambon',
            'satuan'                => 'Manokwari',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Ambon',
            'satuan'                => 'Palu',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Ambon',
            'satuan'                => 'Sorong',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Ambon',
            'satuan'                => 'Surabaya',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Ambon',
            'satuan'                => 'Ternate',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Balikpapan',
            'satuan'                => 'Banda Aceh',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Balikpapan',
            'satuan'                => 'Batam',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Balikpapan',
            'satuan'                => 'Denpasar',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Balikpapan',
            'satuan'                => 'Jayapura',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Balikpapan',
            'satuan'                => 'Yogyakarta',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Balikpapan',
            'satuan'                => 'Makassar',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Balikpapan',
            'satuan'                => 'Manado',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Balikpapan',
            'satuan'                => 'Medan',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Balikpapan',
            'satuan'                => 'Padang',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Balikpapan',
            'satuan'                => 'Palembang',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Balikpapan',
            'satuan'                => 'Pekanbaru',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Balikpapan',
            'satuan'                => 'Semarang',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Balikpapan',
            'satuan'                => 'Solo',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Balikpapan',
            'satuan'                => 'Surabaya',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Balikpapan',
            'satuan'                => 'Timika',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Banda Aceh',
            'satuan'                => 'Denpasar',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Banda Aceh',
            'satuan'                => 'Jayapura',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Banda Aceh',
            'satuan'                => 'Yogyakarta',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Banda Aceh',
            'satuan'                => 'Makassar',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Banda Aceh',
            'satuan'                => 'Manado',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Banda Aceh',
            'satuan'                => 'Pontianak',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Banda Aceh',
            'satuan'                => 'Semarang',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Banda Aceh',
            'satuan'                => 'Solo',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Banda Aceh',
            'satuan'                => 'Surabaya',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Banda Aceh',
            'satuan'                => 'Timika',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Bandar Lampung',
            'satuan'                => 'Balikpapan',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Bandar Lampung',
            'satuan'                => 'Banda Aceh',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Bandar Lampung',
            'satuan'                => 'Banjarmasin',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Bandar Lampung',
            'satuan'                => 'Batam',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Bandar Lampung',
            'satuan'                => 'Biak',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Bandar Lampung',
            'satuan'                => 'Denpasar',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Bandar Lampung',
            'satuan'                => 'Jayapura',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Bandar Lampung',
            'satuan'                => 'Yogyakarta',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Bandar Lampung',
            'satuan'                => 'Kendari',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Bandar Lampung',
            'satuan'                => 'Makassar',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Bandar Lampung',
            'satuan'                => 'Malang',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Bandar Lampung',
            'satuan'                => 'Manado',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Bandar Lampung',
            'satuan'                => 'Mataram',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Bandar Lampung',
            'satuan'                => 'Medan',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Bandar Lampung',
            'satuan'                => 'Padang',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Bandar Lampung',
            'satuan'                => 'Palangkaraya',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Bandar Lampung',
            'satuan'                => 'Palembang',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Bandar Lampung',
            'satuan'                => 'Pekanbaru',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Bandar Lampung',
            'satuan'                => 'Pontianak',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Bandar Lampung',
            'satuan'                => 'Semarang',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Bandar Lampung',
            'satuan'                => 'Solo',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Bandar Lampung',
            'satuan'                => 'Surabaya',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Bandar Lampung',
            'satuan'                => 'Timika',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Bandung',
            'satuan'                => 'Batam',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Bandung',
            'satuan'                => 'Denpasar',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Bandung',
            'satuan'                => 'Jakarta',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Bandung',
            'satuan'                => 'Jambi',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Bandung',
            'satuan'                => 'Yogyakarta',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Bandung',
            'satuan'                => 'Padang',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Bandung',
            'satuan'                => 'Palembang',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Bandung',
            'satuan'                => 'Pangkal Pinang',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Bandung',
            'satuan'                => 'Pekanbaru',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Bandung',
            'satuan'                => 'Semarang',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Bandung',
            'satuan'                => 'Solo',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Bandung',
            'satuan'                => 'Surabaya',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Bandung',
            'satuan'                => 'Tanjung Pandan',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Banjarmasin',
            'satuan'                => 'Banda Aceh',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Banjarmasin',
            'satuan'                => 'Batam',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Banjarmasin',
            'satuan'                => 'Biak',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Banjarmasin',
            'satuan'                => 'Denpasar',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Banjarmasin',
            'satuan'                => 'Jayapura',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Banjarmasin',
            'satuan'                => 'Yogyakarta',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Banjarmasin',
            'satuan'                => 'Medan',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Banjarmasin',
            'satuan'                => 'Padang',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Banjarmasin',
            'satuan'                => 'Palembang',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Banjarmasin',
            'satuan'                => 'Pekanbaru',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Banjarmasin',
            'satuan'                => 'Semarang',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Banjarmasin',
            'satuan'                => 'Solo',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Banjarmasin',
            'satuan'                => 'Surabaya',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Banjarmasin',
            'satuan'                => 'Timika',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Batam',
            'satuan'                => 'Banda Aceh',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Batam',
            'satuan'                => 'Denpasar',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Batam',
            'satuan'                => 'Jayapura',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Batam',
            'satuan'                => 'Yogyakarta',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Batam',
            'satuan'                => 'Makassar',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Batam',
            'satuan'                => 'Manado',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Batam',
            'satuan'                => 'Medan',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Batam',
            'satuan'                => 'Padang',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Batam',
            'satuan'                => 'Palembang',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Batam',
            'satuan'                => 'Pekanbaru',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Batam',
            'satuan'                => 'Pontianak',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Batam',
            'satuan'                => 'Semarang',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Batam',
            'satuan'                => 'Solo',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Batam',
            'satuan'                => 'Surabaya',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Batam',
            'satuan'                => 'Timika',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Bengkulu',
            'satuan'                => 'Palembang',
            'var1'                  => '',
            'var2'                  => '',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Biak',
            'satuan'                => 'Balikpapan',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Biak',
            'satuan'                => 'Banda Aceh',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Biak',
            'satuan'                => 'Batam',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Biak',
            'satuan'                => 'Denpasar',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Biak',
            'satuan'                => 'Jayapura',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Biak',
            'satuan'                => 'Yogyakarta',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Biak',
            'satuan'                => 'Manado',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Biak',
            'satuan'                => 'Medan',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Biak',
            'satuan'                => 'Padang',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Biak',
            'satuan'                => 'Palembang',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Biak',
            'satuan'                => 'Pekanbaru',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Biak',
            'satuan'                => 'Pontianak',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Biak',
            'satuan'                => 'Surabaya',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Biak',
            'satuan'                => 'Timika',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Denpasar',
            'satuan'                => 'Jayapura',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Denpasar',
            'satuan'                => 'Kupang',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Denpasar',
            'satuan'                => 'Makassar',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Denpasar',
            'satuan'                => 'Manado',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Denpasar',
            'satuan'                => 'Mataram',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Denpasar',
            'satuan'                => 'Medan',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Denpasar',
            'satuan'                => 'Padang',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Denpasar',
            'satuan'                => 'Palangkaraya',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Denpasar',
            'satuan'                => 'Palembang',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Denpasar',
            'satuan'                => 'Pekanbaru',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Denpasar',
            'satuan'                => 'Pontianak',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Denpasar',
            'satuan'                => 'Timika',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Jambi',
            'satuan'                => 'Balikpapan',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Jambi',
            'satuan'                => 'Banjarmasin',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Jambi',
            'satuan'                => 'Denpasar',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Jambi',
            'satuan'                => 'Yogyakarta',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Jambi',
            'satuan'                => 'Kupang',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Jambi',
            'satuan'                => 'Makassar',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Jambi',
            'satuan'                => 'Malang',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Jambi',
            'satuan'                => 'Manado',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Jambi',
            'satuan'                => 'Palangkaraya',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Jambi',
            'satuan'                => 'Pontianak',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Jambi',
            'satuan'                => 'Semarang',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Jambi',
            'satuan'                => 'Solo',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Jambi',
            'satuan'                => 'Surabaya',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Jayapura',
            'satuan'                => 'Yogyakarta',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Jayapura',
            'satuan'                => 'Manado',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Jayapura',
            'satuan'                => 'Medan',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Jayapura',
            'satuan'                => 'Padang',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Jayapura',
            'satuan'                => 'Palembang',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Jayapura',
            'satuan'                => 'Pekanbaru',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Jayapura',
            'satuan'                => 'Pontianak',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Jayapura',
            'satuan'                => 'Timika',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Yogyakarta',
            'satuan'                => 'Denpasar',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Yogyakarta',
            'satuan'                => 'Makassar',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Yogyakarta',
            'satuan'                => 'Manado',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Yogyakarta',
            'satuan'                => 'Medan',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Yogyakarta',
            'satuan'                => 'Padang',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Yogyakarta',
            'satuan'                => 'Palembang',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Yogyakarta',
            'satuan'                => 'Pekanbaru',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Yogyakarta',
            'satuan'                => 'Pontianak',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Yogyakarta',
            'satuan'                => 'Timika',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Kendari',
            'satuan'                => 'Banda Aceh',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Kendari',
            'satuan'                => 'Batam',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Kendari',
            'satuan'                => 'Denpasar',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Kendari',
            'satuan'                => 'Yogyakarta',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Kendari',
            'satuan'                => 'Padang',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Kendari',
            'satuan'                => 'Palembang',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Kendari',
            'satuan'                => 'Pekanbaru',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Kendari',
            'satuan'                => 'Semarang',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Kendari',
            'satuan'                => 'Solo',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Kendari',
            'satuan'                => 'Surabaya',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Kendari',
            'satuan'                => 'Timika',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Kupang',
            'satuan'                => 'Jayapura',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Kupang',
            'satuan'                => 'Yogyakarta',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Kupang',
            'satuan'                => 'Makassar',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Kupang',
            'satuan'                => 'Manado',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Kupang',
            'satuan'                => 'Surabaya',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Makassar',
            'satuan'                => 'Biak',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Makassar',
            'satuan'                => 'Jayapura',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Makassar',
            'satuan'                => 'Kendari',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Makassar',
            'satuan'                => 'Manado',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Makassar',
            'satuan'                => 'Timika',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Malang',
            'satuan'                => 'Balikpapan',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Malang',
            'satuan'                => 'Banda Aceh',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Malang',
            'satuan'                => 'Banjarmasin',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Malang',
            'satuan'                => 'Batam',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Malang',
            'satuan'                => 'Biak',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Malang',
            'satuan'                => 'Jayapura',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Malang',
            'satuan'                => 'Kendari',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Malang',
            'satuan'                => 'Makassar',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Malang',
            'satuan'                => 'Manado',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Malang',
            'satuan'                => 'Medan',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Malang',
            'satuan'                => 'Padang',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Malang',
            'satuan'                => 'Palangkaraya',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Malang',
            'satuan'                => 'Palembang',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Malang',
            'satuan'                => 'Pekanbaru',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Malang',
            'satuan'                => 'Timika',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Manado',
            'satuan'                => 'Medan',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Manado',
            'satuan'                => 'Padang',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Manado',
            'satuan'                => 'Palembang',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Manado',
            'satuan'                => 'Pekanbaru',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Manado',
            'satuan'                => 'Pontianak',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Manado',
            'satuan'                => 'Semarang',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Manado',
            'satuan'                => 'Solo',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Manado',
            'satuan'                => 'Surabaya',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Manado',
            'satuan'                => 'Timika',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Mataram',
            'satuan'                => 'Balikpapan',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Mataram',
            'satuan'                => 'Banda Aceh',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Mataram',
            'satuan'                => 'Banjarmasin',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Mataram',
            'satuan'                => 'Batam',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Mataram',
            'satuan'                => 'Biak',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Mataram',
            'satuan'                => 'Jayapura',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Mataram',
            'satuan'                => 'Yogyakarta',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Mataram',
            'satuan'                => 'Makassar',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Mataram',
            'satuan'                => 'Manado',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Mataram',
            'satuan'                => 'Medan',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Mataram',
            'satuan'                => 'Padang',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Mataram',
            'satuan'                => 'Palembang',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Mataram',
            'satuan'                => 'Pekanbaru',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Mataram',
            'satuan'                => 'Pontianak',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Mataram',
            'satuan'                => 'Surabaya',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Medan',
            'satuan'                => 'Banda Aceh',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Medan',
            'satuan'                => 'Makassar',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Medan',
            'satuan'                => 'Pontianak',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Medan',
            'satuan'                => 'Semarang',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Medan',
            'satuan'                => 'Solo',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Medan',
            'satuan'                => 'Surabaya',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Medan',
            'satuan'                => 'Timika',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Padang',
            'satuan'                => 'Makassar',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Padang',
            'satuan'                => 'Pontianak',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Padang',
            'satuan'                => 'Semarang',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Padang',
            'satuan'                => 'Solo',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Padang',
            'satuan'                => 'Surabaya',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Padang',
            'satuan'                => 'Timika',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Palangkaraya',
            'satuan'                => 'Banda Aceh',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Palangkaraya',
            'satuan'                => 'Batam',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Palangkaraya',
            'satuan'                => 'Yogyakarta',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Palangkaraya',
            'satuan'                => 'Mataram',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Palangkaraya',
            'satuan'                => 'Medan',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Palangkaraya',
            'satuan'                => 'Padang',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Palangkaraya',
            'satuan'                => 'Palembang',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Palangkaraya',
            'satuan'                => 'Pekanbaru',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Palangkaraya',
            'satuan'                => 'Semarang',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Palangkaraya',
            'satuan'                => 'Solo',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Palangkaraya',
            'satuan'                => 'Surabaya',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Palembang',
            'satuan'                => 'Balikpapan',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Palembang',
            'satuan'                => 'Makassar',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Palembang',
            'satuan'                => 'Pontianak',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Palembang',
            'satuan'                => 'Semarang',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Palembang',
            'satuan'                => 'Solo',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Palembang',
            'satuan'                => 'Surabaya',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Palembang',
            'satuan'                => 'Timika',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Palu',
            'satuan'                => 'Makassar',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Palu',
            'satuan'                => 'Poso',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Palu',
            'satuan'                => 'Sorong',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Palu',
            'satuan'                => 'Surabaya',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Palu',
            'satuan'                => 'Toli-Toli',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Pangkal Pinang',
            'satuan'                => 'Balikpapan',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Pangkal Pinang',
            'satuan'                => 'Banjarmasin',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Pangkal Pinang',
            'satuan'                => 'Batam',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Pangkal Pinang',
            'satuan'                => 'Yogyakarta',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Pangkal Pinang',
            'satuan'                => 'Makassar',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Pangkal Pinang',
            'satuan'                => 'Manado',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Pangkal Pinang',
            'satuan'                => 'Medan',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Pangkal Pinang',
            'satuan'                => 'Padang',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Pangkal Pinang',
            'satuan'                => 'Palembang',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Pangkal Pinang',
            'satuan'                => 'Pekanbaru',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Pangkal Pinang',
            'satuan'                => 'Pontianak',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Pangkal Pinang',
            'satuan'                => 'Semarang',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Pangkal Pinang',
            'satuan'                => 'Solo',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Pangkal Pinang',
            'satuan'                => 'Surabaya',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Pekanbaru',
            'satuan'                => 'Pontianak',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Pekanbaru',
            'satuan'                => 'Semarang',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Pekanbaru',
            'satuan'                => 'Solo',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Pekanbaru',
            'satuan'                => 'Surabaya',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Pekanbaru',
            'satuan'                => 'Timika',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Pontianak',
            'satuan'                => 'Makassar',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Pontianak',
            'satuan'                => 'Semarang',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Pontianak',
            'satuan'                => 'Solo',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Pontianak',
            'satuan'                => 'Surabaya',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Pontianak',
            'satuan'                => 'Timika',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Semarang',
            'satuan'                => 'Makassar',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Solo',
            'satuan'                => 'Makassar',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Surabaya',
            'satuan'                => 'Denpasar',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Surabaya',
            'satuan'                => 'Jayapura',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Surabaya',
            'satuan'                => 'Makassar',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Surabaya',
            'satuan'                => 'Timika',
            'var1'                  => '000',
            'var2'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '64',
            'uraian_kegiatan'       => 'Mesin Fotocopy Analog',
            'satuan'                => 'Unit/Bulan',
            'var1'                  => '1250000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '64',
            'uraian_kegiatan'       => 'Mesin Fotocopy Digital',
            'satuan'                => 'Unit/Bulan',
            'var1'                  => '1750000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '65',
            'uraian_kegiatan'       => 'Wilayah Jawa Timur',
            'satuan'                => 'Per Hari',
            'var1'                  => '12625000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '66',
            'uraian_kegiatan'       => 'Aceh',
            'satuan'                => 'Per Hari',
            'var1'                  => '000',
            'var2'                  => '000',
            'var3'                  => '000',
            'var4'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '66',
            'uraian_kegiatan'       => 'Sumatera Utara',
            'satuan'                => 'Per Hari',
            'var1'                  => '000',
            'var2'                  => '000',
            'var3'                  => '000',
            'var4'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '66',
            'uraian_kegiatan'       => 'Riau',
            'satuan'                => 'Per Hari',
            'var1'                  => '000',
            'var2'                  => '000',
            'var3'                  => '000',
            'var4'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '66',
            'uraian_kegiatan'       => 'Kepulauan Riau',
            'satuan'                => 'Per Hari',
            'var1'                  => '000',
            'var2'                  => '000',
            'var3'                  => '000',
            'var4'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '66',
            'uraian_kegiatan'       => 'Jambi',
            'satuan'                => 'Per Hari',
            'var1'                  => '000',
            'var2'                  => '000',
            'var3'                  => '000',
            'var4'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '66',
            'uraian_kegiatan'       => 'Sumatera Barat',
            'satuan'                => 'Per Hari',
            'var1'                  => '000',
            'var2'                  => '000',
            'var3'                  => '000',
            'var4'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '66',
            'uraian_kegiatan'       => 'Sumatera Selatan',
            'satuan'                => 'Per Hari',
            'var1'                  => '000',
            'var2'                  => '000',
            'var3'                  => '000',
            'var4'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '66',
            'uraian_kegiatan'       => 'Lampung',
            'satuan'                => 'Per Hari',
            'var1'                  => '000',
            'var2'                  => '000',
            'var3'                  => '000',
            'var4'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '66',
            'uraian_kegiatan'       => 'Bengkulu',
            'satuan'                => 'Per Hari',
            'var1'                  => '000',
            'var2'                  => '000',
            'var3'                  => '000',
            'var4'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '66',
            'uraian_kegiatan'       => 'Bangka Belitung',
            'satuan'                => 'Per Hari',
            'var1'                  => '000',
            'var2'                  => '000',
            'var3'                  => '000',
            'var4'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '66',
            'uraian_kegiatan'       => 'Banten',
            'satuan'                => 'Per Hari',
            'var1'                  => '000',
            'var2'                  => '000',
            'var3'                  => '000',
            'var4'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '66',
            'uraian_kegiatan'       => 'Jawa Barat',
            'satuan'                => 'Per Hari',
            'var1'                  => '000',
            'var2'                  => '000',
            'var3'                  => '000',
            'var4'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '66',
            'uraian_kegiatan'       => 'DKI Jakarta',
            'satuan'                => 'Per Hari',
            'var1'                  => '000',
            'var2'                  => '000',
            'var3'                  => '000',
            'var4'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '66',
            'uraian_kegiatan'       => 'Jawa Tengah',
            'satuan'                => 'Per Hari',
            'var1'                  => '000',
            'var2'                  => '000',
            'var3'                  => '000',
            'var4'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '66',
            'uraian_kegiatan'       => 'DI Yogyakarta',
            'satuan'                => 'Per Hari',
            'var1'                  => '000',
            'var2'                  => '000',
            'var3'                  => '000',
            'var4'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '66',
            'uraian_kegiatan'       => 'Jawa Timur',
            'satuan'                => 'Per Hari',
            'var1'                  => '000',
            'var2'                  => '000',
            'var3'                  => '000',
            'var4'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '66',
            'uraian_kegiatan'       => 'Bali',
            'satuan'                => 'Per Hari',
            'var1'                  => '000',
            'var2'                  => '000',
            'var3'                  => '000',
            'var4'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '66',
            'uraian_kegiatan'       => 'Nusa Tenggara Barat',
            'satuan'                => 'Per Hari',
            'var1'                  => '000',
            'var2'                  => '000',
            'var3'                  => '000',
            'var4'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '66',
            'uraian_kegiatan'       => 'Nusa Tenggara Timur',
            'satuan'                => 'Per Hari',
            'var1'                  => '000',
            'var2'                  => '000',
            'var3'                  => '000',
            'var4'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '66',
            'uraian_kegiatan'       => 'Kalimantan Barat',
            'satuan'                => 'Per Hari',
            'var1'                  => '000',
            'var2'                  => '000',
            'var3'                  => '000',
            'var4'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '66',
            'uraian_kegiatan'       => 'Kalimantan Tengah',
            'satuan'                => 'Per Hari',
            'var1'                  => '000',
            'var2'                  => '000',
            'var3'                  => '000',
            'var4'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '66',
            'uraian_kegiatan'       => 'Kalimantan Selatan',
            'satuan'                => 'Per Hari',
            'var1'                  => '000',
            'var2'                  => '000',
            'var3'                  => '000',
            'var4'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '66',
            'uraian_kegiatan'       => 'Kalimantan Timur',
            'satuan'                => 'Per Hari',
            'var1'                  => '000',
            'var2'                  => '000',
            'var3'                  => '000',
            'var4'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '66',
            'uraian_kegiatan'       => 'Kalimantan Utara',
            'satuan'                => 'Per Hari',
            'var1'                  => '000',
            'var2'                  => '000',
            'var3'                  => '000',
            'var4'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '66',
            'uraian_kegiatan'       => 'Sulawesi Utara',
            'satuan'                => 'Per Hari',
            'var1'                  => '000',
            'var2'                  => '000',
            'var3'                  => '000',
            'var4'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '66',
            'uraian_kegiatan'       => 'Gorontalo',
            'satuan'                => 'Per Hari',
            'var1'                  => '000',
            'var2'                  => '000',
            'var3'                  => '000',
            'var4'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '66',
            'uraian_kegiatan'       => 'Sulawesi Barat',
            'satuan'                => 'Per Hari',
            'var1'                  => '000',
            'var2'                  => '000',
            'var3'                  => '000',
            'var4'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '66',
            'uraian_kegiatan'       => 'Sulawesi Selatan',
            'satuan'                => 'Per Hari',
            'var1'                  => '000',
            'var2'                  => '000',
            'var3'                  => '000',
            'var4'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '66',
            'uraian_kegiatan'       => 'Sulawesi Tengah',
            'satuan'                => 'Per Hari',
            'var1'                  => '000',
            'var2'                  => '000',
            'var3'                  => '000',
            'var4'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '66',
            'uraian_kegiatan'       => 'Sulawesi Tenggara',
            'satuan'                => 'Per Hari',
            'var1'                  => '000',
            'var2'                  => '000',
            'var3'                  => '000',
            'var4'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '66',
            'uraian_kegiatan'       => 'Maluku',
            'satuan'                => 'Per Hari',
            'var1'                  => '000',
            'var2'                  => '000',
            'var3'                  => '000',
            'var4'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '66',
            'uraian_kegiatan'       => 'Maluku Utara',
            'satuan'                => 'Per Hari',
            'var1'                  => '000',
            'var2'                  => '000',
            'var3'                  => '000',
            'var4'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '66',
            'uraian_kegiatan'       => 'Papua',
            'satuan'                => 'Per Hari',
            'var1'                  => '000',
            'var2'                  => '000',
            'var3'                  => '000',
            'var4'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '66',
            'uraian_kegiatan'       => 'Papua Barat',
            'satuan'                => 'Per Hari',
            'var1'                  => '000',
            'var2'                  => '000',
            'var3'                  => '000',
            'var4'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '67',
            'uraian_kegiatan'       => 'Inventaris Kantor',
            'satuan'                => 'Pegawai/Tahun',
            'var1'                  => '80000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '67',
            'uraian_kegiatan'       => 'Personal Computer',
            'satuan'                => 'Unit/Tahun',
            'var1'                  => '730000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '67',
            'uraian_kegiatan'       => 'Printer',
            'satuan'                => 'Unit/Tahun',
            'var1'                  => '690000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '67',
            'uraian_kegiatan'       => 'AC Split',
            'satuan'                => 'Unit/Tahun',
            'var1'                  => '610000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '67',
            'uraian_kegiatan'       => 'Genset lebih kecil dari 50 KVA',
            'satuan'                => 'Unit/Tahun',
            'var1'                  => '7190000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '67',
            'uraian_kegiatan'       => 'Genset 75 KVA',
            'satuan'                => 'Unit/Tahun',
            'var1'                  => '8640000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '67',
            'uraian_kegiatan'       => 'Genset 100 KVA',
            'satuan'                => 'Unit/Tahun',
            'var1'                  => '10150000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '67',
            'uraian_kegiatan'       => 'Genset 125 KVA',
            'satuan'                => 'Unit/Tahun',
            'var1'                  => '10780000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '67',
            'uraian_kegiatan'       => 'Genset 150 KVA',
            'satuan'                => 'Unit/Tahun',
            'var1'                  => '13260000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '67',
            'uraian_kegiatan'       => 'Genset 175 KVA',
            'satuan'                => 'Unit/Tahun',
            'var1'                  => '14810000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '67',
            'uraian_kegiatan'       => 'Genset 200 KVA',
            'satuan'                => 'Unit/Tahun',
            'var1'                  => '15850000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '67',
            'uraian_kegiatan'       => 'Genset 250 KVA',
            'satuan'                => 'Unit/Tahun',
            'var1'                  => '16790000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '67',
            'uraian_kegiatan'       => 'Genset 275 KVA',
            'satuan'                => 'Unit/Tahun',
            'var1'                  => '17760000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '67',
            'uraian_kegiatan'       => 'Genset 300 KVA',
            'satuan'                => 'Unit/Tahun',
            'var1'                  => '20960000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '67',
            'uraian_kegiatan'       => 'Genset 350 KVA',
            'satuan'                => 'Unit/Tahun',
            'var1'                  => '22960000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '67',
            'uraian_kegiatan'       => 'Genset 450 KVA',
            'satuan'                => 'Unit/Tahun',
            'var1'                  => '25620000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '67',
            'uraian_kegiatan'       => 'Genset 500 KVA',
            'satuan'                => 'Unit/Tahun',
            'var1'                  => '31770000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '68',
            'uraian_kegiatan'       => 'Biaya Keperluan Sehari-hari Perkantoran',
            'satuan'                => 'Orang/Tahun',
            'var1'                  => '1520000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '69',
            'uraian_kegiatan'       => 'Gedung Bertingkat',
            'satuan'                => 'm2/Tahun',
            'var1'                  => '173000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '69',
            'uraian_kegiatan'       => 'Gedung Tidak Bertingkat',
            'satuan'                => 'm2/Tahun',
            'var1'                  => '128000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '69',
            'uraian_kegiatan'       => 'Halaman Gedung/Bangunan Kantor',
            'satuan'                => 'm2/Tahun',
            'var1'                  => '10000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '70',
            'uraian_kegiatan'       => 'Kendaraan Dinas Pejabat',
            'satuan'                => 'Unit/Tahun',
            'var1'                  => '38610000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '70',
            'uraian_kegiatan'       => 'Kendaraan Dinas Operasional',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '70',
            'uraian_kegiatan'       => 'Operasional Kendaraan Dinas untuk Pengadaan dari Sewa',
        ]);
    }
}
