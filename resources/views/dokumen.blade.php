@extends('master')

@section('title-bar')
    Dokumen SBI
@endsection

@section('right_title')
  Standar Biaya Institut
@endsection
@section('add-css')
   <!-- DataTables -->
   <link rel="stylesheet" href="{{url('assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">
   <!-- Form -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css"/>
@endsection
@section('content')
<br/>
  <div class="col-md-13">
           <div class="box box-default">
            <div class="box-header with-border">
              <h3 class="box-title">STANDAR BIAYA INSTITUT</h3> 
              <button type="button" class="btn btn-default pull-right" data-toggle="modal" data-target="#addModal"><i class="fa fa-plus"></i>&nbsp;&nbsp;&nbsp;Add
          </button>
            </div>

           <div class="box-body">
              @foreach ($jenis_kegiatans as $jenis_kegiatan)
      			  	<h4 class="box-title">{{$jenis_kegiatan->jenis_kegiatan}} &nbsp;<i class="fa fa-pencil" data-toggle="modal" onclick="submitUpdate2('{{ $jenis_kegiatan->id }}')" data-target="#edit-modal2"> </i></h4>
            <table id="example1" class="table table-bordered table-hover">
              <thead>
              <tr>
                <th width="600">Kegiatan</th>
                <th width="20"></th>
              </tr>
              </thead>
              @foreach ($jenis_kegiatan->kegiatan as $kegiatan)
             <tbody>
              <tr>
                  <td>
                    <a href="{{$kegiatan->id}}">  {{ $kegiatan->nama_kegiatan}}</a>
                  </td>
                  <td>
                    <i class="fa fa-eye" data-toggle="modal" onclick="viewdata('{{ $kegiatan->id }}')" data-target="#show-modal"> | </i> 
                    <i class="fa fa-pencil" data-toggle="modal" onclick="submitUpdate('{{ $kegiatan->id }}')" data-target="#edit-modal"> </i>
                  </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <br/>
        @endforeach
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
                  <option value="1">Jenis Kegiatan</option>
                  <option value="2">Kegiatan</option>
                </select>
                <input type="button" name="submitpilih" id="submitpilih" class="btn btn-primary" value="Add"/>

                <div class="form-group" id="form-kegiatan">
                  <br/>
                <form action="{{url('/dokumen')}}" method="POST"> 
                  {{-- @if ($errors->any())
                      <div class="alert alert-danger">
                          <ul>
                              @foreach ($errors->all() as $error)
                                  <li>{{ $error }}</li>
                              @endforeach
                          </ul>
                      </div>
                  @endif --}}
                  {{csrf_field()}} 
                    <div class="form-group">
                      <select class="form-control select2" style="width:500px" name="jenis_kegiatan" required>
                        <option></option>
                        @foreach($jenis_kegiatans as $jenis_kegiatan)
                        <option value="{{$jenis_kegiatan->id}}">{{$jenis_kegiatan->jenis_kegiatan}}</option>
                        @endforeach
                      </select>  
                    </div>
            <form class="form-horizontal">
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Kegiatan</label>
                  <div class="col-sm-10">
                    <input type="text" name="nama_kegiatan" placeholder="Nama Kegiatan" class="form-control" required />
                  </div>
                </div>
                <br/><br/>
              </div>
              <div class="modal-footer">  
                <input type="submit" name="submit" id="submit" class="btn btn-primary" value="Add" /> 
              </div>
            </form>
          </form>
          </div>


            <div class="form-group" id="form-jenis-kegiatan">
                  <br/>
                <form action="{{url('/dokumen/jenis-kegiatan')}}" method="POST"> 
                  {{csrf_field()}} 
            <form class="form-horizontal">
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Jenis Kegiatan</label>
                  <div class="col-sm-10">
                    <input type="text" name="jenis_kegiatan" placeholder="Jenis Kegiatan" class="form-control" required />
                  </div>
                </div>
                <br/><br/>
              <div class="modal-footer">  
                <input type="submit" name="submit" id="submit" class="btn btn-primary" value="Add" /> 
              </div>
            </div>
            </form>
          </form>
          </div>

            
            
          </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
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
                    <td><input type="text" size="50" id="id" name="id" disabled> </td>
                  </tr>
                  <tr>
                    <th class="col-sm-3 control-label">Jenis Kegiatan</th>
                    <td width="10">:</td>
                    <td><input type="text" size="50" id="jenis" name="jenis" disabled></td>
                  </tr>
                  <tr>
                    <th class="col-sm-3 control-label">Kegiatan</th>
                    <td width="10">:</td>
                    <td><input type="text" size="50" id="kegiatan" name="kegiatan" disabled> </td>
                  </tr>
                </table>
              </div>              
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
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
              <form action="{{url('/dokumen/update')}}" method="POST"> 
              {{csrf_field()}} 
              <div class="box-body">
                <table border="0">
                  <tr>
                    <th class="col-sm-3 control-label">ID</th>
                    <td width="10">:</td>
                    <td><input type="text" class="form-control" id="id_kegiatan" name="id_kegiatan" required></td>
                  </tr>
                  <br/>
                  <tr>
                    <th class="col-sm-3 control-label">Jenis Kegiatan</th>
                    <td width="10">:</td>
                    <td>
                    <div class="form-group">
                      <select class="form-control select2" style="width:385px" name="jenis_kegiatan" value="{{old('jenis_kegiatan_id')}}" required>
                        <option></option>
                        @foreach($jenis_kegiatans as $jenis_kegiatan)
                        <option value="{{$jenis_kegiatan->id}}">{{$jenis_kegiatan->jenis_kegiatan}}</option> 
                        @endforeach
                      </select>  
                    </div>
                  </td>
                  </tr>
                  <tr>
                    <th class="col-sm-3 control-label">Kegiatan</th>
                    <td width="10">:</td>
                    <td>
                    <input type="text" class="form-control" id="nama_kegiatan" name="nama_kegiatan" value="{{old('nama_kegiatan')}}" placeholder="Nama Kegiatan" required>
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
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
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
              <form action="{{url('/dokumen/update2')}}" method="POST"> 
              {{csrf_field()}} 
              <div class="box-body">
                <table border="0">
                  <tr>
                    <th class="col-sm-3 control-label">ID</th>
                    <td width="10">:</td>
                    <td><input type="text" class="form-control" id="id_kegiatan2" name="id_kegiatan2" required></td>
                  </tr>
                  <br/>
                  <tr>
                    <th class="col-sm-3 control-label">Jenis Kegiatan</th>
                    <td width="10">:</td>
                    <td>
                    <input type="text" class="form-control" id="jenis_kegiatan2" name="jenis_kegiatan2" value="{{old('jenis_kegiatan')}}" placeholder="Jenis Kegiatan" required>
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
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
    </div>

