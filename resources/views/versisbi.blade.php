@extends('master')

@section('title')
    Versi Standar Biaya Institut
@endsection
@section('right_title')
    <li class="active">Versi Standar Biaya Institut</li>
@endsection
@section('content')
<br/>
<style type="text/css">
  #spinner {
    position: fixed;
    top: 45%;
    left: 35%;
    height: 50px;
    width: 400px;
    text-align: center; 
    background-color: white; 
    z-index: 99;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    border-radius: 5px;
  }
</style>
<div id="spinnerModal" class="modal fade">
  <div id="spinner">
    <h3>Please Wait <img src="{{url('assets/plugins/images/ajax-loader-point.gif')}}" alt="loading"/></h3>
  </div>
</div>
<button type="button" class="btn btn-info btn-rounded waves-effect waves-light pull-right" data-toggle="modal" data-target="#addModal"><span class="btn-label"><i class="fa fa-plus"></i></span>Add</button>
  <h3 class="box-title m-b-0">VERSI STANDAR BIAYA INSTITUT</h3>
  <p></p>
  <br/>
    @if (session('message_success'))
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <strong><h4><i class="icon fa fa-check"></i> Sukses!</strong></h4>
            {{ session('message_success') }}
        </div>
    @endif
  <div id="peringatan"></div>
   <div class="table-responsive">
        <table id="example1" class="table table-striped">
          <thead>
          <tr>
            <th class="col-sm-1">No.</th>
            <th class="col-sm-5">Version</th>
            <th class="col-sm-1">Status</th>
            <th class="col-sm-1">Created at</th>
            <th class="col-sm-1">Updated at</th>
            <th class="col-sm-1">Aktif</th>
            <th class="col-sm-1">Aksi</th>
          </tr>
          </thead>
         <tbody>
              @foreach ($versions as $key => $version) 
                  <tr>
                    <td>
                      {{$key+1}}. 
                    </td>
                  <td>{{ $version->version}}</td>
                  @if ($version->status == 0)
                    <td>Aktif</td>
                  @else
                    <td>Tidak Aktif</td>
                  @endif
                  <td>{{ $version->created_at}}</td>
                  <td>{{ $version->created_at}}</td>
                  <td>
                  <form action="{{ url('pilihversi')}}" method="POST">
                  {{ csrf_field() }}
                    <input type="hidden" name="versi_id" value="{{$version->id}}">
                    <input type="submit" name="submit" id="submit" class="btn btn-sm btn-primary btn-rounded btn-sm" value="Pilih" /> 
                  </form> 
                  </td>
                  <td>
                    {{-- <button type="button" class="btn btn-info btn-outline btn-circle btn-xs" data-toggle="modal" data-target="#show-modal" onclick="submitUpdate({{ $version->id }})"><i class="ti-eye" data-toggle="tooltip" title="View Data"></i></button> --}}
                    <button type="button" class="btn btn-info btn-outline btn-circle btn-xs" data-toggle="modal" data-target="#edit-modal" onclick="submitUpdate({{ $version->id }})"><i class="ti-pencil" data-toggle="tooltip" title="Edit Data"></i></button>
                  </td>
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
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Version</label>
                  <div class="col-sm-10">
                    <input type="text" name="versibaru" id="versibaru" placeholder="Nama Versi" class="form-control" required />
                  </div>
                </div>
              </div>
              <br/><br/><br/>
              <div class="modal-footer">  
                <button class="btn btn-primary btn-rounded" onclick="versiBaru()">Add</button>
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
                <td><input style="border: none; box-shadow: none;" class="form-control" type="text" size="50" id="id" name="id" disabled> </td>
              </tr>
              <tr>
                <th class="col-sm-3 control-label">Version</th>
                <td width="10">:</td>
                <td><input style="border: none; box-shadow: none;" class="form-control" type="text" size="50" id="version" name="version" disabled> </td>
              </tr>
              <tr>
                <th class="col-sm-3 control-label">Status</th>
                <td width="10">:</td>
                <td><input style="border: none; box-shadow: none;" class="form-control" type="text" size="50" id="status" name="status" disabled> </td>
              </tr>
              <tr>
                <th class="col-sm-3 control-label">Created at</th>
                <td width="10">:</td>
                <td><input style="border: none; box-shadow: none;" class="form-control" type="text" size="50" id="created_at" name="created_at" disabled> </td>
              </tr>
              <tr>
                <th class="col-sm-3 control-label">Updated at</th>
                <td width="10">:</td>
                <td><input style="border: none; box-shadow: none;" class="form-control" type="text" size="50" id="updated_at" name="updated_at" disabled> </td>
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
            <form action="{{url('/sbi/update')}}" method="POST"> 
            {{csrf_field()}} 
            <div class="box-body">
              <table border="0">
                <tr>
                  <input class="form-control" type="hidden" id="id2" name="id2"/>
                  <th class="col-sm-3 control-label">Version</th>
                  <td width="10">:</td>
                  <td><input class="form-control" type="text" size="50" id="edit_version" name="edit_version" required> </td>
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
<script>
  $(document).ready(function (){
    $('#example1').DataTable({
      'ordering'    :false
    });  
});
</script>
<script href="https://cdn.datatables.net/plug-ins/1.10.15/api/fnReloadAjax.js"></script>

<script>
  $(document).ready(function(){
    submitUpdate = function(id){
      $.ajax({
        url: '/data/version',
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
          $('#version').val(data.version);
          $('#id2').val(data.id);
          $('#edit_version').val(data.version);
          $('#status').val(data.status);
          $('#created_at').val(data.created_at);
          $('#updated_at').val(data.updated_at);
        }
      });
    }
    versiBaru = function(){
      $('#addModal').modal('hide');
      $('#spinnerModal').modal('show');
      console.log("sudah muncul");
      var versi = $('#versibaru').val();
      $.ajax({
        async: true,
        url: '/versi',
        type: 'POST',
        data: {
          '_token': "{{ csrf_token() }}",
          'versi' : versi
        },
        success: function(data) {
          $('#spinnerModal').modal('hide'); 
          if(data.error){
          printErrorMsg(data.error);
        }else{
          $('#example1').load('/loadversi');
          console.log(data);
          $("#peringatan").append(`<div class="alert alert-success print-success-msg" style="display:none">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <h4><i class="icon fa fa-check"></i> Sukses!</h4>
              <ul></ul>
            </div>`)
          $(".print-success-msg").find("ul").html('');
          $(".print-success-msg").css('display','block');
          $(".print-error-msg").css('display','none');
          $(".print-success-msg").find("ul").append('<li>Berhasil menambahkan versi</li>');
         
          }
        }
      });
    }
    function printErrorMsg (msg) {
     $("#peringatan").append(`<div class="alert alert-danger print-error-msg" id="print-error-msg" style="display:none">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h4><i class="icon fa fa-ban"></i> Peringatan!</h4>
        <ul></ul>
      </div>`)
     $(".print-error-msg").find("ul").html('');
     $(".print-error-msg").css('display','block');
     $(".print-success-msg").css('display','none');
     $.each( msg, function( key, value ) {
      $(".print-error-msg").find("ul").append('<li>'+value+'</li>');
    });
   } 
  });


</script>
@endsection