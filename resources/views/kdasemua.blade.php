@extends('master')
@section('title')
    List KDA
@endsection
@section('right_title')
    <li class="active">KDA</li>
@endsection
@section('content')
<br/>
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          @if (session('message_success'))
      <div class="alert alert-success">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
          <strong><h4><i class="icon fa fa-check"></i> Sukses!</strong></h4>
          {{ session('message_success') }}
      </div>
  @elseif (session('message_error'))
    <div class="alert alert-danger">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
      <strong><h4><i class="icon fa fa-close"></i> Error!</strong></h4>
        {{ session('message_error') }}
    </div>
  @endif
          <div class="box-header">
              <h3 class="box-title">Filter</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            {{-- <div class="col-sm-12">
              <label for="inputEmail3" class="col-sm-3 control-label">Filter</label>  
            </div> --}}
              <div class="row">
                <div class="col-sm-3">
                  <select id="col1_filter" class=" unit column_filter form-control select2" data-column="1" style="width: 100%;">
                    <option value="">Unit</option>
                  </select>
                </div>
                <div class="col-sm-3">
                  <select id="col2_filter" class="column_filter form-control" data-column="2">
                    <option value="">Bulan</option>
                    <option>Januari</option><option>Februari</option><option>Maret</option>
                    <option>April</option><option>Mei</option><option>Juni</option>
                    <option>Juli</option><option>Agustus</option><option>September</option>
                    <option>Oktober</option><option>November</option><option>Desember</option>
                    </select>
                </div>
                <div class="col-sm-3">
                    <select id="col3_filter" class="column_filter form-control" data-column="3">
                    <option value="">Tahun</option>
                    <option>2018</option><option>2019</option><option>2020</option>
                    <option>2021</option><option>2022</option><option>2023</option>
                    <option>2024</option><option>2025</option><option>2026</option>
                    </select>
                </div>
                <div class="col-sm-3">
                    <select id="col4_filter" class="column_filter form-control" data-column="4">
                    <option value="">Jenis Kda</option>
                    <option>KDA tanpa temuan</option>
                    <option>KDA dengan temuan</option>
                    <option>KDA Unaudited</option>
                    <option>KDA tanpa pengajuan UMK</option>
                    </select>
                </div>
              </div>
          </div>
          <br/><br/>
          <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama Unit</th>
                      <th>Bulan</th>
                      <th>Tahun</th>
                      <th>Jenis Kda</th>
                      <th>Pelengkap</th>
                      <th>Edit</th>
                      <th>Dibuat Oleh</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $i=1;?>
                    @foreach($kda as $key => $kda)
                    <tr>
                      <td>{{$i++}}</td>
                      <td>{{ $kda->unit}}</td>
                      <td>{{ $kda->bulan}}</td>
                      <td>{{ $kda->tahun}}</td>
                      @if ($kda->jenis == 1)
                      <td>KDA tanpa temuan</td>
                      <td><button type="button" class="btn btn-info btn-outline btn-circle btn-xs" data-toggle="modal" data-target="#modal-pelengkap" onclick="kelengkapanupdate('{{ $kda->id_kda }}')"><i class="ti-pencil" data-toggle="tooltip" title="Edit Data"></i></button></td>
                      @elseif ($kda->jenis == 2)
                      <td>KDA dengan temuan</td>
                      <td><button type="button" class="btn btn-info btn-outline btn-circle btn-xs" data-toggle="modal" data-target="#modal-pelengkap" onclick="kelengkapanupdate('{{ $kda->id_kda }}')"><i class="ti-pencil" data-toggle="tooltip" title="Edit Data"></i></button></td>
                      @elseif ($kda->jenis == 3)
                      <td>KDA Unaudited</td>
                      <td><button type="button" class="btn btn-info btn-outline btn-circle btn-xs" data-toggle="modal" data-target="#modal-pelengkap" onclick="kelengkapanupdate('{{ $kda->id_kda }}')"><i class="ti-pencil" data-toggle="tooltip" title="Edit Data"></i></button></td>
                      @else
                      <td>KDA tanpa pengajuan UMK</td>
                      <td><button type="button" class="btn btn-info btn-outline btn-circle btn-xs" data-toggle="modal" data-target="#modal-keterangan" onclick="keteranganupdate('{{ $kda->id_kda }}')"><i class="ti-pencil" data-toggle="tooltip" title="Edit Data"></i></button></td>

                      @endif
                      <td><button type="button" class="btn btn-info btn-outline btn-circle btn-xs" data-toggle="modal" data-target="#modal-edit" onclick="submitUpdate('{{ $kda->id_kda }}')"><i class="ti-pencil" data-toggle="tooltip" title="Edit Data"></i></button></td>
                      
                      <td>{{ $kda->created_by}}</td>
                      <td><a href="{{ url('pdf/'.$kda->id_kda) }}"><button class="btn btn-xs btn-primary">Download</button></a> </td>
                    </tr>
                    @endforeach
                  </tbody>
                  <tfoot>
                    <tr>
                      <th>No</th>
                      <th>Nama Unit</th>
                      <th>Bulan</th>
                      <th>Tahun</th>
                      <th>Jenis Kda</th>
                      <th>Pelengkap</th>
                      <th>Edit</th>
                      <th>Dibuat Oleh</th>
                      <th>Aksi</th>
                    </tr>
                  </tfoot>
                    </table>    
          </div>
    </div>
  </div>
