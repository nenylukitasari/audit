@extends('master')

@section('title-bar')
    Data pegawai
@endsection

@section('right_title')
  <li class="active">Data pegawai</li>
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
            <div class="box-header with-border" style="margin: 1em 0 0 1em;">
              <strong class="box-title" >CARI DATA PEGAWAI </strong><br/>
          </button>
            </div>

            <br/> 

            <table border="0" style="width: 67%; margin: 0 auto 2em auto;">
                  <thead>
                      <tr>
                          <th width="100">Target</th>
                          <th width="500">Nama</th>
                          <th></th>
                      </tr>
                  </thead>
                  <tbody>
                      <tr>
                          <td>Pegawai</td>
                             <div class="form-group" id="form-kegiatan">
                              <form action="#" method="POST"> 
                                {{csrf_field()}} 
                              <td>                           
                                <input type="text" name="versi" placeholder="Nama Pegawai" class="form-control" required />
                              </td>
                              <td>
                                &ensp;
                                <input type="submit" name="submit" id="submit" class="btn btn-primary btn-sm" value="Search" /> 
                              </td>
                            </form>
                          </div>
                      </tr>
                  </tbody>
              </table>
            <br/><br/>

{{--             @foreach ($jenis_kegiatans as $jenis_kegiatan)
              @foreach ($jenis_kegiatan->uraian as $uraian)
                {{ $uraian->uraian_kegiatan}}
              @endforeach
            @endforeach --}}
            </div>
          </div>
@endsection

@section('add-script')
<!-- DataTables -->
<script src="{{url('assets/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{url('assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>

<!-- FastClick -->
<script src="{{url('assets/bower_components/fastclick/lib/fastclick.js')}}"></script>

{{-- batas suci --}}
{{-- <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css"/>
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script> --}}


<!-- page script -->
<script>
  $(document).ready(function (){
    //var table = $('#example1').DataTable();
    $('#example1').DataTable({
      'ordering'    :false
    });
    $('.select2').select2(
    {
      placeholder: "Pilih Jenis Kegiatan",
      allowClear: true
    });
    $('.year').select2(
    {
      placeholder: "",
      allowClear: true
    });
  
});
</script>

<!-- form -->
<script src="{{url('assets/bower_components/select2/dist/js/select2.full.min.js')}}"></script>        


@endsection