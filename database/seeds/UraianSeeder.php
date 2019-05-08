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
            // 'uraian_kegiatan'       => 'Aceh',
            'provinsi_id'           => '1',
            'satuan'                => 'Orang/Kali',
            'var1'                  => '123000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '10',
            // 'uraian_kegiatan'       => 'Sumatera Utara',
            'provinsi_id'           => '2',
            'satuan'                => 'Orang/Kali',
            'var1'                  => '232000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '10',
            // 'uraian_kegiatan'       => 'Riau',
            'provinsi_id'           => '3',
            'satuan'                => 'Orang/Kali',
            'var1'                  => '94000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '10',
            // 'uraian_kegiatan'       => 'Kepulauan Riau',
            'provinsi_id'           => '4',
            'satuan'                => 'Orang/Kali',
            'var1'                  => '137000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '10',
            // 'uraian_kegiatan'       => 'Jambi',
            'provinsi_id'           => '5',
            'satuan'                => 'Orang/Kali',
            'var1'                  => '147000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '10',
            // 'uraian_kegiatan'       => 'Sumatera Barat',
            'provinsi_id'           => '6',
            'satuan'                => 'Orang/Kali',
            'var1'                  => '190000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '10',
            // 'uraian_kegiatan'       => 'Sumatera Selatan',
            'provinsi_id'           => '7',
            'satuan'                => 'Orang/Kali',
            'var1'                  => '128000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '10',
            // 'uraian_kegiatan'       => 'Lampung',
            'provinsi_id'           => '8',
            'satuan'                => 'Orang/Kali',
            'var1'                  => '167000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '10',
            // 'uraian_kegiatan'       => 'Bengkulu',
            'provinsi_id'           => '9',
            'satuan'                => 'Orang/Kali',
            'var1'                  => '109000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '10',
            // 'uraian_kegiatan'       => 'Bangka Belitung',
            'provinsi_id'           => '10',
            'satuan'                => 'Orang/Kali',
            'var1'                  => '90000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '10',
            // 'uraian_kegiatan'       => 'Banten',
            'provinsi_id'           => '11',
            'satuan'                => 'Orang/Kali',
            'var1'                  => '446000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '10',
            // 'uraian_kegiatan'       => 'Jawa Barat',
            'provinsi_id'           => '12',
            'satuan'                => 'Orang/Kali',
            'var1'                  => '166000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '10',
            // 'uraian_kegiatan'       => 'DKI Jakarta',
            'provinsi_id'           => '13',
            'satuan'                => 'Orang/Kali',
            'var1'                  => '256000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '10',
            // 'uraian_kegiatan'       => 'Jawa Tengah',
            'provinsi_id'           => '14',
            'satuan'                => 'Orang/Kali',
            'var1'                  => '75000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '10',
            // 'uraian_kegiatan'       => 'DI Yogyakarta',
            'provinsi_id'           => '15',
            'satuan'                => 'Orang/Kali',
            'var1'                  => '118000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '10',
            // 'uraian_kegiatan'       => 'Jawa Timur',
            'provinsi_id'           => '16',
            'satuan'                => 'Orang/Kali',
            'var1'                  => '194000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '10',
            // 'uraian_kegiatan'       => 'Bali',
            'provinsi_id'           => '17',
            'satuan'                => 'Orang/Kali',
            'var1'                  => '159000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '10',
            // 'uraian_kegiatan'       => 'Nusa Tenggara Barat',
            'provinsi_id'           => '18',
            'satuan'                => 'Orang/Kali',
            'var1'                  => '231000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '10',
            // 'uraian_kegiatan'       => 'Nusa Tenggara Timur',
            'provinsi_id'           => '19',
            'satuan'                => 'Orang/Kali',
            'var1'                  => '108000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '10',
            // 'uraian_kegiatan'       => 'Kalimantan Barat',
            'provinsi_id'           => '20',
            'satuan'                => 'Orang/Kali',
            'var1'                  => '135000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '10',
            // 'uraian_kegiatan'       => 'Kalimantan Tengah',
            'provinsi_id'           => '21',
            'satuan'                => 'Orang/Kali',
            'var1'                  => '111000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '10',
            // 'uraian_kegiatan'       => 'Kalimantan Selatan',
            'provinsi_id'           => '22',
            'satuan'                => 'Orang/Kali',
            'var1'                  => '150000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '10',
            // 'uraian_kegiatan'       => 'Kalimantan Timur',
            'provinsi_id'           => '23',
            'satuan'                => 'Orang/Kali',
            'var1'                  => '450000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '10',
            // 'uraian_kegiatan'       => 'Kalimantan Utara',
            'provinsi_id'           => '24',
            'satuan'                => 'Orang/Kali',
            'var1'                  => '102000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '10',
            // 'uraian_kegiatan'       => 'Sulawesi Utara',
            'provinsi_id'           => '25',
            'satuan'                => 'Orang/Kali',
            'var1'                  => '138000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '10',
            // 'uraian_kegiatan'       => 'Gorontalo',
            'provinsi_id'           => '26',
            'satuan'                => 'Orang/Kali',
            'var1'                  => '240000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '10',
            // 'uraian_kegiatan'       => 'Sulawesi Barat',
            'provinsi_id'           => '27',
            'satuan'                => 'Orang/Kali',
            'var1'                  => '313000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '10',
            // 'uraian_kegiatan'       => 'Sulawesi Selatan',
            'provinsi_id'           => '28',
            'satuan'                => 'Orang/Kali',
            'var1'                  => '145000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '10',
            // 'uraian_kegiatan'       => 'Sulawesi Tengah',
            'provinsi_id'           => '29',
            'satuan'                => 'Orang/Kali',
            'var1'                  => '165000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '10',
            // 'uraian_kegiatan'       => 'Sulawesi Tenggara',
            'provinsi_id'           => '30',
            'satuan'                => 'Orang/Kali',
            'var1'                  => '171000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '10',
            // 'uraian_kegiatan'       => 'Maluku',
            'provinsi_id'           => '31',
            'satuan'                => 'Orang/Kali',
            'var1'                  => '240000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '10',
            // 'uraian_kegiatan'       => 'Maluku Utara',
            'provinsi_id'           => '32',
            'satuan'                => 'Orang/Kali',
            'var1'                  => '215000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '10',
            // 'uraian_kegiatan'       => 'Papua',
            'provinsi_id'           => '33',
            'satuan'                => 'Orang/Kali',
            'var1'                  => '431000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '10',
            // 'uraian_kegiatan'       => 'Papua Barat',
            'provinsi_id'           => '34',
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
            'var1'                  => '000',
            'var2'                  => '000',
            'var3'                  => '000',
            'var4'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '62',
            'uraian_kegiatan'       => 'Sumatera Utara',
            'var1'                  => '000',
            'var2'                  => '000',
            'var3'                  => '000',
            'var4'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '62',
            'uraian_kegiatan'       => 'Riau',
            'var1'                  => '000',
            'var2'                  => '000',
            'var3'                  => '000',
            'var4'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '62',
            'uraian_kegiatan'       => 'Kepulauan Riau',
            'var1'                  => '000',
            'var2'                  => '000',
            'var3'                  => '000',
            'var4'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '62',
            'uraian_kegiatan'       => 'Jambi',
            'var1'                  => '000',
            'var2'                  => '000',
            'var3'                  => '000',
            'var4'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '62',
            'uraian_kegiatan'       => 'Sumatera Barat',
            'var1'                  => '000',
            'var2'                  => '000',
            'var3'                  => '000',
            'var4'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '62',
            'uraian_kegiatan'       => 'Sumatera Selatan',
            'var1'                  => '000',
            'var2'                  => '000',
            'var3'                  => '000',
            'var4'                  => '000',
        ]);
        Uraian::create([
            'kode_tabel'            => '4',
            'kategori_id'           => '62',
            'uraian_kegiatan'       => 'Lampung',
            'var1'                  => '000',
            'var2'                  => '000',
            'var3'                  => '000',
            'var4'                  => '000',
        ]);




        




    }
}
