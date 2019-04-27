@extends('master')

@section('title-bar')
    @foreach ($kegiatans as $kegiatan)
        {{$kegiatan->nama_kegiatan}}
    @endforeach
@endsection

@section('right_title')
    @foreach ($kegiatans as $kegiatan)
        <li class="active"><a href="/2">{{$kegiatan->nama_kegiatan}}</a></li>
        @foreach($kegiatan->kategori as $kategori)
            @if(strpos($kategori->kategori_kegiatan, 'Representasi') !== false)
                <li class="active">{{$kategori->kategori_kegiatan}}
            @endif
        @endforeach
    @endforeach
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
                @foreach ($kegiatans as $kegiatan)
                  @foreach($kegiatan->kategori as $kategori)
                    @if(strpos($kategori->kategori_kegiatan, 'Representasi') !== false)
                        {{strtoupper($kategori->kategori_kegiatan)}}
              </strong><br/>
              {{-- <strong class="card-title">Data version {{$month}}</strong> --}}
              <button type="button" class="btn btn-default pull-right" data-toggle="modal" onclick="submitUpdate_add('{{ $kategori->id }}')" data-target="#addModal"><i class="fa fa-plus"></i>&emsp;Add
                @endif  
              @endforeach
            @endforeach
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
                            <form class="search-form" method="POST" action="{{url('search_month/jalan_dinas_2')}}">
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
                <th width="275">Uraian</th>
                <th width="80">Satuan</th>
                <th width="80">Luar Kota (Rp)</th>
                <th width="80">Dalam Kota Lebih dari 8 Jam (Rp)</th>
                <th width="20"></th>
              </tr>
              </thead>
             <tbody>
              @foreach ($kegiatans as $kegiatan)
              @foreach ($kegiatan->kategori as $kategori)
                @if(strpos($kategori->kategori_kegiatan, 'Representasi') !== false)
                  @foreach ($kategori->uraian as $key => $uraian)
                  <tr>
                    <td>
                        {{$key+1}}. 
                    </td>
                    <td>
                      {{ $uraian->uraian_kegiatan}}
                    </td>
                    <td>{{$uraian->satuan}}</td>
                    <td>{{number_format($uraian->var1)}}</td>
                    <td>{{number_format($uraian->var2)}}</td>
                      <td> 
                      <i class="fa fa-eye" data-toggle="modal" onclick="viewdata('{{ $uraian->id }}')" data-target="#show-modal"> | </i> 
                      <i class="fa fa-pencil" data-toggle="modal" onclick="submitUpdate('{{ $uraian->id }}')" data-target="#edit-modal">  </i>
                    </tr>
                  @endforeach
                @endif
                @endforeach
              @endforeach
            </tbody>
            <tfoot>
              <tr>
                <th width="10">No.</th>
                <th width="275">Uraian</th>
                <th width="80">Satuan</th>
                <th width="80">Luar Kota (Rp)</th>
                <th width="80">Dalam Kota Lebih dari 8 Jam (Rp)</th>
                <th width="20"></th>
              </tr>
            </tfoot>
        </table>
        <br/>
      </div>
    </div>
  </div>

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
                <div class="form-group">
                  <br/>
                <form action="{{url('/jalan_dinas/uraian')}}" method="POST"> 
                  {{csrf_field()}} 
            <form class="form-horizontal">
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-4 control-label">Kategori</label>
                  <div class="col-sm-8">
                    <input style="border: none; box-shadow: none;" class="form-control" type="text" size="50" id="id" name="id" required> 
                    {{-- <input type="text" name="kategori_kegiatan" placeholder="Kategori Kegiatan" class="form-control" required /> --}}
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-4 control-label">Uraian</label>
                  <div class="col-sm-8">
                    <textarea class="form-control" rows="3" id="uraian_kegiatan" name="uraian_kegiatan" placeholder="Uraian Kegiatan" required></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-4 control-label">Satuan</label>
                  <div class="col-sm-8">
                    <input type="text" name="satuan" placeholder="Satuan" class="form-control" required />
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-4 control-label">Luar Kota (Rp)</label>
                  <div class="col-sm-8">
                    <input type="number" name="var1" placeholder="Luar Kota (Rp)" class="form-control" required />
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-4 control-label">Dalam Kota (Rp)</label>
                  <div class="col-sm-8">
                    <input type="number" name="var2" placeholder="Dalam Kota Lebih dari 8 Jam (Rp)" class="form-control" required />
                  </div>
                </div>
                <br/><br/>
              </div>
              <div class="modal-footer">  
                <input type="submit" name="submit" id="submit" class="btn btn-primary" value="Add" /> 
              </div>
            </div>
            </form>
          </form>
          </div>
        </div>
          </div>
        </div>
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
                    <td><input style="border: none; box-shadow: none;" class="form-control" type="text" size="50" id="id_uraian" name="id_uraian" disabled> </td>
                  </tr>
                  <tr>
                    <th class="col-sm-3 control-label">Kategori</th>
                    <td width="10">:</td>
                    <td><input style="border: none; box-shadow: none;" class="form-control" type="text" size="50" id="kategori" name="kategori" disabled> </td>
                  </tr>
                  <tr>
                    <th style="vertical-align: top; padding-top: 5px;" class="col-sm-3 control-label">Uraian</th>
                    <td style="vertical-align: top; padding-top: 5px;" width="10">:</td>
                    <td><textarea style="border: none; box-shadow: none;" class="form-control" rows="2" id="uraian_kegiatan2" name="uraian_kegiatan2" disabled></textarea></td>
                  </tr>
                  <tr>
                    <th class="col-sm-3 control-label">Satuan</th>
                    <td width="10">:</td>
                    <td><input style="border: none; box-shadow: none;" class="form-control" type="text" size="50" id="satuan" name="satuan" disabled> </td>
                  </tr>
                  <tr>
                    <th class="col-sm-3 control-label">Luar Kota (Rp)</th>
                    <td width="10">:</td>
                    <td><input style="border: none; box-shadow: none;" class="form-control" type="text" size="50" id="var1" name="var1" disabled> </td>
                  </tr>
                  <tr>
                    <th class="col-sm-3 control-label">Dalam Kota Lebih dari 8 Jam (Rp)</th>
                    <td width="10">:</td>
                    <td><input style="border: none; box-shadow: none;" class="form-control" type="text" size="50" id="var2" name="var2" disabled> </td>
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
              <form action="{{url('/jalan_dinas/update/uraian')}}" method="POST"> 
              {{csrf_field()}} 
              <div class="box-body">
                <table border="0">
                  <tr>
                    <th class="col-sm-3 control-label">ID</th>
                    <td width="10">:</td>
                    <td><input class="form-control" type="text" size="50" id="edit-id_uraian" name="edit-id_uraian" required> </td>
                  </tr>
                  <tr>
                    <th class="col-sm-3 control-label">Kategori</th>
                    <td width="10">:</td>
                    <td><input class="form-control" type="text" size="50" id="edit-kategori" name="edit-kategori" required> </td>
                  </tr>
                  <tr>
                    <th class="col-sm-3 control-label">Uraian</th>
                    <td width="10">:</td>
                    <td><textarea class="form-control" rows="2" id="edit-uraian_kegiatan2" name="edit-uraian_kegiatan2" required></textarea></td>
                  </tr>
                  <tr>
                    <th class="col-sm-3 control-label">Satuan</th>
                    <td width="10">:</td>
                    <td><input class="form-control" type="text" size="50" id="edit-satuan" name="edit-satuan" required> </td>
                  </tr>
                  <tr>
                    <th class="col-sm-3 control-label">Luar Kota (Rp)</th>
                    <td width="10">:</td>
                    <td><input class="form-control" type="text" size="50" id="edit-var1" name="edit-var1" required> </td>
                  </tr>
                  <tr>
                    <th class="col-sm-3 control-label">Dalam Kota Lebih dari 8 Jam (Rp)</th>
                    <td width="10">:</td>
                    <td><input class="form-control" type="text" size="50" id="edit-var2" name="edit-var2" required> </td>
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
        url: '/data/uraian',
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
          $('#id_uraian').val(data.id);
          $('#kategori').val(data.kategori_id); 
          $('#uraian_kegiatan2').val(data.uraian_kegiatan);
          $('#satuan').val(data.satuan);
          $('#var1').val(data.var1);
          $('#var2').val(data.var2);
          }
      });
    }
    submitUpdate_add = function(id){
      $.ajax({
        url: '/data/edit-jalan_dinas',
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
          $('#id').val(data.id);
          }
      });
    }
    submitUpdate = function(id){
      $.ajax({
        url: '/data/edit-uraian',
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
        $('#edit-id_uraian').val(data.id);
        $('#edit-kategori').val(data.kategori_id); 
        $('#edit-uraian_kegiatan2').val(data.uraian_kegiatan);
        $('#edit-satuan').val(data.satuan);
        $('#edit-var1').val(data.var1);
        $('#edit-var2').val(data.var2);
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




