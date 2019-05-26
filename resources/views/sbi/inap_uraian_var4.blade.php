@extends('master')

@section('title')
  @foreach ($versions as $version)
  @foreach ($version->kegiatan as $kegiatan)
    @if($kegiatan->kode_bagian==$kode_bagian_kegiatan)
    @foreach($kegiatan->kategori as $kategori)
    @if($kategori->kode_bagian == $kode_bagian_kategori)
       {{$kategori->kategori_kegiatan}}
    @endif
    @endforeach
    @endif
  @endforeach
  @endforeach
@endsection

@section('right_title')
@foreach ($versions as $version)
@foreach ($version->kegiatan as $kegiatan)
@if($kegiatan->kode_bagian==$kode_bagian_kegiatan)
  <li class="active"><a href="/data/2/{{$kode_bagian_kegiatan}}">{{$kegiatan->nama_kegiatan}}</a></li>
  @foreach($kegiatan->kategori as $kategori)
    @if($kategori->kode_bagian == $kode_bagian_kategori)
    <li class="active">{{$kategori->kategori_kegiatan}}</li>
    @endif
  @endforeach
 @endif
@endforeach
@endforeach
@endsection
@section('content')
<br/> 
<button type="button" class="btn btn-info btn-rounded waves-effect waves-light pull-right" data-toggle="modal" data-target="#addModal"><span class="btn-label"><i class="fa fa-plus"></i></span>Add</button>
<h3 class="box-title m-b-0">
@foreach ($versions as $version)
@foreach ($version->kegiatan as $kegiatan)
  @if($kegiatan->kode_bagian==$kode_bagian_kegiatan)
    @foreach($kegiatan->kategori as $kategori)
      @if($kategori->kode_bagian == $kode_bagian_kategori)
        {{strtoupper($kategori->kategori_kegiatan)}} &nbsp;
          <button type="button" class="btn btn-danger btn-circle btn-xs" data-toggle="modal" data-target="#penjelasanModal" ><i class="fa fa-bullhorn" data-toggle="tooltip" title="Penjelasan"></i></button>
      @endif
    @endforeach
  @endif
@endforeach
@endforeach
</h3>
  <p class="text-muted m-b-30">Data version {{$version->version}}</p>
  @if (session('message_success'))
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <strong><h4><i class="icon fa fa-check"></i> Sukses!</strong></h4>
            {{ session('message_success') }}
        </div>
    @endif
  <div class="table-responsive">
    <table id="example1" class="table table-striped">
      <thead>
      <tr>
        <th rowspan="2" class="col-sm-1">No.</th>
        <th rowspan="2" class="col-sm-3">Provinsi</th>
        <th style="text-align: center" colspan="4" class="col-sm-7">Tarif Hotel (Rp)</th>
        <th rowspan="2" class="col-sm-1"></th>
      </tr>
      <tr>
        <th class="col-sm-2">Rektor, Wakil Rektor, MWA, Ketua Senat, Sekretaris Senat</th>
        <th class="col-sm-2">Sekretaris Institut, Direktur, Kepala Lembaga, Kepala Badan, Dekan, Kepala Kantor, Kepala Biro</th>
        <th class="col-sm-2">Wakil Dekan, Sekretaris Lembaga, Kepala Subdirektorat, Kepala Unit, Kepala Departemen/Pegawai Gol IV</th>
        <th class="col-sm-1">Pejabat Lainnya/Pegawai Lainnya</th>
      </tr>
      </thead>
     <tbody>
      @foreach ($versions as $version)
          @foreach ($version->kegiatan as $kegiatan)
            @if($kegiatan->kode_bagian==$kode_bagian_kegiatan)
              @foreach($kegiatan->kategori as $kategori)
                @if($kategori->kode_bagian == $kode_bagian_kategori)
                  @foreach($kategori->uraian as $key => $uraian)
                  <tr>
                    <td>
                        {{$key+1}}. 
                    </td>
                    <td>
                      {{ $uraian->uraian_kegiatan}}
                    </td>
                    <td>{{number_format($uraian->var1)}}</td>
                    <td>{{number_format($uraian->var2)}}</td>
                    <td>{{number_format($uraian->var3)}}</td>
                    <td>{{number_format($uraian->var4)}}</td>
                      <td> 
                      <button type="button" class="btn btn-info btn-outline btn-circle btn-xs" data-toggle="modal" data-target="#show-modal" onclick="submitUpdate({{ $uraian->id }},{{$uraian->kode_tabel}})"><i class="ti-eye" data-toggle="tooltip" title="View Data"></i></button>
                      <button type="button" class="btn btn-info btn-outline btn-circle btn-xs" data-toggle="modal" data-target="#edit-modal" onclick="submitUpdate({{ $uraian->id }},{{$uraian->kode_tabel}})"><i class="ti-pencil" data-toggle="tooltip" title="Edit Data"></i></button>
                    </tr>
                   @endforeach
                  @endif
                @endforeach
              @endif
            @endforeach
        @endforeach
    </tbody>
