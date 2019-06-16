<?php

use Illuminate\Database\Seeder;
use App\Kda_template;


class Kda_templateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $template = new Kda_template;
        $template->tipe = 'kda tanpa temuan';
        $template->content = '<div class="box" id="kda1"><!-- /.box-header -->
<div class="box-body">
<div class="form-group">
<p style="text-align: center;"><strong><span style="font-size: 12px;">KERTAS DATA AUDIT</span></strong></p>

<div class="box-body biodata">
<p style="text-align: left; line-height: 0.05;"><strong><span style="font-weight: bold; font-size: 12px;"><label class="col-sm-2 control-label">Unit Kerja</label>: unit$</span></strong></p>

<p style="text-align: left; line-height: 0.05;"><strong><span style="font-weight: bold; font-size: 12px;"><label class="col-sm-2 control-label">Sasaran</label>: Pengelolaan Keuangan</span></strong></p>

<p style="text-align: left; line-height: 0.05;"><strong><span style="font-weight: bold; font-size: 12px;"><label class="col-sm-2 control-label">Sumber Dana</label>: Non PNBP</span></strong></p>

<p style="text-align: left; line-height: 0.05;"><strong><span style="font-weight: bold; font-size: 12px;"><label class="col-sm-2 control-label">Masa Audit</label>: masaaudit$</span></strong></p>

<p style="text-align: left; line-height: 0.05;"><strong><span style="font-weight: bold; font-size: 12px;"><label class="col-sm-2 control-label">Bulan Audit</label>: bulanaudit$</span></strong></p>

<p style="text-align: left; line-height: 0.05;"><strong><span style="font-weight: bold; font-size: 12px;"><label class="col-sm-2 control-label">Auditor</label>: auditor$</span></strong></p>
</div>

<p>&nbsp;</p>

<div>
<p style="text-align: left; line-height: 0.05;"><strong><label class="col-sm-3 control-label">Kode Temuan 1.04</label></strong>: Ketidakpatuhan terhadap Peraturan : -</p>

<p style="text-align: left; line-height: 0.05;"><strong><label class="col-sm-3 control-label">Deskripsi Masalah</label></strong>: -</p>
</div>

<div class="box-body menu"><strong>Uraian</strong></div>

<div class="box-body menu"><strong>a. Kondisi:</strong></div>

<div class="box-body tab1"><span>Hasil audit dokumen SPJ diketahui bahwa pengelolaan administrasi keuangan bulan bulan$ tahun tahun$ yang dilaksanakan BPP di Unit Kerja : unit$ sudah tertib.</span></div>
<p>&nbsp;</p>

<div style="text-align: left; line-height: 1;">&nbsp; &nbsp; &nbsp; &nbsp; <strong>1. Kelengkapan berkas SPJ</strong></div>

<div>kdaketerangan2$</div>

<p>&nbsp;</p>
<div class="tg-wrap">&nbsp; &nbsp; &nbsp; &nbsp; <strong>2. Ketidakpatuhan terhadap aturan yang berlaku</strong></div>

<div>temuan$</div>

<div class="box-body menu"><strong>b. Kriteria</strong></div>

<div class="box-body tab2">
<ol>
    <li style="text-align: justify;">&nbsp;Peraturan Pemerintah RI Nomor 45 Tahun 2013 tanggal 7 juni 2013 tentang Tata Cara Pelaksanaan Anggaran dan Belanja Negara, Pasal 65 ayat (1): &quot;<strong>Penyelesaian tagihan kepada negara atas beban anggaran Belanja Negara yang tertuang dalam APBN dilaksanakan berdasarkan hak dan bukti yang sah untuk memperoleh bayaran&quot;.</strong></li>
    <li style="text-align: justify;">Peraturan Rektor Institut Teknologi Sepuluh Nopember Nomor 5 Tahun 2018 tentang <strong> Pengadaan Bahan Habis Umum dan Barang Inventaris Umum.</strong></li>
    <li style="text-align: justify;">Peraturan Rektor Institut Teknologi Sepuluh Nopember Nomor 1 Tahun 2019 tentang <strong>Pedoman Pengelolaan Keuangan Institut Teknologi Sepuluh Nopember</strong>.</li>
    <li style="text-align: justify;">Peraturan Rektor Institut Teknologi Sepuluh Nopember Nomor 28 Tahun 2018 tentang  <strong>Standar Biaya Institut Teknologi Sepuluh Nopember Tahun Anggaran 2019.</strong></li>
</ol>
</div>

<div class="box-body menu"><strong>c. Kesimpulan</strong></div>

<div class="box-body tab1">
<p>Pengelolaan administrasi di Unit Kerja : unit$ sudah sesuai dengan ketentuan yang berlaku</p>
</div>

<div class="box-body menu"><strong>d. Rekomendasi</strong></div>

<div class="box-body tab1">
<p>-</p>
</div>

<div class="box-body menu"><strong>e. Saran</strong></div>

<div class="box-body tab1">
<p>Untuk dipertahankan agar pengelolaan keuangan tetap tertib.</p>
</div>

<p>&nbsp;</p>

<div class="temuan">
<div class="row">
<div class="col-sm-6">Surabaya, tanggalttd$</div>

<div class="col-sm-6 penutup">Menyetujui</div>
</div>

<div class="row">
<div class="col-sm-6">Ka Unit Audit internal Bidang Keuangan,</div>

<div class="col-sm-6 penutup">Auditan,</div>
</div>

<p>&nbsp;</p>

<div class="row">
<div class="col-sm-6"><strong>Ir. Tony Bambang M.,PGDip</strong></div>

<div class="col-sm-6 penutup">...................................</div>
</div>
</div>
</div>
</div>
</div>';
        $template->save();

        $template = new Kda_template;
        $template->tipe = 'kda dengan temuan';
        $template->content = '<div class="box" id="kda1"><!-- /.box-header -->
<div class="box-body">
<div class="form-group">
<p style="text-align: center;"><strong><span style="font-size: 12px;">KERTAS DATA AUDIT</span></strong></p>

