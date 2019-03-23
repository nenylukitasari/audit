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
    		'kategori_id'			=> '1',
    		'uraian_kegiatan'		=> 'Golongan IV/Setara',
    		'satuan'				=> 'Orang/Hari',
    		'var1'					=> '41000',
    	]);

        Uraian::create([
    		'kategori_id'			=> '1',
    		'uraian_kegiatan'		=> 'Golongan III/Setara',
    		'satuan'				=> 'Orang/Hari',
    		'var1'					=> '37000',
    	]);

    	Uraian::create([
    		'kategori_id'			=> '1',
    		'uraian_kegiatan'		=> 'Golongan II dan I/Setara',
    		'satuan'				=> 'Orang/Hari',
    		'var1'					=> '35000',
    	]);

    	 Uraian::create([
    		'kategori_id'			=> '2',
    		'uraian_kegiatan'		=> 'Golongan IV/Setara',
    		'satuan'				=> 'Orang/Hari',
    		'var1'					=> '25000',
    	]);

        Uraian::create([
    		'kategori_id'			=> '2',
    		'uraian_kegiatan'		=> 'Golongan III/Setara',
    		'satuan'				=> 'Orang/Jam',
    		'var1'					=> '20000',
    	]);

    	Uraian::create([
    		'kategori_id'			=> '2',
    		'uraian_kegiatan'		=> 'Golongan II/Setara',
    		'satuan'				=> 'Orang/Jam',
    		'var1'					=> '17000',
    	]);
    	Uraian::create([
    		'kategori_id'			=> '2',
    		'uraian_kegiatan'		=> 'Golongan I/Setara',
    		'satuan'				=> 'Orang/Jam',
    		'var1'					=> '13000',
    	]);

    	Uraian::create([
    		'kategori_id'			=> '3',
    		'uraian_kegiatan'		=> 'Rapat Koordinasi/Workshop/Seminar/FGD/Kegiatan Sejenis',
    	]);

    	Uraian::create([
    		'kategori_id'			=> '3',
    		'uraian_kegiatan'		=> 'Rapat/Kegiatan Mengundang Pejabat Tingkat Menteri/Eselon I/Setara',	
    	]);
        Uraian::create([
            'kategori_id'           => '4',
            // 'provinsi_id'           => '1',
            'uraian_kegiatan'       => 'Aceh',
            'satuan'                => 'OH',
            'var1'                  => '360000',
            'var2'                  => '140000',
            'var3'                  => '110000',
        ]);
        Uraian::create([
            'kategori_id'           => '4',
            // 'provinsi_id'           => '2',
            'uraian_kegiatan'       => 'Sumatera Utara',
            'satuan'                => 'OH',
            'var1'                  => '370000',
            'var2'                  => '150000',
            'var3'                  => '110000',
        ]);
        Uraian::create([
            'kategori_id'           => '4',
            // 'provinsi_id'           => '3',
            'uraian_kegiatan'       => 'Riau',
            'satuan'                => 'OH',
            'var1'                  => '370000',
            'var2'                  => '150000',
            'var3'                  => '110000',
        ]);
        Uraian::create([
            'kategori_id'           => '4',
            // 'provinsi_id'           => '4',
            'uraian_kegiatan'       => 'Kepulauan Riau',
            'satuan'                => 'OH',
            'var1'                  => '370000',
            'var2'                  => '150000',
            'var3'                  => '110000',
        ]);
        Uraian::create([
            'kategori_id'           => '4',
            // 'provinsi_id'           => '5',
            'uraian_kegiatan'       => 'Jambi',
            'satuan'                => 'OH',
            'var1'                  => '370000',
            'var2'                  => '150000',
            'var3'                  => '110000',
        ]);
        Uraian::create([
            'kategori_id'           => '4',
            // 'provinsi_id'           => '6',
            'uraian_kegiatan'       => 'Sumatera Barat',
            'satuan'                => 'OH',
            'var1'                  => '380000',
            'var2'                  => '150000',
            'var3'                  => '110000',
        ]);
        Uraian::create([
            'kategori_id'           => '4',
            // 'provinsi_id'           => '7',
            'uraian_kegiatan'       => 'Sumatera Selatan',
            'satuan'                => 'OH',
            'var1'                  => '380000',
            'var2'                  => '150000',
            'var3'                  => '110000',
        ]);
        Uraian::create([
            'kategori_id'           => '4',
            // 'provinsi_id'           => '8',
            'uraian_kegiatan'       => 'Lampung',
            'satuan'                => 'OH',
            'var1'                  => '380000',
            'var2'                  => '150000',
            'var3'                  => '110000',
        ]);
        Uraian::create([
            'kategori_id'           => '4',
            // 'provinsi_id'           => '9',
            'uraian_kegiatan'       => 'Bengkulu',
            'satuan'                => 'OH',
            'var1'                  => '380000',
            'var2'                  => '150000',
            'var3'                  => '110000',
        ]);
        Uraian::create([
            'kategori_id'           => '4',
            // 'provinsi_id'           => '10',
            'uraian_kegiatan'       => 'Bangka Belitung',
            'satuan'                => 'OH',
            'var1'                  => '410000',
            'var2'                  => '160000',
            'var3'                  => '120000',
        ]);
        Uraian::create([
            'kategori_id'           => '4',
            // 'provinsi_id'           => '11',
            'uraian_kegiatan'       => 'Banten',
            'satuan'                => 'OH',
            'var1'                  => '370000',
            'var2'                  => '150000',
            'var3'                  => '110000',
        ]);
        Uraian::create([
            'kategori_id'           => '4',
            // 'provinsi_id'           => '12',
            'uraian_kegiatan'       => 'Jawa Barat',
            'satuan'                => 'OH',
            'var1'                  => '430000',
            'var2'                  => '170000',
            'var3'                  => '130000',
        ]);
        Uraian::create([
            'kategori_id'           => '4',
            // 'provinsi_id'           => '13',
            'uraian_kegiatan'       => 'DKI Jakarta',
            'satuan'                => 'OH',
            'var1'                  => '530000',
            'var2'                  => '210000',
            'var3'                  => '160000',
        ]);
        Uraian::create([
            'kategori_id'           => '4',
            // 'provinsi_id'           => '14',
            'uraian_kegiatan'       => 'Jawa Tengah',
            'satuan'                => 'OH',
            'var1'                  => '370000',
            'var2'                  => '150000',
            'var3'                  => '110000',
        ]);
        Uraian::create([
            'kategori_id'           => '4',
            // 'provinsi_id'           => '15',
            'uraian_kegiatan'       => 'DI Yogyakarta',
            'satuan'                => 'OH',
            'var1'                  => '420000',
            'var2'                  => '170000',
            'var3'                  => '130000',
        ]);
        Uraian::create([
            'kategori_id'           => '4',
            // 'provinsi_id'           => '16',
            'uraian_kegiatan'       => 'Jawa Timur',
            'satuan'                => 'OH',
            'var1'                  => '410000',
            'var2'                  => '160000',
            'var3'                  => '120000',
        ]);
        Uraian::create([
            'kategori_id'           => '4',
            // 'provinsi_id'           => '17',
            'uraian_kegiatan'       => 'Bali',
            'satuan'                => 'OH',
            'var1'                  => '480000',
            'var2'                  => '190000',
            'var3'                  => '140000',
        ]);
        Uraian::create([
            'kategori_id'           => '4',
            // 'provinsi_id'           => '18',
            'uraian_kegiatan'       => 'Nusa Tenggara Barat',
            'satuan'                => 'OH',
            'var1'                  => '440000',
            'var2'                  => '180000',
            'var3'                  => '130000',
        ]);
        Uraian::create([
            'kategori_id'           => '4',
            // 'provinsi_id'           => '19',
            'uraian_kegiatan'       => 'Nusa Tenggara Timur',
            'satuan'                => 'OH',
            'var1'                  => '430000',
            'var2'                  => '170000',
            'var3'                  => '130000',
        ]);
        Uraian::create([
            'kategori_id'           => '4',
            // 'provinsi_id'           => '20',
            'uraian_kegiatan'       => 'Kalimantan Barat',
            'satuan'                => 'OH',
            'var1'                  => '380000',
            'var2'                  => '150000',
            'var3'                  => '110000',
        ]);
        Uraian::create([
            'kategori_id'           => '4',
            // 'provinsi_id'           => '21',
            'uraian_kegiatan'       => 'Kalimantan Tengah',
            'satuan'                => 'OH',
            'var1'                  => '360000',
            'var2'                  => '140000',
            'var3'                  => '110000',
        ]);
        Uraian::create([
            'kategori_id'           => '4',
            // 'provinsi_id'           => '22',
            'uraian_kegiatan'       => 'Kalimantan Selatan',
            'satuan'                => 'OH',
            'var1'                  => '380000',
            'var2'                  => '150000',
            'var3'                  => '110000',
        ]);
        Uraian::create([
            'kategori_id'           => '4',
            // 'provinsi_id'           => '23',
            'uraian_kegiatan'       => 'Kalimantan Timur',
            'satuan'                => 'OH',
            'var1'                  => '430000',
            'var2'                  => '170000',
            'var3'                  => '130000',
        ]);
        Uraian::create([
            'kategori_id'           => '4',
            // 'provinsi_id'           => '24',
            'uraian_kegiatan'       => 'Kalimantan Utara',
            'satuan'                => 'OH',
            'var1'                  => '430000',
            'var2'                  => '170000',
            'var3'                  => '130000',
        ]);
        Uraian::create([
            'kategori_id'           => '4',
            // 'provinsi_id'           => '25',
            'uraian_kegiatan'       => 'Sulawesi Utara',
            'satuan'                => 'OH',
            'var1'                  => '370000',
            'var2'                  => '150000',
            'var3'                  => '110000',
        ]);
        Uraian::create([
            'kategori_id'           => '4',
            // 'provinsi_id'           => '26',
            'uraian_kegiatan'       => 'Gorontalo',
            'satuan'                => 'OH',
            'var1'                  => '370000',
            'var2'                  => '150000',
            'var3'                  => '110000',
        ]);
        Uraian::create([
            'kategori_id'           => '4',
            // 'provinsi_id'           => '27',
            'uraian_kegiatan'       => 'Sulawesi Barat',
            'satuan'                => 'OH',
            'var1'                  => '410000',
            'var2'                  => '160000',
            'var3'                  => '120000',
        ]);
        Uraian::create([
            'kategori_id'           => '4',
            // 'provinsi_id'           => '28',
            'uraian_kegiatan'       => 'Sulawesi Selatan',
            'satuan'                => 'OH',
            'var1'                  => '430000',
            'var2'                  => '170000',
            'var3'                  => '130000',
        ]);
        Uraian::create([
            'kategori_id'           => '4',
            // 'provinsi_id'           => '29',
            'uraian_kegiatan'       => 'Sulawesi Tengah',
            'satuan'                => 'OH',
            'var1'                  => '370000',
            'var2'                  => '150000',
            'var3'                  => '110000',
        ]);
        Uraian::create([
            'kategori_id'           => '4',
            // 'provinsi_id'           => '30',
            'uraian_kegiatan'       => 'Sulawesi Tenggara',
            'satuan'                => 'OH',
            'var1'                  => '380000',
            'var2'                  => '150000',
            'var3'                  => '110000',
        ]);
        Uraian::create([
            'kategori_id'           => '4',
            // 'provinsi_id'           => '31',
            'uraian_kegiatan'       => 'Maluku',
            'satuan'                => 'OH',
            'var1'                  => '380000',
            'var2'                  => '150000',
            'var3'                  => '110000',
        ]);
        Uraian::create([
            'kategori_id'           => '4',
            // 'provinsi_id'           => '32',
            'uraian_kegiatan'       => 'Maluku Utara',
            'satuan'                => 'OH',
            'var1'                  => '430000',
            'var2'                  => '170000',
            'var3'                  => '130000',
        ]);
        Uraian::create([
            'kategori_id'           => '4',
            // 'provinsi_id'           => '33',
            'uraian_kegiatan'       => 'Papua',
            'satuan'                => 'OH',
            'var1'                  => '580000',
            'var2'                  => '230000',
            'var3'                  => '170000',
        ]);
        Uraian::create([
            'kategori_id'           => '4',
            // 'provinsi_id'           => '34',
            'uraian_kegiatan'       => 'Papua Barat',
            'satuan'                => 'OH',
            'var1'                  => '480000',
            'var2'                  => '190000',
            'var3'                  => '140000',
        ]);
        Uraian::create([
            'kategori_id'           => '5',
            'uraian_kegiatan'       => 'Rektor dan Wakil Rektor',
            'satuan'                => 'OH',
            'var1'                  => '250000',
            'var2'                  => '125000',
        ]);
        Uraian::create([
            'kategori_id'           => '5',
            'uraian_kegiatan'       => 'Sekretaris Institut, Direktur, Kepala Lembaga, Kepala Badan, Dekan, Kepala Kantor, Kepala Biro',
            'satuan'                => 'OH',
            'var1'                  => '200000',
            'var2'                  => '100000',
        ]);
        Uraian::create([
            'kategori_id'           => '5',
            'uraian_kegiatan'       => 'Wakil Dekan, Sekretaris Lembaga, Kepala Subdirektorat, Kepala Unit, Kepala Departemen, Kepala Perpustakan, Kepala Bagian',
            'satuan'                => 'OH',
            'var1'                  => '150000',
            'var2'                  => '75000',
        ]);
        Uraian::create([
            'kategori_id'           => '6',
            'uraian_kegiatan'       => 'Amerika Utara',
        ]);
        Uraian::create([
            'kategori_id'           => '6',
            'uraian_kegiatan'       => 'Amerika Selatan',
        ]);
        Uraian::create([
            'kategori_id'           => '6',
            'uraian_kegiatan'       => 'Amerika Tengah',
        ]);
        Uraian::create([
            'kategori_id'           => '6',
            'uraian_kegiatan'       => 'Eropa Barat',
        ]);
        Uraian::create([
            'kategori_id'           => '6',
            'uraian_kegiatan'       => 'Eropa Utara',
        ]);
        Uraian::create([
            'kategori_id'           => '6',
            'uraian_kegiatan'       => 'Eropa Selatan',
        ]);
        Uraian::create([
            'kategori_id'           => '6',
            'uraian_kegiatan'       => 'Asia Tenggara',
        ]);
        Uraian::create([
            'kategori_id'           => '6',
            'uraian_kegiatan'       => 'Asia Pasifik',
        ]);
        Uraian::create([
            'kategori_id'           => '7',
            'uraian_kegiatan'       => 'Biaya Paket Kegiatan',
        ]);
        Uraian::create([
            'kategori_id'           => '7',
            'uraian_kegiatan'       => 'Uang Harian',
        ]);
        Uraian::create([
            'kategori_id'           => '8',
            'uraian_kegiatan'       => 'Satuan Biaya Transportasi Kegiatan Dalam Kota (PP)',
            'satuan'                => 'O/Kali',
            'var1'                  => '150000',
        ]);
        Uraian::create([
            'kategori_id'           => '9',
            'uraian_kegiatan'       => 'Perjalanan Dalam Negeri',
            'satuan'                => 'OH',
            'var1'                  => '200000',
        ]);
        Uraian::create([
            'kategori_id'           => '9',
            'uraian_kegiatan'       => 'Perjalanan Luar Negeri',
            'satuan'                => 'OH',
            'var1'                  => '400000',
        ]);
        Uraian::create([
            'kategori_id'           => '10',
            'uraian_kegiatan'       => 'Aceh',
            // 'provinsi_id'           => '1',
            'satuan'                => 'Orang/Kali',
            'var1'                  => '123000',
        ]);
        Uraian::create([
            'kategori_id'           => '10',
            'uraian_kegiatan'       => 'Sumatera Utara',
            // 'provinsi_id'           => '2',
            'satuan'                => 'Orang/Kali',
            'var1'                  => '232000',
        ]);
        Uraian::create([
            'kategori_id'           => '10',
            'uraian_kegiatan'       => 'Riau',
            // 'provinsi_id'           => '3',
            'satuan'                => 'Orang/Kali',
            'var1'                  => '94000',
        ]);
        Uraian::create([
            'kategori_id'           => '10',
            'uraian_kegiatan'       => 'Kepulauan Riau',
            // 'provinsi_id'           => '4',
            'satuan'                => 'Orang/Kali',
            'var1'                  => '137000',
        ]);
        Uraian::create([
            'kategori_id'           => '10',
            'uraian_kegiatan'       => 'Jambi',
            // 'provinsi_id'           => '5',
            'satuan'                => 'Orang/Kali',
            'var1'                  => '147000',
        ]);
        Uraian::create([
            'kategori_id'           => '10',
            'uraian_kegiatan'       => 'Sumatera Barat',
            // 'provinsi_id'           => '6',
            'satuan'                => 'Orang/Kali',
            'var1'                  => '190000',
        ]);
        Uraian::create([
            'kategori_id'           => '10',
            'uraian_kegiatan'       => 'Sumatera Selatan',
            // 'provinsi_id'           => '7',
            'satuan'                => 'Orang/Kali',
            'var1'                  => '128000',
        ]);
        Uraian::create([
            'kategori_id'           => '10',
            'uraian_kegiatan'       => 'Lampung',
            // 'provinsi_id'           => '8',
            'satuan'                => 'Orang/Kali',
            'var1'                  => '167000',
        ]);
        Uraian::create([
            'kategori_id'           => '10',
            'uraian_kegiatan'       => 'Bengkulu',
            // 'provinsi_id'           => '9',
            'satuan'                => 'Orang/Kali',
            'var1'                  => '109000',
        ]);
        Uraian::create([
            'kategori_id'           => '10',
            'uraian_kegiatan'       => 'Bangka Belitung',
            // 'provinsi_id'           => '10',
            'satuan'                => 'Orang/Kali',
            'var1'                  => '90000',
        ]);
        Uraian::create([
            'kategori_id'           => '10',
            'uraian_kegiatan'       => 'Banten',
            // 'provinsi_id'           => '11',
            'satuan'                => 'Orang/Kali',
            'var1'                  => '446000',
        ]);
        Uraian::create([
            'kategori_id'           => '10',
            'uraian_kegiatan'       => 'Jawa Barat',
            // 'provinsi_id'           => '12',
            'satuan'                => 'Orang/Kali',
            'var1'                  => '166000',
        ]);
        Uraian::create([
            'kategori_id'           => '10',
            'uraian_kegiatan'       => 'DKI Jakarta',
            // 'provinsi_id'           => '13',
            'satuan'                => 'Orang/Kali',
            'var1'                  => '256000',
        ]);
        Uraian::create([
            'kategori_id'           => '10',
            'uraian_kegiatan'       => 'Jawa Tengah',
            // 'provinsi_id'           => '14',
            'satuan'                => 'Orang/Kali',
            'var1'                  => '75000',
        ]);
        Uraian::create([
            'kategori_id'           => '10',
            'uraian_kegiatan'       => 'DI Yogyakarta',
            // 'provinsi_id'           => '15',
            'satuan'                => 'Orang/Kali',
            'var1'                  => '118000',
        ]);
        Uraian::create([
            'kategori_id'           => '10',
            'uraian_kegiatan'       => 'Jawa Timur',
            // 'provinsi_id'           => '16',
            'satuan'                => 'Orang/Kali',
            'var1'                  => '194000',
        ]);
        Uraian::create([
            'kategori_id'           => '10',
            'uraian_kegiatan'       => 'Bali',
            // 'provinsi_id'           => '17',
            'satuan'                => 'Orang/Kali',
            'var1'                  => '159000',
        ]);
        Uraian::create([
            'kategori_id'           => '10',
            'uraian_kegiatan'       => 'Nusa Tenggara Barat',
            // 'provinsi_id'           => '18',
            'satuan'                => 'Orang/Kali',
            'var1'                  => '231000',
        ]);
        Uraian::create([
            'kategori_id'           => '10',
            'uraian_kegiatan'       => 'Nusa Tenggara Timur',
            // 'provinsi_id'           => '19',
            'satuan'                => 'Orang/Kali',
            'var1'                  => '108000',
        ]);
        Uraian::create([
            'kategori_id'           => '10',
            'uraian_kegiatan'       => 'Kalimantan Barat',
            // 'provinsi_id'           => '20',
            'satuan'                => 'Orang/Kali',
            'var1'                  => '135000',
        ]);
        Uraian::create([
            'kategori_id'           => '10',
            'uraian_kegiatan'       => 'Kalimantan Tengah',
            // 'provinsi_id'           => '21',
            'satuan'                => 'Orang/Kali',
            'var1'                  => '111000',
        ]);
        Uraian::create([
            'kategori_id'           => '10',
            'uraian_kegiatan'       => 'Kalimantan Selatan',
            // 'provinsi_id'           => '22',
            'satuan'                => 'Orang/Kali',
            'var1'                  => '150000',
        ]);
        Uraian::create([
            'kategori_id'           => '10',
            'uraian_kegiatan'       => 'Kalimantan Timur',
            // 'provinsi_id'           => '23',
            'satuan'                => 'Orang/Kali',
            'var1'                  => '450000',
        ]);
        Uraian::create([
            'kategori_id'           => '10',
            'uraian_kegiatan'       => 'Kalimantan Utara',
            // 'provinsi_id'           => '24',
            'satuan'                => 'Orang/Kali',
            'var1'                  => '102000',
        ]);
        Uraian::create([
            'kategori_id'           => '10',
            'uraian_kegiatan'       => 'Sulawesi Utara',
            // 'provinsi_id'           => '25',
            'satuan'                => 'Orang/Kali',
            'var1'                  => '138000',
        ]);
        Uraian::create([
            'kategori_id'           => '10',
            'uraian_kegiatan'       => 'Gorontalo',
            // 'provinsi_id'           => '26',
            'satuan'                => 'Orang/Kali',
            'var1'                  => '240000',
        ]);
        Uraian::create([
            'kategori_id'           => '10',
            'uraian_kegiatan'       => 'Sulawesi Barat',
            // 'provinsi_id'           => '27',
            'satuan'                => 'Orang/Kali',
            'var1'                  => '313000',
        ]);
        Uraian::create([
            'kategori_id'           => '10',
            'uraian_kegiatan'       => 'Sulawesi Selatan',
            // 'provinsi_id'           => '28',
            'satuan'                => 'Orang/Kali',
            'var1'                  => '145000',
        ]);
        Uraian::create([
            'kategori_id'           => '10',
            'uraian_kegiatan'       => 'Sulawesi Tengah',
            // 'provinsi_id'           => '29',
            'satuan'                => 'Orang/Kali',
            'var1'                  => '165000',
        ]);
        Uraian::create([
            'kategori_id'           => '10',
            'uraian_kegiatan'       => 'Sulawesi Tenggara',
            // 'provinsi_id'           => '30',
            'satuan'                => 'Orang/Kali',
            'var1'                  => '171000',
        ]);
        Uraian::create([
            'kategori_id'           => '10',
            'uraian_kegiatan'       => 'Maluku',
            // 'provinsi_id'           => '31',
            'satuan'                => 'Orang/Kali',
            'var1'                  => '240000',
        ]);
        Uraian::create([
            'kategori_id'           => '10',
            'uraian_kegiatan'       => 'Maluku Utara',
            // 'provinsi_id'           => '32',
            'satuan'                => 'Orang/Kali',
            'var1'                  => '215000',
        ]);
        Uraian::create([
            'kategori_id'           => '10',
            'uraian_kegiatan'       => 'Papua',
            // 'provinsi_id'           => '33',
            'satuan'                => 'Orang/Kali',
            'var1'                  => '431000',
        ]);
        Uraian::create([
            'kategori_id'           => '10',
            'uraian_kegiatan'       => 'Papua Barat',
            // 'provinsi_id'           => '34',
            'satuan'                => 'Orang/Kali',
            'var1'                  => '182000',
        ]);

    }
}
