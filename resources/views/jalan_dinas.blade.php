@extends('master')

@section('title-bar')
    Satuan Biaya Perjalanan Dinas
@endsection

@section('right_title')
    Satuan Biaya Perjalanan Dinas
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
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
                <h3 class="box-title">
                  @foreach ($kategoris as $kegiatan)
                    {{$kegiatan->nama_kegiatan}}
                  @endforeach
                </h3>
             {{--  <button type="button" class="btn btn-default pull-right" data-toggle="modal" data-target="#addModal"><i class="fa fa-plus"></i>&nbsp;&nbsp;&nbsp;Add --}}
          </button>
            </div>
            <br/> 

            <table cellpadding="3" cellspacing="0" border="0" style="width: 67%; margin: 0 auto 2em auto;">
                  <thead>
                      <tr>
                          <th>Target</th>
                          <th>Search</th>
                      </tr>
                  </thead>
                  <tbody>
                      <tr>
                          <td>Jenis Kegiatan</td>
                          <td>
                            <select class="form-control select2" style="width:500px" id="pilihopsi" required>
                              <option></option>
                              @foreach ($kategoris as $kategoria)
                              @foreach ($kategoria->kategori as $kategori)
                              {{-- <option value="0">Pilih jenis kegiatan</option> --}}
                              <option value="{{$kategori->id}}">{{$kategori->kategori_kegiatan}}</option>
                              @endforeach
                              @endforeach
                            </select>
                            <input type="button" name="submitpilih" id="submitpilih" class="btn btn-primary" value="Submit"/>
                          </td>
                      </tr>
                  </tbody>
              </table>



            <!-- /.box-header -->
            <div class="box-body">
             
                <thead>
             
                 
               <tbody>
                
                    

                </tbody>
             
              </table>
              <br>
             
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
{{-- <script src="{{url('assets/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script> --}}
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
      placeholder: "Pilih Jenis Kegiatan",
      allowClear: true
    })

  })
</script>


@endsection