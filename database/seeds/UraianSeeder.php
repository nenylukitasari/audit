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
            'var1'                  => '13285000',
            'var2'                  => '7081000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Jakarta',
            'satuan'                => 'Balikpapan',
            'var1'                  => '7412000',
            'var2'                  => '3797000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Jakarta',
            'satuan'                => 'Banda Aceh',
            'var1'                  => '7519000',
            'var2'                  => '4492000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Jakarta',
            'satuan'                => 'Bandar Lampung',
            'var1'                  => '2407000',
            'var2'                  => '1583000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Jakarta',
            'satuan'                => 'Banjarmasin',
            'var1'                  => '5252000',
            'var2'                  => '2995000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Jakarta',
            'satuan'                => 'Batam',
            'var1'                  => '4867000',
            'var2'                  => '2888000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Jakarta',
            'satuan'                => 'Bengkulu',
            'var1'                  => '4364000',
            'var2'                  => '2621000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Jakarta',
            'satuan'                => 'Biak',
            'var1'                  => '14065000',
            'var2'                  => '7519000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Jakarta',
            'satuan'                => 'Denpasar',
            'var1'                  => '5305000',
            'var2'                  => '3262000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Jakarta',
            'satuan'                => 'Gorontalo',
            'var1'                  => '7231000',
            'var2'                  => '4824000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Jakarta',
            'satuan'                => 'Jambi',
            'var1'                  => '4065000',
            'var2'                  => '2460000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Jakarta',
            'satuan'                => 'Jayapura',
            'var1'                  => '14568000',
            'var2'                  => '8193000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Jakarta',
            'satuan'                => 'Yogyakarta',
            'var1'                  => '4107000',
            'var2'                  => '2268000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Jakarta',
            'satuan'                => 'Kendari',
            'var1'                  => '7658000',
            'var2'                  => '4182000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Jakarta',
            'satuan'                => 'Kupang',
            'var1'                  => '9413000',
            'var2'                  => '5081000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Jakarta',
            'satuan'                => 'Makassar',
            'var1'                  => '7444000',
            'var2'                  => '3829000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Jakarta',
            'satuan'                => 'Malang',
            'var1'                  => '4599000',
            'var2'                  => '2695000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Jakarta',
            'satuan'                => 'Mamuju',
            'var1'                  => '7295000',
            'var2'                  => '4867000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Jakarta',
            'satuan'                => 'Manado',
            'var1'                  => '10824000',
            'var2'                  => '5102000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Jakarta',
            'satuan'                => 'Manokwari',
            'var1'                  => '16226000',
            'var2'                  => '10824000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Jakarta',
            'satuan'                => 'Mataram',
            'var1'                  => '5316000',
            'var2'                  => '3230000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Jakarta',
            'satuan'                => 'Medan',
            'var1'                  => '7252000',
            'var2'                  => '3808000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Jakarta',
            'satuan'                => 'Padang',
            'var1'                  => '5530000',
            'var2'                  => '2952000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Jakarta',
            'satuan'                => 'Palangkaraya',
            'var1'                  => '4984000',
            'var2'                  => '2984000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Jakarta',
            'satuan'                => 'Palembang',
            'var1'                  => '3861000',
            'var2'                  => '2268000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Jakarta',
            'satuan'                => 'Palu',
            'var1'                  => '9348000',
            'var2'                  => '5113000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Jakarta',
            'satuan'                => 'Pangkal Pinang',
            'var1'                  => '3412000',
            'var2'                  => '2139000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Jakarta',
            'satuan'                => 'Pekanbaru',
            'var1'                  => '5583000',
            'var2'                  => '3016000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Jakarta',
            'satuan'                => 'Pontianak',
            'var1'                  => '4353000',
            'var2'                  => '2781000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Jakarta',
            'satuan'                => 'Semarang',
            'var1'                  => '3861000',
            'var2'                  => '2182000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Jakarta',
            'satuan'                => 'Solo',
            'var1'                  => '3861000',
            'var2'                  => '2342000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Jakarta',
            'satuan'                => 'Surabaya',
            'var1'                  => '5466000',
            'var2'                  => '2674000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Jakarta',
            'satuan'                => 'Ternate',
            'var1'                  => '10001000',
            'var2'                  => '6664000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Jakarta',
            'satuan'                => 'Timika',
            'var1'                  => '13830000',
            'var2'                  => '7487000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Ambon',
            'satuan'                => 'Denpasar',
            'var1'                  => '8054000',
            'var2'                  => '4471000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Ambon',
            'satuan'                => 'Jayapura',
            'var1'                  => '7434000',
            'var2'                  => '4161000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Ambon',
            'satuan'                => 'Kendari',
            'var1'                  => '4824000',
            'var2'                  => '2856000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Ambon',
            'satuan'                => 'Makassar',
            'var1'                  => '6022000',
            'var2'                  => '3455000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Ambon',
            'satuan'                => 'Manokwari',
            'var1'                  => '5177000',
            'var2'                  => '3027000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Ambon',
            'satuan'                => 'Palu',
            'var1'                  => '6140000',
            'var2'                  => '3508000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Ambon',
            'satuan'                => 'Sorong',
            'var1'                  => '3637000',
            'var2'                  => '2257000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Ambon',
            'satuan'                => 'Surabaya',
            'var1'                  => '8803000',
            'var2'                  => '4845000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Ambon',
            'satuan'                => 'Ternate',
            'var1'                  => '4022000',
            'var2'                  => '2449000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Balikpapan',
            'satuan'                => 'Banda Aceh',
            'var1'                  => '12739000',
            'var2'                  => '6749000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Balikpapan',
            'satuan'                => 'Batam',
            'var1'                  => '10354000',
            'var2'                  => '5305000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Balikpapan',
            'satuan'                => 'Denpasar',
            'var1'                  => '10739000',
            'var2'                  => '5648000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Balikpapan',
            'satuan'                => 'Jayapura',
            'var1'                  => '19071000',
            'var2'                  => '10086000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Balikpapan',
            'satuan'                => 'Yogyakarta',
            'var1'                  => '9669000',
            'var2'                  => '4749000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Balikpapan',
            'satuan'                => 'Makassar',
            'var1'                  => '12664000',
            'var2'                  => '6150000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Balikpapan',
            'satuan'                => 'Manado',
            'var1'                  => '15702000',
            'var2'                  => '7295000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Balikpapan',
            'satuan'                => 'Medan',
            'var1'                  => '12493000',
            'var2'                  => '6140000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Balikpapan',
            'satuan'                => 'Padang',
            'var1'                  => '10942000',
            'var2'                  => '5369000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Balikpapan',
            'satuan'                => 'Palembang',
            'var1'                  => '9445000',
            'var2'                  => '4749000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Balikpapan',
            'satuan'                => 'Pekanbaru',
            'var1'                  => '10996000',
            'var2'                  => '5423000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Balikpapan',
            'satuan'                => 'Semarang',
            'var1'                  => '9445000',
            'var2'                  => '4674000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Balikpapan',
            'satuan'                => 'Solo',
            'var1'                  => '9445000',
            'var2'                  => '4813000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Balikpapan',
            'satuan'                => 'Surabaya',
            'var1'                  => '10889000',
            'var2'                  => '5113000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Balikpapan',
            'satuan'                => 'Timika',
            'var1'                  => '18408000',
            'var2'                  => '9445000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Banda Aceh',
            'satuan'                => 'Denpasar',
            'var1'                  => '10835000',
            'var2'                  => '6279000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Banda Aceh',
            'satuan'                => 'Jayapura',
            'var1'                  => '19167000',
            'var2'                  => '10717000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Banda Aceh',
            'satuan'                => 'Yogyakarta',
            'var1'                  => '9765000',
            'var2'                  => '5380000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Banda Aceh',
            'satuan'                => 'Makassar',
            'var1'                  => '12760000',
            'var2'                  => '6781000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Banda Aceh',
            'satuan'                => 'Manado',
            'var1'                  => '15798000',
            'var2'                  => '7926000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Banda Aceh',
            'satuan'                => 'Pontianak',
            'var1'                  => '9990000',
            'var2'                  => '5840000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Banda Aceh',
            'satuan'                => 'Semarang',
            'var1'                  => '9530000',
            'var2'                  => '5305000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Banda Aceh',
            'satuan'                => 'Solo',
            'var1'                  => '9530000',
            'var2'                  => '5444000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Banda Aceh',
            'satuan'                => 'Surabaya',
            'var1'                  => '10985000',
            'var2'                  => '5744000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Banda Aceh',
            'satuan'                => 'Timika',
            'var1'                  => '18504000',
            'var2'                  => '10076000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Bandar Lampung',
            'satuan'                => 'Balikpapan',
            'var1'                  => '8129000',
            'var2'                  => '4129000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Bandar Lampung',
            'satuan'                => 'Banda Aceh',
            'var1'                  => '8225000',
            'var2'                  => '4760000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Bandar Lampung',
            'satuan'                => 'Banjarmasin',
            'var1'                  => '6193000',
            'var2'                  => '3412000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Bandar Lampung',
            'satuan'                => 'Batam',
            'var1'                  => '5840000',
            'var2'                  => '3316000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Bandar Lampung',
            'satuan'                => 'Biak',
            'var1'                  => '14119000',
            'var2'                  => '7487000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Bandar Lampung',
            'satuan'                => 'Denpasar',
            'var1'                  => '6236000',
            'var2'                  => '3647000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Bandar Lampung',
            'satuan'                => 'Jayapura',
            'var1'                  => '14568000',
            'var2'                  => '8097000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Bandar Lampung',
            'satuan'                => 'Yogyakarta',
            'var1'                  => '5155000',
            'var2'                  => '2760000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Bandar Lampung',
            'satuan'                => 'Kendari',
            'var1'                  => '8354000',
            'var2'                  => '4482000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Bandar Lampung',
            'satuan'                => 'Makassar',
            'var1'                  => '8161000',
            'var2'                  => '4161000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Bandar Lampung',
            'satuan'                => 'Malang',
            'var1'                  => '5594000',
            'var2'                  => '3134000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Bandar Lampung',
            'satuan'                => 'Manado',
            'var1'                  => '11199000',
            'var2'                  => '5305000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Bandar Lampung',
            'satuan'                => 'Mataram',
            'var1'                  => '6246000',
            'var2'                  => '3626000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Bandar Lampung',
            'satuan'                => 'Medan',
            'var1'                  => '7979000',
            'var2'                  => '4150000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Bandar Lampung',
            'satuan'                => 'Padang',
            'var1'                  => '6439000',
            'var2'                  => '3380000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Bandar Lampung',
            'satuan'                => 'Palangkaraya',
            'var1'                  => '5947000',
            'var2'                  => '3401000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Bandar Lampung',
            'satuan'                => 'Palembang',
            'var1'                  => '4931000',
            'var2'                  => '2760000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Bandar Lampung',
            'satuan'                => 'Pekanbaru',
            'var1'                  => '6482000',
            'var2'                  => '3433000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Bandar Lampung',
            'satuan'                => 'Pontianak',
            'var1'                  => '5380000',
            'var2'                  => '3220000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Bandar Lampung',
            'satuan'                => 'Semarang',
            'var1'                  => '4931000',
            'var2'                  => '2685000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Bandar Lampung',
            'satuan'                => 'Solo',
            'var1'                  => '4931000',
            'var2'                  => '2824000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Bandar Lampung',
            'satuan'                => 'Surabaya',
            'var1'                  => '6386000',
            'var2'                  => '3123000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Bandar Lampung',
            'satuan'                => 'Timika',
            'var1'                  => '13905000',
            'var2'                  => '7455000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Bandung',
            'satuan'                => 'Batam',
            'var1'                  => '6289000',
            'var2'                  => '3583000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Bandung',
            'satuan'                => 'Denpasar',
            'var1'                  => '5626000',
            'var2'                  => '3252000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Bandung',
            'satuan'                => 'Jakarta',
            'var1'                  => '2064000',
            'var2'                  => '1476000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Bandung',
            'satuan'                => 'Jambi',
            'var1'                  => '5006000',
            'var2'                  => '2941000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Bandung',
            'satuan'                => 'Yogyakarta',
            'var1'                  => '3369000',
            'var2'                  => '2129000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Bandung',
            'satuan'                => 'Padang',
            'var1'                  => '6129000',
            'var2'                  => '3508000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Bandung',
            'satuan'                => 'Palembang',
            'var1'                  => '4385000',
            'var2'                  => '2631000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Bandung',
            'satuan'                => 'Pangkal Pinang',
            'var1'                  => '4599000',
            'var2'                  => '2738000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Bandung',
            'satuan'                => 'Pekanbaru',
            'var1'                  => '6525000',
            'var2'                  => '3701000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Bandung',
            'satuan'                => 'Semarang',
            'var1'                  => '3027000',
            'var2'                  => '1957000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Bandung',
            'satuan'                => 'Solo',
            'var1'                  => '3647000',
            'var2'                  => '2268000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Bandung',
            'satuan'                => 'Surabaya',
            'var1'                  => '4824000',
            'var2'                  => '2856000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Bandung',
            'satuan'                => 'Tanjung Pandan',
            'var1'                  => '4439000',
            'var2'                  => '2663000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Banjarmasin',
            'satuan'                => 'Banda Aceh',
            'var1'                  => '10792000',
            'var2'                  => '6022000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Banjarmasin',
            'satuan'                => 'Batam',
            'var1'                  => '8407000',
            'var2'                  => '4578000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Banjarmasin',
            'satuan'                => 'Biak',
            'var1'                  => '16686000',
            'var2'                  => '8749000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Banjarmasin',
            'satuan'                => 'Denpasar',
            'var1'                  => '8792000',
            'var2'                  => '4920000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Banjarmasin',
            'satuan'                => 'Jayapura',
            'var1'                  => '17135000',
            'var2'                  => '9359000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Banjarmasin',
            'satuan'                => 'Yogyakarta',
            'var1'                  => '7723000',
            'var2'                  => '4022000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Banjarmasin',
            'satuan'                => 'Medan',
            'var1'                  => '10546000',
            'var2'                  => '5412000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Banjarmasin',
            'satuan'                => 'Padang',
            'var1'                  => '9006000',
            'var2'                  => '4642000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Banjarmasin',
            'satuan'                => 'Palembang',
            'var1'                  => '7498000',
            'var2'                  => '4022000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Banjarmasin',
            'satuan'                => 'Pekanbaru',
            'var1'                  => '9049000',
            'var2'                  => '4696000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Banjarmasin',
            'satuan'                => 'Semarang',
            'var1'                  => '7498000',
            'var2'                  => '3958000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Banjarmasin',
            'satuan'                => 'Solo',
            'var1'                  => '7498000',
            'var2'                  => '4097000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Banjarmasin',
            'satuan'                => 'Surabaya',
            'var1'                  => '8942000',
            'var2'                  => '4385000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Banjarmasin',
            'satuan'                => 'Timika',
            'var1'                  => '16472000',
            'var2'                  => '8717000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Batam',
            'satuan'                => 'Banda Aceh',
            'var1'                  => '10439000',
            'var2'                  => '5936000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Batam',
            'satuan'                => 'Denpasar',
            'var1'                  => '8450000',
            'var2'                  => '4824000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Batam',
            'satuan'                => 'Jayapura',
            'var1'                  => '16782000',
            'var2'                  => '9263000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Batam',
            'satuan'                => 'Yogyakarta',
            'var1'                  => '7370000',
            'var2'                  => '3936000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Batam',
            'satuan'                => 'Makassar',
            'var1'                  => '10375000',
            'var2'                  => '5337000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Batam',
            'satuan'                => 'Manado',
            'var1'                  => '13413000',
            'var2'                  => '6482000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Batam',
            'satuan'                => 'Medan',
            'var1'                  => '10193000',
            'var2'                  => '5316000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Batam',
            'satuan'                => 'Padang',
            'var1'                  => '8653000',
            'var2'                  => '4546000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Batam',
            'satuan'                => 'Palembang',
            'var1'                  => '7145000',
            'var2'                  => '3936000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Batam',
            'satuan'                => 'Pekanbaru',
            'var1'                  => '8707000',
            'var2'                  => '4599000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Batam',
            'satuan'                => 'Pontianak',
            'var1'                  => '7594000',
            'var2'                  => '4396000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Batam',
            'satuan'                => 'Semarang',
            'var1'                  => '7145000',
            'var2'                  => '3861000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Batam',
            'satuan'                => 'Solo',
            'var1'                  => '7145000',
            'var2'                  => '4000000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Batam',
            'satuan'                => 'Surabaya',
            'var1'                  => '8600000',
            'var2'                  => '4300000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Batam',
            'satuan'                => 'Timika',
            'var1'                  => '16119000',
            'var2'                  => '8621000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Bengkulu',
            'satuan'                => 'Palembang',
            'var1'                  => '2899000',
            'var2'                  => '1893000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Biak',
            'satuan'                => 'Balikpapan',
            'var1'                  => '18622000',
            'var2'                  => '9477000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Biak',
            'satuan'                => 'Banda Aceh',
            'var1'                  => '18718000',
            'var2'                  => '10108000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Biak',
            'satuan'                => 'Batam',
            'var1'                  => '16333000',
            'var2'                  => '8664000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Biak',
            'satuan'                => 'Denpasar',
            'var1'                  => '16729000',
            'var2'                  => '8995000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Biak',
            'satuan'                => 'Jayapura',
            'var1'                  => '3615000',
            'var2'                  => '2321000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Biak',
            'satuan'                => 'Yogyakarta',
            'var1'                  => '15648000',
            'var2'                  => '8108000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Biak',
            'satuan'                => 'Manado',
            'var1'                  => '11734000',
            'var2'                  => '6353000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Biak',
            'satuan'                => 'Medan',
            'var1'                  => '18472000',
            'var2'                  => '9498000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Biak',
            'satuan'                => 'Padang',
            'var1'                  => '16932000',
            'var2'                  => '8728000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Biak',
            'satuan'                => 'Palembang',
            'var1'                  => '15424000',
            'var2'                  => '8108000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Biak',
            'satuan'                => 'Pekanbaru',
            'var1'                  => '16985000',
            'var2'                  => '8781000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Biak',
            'satuan'                => 'Pontianak',
            'var1'                  => '15873000',
            'var2'                  => '8568000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Biak',
            'satuan'                => 'Surabaya',
            'var1'                  => '12782000',
            'var2'                  => '7081000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Biak',
            'satuan'                => 'Timika',
            'var1'                  => '5808000',
            'var2'                  => '3444000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Denpasar',
            'satuan'                => 'Jayapura',
            'var1'                  => '11680000',
            'var2'                  => '6845000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Denpasar',
            'satuan'                => 'Kupang',
            'var1'                  => '5091000',
            'var2'                  => '2952000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Denpasar',
            'satuan'                => 'Makassar',
            'var1'                  => '4182000',
            'var2'                  => '2631000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Denpasar',
            'satuan'                => 'Manado',
            'var1'                  => '7851000',
            'var2'                  => '4278000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Denpasar',
            'satuan'                => 'Mataram',
            'var1'                  => '1840000',
            'var2'                  => '1390000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Denpasar',
            'satuan'                => 'Medan',
            'var1'                  => '10589000',
            'var2'                  => '5658000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Denpasar',
            'satuan'                => 'Padang',
            'var1'                  => '9049000',
            'var2'                  => '4888000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Denpasar',
            'satuan'                => 'Palangkaraya',
            'var1'                  => '8557000',
            'var2'                  => '4909000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Denpasar',
            'satuan'                => 'Palembang',
            'var1'                  => '7541000',
            'var2'                  => '4278000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Denpasar',
            'satuan'                => 'Pekanbaru',
            'var1'                  => '9092000',
            'var2'                  => '4942000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Denpasar',
            'satuan'                => 'Pontianak',
            'var1'                  => '7990000',
            'var2'                  => '4738000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Denpasar',
            'satuan'                => 'Timika',
            'var1'                  => '10140000',
            'var2'                  => '6129000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Jambi',
            'satuan'                => 'Balikpapan',
            'var1'                  => '7733000',
            'var2'                  => '4407000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Jambi',
            'satuan'                => 'Banjarmasin',
            'var1'                  => '7690000',
            'var2'                  => '4193000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Jambi',
            'satuan'                => 'Denpasar',
            'var1'                  => '7733000',
            'var2'                  => '4439000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Jambi',
            'satuan'                => 'Yogyakarta',
            'var1'                  => '6653000',
            'var2'                  => '3551000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Jambi',
            'satuan'                => 'Kupang',
            'var1'                  => '11434000',
            'var2'                  => '6075000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Jambi',
            'satuan'                => 'Makassar',
            'var1'                  => '9659000',
            'var2'                  => '4952000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Jambi',
            'satuan'                => 'Malang',
            'var1'                  => '7091000',
            'var2'                  => '3925000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Jambi',
            'satuan'                => 'Manado',
            'var1'                  => '12707000',
            'var2'                  => '6097000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Jambi',
            'satuan'                => 'Palangkaraya',
            'var1'                  => '7444000',
            'var2'                  => '4193000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Jambi',
            'satuan'                => 'Pontianak',
            'var1'                  => '6878000',
            'var2'                  => '4011000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Jambi',
            'satuan'                => 'Semarang',
            'var1'                  => '6428000',
            'var2'                  => '3476000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Jambi',
            'satuan'                => 'Solo',
            'var1'                  => '6428000',
            'var2'                  => '3615000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Jambi',
            'satuan'                => 'Surabaya',
            'var1'                  => '7883000',
            'var2'                  => '3915000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Jayapura',
            'satuan'                => 'Yogyakarta',
            'var1'                  => '13274000',
            'var2'                  => '7690000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Jayapura',
            'satuan'                => 'Manado',
            'var1'                  => '22109000',
            'var2'                  => '11263000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Jayapura',
            'satuan'                => 'Medan',
            'var1'                  => '18932000',
            'var2'                  => '10097000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Jayapura',
            'satuan'                => 'Padang',
            'var1'                  => '17381000',
            'var2'                  => '9327000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Jayapura',
            'satuan'                => 'Palembang',
            'var1'                  => '15873000',
            'var2'                  => '8717000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Jayapura',
            'satuan'                => 'Pekanbaru',
            'var1'                  => '17435000',
            'var2'                  => '9380000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Jayapura',
            'satuan'                => 'Pontianak',
            'var1'                  => '16322000',
            'var2'                  => '9177000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Jayapura',
            'satuan'                => 'Timika',
            'var1'                  => '3615000',
            'var2'                  => '2289000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Yogyakarta',
            'satuan'                => 'Denpasar',
            'var1'                  => '3861000',
            'var2'                  => '2481000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Yogyakarta',
            'satuan'                => 'Makassar',
            'var1'                  => '6525000',
            'var2'                  => '3893000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Yogyakarta',
            'satuan'                => 'Manado',
            'var1'                  => '10536000',
            'var2'                  => '5722000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Yogyakarta',
            'satuan'                => 'Medan',
            'var1'                  => '9519000',
            'var2'                  => '4770000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Yogyakarta',
            'satuan'                => 'Padang',
            'var1'                  => '7969000',
            'var2'                  => '4000000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Yogyakarta',
            'satuan'                => 'Palembang',
            'var1'                  => '6460000',
            'var2'                  => '3380000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Yogyakarta',
            'satuan'                => 'Pekanbaru',
            'var1'                  => '8022000',
            'var2'                  => '4054000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Yogyakarta',
            'satuan'                => 'Pontianak',
            'var1'                  => '6910000',
            'var2'                  => '3840000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Yogyakarta',
            'satuan'                => 'Timika',
            'var1'                  => '11894000',
            'var2'                  => '7038000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Kendari',
            'satuan'                => 'Banda Aceh',
            'var1'                  => '12953000',
            'var2'                  => '7102000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Kendari',
            'satuan'                => 'Batam',
            'var1'                  => '10568000',
            'var2'                  => '5658000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Kendari',
            'satuan'                => 'Denpasar',
            'var1'                  => '5455000',
            'var2'                  => '3273000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Kendari',
            'satuan'                => 'Yogyakarta',
            'var1'                  => '8129000',
            'var2'                  => '4706000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Kendari',
            'satuan'                => 'Padang',
            'var1'                  => '11167000',
            'var2'                  => '5722000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Kendari',
            'satuan'                => 'Palembang',
            'var1'                  => '9659000',
            'var2'                  => '5102000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Kendari',
            'satuan'                => 'Pekanbaru',
            'var1'                  => '11220000',
            'var2'                  => '5776000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Kendari',
            'satuan'                => 'Semarang',
            'var1'                  => '9659000',
            'var2'                  => '5027000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Kendari',
            'satuan'                => 'Solo',
            'var1'                  => '9659000',
            'var2'                  => '5166000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Kendari',
            'satuan'                => 'Surabaya',
            'var1'                  => '11103000',
            'var2'                  => '5466000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Kendari',
            'satuan'                => 'Timika',
            'var1'                  => '18633000',
            'var2'                  => '9798000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Kupang',
            'satuan'                => 'Jayapura',
            'var1'                  => '14386000',
            'var2'                  => '8108000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Kupang',
            'satuan'                => 'Yogyakarta',
            'var1'                  => '7348000',
            'var2'                  => '4182000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Kupang',
            'satuan'                => 'Makassar',
            'var1'                  => '7637000',
            'var2'                  => '4311000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Kupang',
            'satuan'                => 'Manado',
            'var1'                  => '11648000',
            'var2'                  => '6140000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Kupang',
            'satuan'                => 'Surabaya',
            'var1'                  => '6749000',
            'var2'                  => '3722000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Makassar',
            'satuan'                => 'Biak',
            'var1'                  => '8493000',
            'var2'                  => '4931000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Makassar',
            'satuan'                => 'Jayapura',
            'var1'                  => '10193000',
            'var2'                  => '5787000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Makassar',
            'satuan'                => 'Kendari',
            'var1'                  => '2663000',
            'var2'                  => '1786000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Makassar',
            'satuan'                => 'Manado',
            'var1'                  => '5327000',
            'var2'                  => '2909000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Makassar',
            'satuan'                => 'Timika',
            'var1'                  => '11723000',
            'var2'                  => '6567000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Malang',
            'satuan'                => 'Balikpapan',
            'var1'                  => '10108000',
            'var2'                  => '5134000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Malang',
            'satuan'                => 'Banda Aceh',
            'var1'                  => '10204000',
            'var2'                  => '5765000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Malang',
            'satuan'                => 'Banjarmasin',
            'var1'                  => '8161000',
            'var2'                  => '4407000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Malang',
            'satuan'                => 'Batam',
            'var1'                  => '7819000',
            'var2'                  => '4311000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Malang',
            'satuan'                => 'Biak',
            'var1'                  => '16087000',
            'var2'                  => '8482000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Malang',
            'satuan'                => 'Jayapura',
            'var1'                  => '16536000',
            'var2'                  => '9092000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Malang',
            'satuan'                => 'Kendari',
            'var1'                  => '10322000',
            'var2'                  => '5487000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Malang',
            'satuan'                => 'Makassar',
            'var1'                  => '10129000',
            'var2'                  => '5166000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Malang',
            'satuan'                => 'Manado',
            'var1'                  => '13167000',
            'var2'                  => '6311000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Malang',
            'satuan'                => 'Medan',
            'var1'                  => '9958000',
            'var2'                  => '5145000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Malang',
            'satuan'                => 'Padang',
            'var1'                  => '8418000',
            'var2'                  => '4385000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Malang',
            'satuan'                => 'Palangkaraya',
            'var1'                  => '7915000',
            'var2'                  => '4407000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Malang',
            'satuan'                => 'Palembang',
            'var1'                  => '6899000',
            'var2'                  => '3765000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Malang',
            'satuan'                => 'Pekanbaru',
            'var1'                  => '8461000',
            'var2'                  => '4439000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Malang',
            'satuan'                => 'Timika',
            'var1'                  => '15873000',
            'var2'                  => '8461000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Manado',
            'satuan'                => 'Medan',
            'var1'                  => '15552000',
            'var2'                  => '7316000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Manado',
            'satuan'                => 'Padang',
            'var1'                  => '14012000',
            'var2'                  => '6546000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Manado',
            'satuan'                => 'Palembang',
            'var1'                  => '12504000',
            'var2'                  => '5926000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Manado',
            'satuan'                => 'Pekanbaru',
            'var1'                  => '14055000',
            'var2'                  => '6599000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Manado',
            'satuan'                => 'Pontianak',
            'var1'                  => '12953000',
            'var2'                  => '6396000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Manado',
            'satuan'                => 'Semarang',
            'var1'                  => '12504000',
            'var2'                  => '5851000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Manado',
            'satuan'                => 'Solo',
            'var1'                  => '12504000',
            'var2'                  => '5990000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Manado',
            'satuan'                => 'Surabaya',
            'var1'                  => '9937000',
            'var2'                  => '5262000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Manado',
            'satuan'                => 'Timika',
            'var1'                  => '16183000',
            'var2'                  => '8995000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Mataram',
            'satuan'                => 'Balikpapan',
            'var1'                  => '10750000',
            'var2'                  => '5615000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Mataram',
            'satuan'                => 'Banda Aceh',
            'var1'                  => '10846000',
            'var2'                  => '6246000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Mataram',
            'satuan'                => 'Banjarmasin',
            'var1'                  => '8803000',
            'var2'                  => '4888000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Mataram',
            'satuan'                => 'Batam',
            'var1'                  => '8461000',
            'var2'                  => '4803000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Mataram',
            'satuan'                => 'Biak',
            'var1'                  => '11552000',
            'var2'                  => '6546000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Mataram',
            'satuan'                => 'Jayapura',
            'var1'                  => '13092000',
            'var2'                  => '7327000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Mataram',
            'satuan'                => 'Yogyakarta',
            'var1'                  => '4417000',
            'var2'                  => '2781000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Mataram',
            'satuan'                => 'Makassar',
            'var1'                  => '4717000',
            'var2'                  => '2909000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Mataram',
            'satuan'                => 'Manado',
            'var1'                  => '8717000',
            'var2'                  => '4738000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Mataram',
            'satuan'                => 'Medan',
            'var1'                  => '10600000',
            'var2'                  => '5637000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Mataram',
            'satuan'                => 'Padang',
            'var1'                  => '9060000',
            'var2'                  => '4867000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Mataram',
            'satuan'                => 'Palembang',
            'var1'                  => '7551000',
            'var2'                  => '4246000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Mataram',
            'satuan'                => 'Pekanbaru',
            'var1'                  => '9102000',
            'var2'                  => '4909000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Mataram',
            'satuan'                => 'Pontianak',
            'var1'                  => '8001000',
            'var2'                  => '4706000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Mataram',
            'satuan'                => 'Surabaya',
            'var1'                  => '3829000',
            'var2'                  => '2321000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Medan',
            'satuan'                => 'Banda Aceh',
            'var1'                  => '3466000',
            'var2'                  => '2193000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Medan',
            'satuan'                => 'Makassar',
            'var1'                  => '12514000',
            'var2'                  => '6172000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Medan',
            'satuan'                => 'Pontianak',
            'var1'                  => '9733000',
            'var2'                  => '5230000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Medan',
            'satuan'                => 'Semarang',
            'var1'                  => '9284000',
            'var2'                  => '4696000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Medan',
            'satuan'                => 'Solo',
            'var1'                  => '9284000',
            'var2'                  => '4835000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Medan',
            'satuan'                => 'Surabaya',
            'var1'                  => '10739000',
            'var2'                  => '5134000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Medan',
            'satuan'                => 'Timika',
            'var1'                  => '18258000',
            'var2'                  => '9455000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Padang',
            'satuan'                => 'Makassar',
            'var1'                  => '10974000',
            'var2'                  => '5402000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Padang',
            'satuan'                => 'Pontianak',
            'var1'                  => '8193000',
            'var2'                  => '4460000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Padang',
            'satuan'                => 'Semarang',
            'var1'                  => '7744000',
            'var2'                  => '3925000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Padang',
            'satuan'                => 'Solo',
            'var1'                  => '7744000',
            'var2'                  => '4065000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Padang',
            'satuan'                => 'Surabaya',
            'var1'                  => '9199000',
            'var2'                  => '4364000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Padang',
            'satuan'                => 'Timika',
            'var1'                  => '16718000',
            'var2'                  => '8685000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Palangkaraya',
            'satuan'                => 'Banda Aceh',
            'var1'                  => '10546000',
            'var2'                  => '6022000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Palangkaraya',
            'satuan'                => 'Batam',
            'var1'                  => '8161000',
            'var2'                  => '4578000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Palangkaraya',
            'satuan'                => 'Yogyakarta',
            'var1'                  => '7477000',
            'var2'                  => '4022000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Palangkaraya',
            'satuan'                => 'Mataram',
            'var1'                  => '8557000',
            'var2'                  => '4888000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Palangkaraya',
            'satuan'                => 'Medan',
            'var1'                  => '10300000',
            'var2'                  => '5412000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Palangkaraya',
            'satuan'                => 'Padang',
            'var1'                  => '8760000',
            'var2'                  => '4642000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Palangkaraya',
            'satuan'                => 'Palembang',
            'var1'                  => '7252000',
            'var2'                  => '4022000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Palangkaraya',
            'satuan'                => 'Pekanbaru',
            'var1'                  => '8803000',
            'var2'                  => '4696000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Palangkaraya',
            'satuan'                => 'Semarang',
            'var1'                  => '7252000',
            'var2'                  => '3947000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Palangkaraya',
            'satuan'                => 'Solo',
            'var1'                  => '7252000',
            'var2'                  => '4086000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Palangkaraya',
            'satuan'                => 'Surabaya',
            'var1'                  => '8696000',
            'var2'                  => '4385000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Palembang',
            'satuan'                => 'Balikpapan',
            'var1'                  => '9894000',
            'var2'                  => '5220000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Palembang',
            'satuan'                => 'Makassar',
            'var1'                  => '9466000',
            'var2'                  => '4781000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Palembang',
            'satuan'                => 'Pontianak',
            'var1'                  => '6685000',
            'var2'                  => '3840000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Palembang',
            'satuan'                => 'Semarang',
            'var1'                  => '6236000',
            'var2'                  => '3305000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Palembang',
            'satuan'                => 'Solo',
            'var1'                  => '6236000',
            'var2'                  => '3444000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Palembang',
            'satuan'                => 'Surabaya',
            'var1'                  => '7690000',
            'var2'                  => '3744000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Palembang',
            'satuan'                => 'Timika',
            'var1'                  => '15210000',
            'var2'                  => '8076000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Palu',
            'satuan'                => 'Makassar',
            'var1'                  => '4268000',
            'var2'                  => '2578000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Palu',
            'satuan'                => 'Poso',
            'var1'                  => '1957000',
            'var2'                  => '1423000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Palu',
            'satuan'                => 'Sorong',
            'var1'                  => '6878000',
            'var2'                  => '3883000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Palu',
            'satuan'                => 'Surabaya',
            'var1'                  => '6878000',
            'var2'                  => '3883000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Palu',
            'satuan'                => 'Toli-Toli',
            'var1'                  => '2941000',
            'var2'                  => '1915000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Pangkal Pinang',
            'satuan'                => 'Balikpapan',
            'var1'                  => '9038000',
            'var2'                  => '4631000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Pangkal Pinang',
            'satuan'                => 'Banjarmasin',
            'var1'                  => '7091000',
            'var2'                  => '3915000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Pangkal Pinang',
            'satuan'                => 'Batam',
            'var1'                  => '6739000',
            'var2'                  => '3818000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Pangkal Pinang',
            'satuan'                => 'Yogyakarta',
            'var1'                  => '6065000',
            'var2'                  => '3262000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Pangkal Pinang',
            'satuan'                => 'Makassar',
            'var1'                  => '9060000',
            'var2'                  => '4663000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Pangkal Pinang',
            'satuan'                => 'Manado',
            'var1'                  => '12097000',
            'var2'                  => '5808000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Pangkal Pinang',
            'satuan'                => 'Medan',
            'var1'                  => '8888000',
            'var2'                  => '4653000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Pangkal Pinang',
            'satuan'                => 'Padang',
            'var1'                  => '7337000',
            'var2'                  => '3883000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Pangkal Pinang',
            'satuan'                => 'Palembang',
            'var1'                  => '5829000',
            'var2'                  => '3262000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Pangkal Pinang',
            'satuan'                => 'Pekanbaru',
            'var1'                  => '7391000',
            'var2'                  => '3936000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Pangkal Pinang',
            'satuan'                => 'Pontianak',
            'var1'                  => '6279000',
            'var2'                  => '3733000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Pangkal Pinang',
            'satuan'                => 'Semarang',
            'var1'                  => '5829000',
            'var2'                  => '3187000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Pangkal Pinang',
            'satuan'                => 'Solo',
            'var1'                  => '5829000',
            'var2'                  => '3326000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Pangkal Pinang',
            'satuan'                => 'Surabaya',
            'var1'                  => '7284000',
            'var2'                  => '3626000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Pekanbaru',
            'satuan'                => 'Pontianak',
            'var1'                  => '8247000',
            'var2'                  => '4514000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Pekanbaru',
            'satuan'                => 'Semarang',
            'var1'                  => '7797000',
            'var2'                  => '3979000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Pekanbaru',
            'satuan'                => 'Solo',
            'var1'                  => '7797000',
            'var2'                  => '4118000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Pekanbaru',
            'satuan'                => 'Surabaya',
            'var1'                  => '9241000',
            'var2'                  => '4407000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Pekanbaru',
            'satuan'                => 'Timika',
            'var1'                  => '16771000',
            'var2'                  => '8739000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Pontianak',
            'satuan'                => 'Makassar',
            'var1'                  => '9915000',
            'var2'                  => '5241000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Pontianak',
            'satuan'                => 'Semarang',
            'var1'                  => '6685000',
            'var2'                  => '3765000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Pontianak',
            'satuan'                => 'Solo',
            'var1'                  => '6685000',
            'var2'                  => '3904000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Pontianak',
            'satuan'                => 'Surabaya',
            'var1'                  => '8140000',
            'var2'                  => '4204000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Pontianak',
            'satuan'                => 'Timika',
            'var1'                  => '15659000',
            'var2'                  => '8535000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Semarang',
            'satuan'                => 'Makassar',
            'var1'                  => '9466000',
            'var2'                  => '4706000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Solo',
            'satuan'                => 'Makassar',
            'var1'                  => '9466000',
            'var2'                  => '4845000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Surabaya',
            'satuan'                => 'Denpasar',
            'var1'                  => '3198000',
            'var2'                  => '1979000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Surabaya',
            'satuan'                => 'Jayapura',
            'var1'                  => '12675000',
            'var2'                  => '7231000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Surabaya',
            'satuan'                => 'Makassar',
            'var1'                  => '5936000',
            'var2'                  => '3433000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '63',
            'uraian_kegiatan'       => 'Surabaya',
            'satuan'                => 'Timika',
            'var1'                  => '11295000',
            'var2'                  => '6589000',
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
            'var1'                  => '795000',
            'var2'                  => '2625000',
            'var3'                  => '3670000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '66',
            'uraian_kegiatan'       => 'Sumatera Utara',
            'satuan'                => 'Per Hari',
            'var1'                  => '888000',
            'var2'                  => '1950000',
            'var3'                  => '2920000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '66',
            'uraian_kegiatan'       => 'Riau',
            'satuan'                => 'Per Hari',
            'var1'                  => '875000',
            'var2'                  => '2332000',
            'var3'                  => '3498000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '66',
            'uraian_kegiatan'       => 'Kepulauan Riau',
            'satuan'                => 'Per Hari',
            'var1'                  => '820000',
            'var2'                  => '2160000',
            'var3'                  => '3560000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '66',
            'uraian_kegiatan'       => 'Jambi',
            'satuan'                => 'Per Hari',
            'var1'                  => '710000',
            'var2'                  => '2438000',
            'var3'                  => '3250000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '66',
            'uraian_kegiatan'       => 'Sumatera Barat',
            'satuan'                => 'Per Hari',
            'var1'                  => '700000',
            'var2'                  => '1900000',
            'var3'                  => '3050000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '66',
            'uraian_kegiatan'       => 'Sumatera Selatan',
            'satuan'                => 'Per Hari',
            'var1'                  => '875000',
            'var2'                  => '1987000',
            'var3'                  => '3700000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '66',
            'uraian_kegiatan'       => 'Lampung',
            'satuan'                => 'Per Hari',
            'var1'                  => '700000',
            'var2'                  => '2300000',
            'var3'                  => '3650000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '66',
            'uraian_kegiatan'       => 'Bengkulu',
            'satuan'                => 'Per Hari',
            'var1'                  => '710000',
            'var2'                  => '2438000',
            'var3'                  => '3775000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '66',
            'uraian_kegiatan'       => 'Bangka Belitung',
            'satuan'                => 'Per Hari',
            'var1'                  => '927000',
            'var2'                  => '2050000',
            'var3'                  => '3150000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '66',
            'uraian_kegiatan'       => 'Banten',
            'satuan'                => 'Per Hari',
            'var1'                  => '700000',
            'var2'                  => '2009000',
            'var3'                  => '3013000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '66',
            'uraian_kegiatan'       => 'Jawa Barat',
            'satuan'                => 'Per Hari',
            'var1'                  => '744000',
            'var2'                  => '2050000',
            'var3'                  => '3020000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '66',
            'uraian_kegiatan'       => 'DKI Jakarta',
            'satuan'                => 'Per Hari',
            'var1'                  => '710000',
            'var2'                  => '1950000',
            'var3'                  => '3020000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '66',
            'uraian_kegiatan'       => 'Jawa Tengah',
            'satuan'                => 'Per Hari',
            'var1'                  => '700000',
            'var2'                  => '1900000',
            'var3'                  => '3650000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '66',
            'uraian_kegiatan'       => 'DI Yogyakarta',
            'satuan'                => 'Per Hari',
            'var1'                  => '799000',
            'var2'                  => '1950000',
            'var3'                  => '3150000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '66',
            'uraian_kegiatan'       => 'Jawa Timur',
            'satuan'                => 'Per Hari',
            'var1'                  => '700000',
            'var2'                  => '1984000',
            'var3'                  => '2920000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '66',
            'uraian_kegiatan'       => 'Bali',
            'satuan'                => 'Per Hari',
            'var1'                  => '790000',
            'var2'                  => '2270000',
            'var3'                  => '3020000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '66',
            'uraian_kegiatan'       => 'Nusa Tenggara Barat',
            'satuan'                => 'Per Hari',
            'var1'                  => '790000',
            'var2'                  => '2270000',
            'var3'                  => '3020000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '66',
            'uraian_kegiatan'       => 'Nusa Tenggara Timur',
            'satuan'                => 'Per Hari',
            'var1'                  => '800000',
            'var2'                  => '2380000',
            'var3'                  => '3240000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '66',
            'uraian_kegiatan'       => 'Kalimantan Barat',
            'satuan'                => 'Per Hari',
            'var1'                  => '798000',
            'var2'                  => '2100000',
            'var3'                  => '3350000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '66',
            'uraian_kegiatan'       => 'Kalimantan Tengah',
            'satuan'                => 'Per Hari',
            'var1'                  => '944000',
            'var2'                  => '3250000',
            'var3'                  => '3900000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '66',
            'uraian_kegiatan'       => 'Kalimantan Selatan',
            'satuan'                => 'Per Hari',
            'var1'                  => '710000',
            'var2'                  => '1950000',
            'var3'                  => '3150000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '66',
            'uraian_kegiatan'       => 'Kalimantan Timur',
            'satuan'                => 'Per Hari',
            'var1'                  => '1013000',
            'var2'                  => '2200000',
            'var3'                  => '3560000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '66',
            'uraian_kegiatan'       => 'Kalimantan Utara',
            'satuan'                => 'Per Hari',
            'var1'                  => '1013000',
            'var2'                  => '2160000',
            'var3'                  => '3560000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '66',
            'uraian_kegiatan'       => 'Sulawesi Utara',
            'satuan'                => 'Per Hari',
            'var1'                  => '800000',
            'var2'                  => '2050000',
            'var3'                  => '3460000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '66',
            'uraian_kegiatan'       => 'Gorontalo',
            'satuan'                => 'Per Hari',
            'var1'                  => '740000',
            'var2'                  => '1950000',
            'var3'                  => '3020000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '66',
            'uraian_kegiatan'       => 'Sulawesi Barat',
            'satuan'                => 'Per Hari',
            'var1'                  => '710000',
            'var2'                  => '2267000',
            'var3'                  => '3020000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '66',
            'uraian_kegiatan'       => 'Sulawesi Selatan',
            'satuan'                => 'Per Hari',
            'var1'                  => '700000',
            'var2'                  => '2300000',
            'var3'                  => '3020000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '66',
            'uraian_kegiatan'       => 'Sulawesi Tengah',
            'satuan'                => 'Per Hari',
            'var1'                  => '770000',
            'var2'                  => '1950000',
            'var3'                  => '3150000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '66',
            'uraian_kegiatan'       => 'Sulawesi Tenggara',
            'satuan'                => 'Per Hari',
            'var1'                  => '770000',
            'var2'                  => '2050000',
            'var3'                  => '3150000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '66',
            'uraian_kegiatan'       => 'Maluku',
            'satuan'                => 'Per Hari',
            'var1'                  => '890000',
            'var2'                  => '2700000',
            'var3'                  => '3780000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '66',
            'uraian_kegiatan'       => 'Maluku Utara',
            'satuan'                => 'Per Hari',
            'var1'                  => '900000',
            'var2'                  => '2810000',
            'var3'                  => '3890000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '66',
            'uraian_kegiatan'       => 'Papua',
            'satuan'                => 'Per Hari',
            'var1'                  => '1025000',
            'var2'                  => '3780000',
            'var3'                  => '4860000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '66',
            'uraian_kegiatan'       => 'Papua Barat',
            'satuan'                => 'Per Hari',
            'var1'                  => '980000',
            'var2'                  => '3240000',
            'var3'                  => '4210000',
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
