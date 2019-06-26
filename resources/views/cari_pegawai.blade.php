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
                    <td>                           
                      <input type="text" name="cari" id="cari" placeholder="Masukkan Nomor Induk Pegawai" class="form-control" required />
                    </td>
                    <td>
                      &ensp;
                      <input type="button" name="submitcari" id="submitcari" class="btn btn-primary btn-md btn-rounded" value="Search" />
                    </td>
                </div>
            </tr>
        </tbody>
    </table>
  </br>
  <div class="panel-footer">
  <h4 style="margin-left: 36%;">Hasil pencarian data pegawai</h4>
  <table id="tabelcari" class="table table-striped">
    <thead>
      <tr>
        <th>NIP</th>
        <th>Nama</th>
        <th>Jabatan</th>
      </tr>
    </thead>
  </table>
</div>
</div>
@endsection

@section('add-script')
<script>
  $("#submitcari").click(function(){
    var cari = $( "#cari" ).val();
    console.log(cari);
    $.ajax({
        //197205281997021001
        url: "https://api.its.ac.id:8243/audit/pegawai/"+cari,
        headers: {"Authorization": "Bearer 13a5750b-a51c-3193-9904-6b943ff95ee8"},
        type: 'GET',
        error: function() {
              console.log('Error');
            },
        dataType: 'json',
        success: function(data) {
            console.log(data);
            var dataTable = $("#tabelcari").DataTable();
              /////////////////////////////////////////////
              dataTable.clear().draw();
              $.each(data, function(index, value) {
                // console.log(idklik);
                // console.log(value);
                // var idbaps= value.BAPS_ID;
                // urutan = value.BAPS_URUTAN;
                // console.log(idbaps);
                // console.log(urutan);
                // var nama = value.BAPS_FILE;
                // use data table row.add, then .draw for table refresh
                var nip = value.nip;
                var nama = value.nama;
                var jabatan = value.jabatan;
                
                dataTable.row.add([nip, nama, jabatan ]).draw(true);
              });
        }
    });
  });
</script>
@endsection