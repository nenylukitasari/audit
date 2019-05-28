@extends('master')

@section('title')
    Data user
@endsection
@section('right_title')
  <li class="active">Data user</li>
@endsection
@section('content')
<br/>
<button type="button" class="btn btn-info btn-rounded waves-effect waves-light pull-right" data-toggle="modal" data-target="#addModal"><span class="btn-label"><i class="fa fa-plus"></i></span>Add</button>
{{-- <h3 class="box-title m-b-0">LIST USER</h3s> --}}
  <br/><br/><br/><br/>
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
          <th class="col-sm-1">No.</th>
          <th class="col-sm-5">Nama</th>
          <th class="col-sm-3">Email</th>
          <th class="col-sm-1">Role</th>
          <th class="col-sm-2"></th>
        </tr>
      </thead>
     <tbody>
        @foreach ($users as $key => $user)
          <tr>
            <td>
                {{$key+1}}. 
            </td>
            <td>
              {{ $user->nama}}
            </td>
            <td>
              {{ $user->email}}
            </td>
            <td>
              @if($user->role == 1) Admin
              @else Pimpinan
              @endif
            </td>
              <td> 
                <button type="button" class="btn btn-info btn-outline btn-circle btn-xs" data-toggle="modal" data-target="#show-modal" onclick="submitUpdate({{ $user->id }})"><i class="ti-eye" data-toggle="tooltip" title="View Data"></i></button>
                <button type="button" class="btn btn-info btn-outline btn-circle btn-xs" data-toggle="modal" data-target="#edit-modal" onclick="submitUpdate({{ $user->id }})"><i class="ti-pencil" data-toggle="tooltip" title="Edit Data"></i></button>
                <button type="button" class="btn btn-info btn-outline btn-circle btn-xs" data-toggle="modal" data-target="#delete-modal"><i class="ti-trash" data-toggle="tooltip" title="Delete Data"></i></button>
              </td>
            </tr>
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
       <form action="{{url('/users')}}" method="POST"> 
          {{csrf_field()}} 
            <form class="form-horizontal">
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Nama</label>
                  <div class="col-sm-10">
                     <input class="form-control" type="text" size="50" id="nama" name="nama" placeholder="Masukkan Nama" required/>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">E-mail</label>
                  <div class="col-sm-10">
                     <input class="form-control" type="text" size="50" id="email" name="email" placeholder="Masukkan E-mail" required/>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Role</label>
                  &emsp;<select class="styled-select semi-square" style="width:200px" id="role" name="role" required>
                    <option value="1">Admin</option>
                    <option value="2">Pimpinan</option>
                </select>
                </div>
              </div>
              <div class="modal-footer">  
                <input type="submit" name="submit" id="submit" class="btn btn-primary btn-rounded" value="Add" /> 
              </div>
            </form>
          </form>    
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
                    <td><input style="border: none; box-shadow: none;" class="form-control" type="text" size="50" id="id_user" name="id_user" disabled> </td>
                  </tr>
                  <tr>
                    <th style="vertical-align: top; padding-top: 5px;" class="col-sm-3 control-label">Nama</th>
                    <td style="vertical-align: top; padding-top: 5px;" width="10">:</td>
                    <td><input style="border: none; box-shadow: none;" class="form-control" type="text" size="50" id="user_nama" name="user_nama" disabled> </td>
                  </tr>
                  <tr>
                    <th style="vertical-align: top; padding-top: 5px;" class="col-sm-3 control-label">Email</th>
                    <td style="vertical-align: top; padding-top: 5px;" width="10">:</td>
                    <td><input style="border: none; box-shadow: none;" class="form-control" type="text" size="50" id="user_email" name="user_email" disabled> </td>
                  </tr>
                  <tr>
                    <th style="vertical-align: top; padding-top: 5px;" class="col-sm-3 control-label">Role</th>
                    <td style="vertical-align: top; padding-top: 5px;" width="10">:</td>
                    <td><input style="border: none; box-shadow: none;" class="form-control" type="text" size="50" id="user_role" name="user_role" disabled> </td>
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
              <form action="{{url('/user/update')}}" method="POST"> 
              {{csrf_field()}} 
              <div class="box-body">
                 <table border="0">
                  <tr>
                    <th class="col-sm-3 control-label">ID</th>
                    <td width="10">:</td>
                    <td><input style="border: none; box-shadow: none;" class="form-control" type="text" size="50" id="edit_id_user" name="edit_id_user" required> </td>
                  </tr>
                  <tr>
                    <th style="vertical-align: top; padding-top: 5px;" class="col-sm-3 control-label">Nama</th>
                    <td style="vertical-align: top; padding-top: 5px;" width="10">:</td>
                    <td><input class="form-control" type="text" size="50" id="edit_user_nama" name="edit_user_nama" required> </td>
                  </tr>
                  <tr>
                    <th style="vertical-align: top; padding-top: 5px;" class="col-sm-3 control-label">Email</th>
                    <td style="vertical-align: top; padding-top: 5px;" width="10">:</td>
                    <td><input class="form-control" type="text" size="50" id="edit_user_email" name="edit_user_email" required> </td>
                  </tr>
                  <tr>
                    <th style="vertical-align: top; padding-top: 5px;" class="col-sm-3 control-label">Role</th>
                    <td style="vertical-align: top; padding-top: 5px;" width="10">:</td>
                    <td>
                      <select class="form-control select2" style="width:385px" id="edit_user_role" name="edit_user_role" required />
                      <option></option>
                          <option value="1">Admin</option> 
                          <option value="2">Pimpinan</option> 
                      </select>  
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
<!--Delete Modal-->
<div class="modal modal-danger fade" id="delete-modal">
<div class="modal-dialog" role="document">
<div class="modal-content">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <h4 class="modal-title text-center" id="myModalLabel">Delete Confirmation</h4>
  </div>
  @foreach($users as $user)
  <form class="form-inline" action="{{ url('/user/delete/'.$user->id) }}" method="POST">
  @endforeach
    {{csrf_field()}} 
    <div class="modal-footer">
      <button type="button" class="btn btn-success" data-dismiss="modal">No, Cancel</button>
      <button type="submit" class="btn btn-warning">Yes, Delete</button>
    </div>
  </form>
</div>
</div>
</div>
  
</div>
@endsection

@section('add-script')
<script>
  $(document).ready(function() {
    $('#example1').DataTable({
        'ordering'    :false
    });
</script>
<script type="text/javascript">
  submitUpdate = function(id){
      $.ajax({
        url: '/data/user',
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
          $('#id_user').val(data.id);
          $('#user_nama').val(data.nama);
          $('#user_email').val(data.email);
          $('#user_role').val(data.role);
          $('#edit_id_user').val(data.id);
          $('#edit_user_nama').val(data.nama);
          $('#edit_user_email').val(data.email);
          $('#edit_user_role').val(data.role);
          $('#edit_user_role').select2().trigger('change');
        }
      });
    }
  </script>
  @endsection