</div>

<div class="modal fade" id="modal-pelengkap" role="dialog" aria-hidden="true" data-backdrop="static" data-keyboard="false">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="temuanclose()">
          <span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Kelengkapan Data</h4>
          <div id="test"></div>
      </div>
        <div class="modal-body">
          <form action="{{url('kda/kelengkapan/update')}}" method="post" id="update_kelengkapan" enctype="multipart/form-data">
            {{-- <input name="_token" type="hidden" value="{{ csrf_token() }}"/> --}}
            {{csrf_field()}}
            <input type="hidden" name="id_kda" id="id_kda">
            <div>
              <table class="table table-bordered table-striped" style="width:100%">
                <thead>
                  <tr>
                    <th>Kelengkapan</th>
                    <th>Ada / Tidak Ada</th>
                    <th>jumlah</th>
                    <th>Nominal</th>
                    <th><button class="add1 btn btn-success" name="add" type="button">Add More</button></th>
                  </tr>
                  <tbody id="kelengkapan">
                  </tbody>
                </thead>
              </table>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default pull-left" data-dismiss="modal" onclick="temuanclose()" >Close</button>
              <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
          </form>
        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
  </div>
  <!-- modal temuan end -->

<div class="modal fade" id="modal-keterangan">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Keterangan</h4>
          <div id="test"></div>
        </div>
        <div class="modal-body">
          <form action="{{url('/keterangan/update')}}" method="POST" id="tambah_keterangan" enctype="multipart/form-data">
            {{csrf_field()}}
            <input type="hidden" id="id" name="id">
            <div class="form-group has-feedback">
              <label class="control-label">Kondisi</label>
              <input type="text" class="form-control" id="kondisi" name="kondisi" placeholder="Kondisi">
            </div>
            <div class="form-group has-feedback">
              <label class="control-label">Kesimpulan</label>
              <input type="text" class="form-control" id="kesimpulan" name="kesimpulan" value="{{old('Kesimpulan')}}" placeholder="Kesimpulan">
            </div>
            <div class="form-group has-feedback">
              <label class="control-label">Saran</label>
              <input type="text" class="form-control" id="saran" name="saran" value="{{old('saran')}}" placeholder="saran">
            </div>
            <div class="form-group has-feedback">
              <label class="control-label">Rekomendasi</label>
              <input type="text" class="form-control" id="rekomendasi" name="rekomendasi" value="{{old('rekomendasi')}}" placeholder="rekomendasi">
            </div>
            <div class="form-group has-feedback">
              <label class="control-label">Tanggapan</label>
              <input type="text" class="form-control" id="tanggapan" name="tanggapan" value="{{old('tanggapan')}}" placeholder="tanggapan">
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
          </form>
      </div>
        <!-- /.modal-content -->
    </div>
      <!-- /.modal-dialog -->
  </div>
    <!-- /.modal -->
</div><!-- modal temuan end -->