</table>
</div>

<!--Penjelasan Modal-->
<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;" id="penjelasanModal">
<div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4 class="modal-title" id="myLargeModalLabel">Penjelasan</h4> </div>
        <div class="modal-body">
        <table class="table table-striped" class="table toggle-circle table-hover" border="0">
          @foreach($versions as $version)
          @foreach($version->kegiatan as $kegiatan)
          @if($kegiatan->kode_bagian==$kode_bagian_kegiatan)
          @foreach($kegiatan->kategori as $kategori)
          @if($kategori->kode_bagian==$kode_bagian_kategori)
          @foreach($kategori->penjelasan as $penjelasan)
          <tr>
            <td>{{$penjelasan->penjelasan}}</td>
            <td width="100">
            <button type="button" class="btn btn-info btn-outline btn-circle btn-xs" data-toggle="modal" data-target="#show-modal1"><i class="ti-eye" data-toggle="tooltip" title="View Data"></i></button>
            <button type="button" class="btn btn-info btn-outline btn-circle btn-xs" data-toggle="modal" data-target="#edit-modal1"><i class="ti-pencil" data-toggle="tooltip" title="Edit Data"></i></button>
            </td>
          </tr> 
          @endforeach  
          @endif
          @endforeach  
          @endif
          @endforeach  
          @endforeach  
        </div>
      </table>
    </div>
  </div>
</div>
</div>

<!--Add Modal-->
<div id="addModal" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Add</h4>
      </div>
      <div class="modal-body">
        <select class="styled-select semi-square" style="width:200px" id="pilihopsi">
          <option value="0">Pilih opsi</option>
          <option value="1">Uraian</option>
          <option value="2">Penjelasan</option>
        </select>
        <input type="button" name="submitpilih" id="submitpilih" class="btn btn-primary btn-rounded" value="Add"/>
      <div class="form-group" id="form-penjelasan">
                  <br/>
                  @foreach ($version->penjelasan as $penjelasan)
                  @endforeach
                <form action="{{url('/data/add', $penjelasan->kode_tabel)}}" method="POST">
                  {{csrf_field()}} 
                    <div class="form-group">
                      <select class="form-control select2" style="width:500px" name="penjelasan_kategori" required>
                        <option></option>
                        @foreach ($versions as $version)
                         @foreach ($version->kegiatan as $kegiatan)
                         @if($kegiatan->kode_bagian==$kode_bagian_kegiatan)
                          @foreach($kegiatan->kategori as $kategori)
                          @if($kategori->kode_bagian == $kode_bagian_kategori)
                             <option value="{{$kategori->id}}">{{$kategori->kategori_kegiatan}}</option>
                          @endif
                          @endforeach
                          @endif
                        @endforeach
                      @endforeach
                      </select>  
                    </div>
            <form class="form-horizontal">
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Version</label>
                  <div class="col-sm-10">
                    <input style="border: none; box-shadow: none;" class="form-control" type="text" size="50" id="version" name="version" value="{{$version->id}}" required/>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Penjelasan</label>
                  <div class="col-sm-10">
                    <textarea class="form-control" rows="3" id="penjelasan" name="penjelasan" placeholder="Penjelasan" required></textarea>
                  </div>
                </div>
              </div>
              <br/><br/><br/><br/><br/><br/>
              <div class="modal-footer">  
                <input type="submit" name="submit" id="submit" class="btn btn-primary btn-rounded" value="Add" /> 
              </div>
            </form>
          </form>
          </div>
      <div class="form-group" id="form-uraian">
                <br/>
                @foreach ($version->kegiatan as $kegiatan)
                  @foreach ($kegiatan->uraian as $uraian)
                @endforeach
                @endforeach
              <form action="{{url('/data/add', $uraian->kode_tabel)}}" method="POST">
                {{csrf_field()}} 
                  <div class="form-group">
                    <select class="form-control select2" style="width:500px" name="kategori_kegiatan" required>
                      <option></option>
                      @foreach ($versions as $version)
                       @foreach ($version->kegiatan as $kegiatan)
                       @if($kegiatan->kode_bagian==$kode_bagian_kegiatan)
                        @foreach($kegiatan->kategori as $kategori)
                          @if($kategori->kode_bagian == $kode_bagian_kategori)
                           <option value="{{$kategori->id}}">{{$kategori->kategori_kegiatan}}</option>
                          @endif
                        @endforeach
                        @endif
                      @endforeach
                    @endforeach
                    </select>  
                  </div>
          <form class="form-horizontal">
            <div class="box-body">
              <div class="form-group">
                <label class="col-sm-3 control-label">Provinsi</label>
                <div class="col-sm-9">
                  <textarea class="form-control" rows="3" id="uraian_kegiatan" name="uraian_kegiatan" placeholder="Provinsi" required></textarea>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-3 control-label">Tarif Hotel I</label>
                <div class="col-sm-9">
                  <input type="number" name="var1" placeholder="Tarif Hotel Rektor, Wakil Rektor, dll (Rp)" class="form-control" required />
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-3 control-label">Tarif Hotel II</label>
                <div class="col-sm-9">
                  <input type="number" name="var2" placeholder="Tarif Hotel Sekretaris Insitut, dll (Rp)" class="form-control" required />
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-3 control-label">Tarif Hotel III</label>
                <div class="col-sm-9">
                  <input type="number" name="var3" placeholder="Tarif Hotel Wakil Dekan, dll (Rp)" class="form-control" required />
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-3 control-label">Tarif Hotel IV</label>
                <div class="col-sm-9">
                  <input type="number" name="var4" placeholder="Tarif Hotel Pejabat/Pegawai Lainnya (Rp)" class="form-control" required />
                </div>
              </div>
            </div>
            <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
            <div class="modal-footer">  
              <input type="submit" name="submit" id="submit" class="btn btn-primary btn-rounded" value="Add" /> 
            </div>
          </form>
          </form>
          </div>
        </div>
        </div>
      </div>
    </div>
  </div>

