@extends('master')

@section('title-bar')
    SATUAN BIAYA UANG MAKAN, LEMBUR, DAN KONSUMSI RAPAT
@endsection
@section('title')
    SATUAN BIAYA UANG MAKAN, LEMBUR, DAN KONSUMSI RAPAT
@endsection
@section('right_title')
    SATUAN BIAYA UANG MAKAN, LEMBUR, DAN KONSUMSI RAPAT
@endsection

@section('add-css')
<!-- DataTables -->
   <link rel="stylesheet" href="{{url('assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">
@endsection
@section('content')
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">SATUAN BIAYA UANG MAKAN, LEMBUR, DAN KONSUMSI RAPAT</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Kategori Kegiatan</th> 
                  <th>Uraian Kegiatan</th>
                  <th>Satuan</th>
                  <th>Besaran Bruto Maksimum (Rp)</th>
                </tr>
                </thead>
               <tbody>
                    @foreach ($makan_lembur as $x)
                    <tr>
                      <td>{{ $x->kategori_makan}}</td>
                      <td>{{ $x->uraian_kegiatan}}</td>
                      <td>{{ $x->satuan}}</td>
                      <td>{{number_format($x->bruto)}}</td>
                    </tr>
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
@endsection