<div class="modal fade" id="modal-edit">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Edit</h4>
          <div id="test"></div>
        </div>
        <div class="modal-body">
          <form action="{{url('/kda/update')}}" method="POST" id="tambah_kda" enctype="multipart/form-data">
            {{csrf_field()}}
            <input type="hidden" id="idkda" name="idkda">
            <div class="form-group has-feedback">
              <label class="control-label">Nama Unit</label>
              <input type="text" class="form-control" id="unit" name="unit" value="{{old('unit')}}" placeholder="Nama unit" readonly="">
            </div>
            <div class="form-group has-feedback">
                <label class="control-label">Jenis Kda</label>
                <input type="text" class="form-control" id="jenis" name="jenis" value="{{old('jenis')}}" placeholder="jenis" readonly="">
            </div>
            <div class="form-group has-feedback">
                  <label class="control-label">Masa Audit</label>
                  <input type="date" class="form-control" id="masa_audit" name="masa_audit" value="{{old('masa_audit')}}" readonly="">
            </div>
            <div class="form-group has-feedback">
                  <label class="control-label">Bulan Audit</label>
                  <input type="date" class="form-control" id="bulan_audit" name="bulan_audit" value="{{old('bulan_audit')}}" placeholder="Tanggal">
            </div>
            <div class="form-group has-feedback">
                  <label class="control-label">Dibuat Oleh</label>
                  <input type="text" class="form-control" id="created_by" name="created_by" value="{{old('created_by')}}" placeholder="Dibuat Oleh" readonly="">
            </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                  </div>
            </form>
        </div>
    </div>
  </div><!-- /.modal -->
</div>

  
@endsection

@section('add-script')
<script>
  $(function () {
    //Initialize Select2 Elements
    $('.unit').select2(
        {
          placeholder: "Pilih Unit",
          allowClear: true,
          ajax: {
            url: "https://api.its.ac.id:8243/audit/unit",
            //params: { headers: { "Authorization": "Bearer 13a5750b-a51c-3193-9904-6b943ff95ee8" } },
            headers: {"Authorization": "Bearer 13a5750b-a51c-3193-9904-6b943ff95ee8"},
            dataType: "json",
            type: "GET",
            data: function (params) {
              if (params.term == null)
              return {
                query: "",
              };
              else
              return {
                query: params.term,
              };

            },
            processResults: function (data) {
              //console.log(data);
                return {
                    results: $.map(data, function (item) {
                        return {
                            text: item.namasatker,
                            id: item.namasatker
                        }
                    })
                };
            }
          }
        })
  })
</script>
<script>
  function filterColumn ( i ) {
      $('#example1').DataTable().column( i ).search(
          $('#col'+i+'_filter').val()
      ).draw();
      console.log($('#col'+i+'_filter').val())
  }
  $(document).ready(function (){
    //var table = $('#example1').DataTable();
    //$('#example1').DataTable();
    $('#example1').dataTable( {
      "columns": [
        { "width": "3%" },
        null,
        { "width": "10%" },
        { "width": "7%" },
        { "width": "18%" },
        { "width": "7%" },
        { "width": "7%" },
        { "width": "15%" },
        { "width": "10%" }
      ]
    } );

    $('select.column_filter').on( 'keyup click', function () {
        filterColumn( $(this).attr('data-column') );
    } );
    $('#col1_filter').on( 'change', function () {
        filterColumn( $(this).attr('data-column') );
    } );
    $('select2').select2(
    {
      placeholder: "Pilih Unit",
      allowClear: true
    });
  
});
</script>
<script>
  // $(function () {
  //   $('input').iCheck({
  //     checkboxClass: 'icheckbox_square-blue',
  //     radioClass: 'iradio_square-blue',
  //     increaseArea: '20%'
  //   });
  // });
  $(function () {
    $('#datetimepicker1').datepicker({
      format: 'yyyy-mm-dd',
      startView: 2
    });
  });
  $(function () {
    $('#datetimepicker').datepicker({
      format: 'yyyy-mm-dd',
      startView: 2
    });
  });
