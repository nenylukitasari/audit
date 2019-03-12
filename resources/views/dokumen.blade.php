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

   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
   <meta name="csrf-token" content="{{ csrf_token() }}">
@endsection
@section('content')
<br/>
  <div class="col-md-13">
           <div class="box box-default">
            <div class="box-header with-border">
              <h3 class="box-title">STANDAR BIAYA INSTITUT</h3> 
              <button type="button" class="btn btn-default pull-right" data-toggle="modal" data-target="#addModal"><i class="fa fa-plus"></i>&nbsp;&nbsp;&nbsp;Tambah
          </button>
            </div>

        <!--Modal-->
        <div id="addModal" class="modal fade">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Tambah Standar Biaya Institut</h4>
              </div>
              <div class="modal-body">
                {{-- <form action="{{url('/sbi/update')}}" method="POST" name="add_makan" id="add_makan">
                  {{csrf_field()}} --}}
                  <form name="add_kegiatan" id="add_kegiatan">
                    <div class="alert alert-danger print-error-msg" style="display:none">
                      <ul></ul>
                    </div>
                    <div class="alert alert-success print-success-msg" style="display:none">
                      <ul></ul>
                    </div>
                    <div class="form-group">
                      <select class="form-control select2" style="width:500px;" name="kategori_kegiatan">
                        <option></option>
                        @foreach($kegiatans as $kegiatan)
                        <option value="{{$kegiatan->id}}">{{$kegiatan->kategori_kegiatan}}</option>
                        @endforeach
                      </select>  
                    </div>

                    <div class="form-group">
                      <label class="control-label col-sm-2" for="title">Kegiatan:</label>
                      <div class="col-sm-10">
                        <input type="text" name="kegiatan[]" class="form-control name_list" />
                      </div>
                    </div>
                </form>
              </div>

              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <input type="button" name="submit" id="submit" class="btn btn-primary" value="Tambah" />  
                {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->

           <div class="box-body">
              @foreach ($kategori_kegiatans as $kategori_kegiatan)
      			  	<h3 class="box-title">{{$kategori_kegiatan->kategori_kegiatan}}</h3>
            <table id="example2" class="table table-bordered table-hover">
              <thead>
              <tr>
                <th>Kegiatan</th>
                <th>Aksi</th>
              </tr>
              </thead>
              <tr>
             <tbody>
                @foreach ($kategori_kegiatan->kegiatan as $kegiatan)
                  <td>
                      {{ $kegiatan->kegiatan}}
                  </td>
                  <td>
                    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-edit">
                Edit
              </button></td>
                </tr>
                @endforeach
                @endforeach
            </tfoot>
        </table>
      </div>
    </div>
  </div>

<!-- Edit Modal -->
   <div class="modal modal-info fade" id="modal-edit">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Info Modal</h4>
              </div>
              <div class="modal-body">
                <p>One fine body&hellip;</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-outline">Save changes</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->

@endsection

@section('add-script')
<!-- DataTables -->
<script src="{{url('assets/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{url('assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>

<!-- FastClick -->
<script src="{{url('assets/bower_components/fastclick/lib/fastclick.js')}}"></script>

<!-- page script -->
<script>
  $(function () {
    $('#example1').DataTable()
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

{{-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
 --}}<script src="adminlte/bower_components/select2/dist/js/select2.full.min.js"></script>

<!--Modal -->
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

{{-- <script type="text/javascript">
  $(document).ready(function(){      
    var postURL = "<?php echo url('tambah_kegiatan'); ?>";
    var i=1;  

    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });


    $('#submit').click(function(){            
     $.ajax({  
      url:postURL,  
      method:"POST",  
      data:$('#add_kegiatan').serialize(),
      type:'json',
      success:function(data)  
      {
        if(data.error){
          printErrorMsg(data.error);
        }else{
          i=1;
          $('.dynamic-added').remove();
          $('#add_kegiatan')[0].reset();
          $(".print-success-msg").find("ul").html('');
          $(".print-success-msg").css('display','block');
          $(".print-error-msg").css('display','none');
          $(".print-success-msg").find("ul").append('<li>Record Inserted Successfully.<button type="button" class="close" data-dismiss="alert">×</button></li>');
        }
      }  
    });  
   });  
    function printErrorMsg (msg) {
     $(".print-error-msg").find("ul").html('');
     $(".print-error-msg").css('display','block');
     $(".print-success-msg").css('display','none');
     $.each( msg, function( key, value ) {
      $(".print-error-msg").find("ul").append('<li>'+value+'</li>');
    });
   }
 });  
</script> --}}

@endsection



