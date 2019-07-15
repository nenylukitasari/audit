@extends('master')

@section('title')
    Dokumen SBI
@endsection
@section('right_title')
  <li class="active">Standar Biaya Institut</li>
@endsection
@section('content')
<br/>
@if(Auth::user()->role!=3)
<button type="button" class="btn btn-info btn-rounded waves-effect waves-light pull-right" data-toggle="modal" data-target="#addModal"><span class="btn-label"><i class="fa fa-plus"></i></span>Add</button>
@endif
<h3 class="box-title m-b-0">STANDAR BIAYA INSTITUT</h3>
@foreach ($versions as $version)
@endforeach
  <p class="text-muted m-b-30">Data version {{$version->version}}</p>
  @if (session('message_success'))
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <strong><h4><i class="icon fa fa-check"></i> Sukses!</strong></h4>
            {{ session('message_success') }}
        </div>
    {{-- @elseif (session('message_error'))
        <div class="alert alert-danger">
            {{ session('message_error') }}
        </div> --}}
    @endif
   <div class="table-responsive">
    <table id="example1" class="table table-striped">
      <thead>
        <tr>
          <th class="col-sm-1">No.</th>
          <th class="col-sm-10">Kegiatan</th>
          @if(Auth::user()->role!=3)
            <th class="col-sm-1">Aksi</th>
          @endif
        </tr>
      </thead>
     <tbody>
        @foreach ($versions as $version)
        @foreach ($version->jenis_kegiatan as $key => $jenis_kegiatan)
          <tr>
            <td>
                {{$key+1}}. 
            </td>
            <th>
              {{ $jenis_kegiatan->jenis_kegiatan}}
            </th>
            @if(Auth::user()->role!=3)
              <td> 
                {{-- <button type="button" class="btn btn-info btn-outline btn-circle btn-xs" data-toggle="modal" data-target="#show-modal" onclick="submitUpdate({{ $jenis_kegiatan->id }},{{$jenis_kegiatan->kode_tabel}})"><i class="ti-eye" data-toggle="tooltip" title="View Data"></i></button> --}}
                  <button type="button" class="btn btn-info btn-outline btn-circle btn-xs" data-toggle="modal" data-target="#edit-modal" onclick="submitUpdate({{ $jenis_kegiatan->id }},{{$jenis_kegiatan->kode_tabel}})"><i class="ti-pencil" data-toggle="tooltip" title="Edit Data"></i></button>
              </td>
            @endif
            </tr>
        @foreach ($jenis_kegiatan->kegiatan as $kegiatan)
          <tr>
            <td></td>  
              <td>
                <a href="{{ url('/data/'.$kegiatan->kode_tabel . '/' .$kegiatan->kode_bagian ) }}">{{ $kegiatan->nama_kegiatan}}</a>
              </td>
              @if(Auth::user()->role!=3)
              <td>
                {{-- <button type="button" class="btn btn-info btn-outline btn-circle btn-xs" data-toggle="modal" data-target="#show-modal2" onclick="submitUpdate2({{ $kegiatan->id }},{{$kegiatan->kode_tabel}})"><i class="ti-eye" data-toggle="tooltip" title="View Data"></i></button> --}}
                  <button type="button" class="btn btn-info btn-outline btn-circle btn-xs" data-toggle="modal" data-target="#edit-modal2" onclick="submitUpdate2({{ $kegiatan->id }},{{$kegiatan->kode_tabel}})"><i class="ti-pencil" data-toggle="tooltip" title="Edit Data"></i></button>
              </td>
              @endif
            </tr>
        @endforeach
      @endforeach
    @endforeach
    </tbody>
  </table>
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
          <option value="1">Jenis Kegiatan</option>
          <option value="2">Kegiatan</option>
        </select>
        &ensp;<input type="button" name="submitpilih" id="submitpilih" class="btn btn-primary btn-rounded btn-sm" value="Add"/>
        <div class="form-group" id="form-kegiatan">
        <br/>
        <form action="{{url('/dokumen', $kegiatan->kode_tabel)}}" method="POST"> 
          {{csrf_field()}} 
            <div class="form-group">
              <select class="form-control select2" style="width:500px" name="jenis_kegiatan" required>
                <option></option>
                @foreach($versions as $version)
                @foreach($version->jenis_kegiatan as $jk)
                <option value="{{$jk->id}}">{{$jk->jenis_kegiatan}}</option>
                @endforeach
                @endforeach
              </select>  
            </div>
            <form class="form-horizontal">
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Kegiatan</label>
                  <div class="col-sm-10">
                    <textarea class="form-control" rows="3" id="nama_kegiatan" name="nama_kegiatan" placeholder="Nama Kegiatan" required></textarea>
                  </div>
                </div>
              </div>
              <br/><br/><br/><br/><br/>
              <div class="modal-footer">  
                <input type="submit" name="submit" id="submit" class="btn btn-primary btn-rounded" value="Add" /> 
              </div>
            </form>
          </form>
        </div>

        <div class="form-group" id="form-jenis-kegiatan">
          <form action="{{url('/dokumen', $jenis_kegiatan->kode_tabel)}}" method="POST"> 
          {{csrf_field()}} 
          <form class="form-horizontal">
            <div class="box-body">
              <div class="form-group">
                <label class="col-sm-2 control-label">Jenis Kegiatan</label>
                <div class="col-sm-10">
                  <input class="form-control" type="hidden" id="version" name="version" value="{{$version->id}}"/>
                  <textarea class="form-control" rows="3" id="jenis_kegiatan" name="jenis_kegiatan" placeholder="Jenis Kegiatan" required></textarea>
                </div>
              </div>
            </div>
            <br/><br/></br><br/><br/>
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
                    <td><input style="border: none; box-shadow: none;" class="form-control" type="text" size="50" id="id_jk" name="id_jk" disabled> </td>
                  </tr>
                  <tr>
                    <th style="vertical-align: top; padding-top: 5px;" class="col-sm-3 control-label">Jenis Kegiatan</th>
                    <td style="vertical-align: top; padding-top: 5px;" width="10">:</td>
                    <td><textarea style="border: none; box-shadow: none;" class="form-control" rows="3" id="jenis_kegiatan3" name="jenis_kegiatan3" disabled></textarea> </td>
                  </tr>
                </table>
              </div>              
              </div>
            </div>
          </div>
        </div>
    </div>

    <div class="modal fade" id="show-modal2">
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
                    <td><input style="border: none; box-shadow: none;" class="form-control" type="text" size="50" id="id_kegiatan" name="id_kegiatan" disabled> </td>
                  </tr>
                  <tr>
                    <th class="col-sm-3 control-label">Jenis Kegiatan</th>
                    <td width="10">:</td>
                    <td><input style="border: none; box-shadow: none;" class="form-control" type="text" size="50" id="jenis_kegiatan2" name="jenis_kegiatan2" disabled> </td>
                  </tr>
                  <tr>
                    <th style="vertical-align: top; padding-top: 5px;" class="col-sm-3 control-label">Nama Kegiatan</th>
                    <td style="vertical-align: top; padding-top: 5px;" width="10">:</td>
                    <td><textarea style="border: none; box-shadow: none;" class="form-control" rows="3" id="nama_kegiatan2" name="nama_kegiatan2" disabled></textarea> </td>
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
              <form action="{{url('/dokumen/update', $jenis_kegiatan->kode_tabel)}}" method="POST"> 
              {{csrf_field()}} 
              <div class="box-body">
                <table border="0">
                  <tr>
                    <th class="col-sm-3 control-label">Jenis Kegiatan</th>
                    <td width="10">:</td>
                    <td>
                        <input type="hidden" class="form-control" id="edit_id_jk" name="edit_id_jk"/>
                        <textarea class="form-control" rows="3" id="edit_jenis_kegiatan" name="edit_jenis_kegiatan"></textarea>
                    </td>
                  </tr>
                </table>
              </div>              
              </div>
               <div class="modal-footer">  
                <input type="submit" name="submit" id="submit" class="btn btn-primary" value="Update" /> 
              </div>
            </form>
            </div>
          </div>
        </div>
    </div>

  <div class="modal fade" id="edit-modal2">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Data Details</h4>
              </div>
              <div class="modal-body">
              <form action="{{url('/dokumen/update', $kegiatan->kode_tabel)}}" method="POST"> 
              {{csrf_field()}} 
              <div class="box-body">
                <table border="0">
                  <tr>
                    <input type="hidden" class="form-control" id="edit_id_kegiatan" name="edit_id_kegiatan"/>
                    <th class="col-sm-3 control-label">Jenis Kegiatan</th>
                    <td width="10">:</td>
                    <td>
                    <div class="form-group">
                      <select class="form-control select2" style="width:385px" id="edit_jenis_kegiatan2" name="edit_jenis_kegiatan2"/>
                        <option></option>
                        @foreach($versions as $version)
                        @foreach($version->jenis_kegiatan as $jk)
                          <option value="{{$jk->id}}">{{$jk->jenis_kegiatan}}</option> 
                        @endforeach
                        @endforeach
                      </select>  
                    </div>
                  </td>
                  </tr>
                  <tr>
                    <th class="col-sm-3 control-label">Kegiatan</th>
                    <td width="10">:</td>
                    <td>
                    <textarea class="form-control" rows="3" id="edit_nama_kegiatan" name="edit_nama_kegiatan" required></textarea>
                    </td>
                  </tr>
                </table>
              </div>              
              </div>
               <div class="modal-footer">  
                <input type="submit" name="submit" id="submit" class="btn btn-primary" value="Update" /> 
              </div>
            </form>
            </div>
          </div>
        </div>
    </div>
