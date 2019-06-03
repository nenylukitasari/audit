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
            'penjelasan'     => 'Uang Lembur merupakan kompensasi bagi tenaga kependidikan tetap yang melakukan kerja lembur berdasarkan surat perintah dan otorisasi dari pejabat yang berwenang',
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
        //===========================
        Penjelasan::create([
            'version_id'     => '1',
            'kategori_id'    => '6',
            'kode_tabel'     => '7',
            'penjelasan'     => 'Uang harian perjalanan dinas luar negeri digunakan untuk uang makan, transport lokal, uang saku, dan uang penginapan.',
        ]);
        //=============================
        Penjelasan::create([
            'version_id'     => '1',
            'kategori_id'    => '7',
            'kode_tabel'     => '7',
            'penjelasan'     => 'Kegiatan di luar kantor adalah kegiatan operasional tugas pokok dan fungsi yang dilaksanakan dalam rangka penyelesaian pekerjaan yang perlu dilakukan secara intensif dan bersifat koordinatif dengan menggunakan ruang atau gedung yang bukan milik institut. Menurut lama penyelenggaraan, kegiatan tersebut terbagi dalam 3 (tiga) jenis:',
        ]);
        Penjelasan::create([
            'version_id'     => '1',
            'kategori_id'    => '7',
            'kode_tabel'     => '7',
            'penjelasan'     => 'Perhitungan uang harian didasarkan pada jumlah hari pelaksanaan kegiatan.',
        ]);
        Penjelasan::create([
            'version_id'     => '1',
            'kategori_id'    => '7',
            'kode_tabel'     => '7',
            'penjelasan'     => 'Akomodasi paket fullboard diatur sebagai berikut :',
        ]);
        Penjelasan::create([
            'version_id'     => '1',
            'kategori_id'    => '7',
            'kode_tabel'     => '7',
            'penjelasan'     => 'Untuk kegiatan dalam kota, dapat diberikan biaya taksi Surabaya sesuai ketentuan.',
        ]);
        Penjelasan::create([
            'version_id'     => '1',
            'kategori_id'    => '7',
            'kode_tabel'     => '7',
            'penjelasan'     => 'Untuk kegiatan luar kota, perjalanan ke lokasi menggunakan transportasi umum atau sewa kendaraan (at cost) dan dapat diberikan biaya taksi sesuai ketentuan.',
        ]);
        Penjelasan::create([
            'version_id'     => '1',
            'kategori_id'    => '7',
            'kode_tabel'     => '7',
            'penjelasan'     => 'Kegiatan paket rapat/pertemuan di luar kantor tidak boleh menggunakan Event Organizer.',
        ]);
        //==========================
        Penjelasan::create([
            'version_id'     => '1',
            'kategori_id'    => '9',
            'kode_tabel'     => '7',
            'penjelasan'     => 'Perjalanan  dinas  mahasiswa  adalah  penugasan  untuk  menghadiri  undangan  kegiatan  dari  institusi  mitra,  mewakili institut untuk mengikuti lomba atau pertandingan, atau penugasan lain bagi mahasiswa aktif Institut.',
        ]);
        Penjelasan::create([
            'version_id'     => '1',
            'kategori_id'    => '9',
            'kode_tabel'     => '7',
            'penjelasan'     => 'Biaya penginapan dibayarkan sebesar biaya sesungguhnya (at cost) dengan ketentuan maksimal hotel bintang tiga dan minimal sekamar berdua.',
        ]);
        Penjelasan::create([
            'version_id'     => '1',
            'kategori_id'    => '9',
            'kode_tabel'     => '7',
            'penjelasan'     => 'Uang harian digunakan sebagai uang makan, transpotasi lokal, pajak bandara, uang saku, dan kebutuhan lainnya.',
        ]);
        //===============
        Penjelasan::create([
            'version_id'     => '1',
            'kategori_id'    => '10',
            'kode_tabel'     => '7',
            'penjelasan'     => 'Satuan biaya taksi perjalanan dinas dalam negeri merupakan satuan biaya  satu kali perjalanan taksi dari kantor tempat kedudukan menuju bandara/pelabuhan/terminal/stasiun keberangkatan atau dari bandara/pelabuhan/terminal/stasiun kedatangan menuju tempat tujuan di kota bandara/pelabuhan/terminal/stasiun kedatangan dan sebaliknya.',
        ]);
        //================
        Penjelasan::create([
            'version_id'     => '1',
            'kategori_id'    => '13',
            'kode_tabel'     => '7',
            'penjelasan'     => 'Honorarium dibayar terpusat bersamaan dengan pembayaran Insentif Kinerja.',
        ]);
        //===============
        Penjelasan::create([
            'version_id'     => '1',
            'kategori_id'    => '14',
            'kode_tabel'     => '7',
            'penjelasan'     => 'Honorarium dibayar terpusat bersamaan dengan pembayaran Insentif Kinerja.',
        ]);
        //================
        Penjelasan::create([
            'version_id'     => '1',
            'kategori_id'    => '16',
            'kode_tabel'     => '7',
            'penjelasan'     => 'Pengelola Keuangan dan Anggaran adalah personil yang diangkat dengan SK Rektor untuk melaksanakan tugas sebagai  Atasan Langsung Bendahara, Petugas Administrasi Belanja Pegawai, Bendahara Pengeluaran Pembantu (Pusat), Koordinator, staf pengelola keuangan, penyusun anggaran atau tugas lain yang berkaitan dengan pengelolaan keuangan dan anggaran.',
        ]);
        Penjelasan::create([
            'version_id'     => '1',
            'kategori_id'    => '17',
            'kode_tabel'     => '7',
            'penjelasan'     => 'Honorarium dibayar terpusat bersamaan dengan pembayaran Insentif Kinerja.',
        ]);
        Penjelasan::create([
            'version_id'     => '1',
            'kategori_id'    => '17',
            'kode_tabel'     => '7',
            'penjelasan'     => 'Honorarium  yang tertera adalah honorarium maksimum untuk jabatan pengelola yang paling tinggi.',
        ]);
        Penjelasan::create([
            'version_id'     => '1',
            'kategori_id'    => '18',
            'kode_tabel'     => '7',
            'penjelasan'     => 'Honorarium akan dibayar terpusat bersamaan dengan pembayaran Insentif Kinerja.',
        ]);
        Penjelasan::create([
            'version_id'     => '1',
            'kategori_id'    => '19',
            'kode_tabel'     => '7',
            'penjelasan'     => 'Honorarium dibayar terpusat bersamaan dengan pembayaran Insentif Kinerja.',
        ]);
        Penjelasan::create([
            'version_id'     => '1',
            'kategori_id'    => '19',
            'kode_tabel'     => '7',
            'penjelasan'     => 'Honorarium yang tertera adalah honorarium untuk jabatan yang paling tinggi.',
        ]);
        Penjelasan::create([
            'version_id'     => '1',
            'kategori_id'    => '20',
            'kode_tabel'     => '7',
            'penjelasan'     => 'Honorarium dibayar terpusat bersamaan dengan pembayaran Insentif Kinerja.',
        ]);
        Penjelasan::create([
            'version_id'     => '1',
            'kategori_id'    => '20',
            'kode_tabel'     => '7',
            'penjelasan'     => 'Honorarium diberikan karena kegiatan pembelajaran dilakukan diluar jam kerja.',
        ]);
        Penjelasan::create([
            'version_id'     => '1',
            'kategori_id'    => '21',
            'kode_tabel'     => '7',
            'penjelasan'     => 'Untuk dosen: tidak diperhitungkan dalam penilaian insentif kinerja',
        ]);
        Penjelasan::create([
            'version_id'     => '1',
            'kategori_id'    => '21',
            'kode_tabel'     => '7',
            'penjelasan'     => 'Untuk tenaga kependidikan: proses belajar mengajar diselenggarakan di luar jam kerja.',
        ]);
        Penjelasan::create([
            'version_id'     => '1',
            'kategori_id'    => '21',
            'kode_tabel'     => '7',
            'penjelasan'     => 'Honorarium dibayar terpusat bersamaan dengan pembayaran insentif kinerja.',
        ]);
        Penjelasan::create([
            'version_id'     => '1',
            'kategori_id'    => '22',
            'kode_tabel'     => '7',
            'penjelasan'     => 'Proses pendidikan tidak diperhitungkan dalam penilaian insentif kinerja.',
        ]);
        Penjelasan::create([
            'version_id'     => '1',
            'kategori_id'    => '22',
            'kode_tabel'     => '7',
            'penjelasan'     => 'Honorarium dibayar terpusat bersamaan dengan pembayaran insentif kinerja.',
        ]);
        Penjelasan::create([
            'version_id'     => '1',
            'kategori_id'    => '23',
            'kode_tabel'     => '7',
            'penjelasan'     => 'Honorarium berlaku untuk 8 jam kerja per hari.',
        ]);
        Penjelasan::create([
            'version_id'     => '1',
            'kategori_id'    => '23',
            'kode_tabel'     => '7',
            'penjelasan'     => 'Pengaturan jam kerja bisa disesuaikan dengan kebutuhan.',
        ]);
        Penjelasan::create([
            'version_id'     => '1',
            'kategori_id'    => '23',
            'kode_tabel'     => '7',
            'penjelasan'     => 'Apabila melaksanakan tugas di luar jam kerja, diberikan uang lembur.',
        ]);
        Penjelasan::create([
            'version_id'     => '1',
            'kategori_id'    => '23',
            'kode_tabel'     => '7',
            'penjelasan'     => 'Persyaratan lembur : surat tugas pimpinan unit dilengkapi dengan data absen dan perincian jam lembur yang disahkan oleh pimpinan unit kerja. ',
        ]);
        Penjelasan::create([
            'version_id'     => '1',
            'kategori_id'    => '23',
            'kode_tabel'     => '7',
            'penjelasan'     => 'Tidak terkena pajak.',
        ]);
        Penjelasan::create([
            'version_id'     => '1',
            'kategori_id'    => '24',
            'kode_tabel'     => '7',
            'penjelasan'     => 'Jumlah jam kerja per hari adalah 8 jam.',
        ]);
        Penjelasan::create([
            'version_id'     => '1',
            'kategori_id'    => '24',
            'kode_tabel'     => '7',
            'penjelasan'     => 'Apabila melaksanakan tugas di luar jam kerja, diberikan uang lembur dan uang makan lembur atau konsumsi sesuai ketentuan. ',
        ]);
        Penjelasan::create([
            'version_id'     => '1',
            'kategori_id'    => '24',
            'kode_tabel'     => '7',
            'penjelasan'     => 'Uang makan atau konsumsi lembur diberikan untuk lembur minimal 2 jam, dan diberikan 1 kali perhari.',
        ]);
        Penjelasan::create([
            'version_id'     => '1',
            'kategori_id'    => '24',
            'kode_tabel'     => '7',
            'penjelasan'     => 'Dalam hal kerja lembur yang dilakukan pada hari libur selama 8 (delapan) jam atau lebih, uang makan atau konsumsi lembur diberikan maksimal 2 (dua) kali.',
        ]);
        Penjelasan::create([
            'version_id'     => '1',
            'kategori_id'    => '24',
            'kode_tabel'     => '7',
            'penjelasan'     => 'Tidak terkena pajak.',
        ]);
        Penjelasan::create([
            'version_id'     => '1',
            'kategori_id'    => '25',
            'kode_tabel'     => '7',
            'penjelasan'     => 'Besaran Pajak: ',
        ]);
        Penjelasan::create([
            'version_id'     => '1',
            'kategori_id'    => '25',
            'kode_tabel'     => '7',
            'penjelasan'     => 'Selain honorarium di atas dapat diberikan uang transport dan uang harian sesuai ketentuan.',
        ]);
        Penjelasan::create([
            'version_id'     => '1',
            'kategori_id'    => '26',
            'kode_tabel'     => '7',
            'penjelasan'     => 'Besaran Pajak: ',
        ]);
        Penjelasan::create([
            'version_id'     => '1',
            'kategori_id'    => '27',
            'kode_tabel'     => '7',
            'penjelasan'     => 'Besaran Pajak: ',
        ]);
        Penjelasan::create([
            'version_id'     => '1',
            'kategori_id'    => '27',
            'kode_tabel'     => '7',
            'penjelasan'     => 'Selain honorarium di atas dapat diberikan uang transport.',
        ]);
        Penjelasan::create([
            'version_id'     => '1',
            'kategori_id'    => '28',
            'kode_tabel'     => '7',
            'penjelasan'     => 'Besaran Pajak',
        ]);
        Penjelasan::create([
            'version_id'     => '1',
            'kategori_id'    => '29',
            'kode_tabel'     => '7',
            'penjelasan'     => 'Honorarium tenaga kontrak diberikan kepada tenaga kerja  yang terikat kontrak sesuai peraturan yang berlaku di ITS, sudah termasuk uang makan dan pajak.',
        ]);
        Penjelasan::create([
            'version_id'     => '1',
            'kategori_id'    => '29',
            'kode_tabel'     => '7',
            'penjelasan'     => 'Besaran Pajak:',
        ]);
        Penjelasan::create([
            'version_id'     => '1',
            'kategori_id'    => '30',
            'kode_tabel'     => '7',
            'penjelasan'     => 'Honorarium diberikan kepada mahasiswa ITS yang sesuai kompetensinya diperlukan membantu unit untuk kegiatan yang sifatnya tidak rutin. Sudah termasuk uang makan dan pajak.',
        ]);
        Penjelasan::create([
            'version_id'     => '1',
            'kategori_id'    => '30',
            'kode_tabel'     => '7',
            'penjelasan'     => 'Besaran Pajak :',
        ]);
        Penjelasan::create([
            'version_id'     => '1',
            'kategori_id'    => '31',
            'kode_tabel'     => '7',
            'penjelasan'     => 'Besaran Pajak = 6% x biaya honorarium',
        ]);
        Penjelasan::create([
            'version_id'     => '1',
            'kategori_id'    => '32',
            'kode_tabel'     => '7',
            'penjelasan'     => 'Tingkat Lokal: Kegiatan yang dilakukan dengan lingkup peserta di lingkungan ITS.',
        ]);
        Penjelasan::create([
            'version_id'     => '1',
            'kategori_id'    => '32',
            'kode_tabel'     => '7',
            'penjelasan'     => 'Tingkat Nasional:	Kegiatan yang dilakukan dengan lingkup peserta dari Surabaya dan dari luar Kota Surabaya.',
        ]);
        Penjelasan::create([
            'version_id'     => '1',
            'kategori_id'    => '32',
            'kode_tabel'     => '7',
            'penjelasan'     => 'Tingkat Internasional: Kegiatan yang dilakukan dengan lingkup peserta berasal dari luar Indonesia dan atau skala Internasional.',
        ]);
        Penjelasan::create([
            'version_id'     => '1',
            'kategori_id'    => '32',
            'kode_tabel'     => '7',
            'penjelasan'     => 'Honorarium yang diberikan kepada Narasumber/Pembicara/Pembahas/Perumus Hasil termasuk untuk penulisan makalah.',
        ]);
        Penjelasan::create([
            'version_id'     => '1',
            'kategori_id'    => '32',
            'kode_tabel'     => '7',
            'penjelasan'     => 'Pembicara Khusus adalah seorang profesional yang sudah diakui oleh masyarakat luas atas keahliannya dan memiliki tarif pasar tersendiri baik di tingkat nasional maupun internasional.',
        ]);
        Penjelasan::create([
            'version_id'     => '1',
            'kategori_id'    => '32',
            'kode_tabel'     => '7',
            'penjelasan'     => 'Untuk honorarium pembicara khusus/pembicara asing/pakar/profesional menggunakan tarif sesuai dengan keahlian yang dimiliki.',
        ]);
        Penjelasan::create([
            'version_id'     => '1',
            'kategori_id'    => '32',
            'kode_tabel'     => '7',
            'penjelasan'     => 'Narasumber dan pembahas yang terlibat dalam kegiatan FGD harus memiliki kompetensi atau keahlian dalam bidang tertentu yang berkaitan dengan kegiatan tersebut.',
        ]);
        Penjelasan::create([
            'version_id'     => '1',
            'kategori_id'    => '32',
            'kode_tabel'     => '7',
            'penjelasan'     => 'Pembahas adalah personil yang memberikan kontribusi atau tanggapan dari pemateri/narasumber hasil pembahasan. Dokumen pembahasan disampaikan secara tertulis oleh masing masing pembahas.',
        ]);
        Penjelasan::create([
            'version_id'     => '1',
            'kategori_id'    => '32',
            'kode_tabel'     => '7',
            'penjelasan'     => 'Perumus Hasil adalah orang atau tim yang diberi tugas untuk merangkum atau membuat suatu simpulan dari materi yang disampaikan oleh narasumber/pemateri dan tanggapan dari para pembahas.',
        ]);
        Penjelasan::create([
            'version_id'     => '1',
            'kategori_id'    => '32',
            'kode_tabel'     => '7',
            'penjelasan'     => 'Besaran Pajak:',
        ]);
        Penjelasan::create([
            'version_id'     => '1',
            'kegiatan_id'    => '5',
            'kode_tabel'     => '7',
            'penjelasan'     => 'Biaya pendaftaran diklat, seminar, workshop diberikan kepada dosen dan tenaga kependidikan tetap (PNS dan Non PNS) yang mengikuti diklat, seminar, workshop di luar unit kerja, sesuai bidang kerjanya dan berdasarkan penugasan, dan bukan keluaran hasil penelitian yang didanai (untuk menghindari double funding).',
        ]);
        Penjelasan::create([
            'version_id'     => '1',
            'kegiatan_id'    => '5',
            'kode_tabel'     => '7',
            'penjelasan'     => 'Biaya tes bahasa asing diberikan kepada dosen dan tenaga kependidikan tetap (PNS dan Non PNS) yang akan melanjutkan studi atau mengikuti kegiatan di luar negeri berdasarkan penugasan.',
        ]);
        Penjelasan::create([
            'version_id'     => '1',
            'kegiatan_id'    => '5',
            'kode_tabel'     => '7',
            'penjelasan'     => 'Biaya pelaksanaan uji kompetensi/sertifikasi diberikan kepada dosen dan tenaga kependidikan tetap (PNS dan Non PNS) yang akan mengikuti uji kompetensi/sertifikasi berdasarkan penugasan.',
        ]);
        Penjelasan::create([
            'version_id'     => '1',
            'kegiatan_id'    => '5',
            'kode_tabel'     => '7',
            'penjelasan'     => 'Persyaratan Beasiswa Tugas Belajar Dosen dan Tenaga Kependidikan:',
        ]);
        Penjelasan::create([
            'version_id'     => '1',
            'kegiatan_id'    => '6',
            'kode_tabel'     => '7',
            'penjelasan'     => 'Biaya atas kelebihan jam penelitian diberikan kepada fungsional peneliti/perekayasa yang diberi tugas berdasarkan surat perintah dari pejabat yang berwenang melakukan penelitian/perekayasaan, paling banyak 4 (empat) jam sehari, dengan tidak diberikan uang lembur dan uang makan lembur.',
        ]);
        Penjelasan::create([
            'version_id'     => '1',
            'kegiatan_id'    => '6',
            'kode_tabel'     => '7',
            'penjelasan'     => 'Biaya Penunjang Penelitian/Perekayasaan diberikan kepada seseorang yang diberi tugas untuk menunjang kegiatan penelitian/perekayasaan yang dilakukan oleh fungsional peneliti/perekayasa sebagai pembantu peneliti/perekayasa, koordinator peneliti/perekayasa, sekretariat peneliti/perekayasa, pengolah data, petugas survey, pembantu lapangan berdasarkan surat perintah pejabat yang berwenang.',
        ]);
        Penjelasan::create([
            'version_id'     => '1',
            'kegiatan_id'    => '6',
            'kode_tabel'     => '7',
            'penjelasan'     => 'Besaran Pajak = 5% x 50% x honorarium.',
        ]);
        Penjelasan::create([
            'version_id'     => '1',
            'kegiatan_id'    => '7',
            'kode_tabel'     => '7',
            'penjelasan'     => 'Insentif publikasi no. 1 s.d 3 diberikan terpusat melalui LPPM.',
        ]);
        Penjelasan::create([
            'version_id'     => '1',
            'kegiatan_id'    => '7',
            'kode_tabel'     => '7',
            'penjelasan'     => 'Insentif publikasi no. 4 dan 5 diberikan oleh Departemen sesuai kemampuan keuangan masing-masing Departemen.',
        ]);
        Penjelasan::create([
            'version_id'     => '1',
            'kegiatan_id'    => '7',
            'kode_tabel'     => '7',
            'penjelasan'     => 'Besaran Pajak = 5% x 50% x biaya insentif.',
        ]);
        Penjelasan::create([
            'version_id'     => '1',
            'kegiatan_id'    => '8',
            'kode_tabel'     => '7',
            'penjelasan'     => 'Biaya penulisan buku diberikan kepada penulis berdasarkan hasil review dari direktorat yang bertanggungjawab atas baku mutu penerbitan buku (Direktorat Akademik).',
        ]);
        Penjelasan::create([
            'version_id'     => '1',
            'kegiatan_id'    => '8',
            'kode_tabel'     => '7',
            'penjelasan'     => 'Naskah buku bukan merupakan revisi buku yang sudah terbit, bukan hasil terjemahan/saduran dan bukan laporan penelitian yang dibukukan.',
        ]);
        Penjelasan::create([
            'version_id'     => '1',
            'kegiatan_id'    => '8',
            'kode_tabel'     => '7',
            'penjelasan'     => 'Insentif penerbitan buku diberikan kepada penulis yang belum pernah mendapatkan biaya proses penulisan buku. Apabila berupa insentif maka semua biaya akan terkena pajak sebesar = 5% x 50% x biaya insentif.',
        ]);
        Penjelasan::create([
            'version_id'     => '1',
            'kegiatan_id'    => '9',
            'kode_tabel'     => '7',
            'penjelasan'     => 'Penghargaan diberikan terpusat, dengan penanggungjawab Biro Administrasi Pembelajaran dan Kesejahteraan Mahasiswa (BAPKM)',
        ]);
        Penjelasan::create([
            'version_id'     => '1',
            'kegiatan_id'    => '9',
            'kode_tabel'     => '7',
            'penjelasan'     => 'Besaran Pajak = 6% x biaya penghargaan.',
        ]);
        Penjelasan::create([
            'version_id'     => '1',
            'kategori_id'    => '47',
            'kode_tabel'     => '7',
            'penjelasan'     => 'Pemberian dana diberikan terpusat melalui Direktorat Kemahasiswaan.',
        ]);
        Penjelasan::create([
            'version_id'     => '1',
            'kategori_id'    => '48',
            'kode_tabel'     => '7',
            'penjelasan'     => 'Biaya kepesertaan kegiatan bagi mahasiswa diberikan berdasarkan pertimbangan tertentu dan ditetapkan dengan SK Dekan.',
        ]);
        Penjelasan::create([
            'version_id'     => '1',
            'kategori_id'    => '49',
            'kode_tabel'     => '7',
            'penjelasan'     => 'Besaran Pajak, berlaku ketentuan pajak progresif (menggunakan NPWP ITS PTNBH): ',
        ]);
        Penjelasan::create([
            'version_id'     => '1',
            'kategori_id'    => '49',
            'kode_tabel'     => '7',
            'penjelasan'     => 'Apabila yang bersangkutan tidak memiliki NPWP, besaran pajak 120% dari ketentuan pajak di atas.',
        ]);
        Penjelasan::create([
            'version_id'     => '1',
            'kategori_id'    => '60',
            'kode_tabel'     => '7',
            'penjelasan'     => 'Besaran biaya tersebut digunakan sebagai dasar perencanaan anggaran, sedangkan dalam penggunaannya at cost (sesuai pengeluaran) dengan mempertimbangkan prinsip efisiensi dan efektifitas pelaksanaan kegiatan.',
        ]);
        Penjelasan::create([
            'version_id'     => '1',
            'kategori_id'    => '61',
            'kode_tabel'     => '7',
            'penjelasan'     => 'Besaran biaya tersebut digunakan sebagai dasar perencanaan anggaran, sedangkan dalam penggunaannya at cost (sesuai pengeluaran)  dengan mempertimbangkan prinsip efisiensi dan efektifitas pelaksanaan kegiatan.',
        ]);
        Penjelasan::create([
            'version_id'     => '1',
            'kategori_id'    => '62',
            'kode_tabel'     => '7',
            'penjelasan'     => 'Besaran biaya tersebut digunakan sebagai dasar perencanaan anggaran, sedangkan dalam penggunaannya at cost (sesuai pengeluaran).',
        ]);
        Penjelasan::create([
            'version_id'     => '1',
            'kategori_id'    => '63',
            'kode_tabel'     => '7',
            'penjelasan'     => 'Satuan biaya tiket pesawat perjalanan dinas dalam negeri adalah satuan biaya untuk pembelian tiket pesawat udara pergi pulang (PP) dari bandara keberangkatan suatu kota ke bandara kota tujuan dalam perencanaan anggaran. Satuan biaya tiket termasuk biaya asuransi, tidak termasuk airport tax dan biaya retribusi lainnya. Dalam pelaksanaan anggaran, satuan biaya tiket perjalanan dinas dalam negeri menggunakan at cost (sesuai pengeluaran).',
        ]);
        Penjelasan::create([
            'version_id'     => '1',
            'kategori_id'    => '64',
            'kode_tabel'     => '7',
            'penjelasan'     => 'Satuan Biaya Sewa Mesin Fotocopy merupakan satuan biaya yang digunakan untuk perencanaan kebutuhan biaya sewa mesin fotocopy analog dan/atau mesin fotocopy digital untuk menunjang pelaksanaan operasional kantor. Satuan biaya ini sudah termasuk toner dan biaya perawatan untuk pencetakan sampai dengan 6.000 (enam ribu) lembar/bulan.',
        ]);
        Penjelasan::create([
            'version_id'     => '1',
            'kategori_id'    => '67',
            'kode_tabel'     => '7',
            'penjelasan'     => 'Satuan biaya pemeliharaan sarana kantor merupakan satuan biaya pemeliharaan yang digunakan untuk mempertahankan barang inventaris kantor (yang langsung digunakan untuk pegawai misalnya meja dan kursi), personal computer/notebook, printer, AC split, dan genset agar berada dalam kondisi normal. Untuk biaya genset belum termasuk kebutuhan bahan bakar minyak.',
        ]);
        Penjelasan::create([
            'version_id'     => '1',
            'kategori_id'    => '68',
            'kode_tabel'     => '7',
            'penjelasan'     => 'Satuan biaya keperluan sehari-hari perkantoran di dalam negeri merupakan satuan biaya yang digunakan untuk perencanaan kebutuhan biaya keperluan sehari-hari perkantoran berupa barang habis pakai yang langsung menunjang penyelenggaraan operasional dan untuk memenuhi kebutuhan minimal agar suatu kantor dapat memberikan pelayanan secara optimal terdiri atas : ATK, barang cetak, alat rumah tangga, langganan surat kabar, air minum pegawai.',
        ]);
        Penjelasan::create([
            'version_id'     => '1',
            'kategori_id'    => '69',
            'kode_tabel'     => '7',
            'penjelasan'     => 'Satuan biaya pemeliharaan gedung/bangunan dalam negeri merupakan satuan biaya yang digunakan untuk perencanaan kebutuhan biaya pemeliharaan rutin gedung/bangunan di dalam negeri dengan maksud menjaga/memepertahankan gedung dan bangunan kantor di dalam negeri agar tetap dalam kondisi semula atau perbaikan dengan tingkat kerusakan kurang dari atau sama dengan 2% (dua persen), tidak termasuk untuk pemeliharaan gedung/bangunan di dalam negeri yang memiliki spesifikasi khusus berdasarkan ketentuan berlaku.',
        ]);
        Penjelasan::create([
            'version_id'     => '1',
            'kategori_id'    => '69',
            'kode_tabel'     => '7',
            'penjelasan'     => 'Satuan biaya pemeliharaan gedung/bangunan dalam negeri dialokasikan untuk :',
        ]);
        Penjelasan::create([
            'version_id'     => '1',
            'kategori_id'    => '70',
            'kode_tabel'     => '7',
            'penjelasan'     => 'Satuan biaya pemeliharaan dan operasional kendaraan dinas merupakan satuan biaya yang digunakan untuk perencanaan kebutuhan biaya pemeliharaan dan operasional kendaraan dinas yang digunakan untuk mempertahankan kendaraan dinas agar tetap dalam kondisi normal dan siap pakai sesuai dengan peruntukkannya. Satuan biaya tersebut sudah termasuk biaya bahan bakar namun belum termasuk biaya pengurusan Surat Tanda Nomor Kendaraan (STNK) yang besarannya mengacu pada ketentuan yang berlaku.',
        ]);
        Penjelasan::create([
            'version_id'     => '1',
            'kategori_id'    => '70',
            'kode_tabel'     => '7',
            'penjelasan'     => 'Yang dimaksud kendaraan operasional dalam lingkungan kantor adalah kendaraan yang digunakan hanya terbatas dalam lingkungan kantor.',
        ]);
        Penjelasan::create([
            'version_id'     => '1',
            'kategori_id'    => '70',
            'kode_tabel'     => '7',
            'penjelasan'     => 'Khusus untuk kendaraan dinas yang pengadaannya bersumber dari sewa, satuan biaya operasional tersebut hanya diperuntukkan untuk bahan bakar. ',
        ]);
        Penjelasan::create([
            'version_id'     => '1',
            'kategori_id'    => '70',
            'kode_tabel'     => '7',
            'penjelasan'     => 'Satuan biaya ini tidak diperuntukkan bagi :',
        ]);
    }
}
