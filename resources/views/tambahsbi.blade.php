@extends('master')

@section('title-bar')
    Tambah SBI
@endsection

@section('right_title')
  <li class="active">Standar Biaya Institut</li>
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
              <strong class="box-title" >TAMBAH STANDAR BIAYA INSTITUT </strong><br/>
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
                          <td>Version</td>
                             <div class="form-group" id="form-kegiatan">
                              <form action="{{url('/versi')}}" method="POST"> 
                                {{csrf_field()}} 
                              <td>                           
                                <input type="text" name="versi" placeholder="Nama Versi" class="form-control" required />
                              </td>
                              <td>
                                &ensp;
                                <input type="submit" name="submit" id="submit" class="btn btn-primary btn-sm" value="Add" /> 
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


<script type="text/javascript">
  $("#form-kegiatan").hide();
  $("#form-jenis-kegiatan").hide();
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




