@extends('master')

@section('title')
    Sumber Dana
@endsection
@section('right_title')
  <li class="active">Sumber Dana</li>
@endsection
@section('content')
<br/>
<button type="button" class="btn btn-info btn-rounded waves-effect waves-light pull-right" data-toggle="modal" data-target="#addModal"><span class="btn-label"><i class="fa fa-plus"></i></span>Add</button></br></br>
  <br/><br/><br/><br/>
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
   <div class="box-body">
    <table id="example1" class="table table-striped">
      <thead>
        <tr>
          <th class="col-sm-1">No.</th>
          <th class="col-sm-5">Sumber Dana</th>
          <th class="col-sm-2">Aksi</th>
        </tr>
      </thead>
     <tbody>
        @foreach ($sumberdana as $key => $dana)
          <tr>
            <td>
                {{$key+1}}. 
            </td>
            <td>
              {{ $dana->jenis_dana}}
            </td>
              <td><button type="button" class="btn btn-info btn-outline btn-circle btn-xs open-AddBookDialog" data-toggle="modal" data-target="#edit-modal" onclick="submitUpdate({{ $dana->id }})"><i class="ti-pencil" data-toggle="tooltip" title="Edit Data"></i></button></td>
            </tr>
        @endforeach
        </tbody>
      </table>
    </div>


<div id="addModal" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Add</h4>
      </div>
      <div class="modal-body">
      <div class="form-group">
                <br/>
              <form action="{{url('/sumberdana/add')}}" method="POST">
                {{csrf_field()}}
          <form class="form-horizontal">
            <div class="box-body">
            </br></br>
              <div class="form-group">
                <label class="col-sm-3 control-label">Sumber Dana</label>
                <div class="col-sm-9">
                  <input type="text" name="jenis_dana" placeholder="Sumber Dana" class="form-control" required />
                </div>
              </div>
            </div>
            <br/><br/>
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
<!-- Edit Modal -->
<div class="modal fade" id="edit-modal">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Ubah Sumber Dana</h4>
              </div>
              <div class="modal-body">
              <form action="{{url('/sumberdana/update')}}" method="POST"> 
              {{csrf_field()}} 
              <div class="box-body">
                 <table border="0">
                  <tr>
                    <input class="form-control" type="hidden" id="edit_id_dana" name="edit_id_dana"/>
                    <th style="vertical-align: top; padding-top: 5px;" class="col-sm-3 control-label">Sumber Dana</th>
                    <td style="vertical-align: top; padding-top: 5px;" width="10">:</td>
                    <td><input class="form-control" type="text" size="50" id="edit_jenis_dana" name="edit_jenis_dana" required> </td>
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
  
</div>
@endsection

@section('add-script')
<script>

  $(document).ready(function() {
   $('#example1').dataTable({
    // "order": [],
      'ordering'    :false
  });
</script>
<script type="text/javascript">
  submitUpdate = function(id){
    console.log(id);
      $.ajax({
        url: '/sumberdana/data',
        type: 'GET',
        data: {
          'id' : id
        },
        error: function() {
          console.log('Error');
        },
        dataType: 'json',
        success: function(data) {
          console.log(data);
          $('#edit_id_dana').val(data.id);
          $('#edit_jenis_dana').val(data.jenis_dana);
        }
      });
    };
  </script>
  @endsection
