@extends('master')

@section('title')
    Dashboard
@endsection
@section('add-css')
<style type="text/css">
  div.manage-users {
  background-color: red;
  }
  td {
  font-size: small;
  }
  .white-box {
    padding: 70px;
  }

  .sticon{

    background: #013880;
  }

  input[type="text"]:disabled{background-color:white;}
  textarea[class="form-control"]:disabled{background-color:white;}
</style>
@endsection
@section('content')
<br/>
<div class="row">
      <div class="manage-users">
          <div class="sttabs tabs-style-iconbox">
              <nav>
                  <ul>
                      <li><a href="#section-iconbox-1" class="sticon ti-book"><span>Standar Biaya Institut</span></a></li>
                      <li><a href="#section-iconbox-2" class="sticon ti-search"><span>Cari Data</span></a></li>
                      <li><a href="#section-iconbox-3" class="sticon ti-pencil-alt"><span>Kertas Data Audit</span></a></li>
                      <li><a href="#section-iconbox-4" class="sticon ti-notepad"><span>Temuan Kertas Data Audit</span></a></li>
                  </ul>
              </nav>
              <div class="content-wrap">
                  <section id="section-iconbox-1">
                      <div class="p-20 row">
                          <div class="col-sm-6">
                              <h3 class="m-t-0">Pilih Menu</h3>
                          </div>
                      </div>
                      <div class="table-responsive manage-table">
                          <table class="table">
                              <thead>
                                  <tr>
                                      <th class="col-sm-1">Menu</th>
                                      <th class="col-sm-2">Deskripsi</th>
                                  </tr>
                              </thead>
                              <tbody>
                                  <tr class="advance-table-row">
                                    <td><a href="/dokumen">
                                      Dokumen Standar Biaya Institut</a>
                                    </td>
                                    <td>Menu utama dokumen standar biaya institut</td>
                                  </tr>
                                  @if(Auth::user()->role!=3)
                                  <tr class="advance-table-row">
                                    <td><a href="/versisbi">
                                      Versi Standar Biaya Institut</a>
                                    </td>
                                    <td>Mengganti versi Standar Biaya Institut jika dilakukan perubahan secara menyeluruh</td>
                                  </tr>
                                  @endif
                              </tbody>
                          </table>
                      </div>
                  </section>
                  <section id="section-iconbox-2">
                      <div class="p-20 row">
                          <div class="col-sm-6">
                              <h3 class="m-t-0">Pilih Menu</h3>
                          </div>
                      </div>
                      <div class="table-responsive manage-table">
                          <table class="table">
                              <thead>
                                  <tr>
                                      <th>Menu</th>
                                      <th>Deskripsi</th>
                                  </tr>
                              </thead>
                              <tbody>
                                  <tr class="advance-table-row">
                                    <td><a href="/datapegawai">
                                      Cari Data Pegawai</a>
                                    </td>
                                    <td>Mencari data pegawai berdasarkan nama/NIP</td>
                                  </tr>
                                  <tr class="advance-table-row">
                                    <td><a href="/carisbi">
                                      Cari Data Standar Biaya Institut</a>
                                    </td>
                                    <td>Mencari data Standar Biaya Institut dengan memasukkan keyword</td>
                                  </tr>
                              </tbody>
                          </table>
                      </div>
                  </section>
                  <section id="section-iconbox-3">
                      <div class="p-20 row">
                          <div class="col-sm-6">
                              <h3 class="m-t-0">Pilih Menu</h3>
                          </div>
                      </div>
                      <div class="table-responsive manage-table">
                          <table class="table">
                             <thead>
                                  <tr>
                                      <th class="col-sm-1">Menu</th>
                                      <th class="col-sm-2">Deskripsi</th>
                                  </tr>
                              </thead>
                              <tbody>
                                  <tr class="advance-table-row">
                                    <td><a href="/buatkda">
                                      Buat Kertas Data Audit</a>
                                    </td>
                                    <td>Menu utama untuk membuat Kertas Data Audit</td>
                                  </tr>
                                  @if(Auth::user()->role!=3)
                                  <tr class="advance-table-row">
                                    <td><a href="/kda">
                                      Data Kertas Data Audit Semua</a>
                                    </td>
                                    <td>Menu untuk melihat seluruh data Kertas Data Audit yang telah diaudit oleh semua auditor</td>
                                  </tr>
                                  @endif
                                  <tr class="advance-table-row">
                                    <td><a href="/kdasendiri">
                                      Data Kertas Data Audit Sendiri</a>
                                    </td>
                                    <td>Menu untuk melihat data Kertas Data Audit yang telah diaudit</td>
                                  </tr>
                                  @if(Auth::user()->role!=3)
                                  <tr class="advance-table-row">
                                    <td><a href="/templatekda">
                                      Template Kertas Data Audit</a>
                                    </td>
                                    <td>Menu untuk melihat/mengganti template Kertas Data Audit yang digunakan</td>
                                  </tr>
                                  <tr class="advance-table-row">
                                    <td><a href="/kdatriwulan">
                                      Laporan Kertas Data Audit</a>
                                    </td>
                                    <td>Menu untuk melihat laporan Kertas Data Audit dan mengunduh laporan yang dibutuhkan</td>
                                  </tr>
                                  @endif
                              </tbody>
                          </table>
                      </div>
                  </section>
                  <section id="section-iconbox-4">
                      <div class="p-20 row">
                          <div class="col-sm-6">
                              <h3 class="m-t-0">Pilih Menu</h3>
                          </div>
                      </div>
                      <div class="table-responsive manage-table">
                          <table class="table">
                             <thead>
                                  <tr>
                                      <th>Menu</th>
                                      <th>Deskripsi</th>
                                  </tr>
                              </thead>
                              <tbody>
                                  @if(Auth::user()->role!=3)
                                  <tr class="advance-table-row">
                                    <td><a href="/temuankda">
                                      Data Temuan Kertas Data Audit Semua</a>
                                    </td>
                                    <td>Menu untuk melihat seluruh data temuan Kertas Data Audit yang telah diaudit oleh semua auditor</td>
                                  </tr>
                                  @endif
                                  <tr class="advance-table-row">
                                    <td><a href="/temuankdasendiri">
                                      Data Temuan Kertas Data Audit Sendiri</a>
                                    </td>
                                    <td>Menu untuk melihat data temuan Kertas Data Audit yang telah diaudit</td>
                                  </tr>
                              </tbody>
                          </table>
                      </div>
                  </section>
              </div>
              <!-- /content -->
          </div>
          <!-- /tabs -->
      </div>

  



</div>
@endsection
