@extends('master')

@section('title-bar')
    Standar Biaya Perjalanan Dinas
@endsection

@section('right_title')
    STANDAR BIAYA PERJALANAN DINAS
@endsection

@section('add-css')
<!-- DataTables -->
   <link rel="stylesheet" href="{{url('assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">
   <!-- Form -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
  <!-- CSRF token for ajax call -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
@endsection
@section('content')
<br/>
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Standar Biaya Perjalanan Dinas</h3>
              <button type="button" class="btn btn-default pull-right" data-toggle="modal" data-target="#addModal"><i class="fa fa-plus"></i>&nbsp;&nbsp;&nbsp;Tambah
          </button>
            </div>

 {{-- <div class="modal fade" id="modal-default"> --}}
        <div id="addModal" class="modal fade">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Tambah Standar Biaya Perjalanan Dinas</h4>
              </div>
              <div class="modal-body">
                <form name="add_makan" id="add_makan">  
                    <div class="alert alert-danger print-error-msg" style="display:none">
                      <ul></ul>
                    </div>
                    <div class="alert alert-success print-success-msg" style="display:none">
                      <ul></ul>
                    </div>
                    <div class="form-group">
                      <select class="form-control select2" style="width:500px;" name="kategori_makan[]">
                        <option></option>
                        @foreach($kategoris as $kategori)
                        <option value="{{$kategori->id}}">{{$kategori->kategori_makan}}</option>
                        @endforeach
                      </select>  
                    </div>
                    <div class="table-responsive">  
                    <table class="table table-bordered" id="dynamic_field">  
                      <tr>  
                        <td><input type="text" name="uraian_kegiatan[]" placeholder="Provinsi" class="form-control name_list" /></td>  
                        <td><input type="text" name="satuan[]" placeholder="Satuan" class="form-control name_list" /></td>  
                        <td><input type="text" name="bruto[]" placeholder="Luar Kota (Rp)" class="form-control name_list" /></td>  
                        <td><input type="text" name="dalam_kota[]" placeholder="Dalam Kota Lebih dari 8 jam (Rp)" class="form-control name_list" /></td>  
                        <td><input type="text" name="diklat[]" placeholder="Diklat (Rp)" class="form-control name_list" /></td>  
                      </tr>  
                    </table>  
                <input type="button" name="submit" id="submit" class="btn btn-info" value="Tambah" />  
                  </div>
                </form>
               
            </div>

              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                {{-- <input type="button" class="btn btn-primary" name="submit" id="submit" class="btn btn-info" value="Tambah" /> --}}  
                {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->

            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Provinsi</th>
                  <th>Satuan</th>
                  <th>Luar Kota (Rp)</th>
                  <th>Dalam Kota Lebih dari 8 Jam (Rp)</th>
                  <th>Diklat (Rp)</th>
                </tr>
                </thead>
               <tbody>
                  @foreach ($kategori_makans as $kategori_makan)
                    <tr>
                      <th>
                        {{ $kategori_makan->kategori_makan}}
                      </th>
                    </tr>
                    <tr>
                    @foreach ($kategori_makan->makan_lembur as $makan)
                      <td>
                          {{ $makan->uraian_kegiatan}}
                      </td>
                      
                      <td>
                          {{ $makan->satuan}}
                      </td>
                      @if($makan->bruto == null)
                      <td>
                      </td>
                      @else
                      <td>
                      {{number_format($makan->bruto)}}</td>
                      @endif 
                    </tr>
                      
                      
                    @endforeach
                  @endforeach 
                </tfoot>
              </table>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
      </div>
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

<!-- form -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="{{url('assets/bower_components/select2/dist/js/select2.full.min.js')}}"></script>


<script type="text/javascript">
  $(document).ready(function(){      
    var postURL = "<?php echo url('tambah'); ?>";
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
      data:$('#add_makan').serialize(),
      type:'json',
      success:function(data)  
      {
        if(data.error){
          printErrorMsg(data.error);
        }else{
          i=1;
          $('.dynamic-added').remove();
          $('#add_makan')[0].reset();
          $(".print-success-msg").find("ul").html('');
          $(".print-success-msg").css('display','block');
          $(".print-error-msg").css('display','none');
          $(".print-success-msg").find("ul").append('<li>Data berhasil ditambahkan.</li>');
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
@endsection