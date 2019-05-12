<?php

use Illuminate\Database\Seeder;
use App\Kategori;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Kategori::create([
        	'kegiatan_id'			=> '1',
            'kode_tabel'            => '3',
            'kode_bagian'           => '1',
    		'kategori_kegiatan'		=> 'Satuan Biaya Uang Makan Pegawai Tetap',
       	]);

        Kategori::create([
        	'kegiatan_id'			=> '1',
            'kode_tabel'            => '3',
            'kode_bagian'           => '1',
    		'kategori_kegiatan'		=> 'Satuan Biaya Lembur',
    	]);

      	Kategori::create([
      		'kegiatan_id'			=> '1',
            'kode_tabel'            => '3',
            'kode_bagian'           => '1',
    		'kategori_kegiatan'		=> 'Satuan Biaya Konsumsi Penyelenggaraan Rapat atau Pertemuan Lain',
    	]);

        Kategori::create([
        	'kegiatan_id'			=> '2',
            'kode_tabel'            => '3',
            'kode_bagian'           => '2',
            'kategori_kegiatan'     => 'Satuan Uang Harian Perjalanan Dinas Dalam Negeri',
        ]);

        Kategori::create([
        	'kegiatan_id'			=> '2',
            'kode_tabel'            => '3',
            'kode_bagian'           => '3',
            'kategori_kegiatan'     => 'Satuan Uang Representasi',
        ]);

        Kategori::create([
        	'kegiatan_id'			=> '2',
            'kode_tabel'            => '3',
            'kode_bagian'           => '4',
            'kategori_kegiatan'     => 'Satuan Uang Harian Perjalanan Dinas Luar Negeri (Dalam US$)',
        ]);

        Kategori::create([
        	'kegiatan_id'			=> '2',
            'kode_tabel'            => '3',
            'kode_bagian'           => '5',
            'kategori_kegiatan'     => 'Satuan Biaya Rapat/Pertemuan di Luar Kantor',
        ]);

        Kategori::create([
        	'kegiatan_id'			=> '2',
            'kode_tabel'            => '3',
            'kode_bagian'           => '6',
            'kategori_kegiatan'     => 'Satuan Biaya Transportasi Kegiatan Dalam Kota',
        ]);

        Kategori::create([
        	'kegiatan_id'			=> '2',
            'kode_tabel'            => '3',
            'kode_bagian'           => '7',
            'kategori_kegiatan'     => 'Satuan Biaya Perjalanan Dinas Bagi Mahasiswa',
        ]);

        Kategori::create([
        	'kegiatan_id'			=> '2',
            'kode_tabel'            => '3',
            'kode_bagian'           => '8',
            'kategori_kegiatan'     => 'Satuan Biaya Taksi Perjalanan Dinas Dalam Negeri',
        ]);

        Kategori::create([
            'kegiatan_id'           => '3',
            'kode_tabel'            => '3',
            'kode_bagian'           => '9',
            'kategori_kegiatan'     => 'Tunjangan Perangkat Majelis Wali Amanat (MWA) yang Berasal dari Internal ITS',
        ]);

        Kategori::create([
            'kegiatan_id'           => '3',
            'kode_tabel'            => '3',
            'kode_bagian'           => '9',
            'kategori_kegiatan'     => 'Tunjangan Pimpinan Senat Akademik',
        ]);

        Kategori::create([
            'kegiatan_id'           => '3',
            'kode_tabel'            => '3',
            'kode_bagian'           => '9',
            'kategori_kegiatan'     => 'Honorarium Sidang Senat Akademik',
        ]);

        Kategori::create([
            'kegiatan_id'           => '3',
            'kode_tabel'            => '3',
            'kode_bagian'           => '9',
            'kategori_kegiatan'     => 'Honorarium Sidang Komisi Pertimbangan Fakultas',
        ]);

        Kategori::create([
            'kegiatan_id'           => '3',
            'kode_tabel'            => '3',
            'kode_bagian'           => '9',
            'kategori_kegiatan'     => 'Honorarium Kantor Audit Internal',
        ]);

        Kategori::create([
            'kegiatan_id'           => '3',
            'kode_tabel'            => '3',
            'kode_bagian'           => '9',
            'kategori_kegiatan'     => 'Honorarium Penanggung Jawab Pengelola Keuangan',
        ]);

        Kategori::create([
            'kegiatan_id'           => '3',
            'kode_tabel'            => '3',
            'kode_bagian'           => '9',
            'kategori_kegiatan'     => 'Honorarium Tim Teknis dan Tim Pengelola Pekerjaan Pemeliharaan/Pembangunan Gedung dan Bangunan',
        ]);
        Kategori::create([
            'kegiatan_id'           => '3',
            'kode_tabel'            => '3',
            'kode_bagian'           => '9',
            'kategori_kegiatan'     => 'Honorarium Pengadaan Barang dan Jasa',
        ]);

        Kategori::create([
            'kegiatan_id'           => '3',
            'kode_tabel'            => '3',
            'kode_bagian'           => '9',
            'kategori_kegiatan'     => 'Honorarium Kegiatan Seleksi Penerimaan Mahasiswa Baru',
        ]);

        Kategori::create([
            'kegiatan_id'           => '3',
            'kode_tabel'            => '3',
            'kode_bagian'           => '9',
            'kategori_kegiatan'     => 'Honorarium Pengajar MMT',
        ]);

        Kategori::create([
            'kegiatan_id'           => '3',
            'kode_tabel'            => '3',
            'kode_bagian'           => '9',
            'kategori_kegiatan'     => 'Honorarium Pengajar Layanan UPT, Bahasa, dan Budaya',
        ]);

        Kategori::create([
            'kegiatan_id'           => '3',
            'kode_tabel'            => '3',
            'kode_bagian'           => '9',
            'kategori_kegiatan'     => 'Honorarium Program Pendidikan Keahlian Terapan Satu Tahun',
        ]);

        Kategori::create([
            'kegiatan_id'           => '3',
            'kode_tabel'            => '3',
            'kode_bagian'           => '9',
            'kategori_kegiatan'     => 'Honorarium dan Uang Makan Tenaga Harian Lepas',
        ]);

        Kategori::create([
            'kegiatan_id'           => '3',
            'kode_tabel'            => '3',
            'kode_bagian'           => '9',
            'kategori_kegiatan'     => 'Honorarium Pengemudi Tenaga Harian Lepas Rektor/Wakil Rektor',
        ]);

        Kategori::create([
            'kegiatan_id'           => '4',
            'kode_tabel'            => '3',
            'kode_bagian'           => '10',
            'kategori_kegiatan'     => 'Satuan Biaya Honorarium Sidang Pleno Perangkat Majelis Wali Amanat (MWA) yang Berasal dari Eskternal ITS',
        ]);

        Kategori::create([
            'kegiatan_id'           => '4',
            'kode_tabel'            => '3',
            'kode_bagian'           => '11',
            'kategori_kegiatan'     => 'Satuan Biaya Honorarium Pengajar dari Luar ITS Pendidikan Keahlian Terapan Satu Tahun',
        ]);

        Kategori::create([
            'kegiatan_id'           => '4',
            'kode_tabel'            => '3',
            'kode_bagian'           => '12',
            'kategori_kegiatan'     => 'Satuan Biaya Honorarium Dosen Tidak Tetap/Dosen Luar Biasa',
        ]);

        Kategori::create([
            'kegiatan_id'           => '4',
            'kode_tabel'            => '3',
            'kode_bagian'           => '13',
            'kategori_kegiatan'     => 'Satuan Biaya Honorarium Pengajar dari Luar ITS UPT. Bahasa dan Budaya',
        ]);

        Kategori::create([
            'kegiatan_id'           => '4',
            'kode_tabel'            => '3',
            'kode_bagian'           => '14',
            'kategori_kegiatan'     => 'Satuan Biaya Honorarium Tenaga Kontrak',
        ]);

        Kategori::create([
            'kegiatan_id'           => '4',
            'kode_tabel'            => '3',
            'kode_bagian'           => '15',
            'kategori_kegiatan'     => 'Satuan Biaya Honorarium Tenaga Mahasiswa',
        ]);

        Kategori::create([
            'kegiatan_id'           => '4',
            'kode_tabel'            => '3',
            'kode_bagian'           => '16',
            'kategori_kegiatan'     => 'Satuan Biaya Honorarium Asisten (Mahasiswa)',
        ]);

        Kategori::create([
            'kegiatan_id'           => '4',
            'kode_tabel'            => '3',
            'kode_bagian'           => '17',
            'kategori_kegiatan'     => 'Satuan Biaya Honorarium Narasumber dari Luar',
        ]);

        Kategori::create([
            'kegiatan_id'           => '5',
            'kode_tabel'            => '3',
            'kode_bagian'           => '18',
            'kategori_kegiatan'     => 'Satuan Biaya Kepesertaan Kegiatan',
        ]);

        Kategori::create([
            'kegiatan_id'           => '5',
            'kode_tabel'            => '3',
            'kode_bagian'           => '18',
            'kategori_kegiatan'     => 'Satuan Beasiswa Tugas Belajar Tenaga Kependidikan dan Dosen',
        ]);

        Kategori::create([
            'kegiatan_id'           => '6',
            'kode_tabel'            => '3',
            'kode_bagian'           => '19',
            'kategori_kegiatan'     => 'Satuan Biaya Honorarium Kelebihan Jam Penelitian/Perekayasaan',
        ]);

        Kategori::create([
            'kegiatan_id'           => '6',
            'kode_tabel'            => '3',
            'kode_bagian'           => '19',
            'kategori_kegiatan'     => 'Satuan Biaya Honorarium Penunjang Penelitian/Perekayasaan',
        ]);

        Kategori::create([
            'kegiatan_id'           => '7',
            'kode_tabel'            => '3',
            'kode_bagian'           => '20',
            'kategori_kegiatan'     => 'Program Percepatan Publikasi Internasional (Min Q3)',
            'satuan'                => 'Judul',
            'var1'                  => '25000000',
        ]);

        Kategori::create([
            'kegiatan_id'           => '7',
            'kode_tabel'            => '3',
            'kode_bagian'           => '20',
            'kategori_kegiatan'     => 'Jurnal Ilmiah Internasional Terindeks Scopus',
        ]);

        Kategori::create([
            'kegiatan_id'           => '7',
            'kode_tabel'            => '3',
            'kode_bagian'           => '20',
            'kategori_kegiatan'     => 'Prosiding Terindeks Scopus/Thompson',
            'satuan'                => 'Judul',
            'var1'                  => '3000000',
        ]);

        Kategori::create([
            'kegiatan_id'           => '7',
            'kode_tabel'            => '3',
            'kode_bagian'           => '20',
            'kategori_kegiatan'     => 'Jurnal Ilmiah Internasional Selain Scopus',
            'satuan'                => 'Judul',
            'var1'                  => '3000000',
        ]);

        Kategori::create([
            'kegiatan_id'           => '7',
            'kode_tabel'            => '3',
            'kode_bagian'           => '20',
            'kategori_kegiatan'     => 'Jurnal Ilmiah Nasional Terakreditasi',
            'satuan'                => 'Judul',
            'var1'                  => '25000000',
        ]);

        Kategori::create([
            'kegiatan_id'           => '8',
            'kode_tabel'            => '3',
            'kode_bagian'           => '21',
            'kategori_kegiatan'     => 'Satuan Biaya Proses Penulisan Buku',
        ]);

        Kategori::create([
            'kegiatan_id'           => '8',
            'kode_tabel'            => '3',
            'kode_bagian'           => '21',
            'kategori_kegiatan'     => 'Satuan Biaya Insentif Penerbitan Buku',
        ]);

        Kategori::create([
            'kegiatan_id'           => '9',
            'kode_tabel'            => '3',
            'kode_bagian'           => '22',
            'kategori_kegiatan'     => 'Penghargaan Kejuaraan Internasional',
        ]);

        Kategori::create([
            'kegiatan_id'           => '9',
            'kode_tabel'            => '3',
            'kode_bagian'           => '41',
            'kategori_kegiatan'     => 'Penghargaan Kejuaraan Nasional',
        ]);

        Kategori::create([
            'kegiatan_id'           => '9',
            'kode_tabel'            => '3',
            'kode_bagian'           => '42',
            'kategori_kegiatan'     => 'Penghargaan Kejuaraan Regional',
        ]);

        Kategori::create([
            'kegiatan_id'           => '9',
            'kode_tabel'            => '3',
            'kode_bagian'           => '23',
            'kategori_kegiatan'     => 'Dana Program Kewirausahaan',
        ]);

        Kategori::create([
            'kegiatan_id'           => '9',
            'kode_tabel'            => '3',
            'kode_bagian'           => '24',
            'kategori_kegiatan'     => 'Biaya Kepesertaan Kegiatan',
        ]);

        Kategori::create([
            'kegiatan_id'           => '10',
            'kode_tabel'            => '3',
            'kode_bagian'           => '25',
            'kategori_kegiatan'     => 'Biaya Personel (Billing Rate)',
        ]);

        Kategori::create([
            'kegiatan_id'           => '10',
            'kode_tabel'            => '3',
            'kode_bagian'           => '26',
            'kategori_kegiatan'     => 'Biaya Non Personel',
        ]);

        Kategori::create([
            'kegiatan_id'           => '11',
            'kode_tabel'            => '3',
            'kode_bagian'           => '27',
            'kategori_kegiatan'     => 'SPMI Akademik',
        ]);

        Kategori::create([
            'kegiatan_id'           => '11',
            'kode_tabel'            => '3',
            'kode_bagian'           => '28',
            'kategori_kegiatan'     => 'SPMI Non Akademik',
        ]);

        Kategori::create([
            'kegiatan_id'           => '12',
            'kode_tabel'            => '3',
            'kode_bagian'           => '29',
            'kategori_kegiatan'     => 'Seragam devile Dies Natalis ITS',
            'satuan'                => 'Stel',
            'var1'                  => '250000'
        ]);
        Kategori::create([
            'kegiatan_id'           => '12',
            'kode_tabel'            => '3',
            'kode_bagian'           => '29',
            'kategori_kegiatan'     => 'Seragam atlet olah raga dalam rangka Dies Natalis ITS',
            'satuan'                => 'Stel',
            'var1'                  => '200000'
        ]);
        Kategori::create([
            'kegiatan_id'           => '12',
            'kode_tabel'            => '3',
            'kode_bagian'           => '29',
            'kategori_kegiatan'     => 'Seragam panitia kegiatan pameran dan lomba kemahasiswaan',
            'satuan'                => 'Stel',
            'var1'                  => '200000'
        ]);
        Kategori::create([
            'kegiatan_id'           => '12',
            'kode_tabel'            => '3',
            'kode_bagian'           => '29',
            'kategori_kegiatan'     => 'Seragam SKK lengkap',
            'satuan'                => 'Stel',
            'var1'                  => '1100000'
        ]);
        Kategori::create([
            'kegiatan_id'           => '12',
            'kode_tabel'            => '3',
            'kode_bagian'           => '29',
            'kategori_kegiatan'     => 'Seragam petugas kebersihan',
            'satuan'                => 'Stel',
            'var1'                  => '250000'
        ]);
        Kategori::create([
            'kegiatan_id'           => '12',
            'kode_tabel'            => '3',
            'kode_bagian'           => '29',
            'kategori_kegiatan'     => 'Seragam pegawai Medical Center',
            'satuan'                => 'Stel',
            'var1'                  => '250000'
        ]);
        Kategori::create([
            'kegiatan_id'           => '12',
            'kode_tabel'            => '3',
            'kode_bagian'           => '29',
            'kategori_kegiatan'     => 'Pakaian dinas ITS',
            'satuan'                => 'Stel',
            'var1'                  => '500000'
        ]);

        Kategori::create([
            'kegiatan_id'           => '13',
            'kode_tabel'            => '3',
            'kode_bagian'           => '30',
            'kategori_kegiatan'     => 'Satuan Biaya Transportasi Darat dari Surabaya ke Kota/Kabupaten Dalam Provinsi Jawa Timur (Satu Kali Perjalanan)',
        ]);

        Kategori::create([
            'kegiatan_id'           => '13',
            'kode_tabel'            => '3',
            'kode_bagian'           => '31',
            'kategori_kegiatan'     => 'Satuan Biaya Transportasi Darat dari DKI Jakarta ke Kota/Kabupaten Sekitar (Satu Kali Perjalanan)',
        ]);

        Kategori::create([
            'kegiatan_id'           => '13',
            'kode_tabel'            => '3',
            'kode_bagian'           => '32',
            'kategori_kegiatan'     => 'Satuan Biaya Penginapan Perjalanan Dinas Dalam Negeri (OH)',
        ]);

        Kategori::create([
            'kegiatan_id'           => '13',
            'kode_tabel'            => '3',
            'kode_bagian'           => '33',
            'kategori_kegiatan'     => 'Satuan Biaya Tiket Pesawat Perjalanan Dinas Dalam Negeri Pergi Pulang (PP)',
        ]);

        Kategori::create([
            'kegiatan_id'           => '14',
            'kode_tabel'            => '3',
            'kode_bagian'           => '34',
            'kategori_kegiatan'     => 'Satuan Biaya Sewa Mesin Fotocopy',
        ]);

        Kategori::create([
            'kegiatan_id'           => '14',
            'kode_tabel'            => '3',
            'kode_bagian'           => '35',
            'kategori_kegiatan'     => 'Satuan Biaya Sewa Gedung Pertemuan',
        ]);

        Kategori::create([
            'kegiatan_id'           => '14',
            'kode_tabel'            => '3',
            'kode_bagian'           => '36',
            'kategori_kegiatan'     => 'Satuan Biaya Sewa Kendaraan Pelaksanaan Kegiatan Insidentil',
        ]);

        Kategori::create([
            'kegiatan_id'           => '14',
            'kode_tabel'            => '3',
            'kode_bagian'           => '37',
            'kategori_kegiatan'     => 'Satuan Biaya Pemeliharaan Sarana Kantor',
        ]);

        Kategori::create([
            'kegiatan_id'           => '14',
            'kode_tabel'            => '3',
            'kode_bagian'           => '38',
            'kategori_kegiatan'     => 'Satuan Biaya Keperluan Sehari-hari Perkantoran di Dalam Negeri',
        ]);

        Kategori::create([
            'kegiatan_id'           => '14',
            'kode_tabel'            => '3',
            'kode_bagian'           => '39',
            'kategori_kegiatan'     => 'Satuan Biaya Pemeliharaan Gedung/Bangunan Dalam Negeri',
        ]);

        Kategori::create([
            'kegiatan_id'           => '14',
            'kode_tabel'            => '3',
            'kode_bagian'           => '40',
            'kategori_kegiatan'     => 'Satuan Biaya Pemeliharaan dan Operasional Kendaraan Dinas',
        ]);
    }
}