@endsection

@section('add-script')
<!-- DataTables -->
{{-- <script src="{{url('assets/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script> --}}
<script src="{{url('assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>

<!-- FastClick -->
<script src="{{url('assets/bower_components/fastclick/lib/fastclick.js')}}"></script>


<!-- page script -->
<script>
  $(function () {
    $('#example1').DataTable({
      'ordering'    : false
    })
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>

<!-- form -->
<script src="{{url('assets/bower_components/select2/dist/js/select2.full.min.js')}}"></script>        

<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2(
    {
      placeholder: "Pilih Jenis Kegiatan",
      allowClear: true
    })
  })
</script>
<script type="text/javascript">
  $("#form-kegiatan").hide();
  $("#form-jenis-kegiatan").hide();
  // $("#modal-footer").hide();
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
<script>
  $(document).ready(function(){

    viewdata = function(id){
      $.ajax({
        url: '/data/kegiatan',
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
          $('#id').val(data.id);
          $('#jenis').val(data.jenis_kegiatan_id);
          $('#kegiatan').val(data.nama_kegiatan);
        }
      });
    }
    submitUpdate = function(id){
      $.ajax({
        url: '/data/edit-kegiatan',
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
          $('#id_kegiatan').val(data.id);
          $('#jenis_kegiatan').val(data.jenis_kegiatan);
          $('#nama_kegiatan').val(data.nama_kegiatan);
        }
      });
    }
    submitUpdate2 = function(id){
      $.ajax({
        url: '/data/edit-kegiatan2',
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
          $('#id_kegiatan2').val(data.id);
          $('#jenis_kegiatan2').val(data.jenis_kegiatan);
        }
      });
    }
  });
</script>
@endsection