<div class="box-body biodata">
<p style="text-align: left; line-height: 0.05;"><strong><span style="font-weight: bold; font-size: 12px;"><label class="col-sm-2 control-label">Unit Kerja</label>: unit$</span></strong></p>

<p style="text-align: left; line-height: 0.05;"><strong><span style="font-weight: bold; font-size: 12px;"><label class="col-sm-2 control-label">Sasaran</label>: Pengelolaan Keuangan</span></strong></p>
<p style="text-align: left; line-height: 0.05;"><strong><span style="font-weight: bold; font-size: 12px;"><label class="col-sm-2 control-label">Sumber Dana</label>: Non PNBP</span></strong></p>

<p style="text-align: left; line-height: 0.05;"><strong><span style="font-weight: bold; font-size: 12px;"><label class="col-sm-2 control-label">Masa Audit</label>: masaaudit$</span></strong></p>

<p style="text-align: left; line-height: 0.05;"><strong><span style="font-weight: bold; font-size: 12px;"><label class="col-sm-2 control-label">Bulan Audit</label>: bulanaudit$</span></strong></p>

<p style="text-align: left; line-height: 0.05;"><strong><span style="font-weight: bold; font-size: 12px;"><label class="col-sm-2 control-label">Auditor</label>: auditor$</span></strong></p>
</div>

<p>&nbsp;</p>

<div class="temuan">
<div class="row">
<p style="line-height: 0.05;"><strong><label class="col-sm-3 control-label">Kode Temuan kode_temuan$ </label></strong>: Ketidakpatuhan terhadap Peraturan : deskripsi_temuan$</p>
</div>

<div class="row row-bottom-margin">
<div><strong><label class="col-sm-3 control-label">Deskripsi Masalah</label></strong></div>

<div class="deskripsi">: Pertanggungjawaban pembayaran/ pembelian barang/jasa tidak akuntabel (bukti tidak lengkap/tidak valid)</div>
</div>
</div>

<div class="box-body menu"><strong>Uraian</strong></div>

<div class="box-body menu"><strong>a. Kondisi:</strong></div>

<div class="box-body tab1"><span>Hasil audit dokumen SPJ diketahui bahwa pengelolaan administrasi keuangan bulan bulan$ tahun tahun$ di Unit Kerja : unit$ belum sepenuhnya tertib, yaitu:</span></div>

<p>&nbsp;</p>

<div style="text-align: left; line-height: 1;">&nbsp; &nbsp; &nbsp; &nbsp; <strong>1. Kelengkapan berkas SPJ</strong></div>

<div>kdaketerangan2$</div>

<p>&nbsp;</p>

<div class="tg-wrap">&nbsp; &nbsp; &nbsp; &nbsp; <strong>2. Ketidakpatuhan terhadap aturan yang berlaku</strong></div>

<div>temuan$</div>

<div>temuanlama$</div>

<div class="box-body menu"><strong>b. Kriteria</strong></div>

<div class="box-body tab2">
<ol>
    <li style="text-align: justify;">&nbsp;Peraturan Pemerintah RI Nomor 45 Tahun 2013 tanggal 7 juni 2013 tentang Tata Cara Pelaksanaan Anggaran dan Belanja Negara, Pasal 65 ayat (1): &quot;<strong>Penyelesaian tagihan kepada negara atas beban anggaran Belanja Negara yang tertuang dalam APBN dilaksanakan berdasarkan hak dan bukti yang sah untuk memperoleh bayaran&quot;.</strong></li>
    <li style="text-align: justify;">Peraturan Rektor Institut Teknologi Sepuluh Nopember Nomor 5 Tahun 2018 tentang <strong> Pengadaan Bahan Habis Umum dan Barang Inventaris Umum.</strong></li>
    <li style="text-align: justify;">Peraturan Rektor Institut Teknologi Sepuluh Nopember Nomor 1 Tahun 2019 tentang <strong>Pedoman Pengelolaan Keuangan Institut Teknologi Sepuluh Nopember</strong>.</li>
    <li style="text-align: justify;">Peraturan Rektor Institut Teknologi Sepuluh Nopember Nomor 28 Tahun 2018 tentang  <strong>Standar Biaya Institut Teknologi Sepuluh Nopember Tahun Anggaran 2019.</strong></li>
</ol>
</div>

<div class="box-body menu"><strong>c. Kesimpulan</strong></div>

<div class="box-body tab1">
<p>Pengelolaan administrasi di Unit Kerja : unit$ belum tertib karena kurangnya pengendalian internal pimpinan Unit Kerja, kekurangcermatan dan belum optimal BPP dalam melaksanakan tanggungjawabnya dan lemahnya pengawasan PPK terkait, sehingga menyebebkan tertib administrasi keuangan tidak tercapai.</p>
</div>

<div class="box-body menu"><strong>d. Rekomendasi</strong></div>

<div class="box-body tab1">
<p>Pimpinan Unit Kerja mengistruksikan BPP terkait untuk segera mlengkapi bukti pertanggungjawaban pembayaran/pembelian barang/jasa sesuai peraturan yang berlaku.</p>
</div>

<div class="box-body menu"><strong>e. Tanggapan</strong></div>

<div class="box-body tab1">
<p>(Bisa disampaikan dalam kertas terpisah dan ditandatangani oleh pimpinan Unit Kerja Terkait)</p>
</div>

<p>&nbsp;</p>

<div class="temuan">
<div class="row">
<div class="col-sm-6">Surabaya, tanggalttd$</div>

<div class="col-sm-6 penutup">Menyetujui</div>
</div>

<div class="row">
<div class="col-sm-6">Ka Unit Audit internal Bidang Keuangan,</div>

<div class="col-sm-6 penutup">Auditan,</div>
</div>

<p>&nbsp;</p>

<div class="row">
<div class="col-sm-6"><strong> Ir. Tony Bambang M.,PGDip</strong></div>

<div class="col-sm-6 penutup">...................................</div>
</div>
</div>
</div>
</div>
</div>';
        $template->save();

        $template = new Kda_template;
        $template->tipe = 'kda Unaudited';
        $template->content = '<div class="box" id="kda1"><!-- /.box-header -->
