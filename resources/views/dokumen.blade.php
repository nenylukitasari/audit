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

           <div class="box-body">
              @foreach ($jenis_kegiatans as $jenis_kegiatan)
      			  	<h4 class="box-title">{{$jenis_kegiatan->jenis_kegiatan}}</h4>
            <table id="example2" class="table table-bordered table-hover">
              <thead>
              <tr>
                <th width="600">Kegiatan</th>
                <th width="20">Aksi</th>
              </tr>
              </thead>
              @foreach ($jenis_kegiatan->kegiatan as $kegiatan)
              <tr>
             <tbody>
                  <td>
                      {{ $kegiatan->nama_kegiatan}}
                  </td>
                  <td></td>
                </tr>
                @endforeach
            </tfoot>
        </table>
        <br/>
        @endforeach
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

<script src="adminlte/bower_components/select2/dist/js/select2.full.min.js"></script>

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
@endsection



