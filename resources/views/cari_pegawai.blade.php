@extends('master')

@section('title')
    Data pegawai
@endsection
@section('right_title')
  <li class="active">Data pegawai</li>
@endsection
@section('content')
{{-- <br/> --}}
<h3 class="box-title m-b-0">CARI DATA PEGAWAI</h3>
<div class="panel panel-default">
  <table border="0" style="width: 67%; margin: 0 auto 2em auto;">
        <thead>
            <tr>
                <th class="col-sm-1">Target</th>
                <th class="col-sm-9">NIP</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Pegawai</td>
                   <div class="form-group" id="form-kegiatan">
                    <form action="#" method="POST"> 
                      {{csrf_field()}} 
                    <td>                           
                      <input type="text" name="versi" placeholder="Masukkan Nomor Induk Pegawai" class="form-control" required />
                    </td>
                    <td>
                      &ensp;
                      <input type="submit" name="submit" id="submit" class="btn btn-primary btn-md btn-rounded" value="Search" /> 
                    </td>
                  </form>
                </div>
            </tr>
        </tbody>
    </table>
  </br>
  <div class="panel-footer">
  <h4 style="margin-left: 36%;">Hasil pencarian data pegawai</h4>
  <table border="0" style="margin-left: 35%;">
    <tr>
      <th class="col-sm-2">NIP</th>
      <td class="col-sm-5">NIP</td>
    </tr>
    <tr>
      <th class="col-sm-2">Nama</th>
      <td class="col-sm-5">Nama</td>
    </tr>
    <tr>
      <th class="col-sm-2">Jabatan</th>
      <td class="col-sm-5">Jabatan</td>
    </tr>
  </table>
</div>
</div>
@endsection