<div class="box-body">
<div class="form-group">
<p style="text-align: center;"><strong><span style="font-size: 12px;">KERTAS DATA AUDIT</span></strong></p>

<div class="box-body biodata">
<p style="text-align: left; line-height: 0.05;"><strong><span style="font-weight: bold; font-size: 12px;"><label class="col-sm-2 control-label">Unit Kerja</label>: unit$</span></strong></p>

<p style="text-align: left; line-height: 0.05;"><strong><span style="font-weight: bold; font-size: 12px;"><label class="col-sm-2 control-label">Sasaran</label>: Pengelolaan Keuangan</span></strong></p>

<p style="text-align: left; line-height: 0.05;"><strong><span style="font-weight: bold; font-size: 12px;"><label class="col-sm-2 control-label">Sumber Dana</label>: Non PNBP</span></strong></p>

<p style="text-align: left; line-height: 0.05;"><strong><span style="font-weight: bold; font-size: 12px;"><label class="col-sm-2 control-label">Masa Audit</label>: masaaudit$</span></strong></p>

<p style="text-align: left; line-height: 0.05;"><strong><span style="font-weight: bold; font-size: 12px;"><label class="col-sm-2 control-label">Bulan Audit</label>: bulanaudit$</span></strong></p>

<p style="text-align: left; line-height: 0.05;"><strong><span style="font-weight: bold; font-size: 12px;"><label class="col-sm-2 control-label">Auditor</label>: auditor$</span></strong></p>
</div>

<p>&nbsp;</p>

<div class="temuan">
<div class="row">
<p style="line-height: 0.05;"><strong><label class="col-sm-3 control-label">Kode Temuan 1.04 </label></strong>: Ketidakpatuhan terhadap Peraturan : dokumen SPJ unaudited</p>
</div>

<div class="row row-bottom-margin">
<div><strong><label class="col-sm-3 control-label">Deskripsi Masalah</label></strong></div>

<div class="deskripsi">: Pertanggungjawaban pembayaran/ pembelian barang/jasa tidak akuntabel (bukti tidak lengkap/tidak valid)</div>
</div>
</div>

<div class="box-body menu"><strong>Uraian</strong></div>

<div class="box-body menu"><strong>a. Kondisi:</strong></div>

<div class="box-body tab1"><span>Dokumen SPJ bulan bulan$ tahun tahun$ di Unit Kerja : unit$ tidak diserahkan.</span></div>
<p>&nbsp;</p>

<div style="text-align: left; line-height: 1;">&nbsp; &nbsp; &nbsp; &nbsp; <strong>1. Kelengkapan berkas SPJ</strong></div>

<div>kdaketerangan2$</div>

<p>&nbsp;</p>
<div class="tg-wrap">&nbsp; &nbsp; &nbsp; &nbsp; <strong>2. Ketidakpatuhan terhadap aturan yang berlaku</strong></div>

<div>temuan$</div>

<div class="box-body menu"><strong>b. Kriteria</strong></div>

<div class="box-body tab2">
<ol>
    <li style="text-align: justify;">&nbsp;Peraturan Pemerintah RI Nomor 45 Tahun 2013 tanggal 7 juni 2013 tentang Tata Cara Pelaksanaan Anggaran dan Belanja Negara, Pasal 65 ayat (1): &quot;<strong>Penyelesaian tagihan kepada negara atas beban anggaran Belanja Negara yang tertuang dalam APBN dilaksanakan berdasarkan hak dan bukti yang sah untuk memperoleh bayaran&quot;.</strong></li>
    <li style="text-align: justify;">Peraturan Rektor Institut Teknologi Sepuluh Nopember Nomor 5 Tahun 2018 tentang <strong> Pengadaan Bahan Habis Umum dan Barang Inventaris Umum.</strong></li>
    <li style="text-align: justify;">Peraturan Rektor Institut Teknologi Sepuluh Nopember Nomor 1 Tahun 2019 tentang <strong>Pedoman Pengelolaan Keuangan Institut Teknologi Sepuluh Nopember</strong>.</li>
    <li style="text-align: justify;">Peraturan Rektor Institut Teknologi Sepuluh Nopember Nomor 28 Tahun 2018 tentang  <strong>Standar Biaya Institut Teknologi Sepuluh Nopember Tahun Anggaran 2019.</strong></li>
</ol>
</div>

<div class="box-body menu"><strong>c. Kesimpulan</strong></div>

<div class="box-body tab1">
<p>Pengelolaan administrasi di unit$ belum tertib karena kurangnya pengendalian internal pimpinan Unit Kerja, kekurangcermatan dan belum optimal BPP dalam melaksanakan tanggung jawab nya dan lemahnya pengawasan PPK terkait, sehingga menyebabkan tertib administrasi keuangan tidak tercapai.</p>
</div>

<div class="box-body menu"><strong>d. Rekomendasi</strong></div>

<div class="box-body tab1">
<p>Pimpinan Unit Kerja menginstruksikan BPP terkait untuk segera melengkapi bukti pertanggungjawaban pembayaran/pembelian barang/jasa sesuai peraturan yang berlaku.</p>
</div>

<div class="box-body menu"><strong>e. Tanggapan</strong></div>

<div class="box-body tab1">
<p>(Bisa disampaikan dalam kertas terpisah dan ditandatangani oleh pimpinan Unit Kerja Terkait).</p>
</div>

<p>&nbsp;</p>

<div class="temuan">
<div class="row">
<div class="col-sm-6">Surabaya, tanggalttd$</div>

<div class="col-sm-6 penutup">Menyetujui</div>
</div>

<div class="row">
<div class="col-sm-6">Kepala Kantor Audit Internal,</div>

<div class="col-sm-6 penutup">Auditan,</div>
</div>

<p>&nbsp;</p>

<div class="row">
<div class="col-sm-6"><strong>Ir. Mutiah Salamah Chamid., M.Kes</strong></div>

<div class="col-sm-6 penutup">...................................</div>
</div>
</div>
</div>
</div>
</div>';
        $template->save();

        $template = new Kda_template;
        $template->tipe = 'kda tanpa pengajuan umk';
        $template->content = '<div id="kda1" class="box"><!-- /.box-header -->