<!-- Show Modal -->
<div class="modal fade" id="show-modal">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Data Details</h4>
          </div>
          <div class="modal-body">
          <div class="box-body">
            <table border="0">
              <tr>
                <th class="col-sm-3 control-label">ID</th>
                <td width="10">:</td>
                <td><input style="border: none; box-shadow: none;" class="form-control" type="text" size="50" id="id2" name="id2" disabled> </td>
              </tr>
              <tr>
                <th class="col-sm-3 control-label">Kategori</th>
                <td width="10">:</td>
                <td><input style="border: none; box-shadow: none;" class="form-control" type="text" size="50" id="kategori2" name="kategori2" disabled></td>
              </tr>
              <tr>
                <th style="vertical-align: top; padding-top: 5px;" class="col-sm-3 control-label">Provinsi</th>
                <td style="vertical-align: top; padding-top: 5px;" width="10">:</td>
                <td><textarea style="border: none; box-shadow: none;" class="form-control" rows="3" id="uraian" name="uraian" disabled></textarea> </td>
              </tr>
              <tr>
                <th class="col-sm-3 control-label">Tarif Hotel I (Rp)</th>
                <td width="10">:</td>
                <td><input style="border: none; box-shadow: none;" class="form-control" type="text" size="50" id="var1" name="var1" disabled></td>
              </tr>
              <tr>
                <th class="col-sm-3 control-label">Tarif Hotel II (Rp)</th>
                <td width="10">:</td>
                <td><input style="border: none; box-shadow: none;" class="form-control" type="text" size="50" id="var2" name="var2" disabled></td>
              </tr>
              <tr>
                <th class="col-sm-3 control-label">Tarif Hotel III (Rp)</th>
                <td width="10">:</td>
                <td><input style="border: none; box-shadow: none;" class="form-control" type="text" size="50" id="var3" name="var3" disabled></td>
              </tr>
              <tr>
                <th class="col-sm-3 control-label">Tarif Hotel IV (Rp)</th>
                <td width="10">:</td>
                <td><input style="border: none; box-shadow: none;" class="form-control" type="text" size="50" id="var4" name="var4" disabled></td>
              </tr>
            </table>
          </div>              
          </div>
        </div>
      </div>
    </div>
</div>

