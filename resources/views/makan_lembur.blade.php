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
                    <tr>
                    <th>
                    Satuan Biaya Uang Makan Pegawai Tetap
                    </th>
                    </tr>
                    <tr>
                    @foreach ($makan_1 as $makan1)
                      <td>
                          {{ $makan1->uraian_kegiatan}}
                      </td>
                      
                      <td>
                          {{ $makan1->satuan}}
                      </td>
                      @if($makan1->bruto == null)
                      <td>
                      </td>
                      @else
                      <td>
                      {{number_format($makan1->bruto)}}</td>
                      @endif 
                  </tr>
                  @endforeach 

                  <tr>
                    <th>
                    Satuan Biaya Lembur
                    </th>
                    </tr>
                    <tr>
                    @foreach ($makan_2 as $makan2)
                      <td>
                          {{ $makan2->uraian_kegiatan}}
                      </td>
                      
                      <td>
                          {{ $makan2->satuan}}
                      </td>
                      @if($makan2->bruto == null)
                      <td>
                      </td>
                      @else
                      <td>
                      {{number_format($makan2->bruto)}}</td>
                      @endif 
                  </tr>
                  @endforeach 

                  <tr>
                    <th>
                    Satuan Biaya Konsumsi Penyelenggaraan Rapat atau Pertemuan Lain
                    </th>
                    </tr>
                    <tr>
                    @foreach ($makan_3 as $makan3)
                      <th>
                          {{ $makan3->uraian_kegiatan}}
                      </th>
                      </tr>
                  @endforeach 
                        @foreach ($submakan_8 as $sub_8)
                      <tr>
                      <td>
                          {{ $sub_8->uraian_kegiatan}}
                      </td>
                      <td>
                          {{ $sub_8->satuan}}
                      </td>
                      @if($sub_8->bruto == null)
                      <td>
                      </td>
                      @else
                      <td>
                      {{number_format($sub_8->bruto)}}</td>
                      @endif 
                      @endforeach
                  </tr>
               
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