<div class="box-body">
<div class="form-group">
<p style="text-align: center;"><strong><span style="font-size: 12px;">KERTAS DATA AUDIT</span></strong></p>

<div class="box-body biodata">
 <p style="text-align: left; line-height: 0.05;"><strong><span style="font-weight: bold; font-size: 12px;"><label class="col-sm-2 control-label">Unit Kerja</label>: unit$</span></strong></p>
<p style="text-align: left; line-height: 0.05;"><strong><span style="font-weight: bold; font-size: 12px;"><label class="col-sm-2 control-label">Sasaran</label>: Pengelolaan Keuangan</span></strong></p>
<p style="text-align: left; line-height: 0.05;"><strong><span style="font-weight: bold; font-size: 12px;"><label class="col-sm-2 control-label">Sumber Dana</label>: Non PNBP</span></strong></p>
<p style="text-align: left; line-height: 0.05;"><strong><span style="font-weight: bold; font-size: 12px;"><label class="col-sm-2 control-label">Masa Audit</label>: masaaudit$</span></strong></p>
<p style="text-align: left; line-height: 0.05;"><strong><span style="font-weight: bold; font-size: 12px;"><label class="col-sm-2 control-label">Bulan Audit</label>: bulanaudit$</span></strong></p>
<p style="text-align: left; line-height: 0.05;"><strong><span style="font-weight: bold; font-size: 12px;"><label class="col-sm-2 control-label">Auditor</label>: auditor$</span></strong></p>
</div>
<p>&nbsp;</p>

<div>
<p style="text-align: left; line-height: 0.05;"><strong><label class="col-sm-3 control-label">Temuan</label></strong>: -</p>
<p style="text-align: left; line-height: 0.05;"><strong><label class="col-sm-3 control-label">Deskripsi Masalah</label></strong>: -</p>
</div>

<div class="box-body menu"><strong>Uraian</strong></div>
<div class="box-body menu"><strong>a. Kondisi:</strong></div>
<div class="box-body tab1"><p>kondisi$</p></div>


<div class="box-body menu"><strong>b. Kriteria</strong></div>
<div class="box-body tab1"><p>-</p></div>

<div class="box-body menu"><strong>c. Kesimpulan</strong></div>
<div class="box-body tab1"><p>kesimpulan$</p></div>

<div class="box-body menu"><strong>d. Saran</strong></div>
<div class="box-body tab1"><p>saran$</p></div>

<div class="box-body menu"><strong>e. Rekomendasi</strong></div>
<div class="box-body tab1"><p>rekomendasi$</p></div>

<div class="box-body menu"><strong>f. Tanggapan</strong></div>
<div class="box-body tab1"><p>tanggapan$</p></div>

<p>&nbsp;</p>
<div class="temuan">
    <div class="row">
        <div class="col-sm-6">Surabaya, tanggalttd$</div>
        <div class="col-sm-6 penutup">Menyetujui</div>
    </div>
    <div class="row">
        <div class="col-sm-6">Ka Unit Audit internal Bidang Keuangan,</div>
        <div class="col-sm-6 penutup">Auditan,</div>
    </div>
    <p>&nbsp;</p>
    <div class="row">
        <div class="col-sm-6"><strong>Ir. Tony Bambang M.,PGDip</strong></div>
        <div class="col-sm-6 penutup">...................................</div>
    </div>
</div>

</div>
</div>
</div>';
        $template->save();

        $template = new Kda_template;
        $template->tipe = 'kda tanpa temuan web';
        $template->content = '<div class="box" id="kda1">
<div class="box-body">
<h2 align="center">FORM KDA TANPA TEMUAN</h2>

<form id="add_kda1" name="add_kda1"><!-- <div class="alert alert-danger print-error-msg" style="display: none;">&nbsp;</div> --><!-- <div class="alert alert-success print-success-msg" style="display:none">
                      <ul></ul>
                    </div> -->
<p style="text-align: center;"><strong><span style="font-size: 12px;">KERTAS DATA AUDIT</span></strong></p>

<div class="box-body biodata">
  <div class="row1">
    <label class="col-sm-2 col-form-label">Unit Kerja</label>
    <div class="col-sm-10 listunit">
      
    </div>
  </div>
  <div class="row1">
    <label class="col-sm-2 col-form-label">Sasaran</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" value="Pengelolaan Keuangan" style="width:170px" readonly>
    </div>
  </div>
  <div class="row1">
    <label class="col-sm-2 col-form-label">Sumber Dana</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" value="Non PNBP" style="width:170px" readonly>
    </div>
  </div>
  <div class="row1">
    <label class="col-sm-2 col-form-label">Masa Audit</label>
    <div class="col-sm-10">
      <input class=" form-control masa_audit" name="masa_audit" type="month" style="width:170px">
    </div>
  </div>
  <div class="row1">
    <label class="col-sm-2 col-form-label">Bulan Audit</label>
    <div class="col-sm-10">
      <input class=" form-control bulan_audit" name="bulan_audit" type="date" style="width:170px">
    </div>
  </div>
  <div class="row1">
    <label class="col-sm-2 col-form-label">Auditor</label>
    <div class="col-sm-10">
      <input class="form-control auditor"  id="auditor2" name="auditor" readonly type="text" style="width:170px">
    </div>
  </div>
</div>

<div style="text-align: left;"><strong><span style="font-size: 12px;">&nbsp;</span></strong></div>

<div style="text-align: left;"><strong><span style="font-size: 12px;">&nbsp;</span></strong></div>

<div style="text-align: left;"><strong>Kode Temuan 1.04</strong>&nbsp; &nbsp; : Ketidakpatuhan terhadap Peraturan : -</div>

<div style="text-align: left;"><strong>Deskripsi Masalah</strong>&nbsp; &nbsp; : -</div>

<div style="text-align: left;">&nbsp;</div>

<div style="text-align: left;"><strong>Uraian</strong></div>

<div style="text-align: left;"><strong>a. Kondisi:</strong></div>

