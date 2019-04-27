@extends('master')

@section('title-bar')
    Satuan Biaya Perjalanan Dinas
@endsection

@section('right_title')
    <li class="active"><a href="/2">Satuan Biaya Perjalanan Dinas</a></li>
    <li class="active">Satuan Uang Harian Perjalanan Dinas Dalam Negeri</a></li>
@endsection
@section('add-css')
<!-- DataTables -->
   <link rel="stylesheet" href="{{url('assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">
   <!-- Form -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css"/>

  <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
@endsection
@section('content')
<br/>
  <div class="col-md-13">
           <div class="box box-default">
            <div class="box-header with-border" style="margin: 1em 0 0 1em;">
              <strong class="box-title" >
                @foreach ($uraians as $uraian)
                    {{strtoupper($uraian->uraian_kegiatan)}}
                @endforeach
              </strong><br/>
              {{-- <strong class="card-title">Data version {{$month}}</strong> --}}
              <button type="button" class="btn btn-default pull-right" data-toggle="modal" data-target="#addModal"><i class="fa fa-plus"></i>&emsp;Add
          </button>
            </div>

            <br/>

          <table border="0" style="width: 67%; margin: 0 auto 2em auto;">
                  <thead>
                      <tr>
                          <th width="100">Target</th>
                          <th width="80">Search</th>
                          <th></th>
                      </tr>
                  </thead>
                  <tbody>
                      <tr>
                          <td>Version</td>
                          <td>
                            <form class="search-form" method="POST" action="{{url('search_month3')}}">
                            {{csrf_field()}}
                                <input class="form-control" style="width:200px" type="month" name="month_year" id="month_year"required/>
                              <td>
                                &ensp;
                                <button class="btn btn-danger btn-sm" type="submit" value="submit"><i class="fa fa-search"></i></button>
                              </td>
                            </form>
                          </td>
                      </tr>
                  </tbody>
              </table>

          <div class="box-body">
            <table id="example1" class="table table-bordered table-hover">
              <thead>
              <tr>
                <th width="10">No.</th>
                <th width="600">Kegiatan</th>
                <th width="20"></th>
              </tr>
              </thead>
             <tbody>
              {{-- @foreach ($kategoris as $kategoria) --}}
             {{--  @foreach ($uraians as $key => $uraian)
                  <tr>
                    <td>
                        {{$key+1}}. 
                    </td>
                    <td>
                       <a href="/2/{{$key+1}}"> {{ $kategori->kategori_kegiatan}}
                    </td>
                      <td> 
                      <i class="fa fa-eye" data-toggle="modal" onclick="viewdata('{{ $kategori->id }}')" data-target="#show-modal"> | </i> 
                      <i class="fa fa-pencil" data-toggle="modal" onclick="submitUpdate('{{ $kategori->id }}')" data-target="#edit-modal">  </i>
                    </tr>
                @endforeach
              @endforeach --}}
            </tbody>
            <tfoot>
              <tr>
                <th width="10">No.</th>
                <th width="600">Kegiatan</th>
                <th width="20"></th>
              </tr>
            </tfoot>
        </table>
        <br/>
      </div>
    </div>
  </div>
{{-- 
<!--Add Modal-->
        <div id="addModal" class="modal fade">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Add</h4>
              </div>
              <div class="modal-body">
                <div class="form-group" id="form-jenis-kegiatan">
                  <br/>
                <form action="{{url('/jalan_dinas/kategori-kegiatan')}}" method="POST"> 
                  {{csrf_field()}} 
            <form class="form-horizontal">
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Kategori Kegiatan</label>
                  <div class="col-sm-10">
                    <input type="text" name="kategori_kegiatan" placeholder="Kategori Kegiatan" class="form-control" required />
                  </div>
                </div>
                <br/><br/>
              <div class="modal-footer">  
                <input type="submit" name="submit" id="submit" class="btn btn-primary" value="Add" /> 
              </div>
            </div>
            </form>
          </form>
          </div>
        </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
      </div>
    </div>

<!-- Show Modal -->
  <div class="modal fade" id="show-modal">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Data Details</h4>
              </div>
              <div class="modal-body">
              <div class="box-body">
                <table border="0">
                  <tr>
                    <th class="col-sm-3 control-label">ID</th>
                    <td width="10">:</td>
                    <td><input style="border: none; box-shadow: none;" class="form-control" type="text" size="50" id="id" name="id" disabled> </td>
                  </tr>
                  <tr>
                    <th style="vertical-align: top; padding-top: 5px;" class="col-sm-3 control-label">Kategori Kegiatan</th>
                    <td style="vertical-align: top; padding-top: 5px;" width="10">:</td>
                    <td>
                      <textarea style="border: none; box-shadow: none;" class="form-control" rows="3" id="kategori" name="kategori" disabled></textarea>
                  </tr>
                </table>
              </div>              
              </div>
            </div>
          </div>
        </div>
    </div>

<!-- Edit Modal -->
  <div class="modal fade" id="edit-modal">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Data Details</h4>
              </div>
              <div class="modal-body">
              <form action="{{url('/jalan_dinas/update')}}" method="POST"> 
              {{csrf_field()}} 
              <div class="box-body">
                <table border="0">
                  <tr>
                    <th class="col-sm-3 control-label">ID</th>
                    <td width="10">:</td>
                    <td><input type="text" class="form-control" id="id_kategori" name="id_kategori" required></td>
                  </tr>
                  <br/>
                  <tr>
                    <th class="col-sm-3 control-label">Kategori Kegiatan</th>
                    <td width="10">:</td>
                    <td>
                    <textarea class="form-control" rows="3" id="kategori_kegiatan" name="kategori_kegiatan" value="{{old('kategori_kegiatan')}}"></textarea>
                  </td>
                  </tr>
                </table>
              </div>              
              </div>
               <div class="modal-footer">  
                <input type="submit" name="submit" id="submit" class="btn btn-primary" value="Update" /> 
              </div>
            </form>
            </div>
          </div>
        </div>
    </div>
 --}}
{{-- 
TABEL SATU
           <div class="box-body" id="1">
            <table id="example1" class="table table-bordered table-hover">
              <thead>
              <tr>
                <th width="10">No.</th>
                <th width="400">Provinsi</th>
                <th width="80">Satuan</th>
                <th width="80">Luar Kota (Rp)</th>
                <th width="120">Dalam Kota Lebih dari 8 Jam (Rp)</th>
                <th width="80">Diklat (Rp)</th>
              </tr>
              </thead>
             <tbody>
              @foreach ($uraians as $key => $uraian)
                  <tr>
                    <td>
                        {{$key+1}}. 
                    </td>
                    <td>{{ $uraian->uraian_kegiatan}}</td>
                    <td>{{ $uraian->satuan}}</td>
                    <td>{{ number_format($uraian->var1)}}</td>
                    <td>{{ number_format($uraian->var2)}}</td>
                    <td>{{ number_format($uraian->var3)}}</td>
                    </tr>
              @endforeach
            </tbody>
            <tfoot>
              <tr>
                <th width="10">No.</th>
                <th width="400">Provinsi</th>
                <th width="80">Satuan</th>
                <th width="80">Luar Kota (Rp)</th>
                <th width="120">Dalam Kota Lebih dari 8 Jam (Rp)</th>
                <th width="80">Diklat (Rp)</th>
              </tr>
            </tfoot>
        </table>
        <br/>
      </div>
    </div>
  </div> --}}

 



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


<!-- form -->
<script src="{{url('assets/bower_components/select2/dist/js/select2.full.min.js')}}"></script>        

<script>
  $(document).ready(function (){
    $('#example1').DataTable({
      'ordering'    :false
    });  
});
</script>
<script>
  $(document).ready(function(){

    viewdata = function(id){
      $.ajax({
        url: '/data/jalan',
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
          $('#kategori').val(data.kategori_kegiatan);
        }
      });
    }
    submitUpdate = function(id){
      $.ajax({
        url: '/data/edit-jalan',
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
          $('#id_kategori').val(data.id);
          $('#kategori_kegiatan').val(data.kategori_kegiatan);
        }
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




