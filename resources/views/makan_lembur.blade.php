@extends('master')

@section('title-bar')
    Satuan Biaya Uang Makan, Lembur, dan Konsumsi Rapat
@endsection

@section('right_title')
    Satuan Biaya Uang Makan, Lembur, dan Konsumsi Rapat
@endsection

@section('add-css')
<!-- DataTables -->
   <link rel="stylesheet" href="{{url('assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">
   <!-- Form -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css"/>
  <!-- CSRF token for ajax call -->
  {{-- <meta name="csrf-token" content="{{ csrf_token() }}"> --}}
  {{-- 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> --}}


@endsection
@section('content')
<br/>
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">SATUAN BIAYA UANG MAKAN, LEMBUR, DAN KONSUMSI RAPAT</h3>
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
                <h4 class="modal-title">Tambah Satuan Biaya Uang Makan, Lembur, dan Konsumsi Rapat</h4>
              </div>
              <div class="modal-body">
                <form action="{{url('/makan_lembur_rapat')}}" method="POST" name="add_makan" id="add_makan"> 
              {{-- <form name="add_makan" id="add_makan">  --}}
                  @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
                {{-- <div class="alert alert-danger print-error-msg" style="display:none">
                  <ul></ul>
                </div>  --}}
                  {{csrf_field()}} 
                    <div class="form-group">
                      <select class="form-control select2" style="width:500px;" name="kategori_makan">
                        <option></option>
                        @foreach($kategoris as $kategori)
                        <option value="{{$kategori->id}}">{{$kategori->kategori_makan}}</option>
                        @endforeach
                      </select>  
                    </div>

            <form class="form-horizontal">
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Uraian</label>
                  <div class="col-sm-10">
                    <input type="text" name="uraian_kegiatan" placeholder="Uraian Kegiatan" class="form-control" />
                  </div>
                </div>
                <br/><br/>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Satuan</label>
                  <div class="col-sm-10">
                    <input type="text" name="satuan" placeholder="Satuan" class="form-control" />
                  </div>
                </div>
                <br/><br/>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Bruto</label>
                  <div class="col-sm-10">
                    <input type="number" name="bruto" placeholder="Besaran Bruto Maksimum (Rp)" class="form-control" />
                  </div>
                </div>
              </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>                
                <input type="submit" name="submit" id="submit" class="btn btn-primary" value="Tambah" />  
                {{-- <button class="btn btn-success btn-submit">Submit</button> --}}
              </div>
            </form>
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
                  <th>Uraian Kegiatan</th>
                  <th>Satuan</th>
                  <th>Besaran Bruto Maksimum (Rp)</th>
                  <th>Aksi</th>
                </tr>
                </thead>
               <tbody>
                  @foreach ($kategori_makans as $kategori_makan)
                    <tr>
                      <th>
                        {{ $kategori_makan->kategori_makan}}
                      </th>
                      <td></td>
                      <td></td>
                      <td> <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-edit">Edit
                          </button></td>
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
                      <td>
                          <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-edit">Edit
                          </button></td>
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
                        <td>
                          <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-edit">Edit
                          </button></td>
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

<!-- form -->
<script src="{{url('assets/bower_components/select2/dist/js/select2.full.min.js')}}"></script>        


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