<ul>
    <li style="text-align: justify; line-height: 1;">&nbsp; &nbsp; Hasil audit dokumen SPJ diketahui bahwa pengelolaan administrasi keuangan bulan <input class="bulan" readonly="readonly" type="text" /> tahun <input class="tahun" readonly="readonly" type="text" /> yang dilaksanakan BPP di Unit Kerja : <input class="unit" readonly="readonly" type="text" /> sudah tertib.</li>
</ul>
<p style="text-align: left; line-height: 1;"><strong>&nbsp;</strong></p>
<p style="text-align: left; line-height: 1;">&nbsp; &nbsp; &nbsp; &nbsp; <strong>1. Kelengkapan berkas SPJ</strong></p>



<table class="table table-bordered" id="dynamic_field1">
    <thead>
        <tr>
            <th>Kelengkapan</th>
            <th>Ada / Tidak Ada</th>
            <th>Jumlah</th>
            <th>Nominal</th>
            <th><button class="add1 btn btn-success" name="add" type="button">Add More</button></th>
        </tr>
    </thead>
    <tbody class="keterangan1">
    </tbody>
</table>

<div class="tg-wrap">&nbsp;</div>

<div class="tg-wrap">&nbsp; &nbsp; &nbsp; &nbsp; <strong>2. Ketidakpatuhan terhadap aturan yang berlaku</strong></div>
<table  class="table table-bordered" align="center" style="width:100%">
              <thead>
                <th align="center" width=35%>No. Kwitansi</th>
                <th align="center" width=15%>Nominal (Rp)</th>
                <th align="center" width=50%>Uraian Temuan</th>
              </thead>
              <tbody>
                <tr>
                  <td align="center">-</td>
                  <td align="right">-</td>
                  <td align="center">-</td>
                </tr>
              </tbody>
            </table>

<div class="tg-wrap">&nbsp;</div>

<p><strong>b. Kriteria</strong></p>

<ol>
    <li style="text-align: justify;">&nbsp;Peraturan Pemerintah RI Nomor 45 Tahun 2013 tanggal 7 juni 2013 tentang Tata Cara Pelaksanaan Anggaran dan Belanja Negara, Pasal 65 ayat (1): &quot;<strong>Penyelesaian tagihan kepada negara atas beban anggaran Belanja Negara yang tertuang dalam APBN dilaksanakan berdasarkan hak dan bukti yang sah untuk memperoleh bayaran&quot;.</strong></li>
    <li style="text-align: justify;">Peraturan Rektor Institut Teknologi Sepuluh Nopember Nomor 5 Tahun 2018 tentang <strong> Pengadaan Bahan Habis Umum dan Barang Inventaris Umum.</strong></li>
    <li style="text-align: justify;">Peraturan Rektor Institut Teknologi Sepuluh Nopember Nomor 1 Tahun 2019 tentang <strong>Pedoman Pengelolaan Keuangan Institut Teknologi Sepuluh Nopember</strong>.</li>
    <li style="text-align: justify;">Peraturan Rektor Institut Teknologi Sepuluh Nopember Nomor 28 Tahun 2018 tentang  <strong>Standar Biaya Institut Teknologi Sepuluh Nopember Tahun Anggaran 2019.</strong></li>
</ol>

<p style="text-align: justify;"><strong>c. Kesimpulan</strong></p>

<p style="text-align: justify;">&nbsp; &nbsp; Pengelolaan administrasi di Unit Kerja : <input class="unit" readonly="readonly" type="text" /> sudah sesuai dengan ketentuan yang berlaku.</p>

<p><strong>d. Rekomendasi</strong></p>

<p style="text-align: justify;">&nbsp; &nbsp; -</p>

<p style="text-align: justify;"><strong>e. Saran</strong></p>

<p style="text-align: justify;">&nbsp; &nbsp; Untuk dipertahankan agar pengelolaan keuangan tetap tertib.</p>

<p><strong>&nbsp;</strong></p>

<p><strong>&nbsp;</strong></p>

<p>Surabaya, <input class="bulan_audit" type="date" /> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;Menyetujui</p>

<p>Ka Unit Audit internal Bidang Keuangan,&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Auditan,</p>

<p>&nbsp;</p>

<p>&nbsp;</p>

<p>&nbsp;</p>

<p>Ir. Tony Bambang M.,PGDip&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;...................................</p>
<input class="submitkda btn btn-info" name="submitkda" type="button" value="Submit" />&nbsp;</form>
</div>
</div>';
        $template->save();

        $template = new Kda_template;
        $template->tipe = 'kda dengan temuan web';
        $template->content = '<div class="box" id="kda2">
    <div class="box-body">
      <h2 align="center">FORM KDA DENGAN TEMUAN</h2> 
      <form name="add_kda2" id="add_kda2">
<p style="text-align: center;"><strong><span style="font-size: 12px;">KERTAS DATA AUDIT</span></strong></p>
<div class="box-body biodata">
  <div class="row1">
    <label class="col-sm-2 col-form-label">Unit Kerja</label>
    <div class="col-sm-10 listunit">
      
    </div>
  </div>
  <div class="row1">
    <label class="col-sm-2 col-form-label">Sasaran</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" value="Pengelolaan Keuangan" style="width:170px" readonly>
    </div>
  </div>
  <div class="row1">
    <label class="col-sm-2 col-form-label">Sumber Dana</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" value="Non PNBP" style="width:170px" readonly>
    </div>
  </div>
  <div class="row1">
    <label class="col-sm-2 col-form-label">Masa Audit</label>
    <div class="col-sm-10">
      <input class=" form-control masa_audit" name="masa_audit" type="month" style="width:170px">
    </div>
  </div>
  <div class="row1">
    <label class="col-sm-2 col-form-label">Bulan Audit</label>
    <div class="col-sm-10">
      <input class=" form-control bulan_audit" name="bulan_audit" type="date" style="width:170px">
    </div>
  </div>
  <div class="row1">
    <label class="col-sm-2 col-form-label">Auditor</label>
    <div class="col-sm-10">
      <input class="form-control auditor"  id="auditor2" name="auditor" readonly type="text" style="width:170px">
    </div>
  </div>
