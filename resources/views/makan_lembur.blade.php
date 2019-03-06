@extends('master')

@section('title-bar')
    Satuan Biaya Uang Makan, Lembur, dan Konsumsi Rapat
@endsection

@section('right_title')
    SATUAN BIAYA UANG MAKAN, LEMBUR, DAN KONSUMSI RAPAT
@endsection

@section('add-css')
<!-- DataTables -->
   <link rel="stylesheet" href="{{url('assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">
@endsection
@section('content')
<br/>
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
                  <th>Uraian Kegiatan</th>
                  <th>Satuan</th>
                  <th>Besaran Bruto Maksimum (Rp)</th>
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
                      @foreach ($makan->biaya_konsumsi as $biaya)
                        <td>
                          {{ $biaya->uraian_kegiatan}}
                        </td>
                        
                        <td>
                            {{ $biaya->satuan}}
                        </td>
                        @if($biaya->bruto == null)
                        <td>
                        </td>
                        @else
                        <td>
                          {{number_format($biaya->bruto)}}</td>
                        @endif 
                        <tr>
                      @endforeach
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
@endsection