<!-- Edit Modal -->
<div class="modal fade" id="edit-modal">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title">Data Details</h4>
            </div>
            <div class="modal-body">
            <form action="{{url('/data/update', $uraian->kode_tabel)}}" method="POST">
            {{csrf_field()}} 
            <div class="box-body">
              <table border="0">
                <tr>
                  <th class="col-sm-3 control-label">ID</th>
                  <td width="10">:</td>
                  <td><input type="text" style="border: none; box-shadow: none;" class="form-control" id="edit_id2" name="edit_id2" required></td>
                </tr>
                <br/>
                <tr>
                  <th class="col-sm-3 control-label">Kategori</th>
                  <td width="10">:</td>
                  <td><input type="text" style="border: none; box-shadow: none;" class="form-control" id="edit_kategori2" name="edit_kategori2" required></td>
                </tr>
                <tr>
                  <th class="col-sm-4 control-label">Provinsi</th>
                  <td width="10">:&ensp;</td>
                  <td>
                  <textarea class="form-control" rows="3" id="uraian_kegiatan2" name="uraian_kegiatan2" required></textarea>
                  </td>
                </tr>
                <tr>
                  <th class="col-sm-3 control-label">Tarif Hotel I (Rp)</th>
                  <td width="10">:</td>
                  <td>
                  <input type="number" class="form-control" id="edit_var1" name="edit_var1" placeholder="Tarif Hotel I (Rp)" required>
                  </td>
                </tr>
                 <tr>
                  <th class="col-sm-3 control-label">Tarif Hotel II (Rp)</th>
                  <td width="10">:</td>
                  <td>
                  <input type="number" class="form-control" id="edit_var2" name="edit_var2" placeholder="Tarif Hotel II (Rp)" required>
                  </td>
                </tr>
                 <tr>
                  <th class="col-sm-3 control-label">Tarif Hotel III (Rp)</th>
                  <td width="10">:</td>
                  <td>
                  <input type="number" class="form-control" id="edit_var3" name="edit_var3" placeholder="Tarif Hotel III (Rp)" required>
                  </td>
                </tr>
                 <tr>
                  <th class="col-sm-3 control-label">Tarif Hotel IV (Rp)</th>
                  <td width="10">:</td>
                  <td>
                  <input type="number" class="form-control" id="edit_var4" name="edit_var4" placeholder="Tarif Hotel III (Rp)" required>
                  </td>
                </tr>
              </table>
            </div>              
            </div>
             <div class="modal-footer">  
              <input type="submit" name="submit" id="submit" class="btn btn-primary btn-rounded" value="Update" /> 
            </div>
          </form>
          </div>
        </div>
      </div>
  </div>
@endsection

@section('add-script')
<script>
  $(document).ready(function (){
    $('#example1').DataTable({
      'ordering'    :false
    });  
});
</script>
<script type="text/javascript">
    submitUpdate = function(id, kode_tabel){
      $.ajax({
        url: '/getdata',
        type: 'POST',
        data: {
          '_token': "{{ csrf_token() }}",
          'id' : id,
          'kode_tabel' : kode_tabel
        },
        error: function() {
          console.log('Error');
        },
        dataType: 'json',
        success: function(data) {
          console.log(data);
          $('#id2').val(data.id);
          $('#kategori2').val(data.kategori_id);
          $('#uraian').val(data.uraian_kegiatan);
          $('#satuan').val(data.satuan);
          $('#var1').val(data.var1);
          $('#var2').val(data.var2);
          $('#var3').val(data.var3);
          $('#var4').val(data.var4);
          $('#edit_id2').val(data.id);
          $('#edit_kategori2').val(data.kategori_id);
          $('#uraian_kegiatan2').val(data.uraian_kegiatan);
          $('#satuan2').val(data.satuan);
          $('#edit_var1').val(data.var1);
          $('#edit_var2').val(data.var2);
          $('#edit_var3').val(data.var3);
          $('#edit_var4').val(data.var4);
        }
      });
    }
</script>
<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2(
    {
      placeholder: "Pilih Kategori",
      allowClear: true
    })
  })
</script>
<script type="text/javascript">
  $("#form-uraian").hide();
  $("#form-penjelasan").hide(); 
  $(document).ready(function(){
    $("#submitpilih").click(function(){
      var pilihan = $( "#pilihopsi" ).val();
      if (pilihan == 0) {
        $("#form-uraian").hide();
        $("#form-penjelasan").hide(); 
      }
      else if (pilihan == 1) {
        $("#form-uraian").show();
        $("#form-penjelasan").hide(); 
      }
      else if (pilihan == 2){
        $("#form-uraian").hide();
        $("#form-penjelasan").show(); 
      }
    })
  })
</script>

@endsection