</div>
<div style="text-align: left;"><strong><span style="font-size: 12px;">&nbsp;</span></strong></div>
<div style="text-align: left;"><strong><span style="font-size: 12px;">&nbsp;</span></strong></div>

<div style="text-align: left;"><strong>Kode Temuan 1.04</strong>&nbsp; &nbsp; : Ketidakpatuhan terhadap Peraturan : <select name="kode_temuan">
  <option value="1.04">1.04 - Administrasi</option>
  <option value="2.04">2.04 - Kerugian Negara</option>
</select></div>
<div style="text-align: left;"><strong>Deskripsi Masalah</strong>&nbsp; &nbsp; : Pertanggungjawaban pembayaran/ pembelian barang/jasa tidak akuntabel (bukti tidak lengkap/tidak valid)</div>
<div style="text-align: left; line-height: 1;">&nbsp;</div>
<div style="text-align: left; line-height: 1;"><span style="font-family: "Times New Roman";"><strong>Uraian</strong></span></div>
<div style="text-align: left; line-height: 1;"><span style="font-family: "Times New Roman";"><strong>a. Kondisi:</strong></span></div>
<ul>
<li style="text-align: justify; line-height: 1;">&nbsp; &nbsp; Hasil audit dokumen SPJ diketahui bahwa pengelolaan administrasi keuangan bulan <input class="bulan" readonly="readonly" type="text" /> tahun <input class="tahun" readonly="readonly" type="text" /> di Unit Kerja : <input class="unit" readonly="readonly" type="text" /> belum sepenuhnya tertib, yaitu:</li>
</ul>
<p style="text-align: left; line-height: 1;"><strong>&nbsp;</strong></p>
<p style="text-align: left; line-height: 1;">&nbsp; &nbsp; &nbsp; &nbsp; <strong>1. Kelengkapan berkas SPJ</strong></p>
<table class="table table-bordered" id="dynamic_field1">  
                    <thead>
                            <tr>
                              <th>Kelengkapan</th>
                              <th>Ada / Tidak Ada</th>
                              <th>Jumlah</th>
                              <th>Nominal</th>
<th><button type="button" name="add"  class="add1 btn btn-success">Add More</button></th>
                            </tr>
                    </thead>
                    <tbody class="keterangan1">
                    </tbody>
                  </table> 


<div class="tg-wrap">&nbsp;</div>
<div class="tg-wrap">&nbsp; &nbsp; &nbsp; &nbsp; <strong>2. Ketidakpatuhan terhadap aturan yang berlaku</strong> <button type="button" class="btn btn-xs btn-warning" data-toggle="modal" data-target="#berkas">Berkas</button> <a href="/dokumen" target="_blank">  (Aturan Yang berlaku)</a></div>
<table  id="dynamic_field" class="table table-bordered" align="center" style="width:100%">
              <thead>
                <th align="center" width=30%>No. Kwitansi</th>
                <th align="center" width=20%>Nominal (Rp)</th>
                <th align="center" width=50%>Uraian Temuan</th>
              </thead>
              <tbody>
                <tr>
                  <td><input class="form-control name_list" name="kwitansi[]" type="text" placeholder="Nomor kwitansi" /></td>
                  <td><input class="form-control name_list" name="nominal[]" type="text" placeholder="masukkan nominal" /></td>
                  <td><input class="form-control name_list" name="keterangan[]" type="text" placeholder="masuk keterangan" /></td>
                  <td><button id="add" class="btn btn-success" name="add" type="button">Add More</button></td>
                </tr>
              </tbody>
            </table>
<div class="tg-wrap"><strong>&nbsp;</strong></div>
<p id="temuanlama"></p>
<p><strong>b. Kriteria</strong></p>
<ol>
    <li style="text-align: justify;">&nbsp;Peraturan Pemerintah RI Nomor 45 Tahun 2013 tanggal 7 juni 2013 tentang Tata Cara Pelaksanaan Anggaran dan Belanja Negara, Pasal 65 ayat (1): &quot;<strong>Penyelesaian tagihan kepada negara atas beban anggaran Belanja Negara yang tertuang dalam APBN dilaksanakan berdasarkan hak dan bukti yang sah untuk memperoleh bayaran&quot;.</strong></li>
    <li style="text-align: justify;">Peraturan Rektor Institut Teknologi Sepuluh Nopember Nomor 5 Tahun 2018 tentang <strong> Pengadaan Bahan Habis Umum dan Barang Inventaris Umum.</strong></li>
    <li style="text-align: justify;">Peraturan Rektor Institut Teknologi Sepuluh Nopember Nomor 1 Tahun 2019 tentang <strong>Pedoman Pengelolaan Keuangan Institut Teknologi Sepuluh Nopember</strong>.</li>
    <li style="text-align: justify;">Peraturan Rektor Institut Teknologi Sepuluh Nopember Nomor 28 Tahun 2018 tentang  <strong>Standar Biaya Institut Teknologi Sepuluh Nopember Tahun Anggaran 2019.</strong></li>
</ol>
<p style="text-align: justify;"><strong>c. Kesimpulan</strong></p>
<p style="text-align: justify;">&nbsp; &nbsp; Pengelolaan administrasi di Unit Kerja : <input class="unit" readonly="readonly" type="text" /> belum tertib karena kurangnya pengendalian internal pimpinan Unit Kerja, kekurangcermatan dan belum optimal BPP dalam melaksanakan tanggungjawabnya dan lemahnya pengawasan PPK terkait, sehingga menyebebkan tertib administrasi keuangan tidak tercapai.</p>
<p><strong>d. Rekomendasi</strong></p>
<p style="text-align: justify;">&nbsp; &nbsp; Pimpinan Unit Kerja mengistruksikan BPP terkait untuk :</p>
<ol>
  <li style="text-align: justify;">Lebih teliti dan rapi ketika melengkapi bukti pertanggungjawaban pembayaran/pembelian barang/jasa sesuai peraturan yang berlaku.</li>
  <li style="text-align: justify;">Mematuhi pengelolaan keuangan sesuai dengan peraturan yang berlaku.</li>
</ol>