</script>
<script>
  $(document).ready(function(){
    var i=0;

    submitUpdate = function(id){
      $.ajax({
        url: '/kda/data',
        type: 'POST',
        data: {
          '_token': "{{ csrf_token() }}",
          'id' : id
        },
        error: function() {
          console.log('Error');
        },
        dataType: 'json',
        success: function(data) {
          console.log(data);
          $('#idkda').val(data.id_kda);
          $('#unit').val(data.unit);
          if (data.jenis == 1) $('#jenis').val("KDA Tanpa Temuan");
          else if(data.jenis == 2) $('#jenis').val("KDA Dengan Temuan");
          else if(data.jenis == 3) $('#jenis').val("KDA Unaudited");
          else $('#jenis').val("KDA Tanpa Pengajuan UMK");
          $('#masa_audit').val(data.masa_audit);
          $('#bulan_audit').val(data.bulan_audit);
          $('#created_by').val(data.created_by);
        }
      });
    }

    keteranganupdate = function(id){
      $.ajax({
        url: '/kda/keterangan',
        type: 'POST',
        data: {
          '_token': "{{ csrf_token() }}",
          'id' : id
        },
        error: function() {
          console.log('Error');
        },
        dataType: 'json',
        success: function(data) {
          console.log(data);
          $('#id').val(data.id);
          $('#kondisi').val(data.kondisi);
          $('#kesimpulan').val(data.kesimpulan);
          $('#saran').val(data.saran);
          $('#rekomendasi').val(data.rekomendasi);
          $('#tanggapan').val(data.tanggapan);

        }
      });
    }
    
    kelengkapanupdate = function(id){
      $('#id_kda').val(id);
      $.ajax({
        url: '/kda/kelengkapan',
        type: 'POST',
        data: {
          '_token': "{{ csrf_token() }}",
          'id' : id
        },
        error: function() {
          console.log('Error');
        },
        dataType: 'json',
        success: function(data1) {
          console.log(data1);      
          var ketsemua = '';

          //var data1 = $.parseJSON(data1);
          i =0;
          for (i; i < data1.length; i++)
          {
            var kelengkapan = data1[i]['kelengkapan'];
            var nominal = data1[i]['nominal'];
            var kesediaan = data1[i]['kesediaan'];
            var jumlah = data1[i]['jumlah'];
            var id = data1[i]['id'];
            var tampung = '';
            ketsemua = `<tr id="krow${i}"><td> <input type="hidden" name="id[${i}]" value="${id}"><input type="text" style='width:100%' name="kelengkapan[${i}]" value="${kelengkapan}"></td>`;
            tampung = tampung + ketsemua;
            //$(tampung).append(ketsemua);
            if (kesediaan == null) {
              ketsemua = `<td><select name="kesediaan[${i}]" id="kesediaan" style='width:100%'>
                        <option value=""></option>
                        <option value="Ada">Ada</option>
                        <option value="Tidak Ada">Tidak Ada</option>
                      </select></td>`
            }
            else
            {
             ketsemua = `<td><select name="kesediaan[${i}]" id="kesediaan[${i}]" style='width:100%'>
                        <option value=""></option>
                        <option value="Ada">Ada</option>
                        <option value="Tidak Ada">Tidak Ada</option>
                      </select></td>` 
            }
            tampung = tampung + ketsemua;
            if (jumlah == null) {
              ketsemua = `<td><input type="number" style='width:100%' name="jumlah[${i}]" value="" size="10"></td>`;
            }
            else
            {
              ketsemua = `<td><input type="number" style='width:100%' name="jumlah[${i}]" value="${jumlah}" size ="10"></td>`;
            }
            tampung = tampung + ketsemua;
            if (nominal == null) {
              ketsemua = `<td><input type="number" style='width:100%' name="nominal[${i}]" value="">
             <td><button type="button" name="remove" id="${i}" class="btn btn-danger btn-sm hapus_palsu">X</button></td></tr>
             <input type="hidden" name="hapus[${i}]" id="hapus${i}" value="0">`;
            }
            else{
              ketsemua = `<td><input type="number" style='width:100%' name="nominal[${i}]" value="${nominal}">
             <td><button type="button" name="remove" id="${i}" class="btn btn-danger btn-sm hapus_palsu">X</button></td></tr>
             <input type="hidden" name="hapus[${i}]" id="hapus${i}" value="0">`;
            }
            tampung = tampung + ketsemua;
            $("#kelengkapan").append(tampung);
            if (kesediaan != null) {
              document.getElementById(`kesediaan[${i}]`).value = kesediaan;
            }
          }
        }
      });
    }
    temuanclose = function(){
      $("#kelengkapan").empty();
    };

    $('.add1').click(function(){  
     i++;  
     $('#kelengkapan').append('<tr id="krow'+i+'" class="dynamic-added1"><td><input type="text" style="width:100%" name="kelengkapan[]" placeholder="jenis Kelengkapan" /></td><td><select name="kesediaan[]" style="width:100%"><option value=""></option><option value="Ada">Ada</option><option value="Tidak Ada">Tidak Ada</option></select></td> <td><input type="number" style="width:100%" name="jumlah[]" placeholder="jumlah" size ="10"/></td><td><input type="number" style="width:100%" name="nominal[]" placeholder="masukkan nominal" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn-sm btn_remove1">X</button></td></tr>');  
   });  


    $(document).on('click', '.btn_remove1', function(){  
     var button_id = $(this).attr("id");   
     $('#krow'+button_id+'').remove();  
   });

    $(document).on('click', '.hapus_palsu', function(){  
     var button_id = $(this).attr("id");   
     $('#hapus'+button_id+'').val(1);
     $('#krow'+button_id+'').hide();  
   });

  });     
</script>

@endsection