@endsection

@section('add-script')
<!-- page script -->
<script>
  $(document).ready(function() {
    $('#example1').DataTable({
        'ordering'    :false
    });
    $('.select2').select2(
    {
      placeholder: "Pilih Jenis Kegiatan",
      allowClear: true
    });
  });
</script>
<script type="text/javascript">
  $("#form-kegiatan").hide();
  $("#form-jenis-kegiatan").hide();
  $(document).ready(function(){
    $("#submitpilih").click(function(){
      var pilihan = $( "#pilihopsi" ).val();
      if (pilihan == 0) {
        $("#form-jenis-kegiatan").hide();
        $("#form-kegiatan").hide();
      }
      else if (pilihan == 1) {
        $("#form-jenis-kegiatan").show();
        $("#form-kegiatan").hide();
      }
      else if (pilihan == 2){
        $("#form-kegiatan").show();
        $("#form-jenis-kegiatan").hide(); 
      }

    })
  })
</script>
<script type="text/javascript">
  submitUpdate = function(id, kode_tabel){
    // console.log(id);
    // console.log("hehe");
    // console.log(kode_tabel);
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
          $('#id_jk').val(data.id);
          $('#jenis_kegiatan3').val(data.jenis_kegiatan);
          $('#edit_id_jk').val(data.id);
          $('#edit_jenis_kegiatan').val(data.jenis_kegiatan);
        }
      });
    }
    submitUpdate2 = function(id, kode_tabel){
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
          $('#id_kegiatan').val(data.id);
          $('#jenis_kegiatan2').val(data.jenis_kegiatan_id);
          $('#nama_kegiatan2').val(data.nama_kegiatan);
          $('#edit_id_kegiatan').val(data.id);
          $('#edit_jenis_kegiatan2').val(data.jenis_kegiatan_id);
          $('#edit_jenis_kegiatan2').select2().trigger('change');
          $('#edit_nama_kegiatan').val(data.nama_kegiatan);
        }
      });
    }
</script>
@endsection