<p style="text-align: justify;"><strong>e. Tanggapan</strong></p>
<p style="text-align: justify;">&nbsp; &nbsp; (Bisa disampaikan dalam kertas terpisah dan ditandatangani oleh pimpinan Unit Kerja Terkait)</p>
<p><strong>&nbsp;</strong></p>
<p><strong>&nbsp;</strong></p>
<p>Surabaya, <input class="bulan_audit" type="date" /> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;Menyetujui</p>
<p>Ka Unit Audit internal Bidang Keuangan,&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Auditan,</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p><strong> Ir. Tony Bambang M.,PGDip</strong>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;...................................</p>
          <input type="button" name="submitkda" class="submitkda btn btn-info" value="Submit" /> 
      </form>  
    </div>
</div>';
        $template->save();

        $template = new Kda_template;
        $template->tipe = 'kda Unaudited web';
        $template->content = '<div class="box" id="kda3">
<div class="box-body">
<h2 align="center">FORM KDA TANPA AUDIT</h2>

<form id="add_kda3" name="add_kda3">
<p style="text-align: center;"><strong><span style="font-size: 12px;">KERTAS DATA AUDIT</span></strong></p>

<div class="box-body biodata">
  <div class="row1">
    <label class="col-sm-2 col-form-label">Unit Kerja</label>
    <div class="col-sm-10 listunit">
      
    </div>
  </div>
  <div class="row1">
    <label class="col-sm-2 col-form-label">Sasaran</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" value="Pengelolaan Keuangan" style="width:170px" readonly>
    </div>
  </div>
  <div class="row1">
    <label class="col-sm-2 col-form-label">Sumber Dana</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" value="Non PNBP" style="width:170px" readonly>
    </div>
  </div>
  <div class="row1">
    <label class="col-sm-2 col-form-label">Masa Audit</label>
    <div class="col-sm-10">
      <input class=" form-control masa_audit" name="masa_audit" type="month" style="width:170px">
    </div>
  </div>
  <div class="row1">
    <label class="col-sm-2 col-form-label">Bulan Audit</label>
    <div class="col-sm-10">
      <input class=" form-control bulan_audit" name="bulan_audit" type="date" style="width:170px">
    </div>
  </div>
  <div class="row1">
    <label class="col-sm-2 col-form-label">Auditor</label>
    <div class="col-sm-10">
      <input class="form-control auditor"  id="auditor2" name="auditor" readonly type="text" style="width:170px">
    </div>
  </div>
</div>

<div style="text-align: left;"><strong><span style="font-size: 12px;">&nbsp;</span></strong></div>

<div style="text-align: left;"><strong><span style="font-size: 12px;">&nbsp;</span></strong></div>

<div style="text-align: left;"><strong>Kode Temuan 1.04</strong>&nbsp; &nbsp; : Ketidakpatuhan terhadap Peraturan : dokumen SPJ unaudited</div>

<div style="text-align: left;"><strong>Deskripsi Masalah</strong>&nbsp; &nbsp; : Pertanggungjawaban pembayaran/ pembelian barang/jasa tidak akuntabel (bukti tidak lengkap/tidak valid)</div>

<div style="text-align: left;">&nbsp;</div>

<div style="text-align: left;"><strong>Uraian</strong></div>

<div style="text-align: left;"><strong>a. Kondisi:</strong></div>
<ul>
    <li style="text-align: justify; line-height: 1;">&nbsp; &nbsp; Dokumen SPJ bulan <input class="bulan" readonly="readonly" type="text" /> tahun <input class="tahun" readonly="readonly" type="text" /> di Unit Kerja : <input class="unit" readonly="readonly" type="text" /> tidak diserahkan.</li>
</ul>
<p style="text-align: left; line-height: 1;"><strong>&nbsp;</strong></p>
<p style="text-align: left; line-height: 1;">&nbsp; &nbsp; &nbsp; &nbsp; <strong>1. Kelengkapan berkas SPJ</strong></p>



<table class="table table-bordered" id="dynamic_field1">
    <thead>
        <tr>
            <th>Kelengkapan</th>
            <th>Ada / Tidak Ada</th>
            <th>Jumlah</th>
            <th>Nominal</th>
            <th><button class="add1 btn btn-success" name="add" type="button">Add More</button></th>
        </tr>
    </thead>
    <tbody class="keterangan1">
    </tbody>
</table>

<div class="tg-wrap">&nbsp;</div>

<div class="tg-wrap">&nbsp; &nbsp; &nbsp; &nbsp; <strong>2. Ketidakpatuhan terhadap aturan yang berlaku</strong></div>
<table  class="table table-bordered" align="center" style="width:100%">
              <thead>
                <th align="center" width=35%>No. Kwitansi</th>
                <th align="center" width=15%>Nominal (Rp)</th>
                <th align="center" width=50%>Uraian Temuan</th>
              </thead>
              <tbody>
                <tr>
                  <td align="center">-</td>
                  <td align="right">-</td>
                  <td align="center">-</td>
                </tr>
              </tbody>
            </table>

<div class="tg-wrap">&nbsp;</div>

<p><strong>b. Kriteria</strong></p>

<ol>
    <li style="text-align: justify;">&nbsp;Peraturan Pemerintah RI Nomor 45 Tahun 2013 tanggal 7 juni 2013 tentang Tata Cara Pelaksanaan Anggaran dan Belanja Negara, Pasal 65 ayat (1): &quot;<strong>Penyelesaian tagihan kepada negara atas beban anggaran Belanja Negara yang tertuang dalam APBN dilaksanakan berdasarkan hak dan bukti yang sah untuk memperoleh bayaran&quot;.</strong></li>
    <li style="text-align: justify;">Peraturan Rektor Institut Teknologi Sepuluh Nopember Nomor 5 Tahun 2018 tentang <strong> Pengadaan Bahan Habis Umum dan Barang Inventaris Umum.</strong></li>
    <li style="text-align: justify;">Peraturan Rektor Institut Teknologi Sepuluh Nopember Nomor 1 Tahun 2019 tentang <strong>Pedoman Pengelolaan Keuangan Institut Teknologi Sepuluh Nopember</strong>.</li>
    <li style="text-align: justify;">Peraturan Rektor Institut Teknologi Sepuluh Nopember Nomor 28 Tahun 2018 tentang  <strong>Standar Biaya Institut Teknologi Sepuluh Nopember Tahun Anggaran 2019.</strong></li>
</ol>

<p style="text-align: justify;"><strong>c. Kesimpulan</strong></p>
<p style="text-align: justify;">&nbsp; &nbsp; Pengelolaan administrasi di <input class="unit" readonly="readonly" type="text" /> belum tertib karena kurangnya pengendalian internal pimpinan Unit Kerja, kekurangcermatan dan belum optimal BPP dalam melaksanakan tanggung jawab nya dan lemahnya pengawasan PPK terkait, sehingga menyebabkan tertib administrasi keuangan tidak tercapai.</p>

<p><strong>d. Rekomendasi</strong></p>

<p style="text-align: justify;">&nbsp; &nbsp; Pimpinan Unit Kerja menginstruksikan BPP terkait untuk segera melengkapi bukti pertanggungjawaban pembayaran/pembelian barang/jasa sesuai peraturan yang berlaku.</p>

<p style="text-align: justify;"><strong>e. Tanggapan</strong></p>

<p style="text-align: justify;">&nbsp; &nbsp; (Bisa disampaikan dalam kertas terpisah dan ditandatangani oleh pimpinan Unit Kerja Terkait).</p>

<p><strong>&nbsp;</strong></p>

<p><strong>&nbsp;</strong></p>

<p>Surabaya, <input class="bulan_audit" type="date" /> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;Menyetujui</p>

<p>Kepala Kantor Audit Internal,&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Auditan,</p>

<p>&nbsp;</p>

<p>&nbsp;</p>

<p>&nbsp;</p>

<p><strong> Ir. Mutiah Salamah Chamid., M.Kes</strong>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;...................................</p>
<input class="submitkda btn btn-info" name="submitkda" type="button" value="Submit" />&nbsp;</form>
</div>
</div>';
        $template->save();

        $template = new Kda_template;
        $template->tipe = 'kda tanpa pengajuan umk web';
        $template->content = '<div class="box" id="kda4">
  <div class="box-body">
      <h2 align="center" id="judulform4">FORM KDA</h2>
     <form name="add_kda4" id="add_kda4"> 
<p style="text-align: center;"><strong><span style="font-size: 12px;">KERTAS DATA AUDIT</span></strong></p>
<div class="box-body biodata">
  <div class="row1">
    <label class="col-sm-2 col-form-label">Unit Kerja</label>
    <div class="col-sm-10 listunit">
      
    </div>
  </div>
  <div class="row1">
    <label class="col-sm-2 col-form-label">Sasaran</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" value="Pengelolaan Keuangan" style="width:170px" readonly>
    </div>
  </div>
  <div class="row1">
    <label class="col-sm-2 col-form-label">Sumber Dana</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" value="Non PNBP" style="width:170px" readonly>
    </div>
  </div>
  <div class="row1">
    <label class="col-sm-2 col-form-label">Masa Audit</label>
    <div class="col-sm-10">
      <input class=" form-control masa_audit" name="masa_audit" type="month" style="width:170px">
    </div>
  </div>
  <div class="row1">
    <label class="col-sm-2 col-form-label">Bulan Audit</label>
    <div class="col-sm-10">
      <input class=" form-control bulan_audit" name="bulan_audit" type="date" style="width:170px">
    </div>
  </div>
  <div class="row1">
    <label class="col-sm-2 col-form-label">Auditor</label>
    <div class="col-sm-10">
      <input class="form-control auditor"  id="auditor2" name="auditor" readonly type="text" style="width:170px">
    </div>
  </div>
</div>

<div style="text-align: left;"><strong><span style="font-size: 12px;">&nbsp;</span></strong></div>
<div style="text-align: left;"><strong><span style="font-size: 12px;">&nbsp;</span></strong></div>

<p style="text-align: justify;"><strong>Temuan</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;-</p>
<p style="text-align: justify;"><span style="font-family: "Times New Roman";"><strong>Deskripsi Masalah</strong></span>&nbsp; &nbsp; &nbsp; :&nbsp;-</p>
<p><strong>Uraian</strong></p>
<p><input id="jenis_kda4" class="jenis_kda3 form-control name_list" name="jenis_kda3" type="hidden" value="4" /></p>
<p><strong>a. Kondisi:</strong></p>
<p>&nbsp; &nbsp;&nbsp; <input id="kondisi" class="form-control name_list" name="kondisi" type="textarea" placeholder="Deskripsi Kondisi" /></p>
<p><strong>b. Kriteria:</strong></p>
<p>&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" id="kriteria" name="kriteria" placeholder="Deskripsi Kriteria" class="form-control name_list" value="-"/> </p>
<p><strong>c. Kesimpulan :</strong></p>
<p>&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" id="kesimpulan" name="kesimpulan" placeholder="Deskripsi Kesimpulan" class="form-control name_list" value="-"/> </p>
<p><strong>d. Saran :</strong></p>
<p>&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" id="saran" name="saran" placeholder="Deskripsi Saran" class="form-control name_list" value="-"/> </p>
<p><strong>e. Rekomendasi :</strong></p>
<p>&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" id="rekomendasi" name="rekomendasi" placeholder="Deskripsi Rekomendasi" class="form-control name_list" value="-"/> </p>
<p><strong>f. Tanggapan :</strong></p>
<p>&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" id="tanggapan" name="tanggapan" placeholder="Deskripsi Tanggapan" class="form-control name_list"  value="-"/> </p>
<p>&nbsp;</p>
<p>Surabaya, <input class="bulan_audit" type="date" /> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Menyetujui</p>
<p>Kepala Kantor Audit Internal,&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Auditan,</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p><strong>Ir. Mutiah Salamah Chamid., M.Kes</strong>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;...................................</p>
<p>&nbsp;</p>

  <input class="submitkda btn btn-info" name="submitkda" type="button" value="Submit" />
    </form>
</div>
</div>';
        $template->save();
    }
}
