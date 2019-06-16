@extends('master')

@section('title')
    @foreach ($versions as $version)
    @foreach ($version->kegiatan as $kegiatan)
    @if($kegiatan->kode_bagian==$kode_bagian_kegiatan)
    @foreach ($kegiatan->kategori as $kategori)
    @if($kategori->kode_bagian==$kode_bagian_kategori)
       {{$kategori->kategori_kegiatan}}
    @endif
    @endforeach
    @endif
    @endforeach
    @endforeach
@endsection

@section('right_title')
  <li class="active"><a href="/dokumen">SBI</a></li>
@foreach ($versions as $version)
@foreach ($version->kegiatan as $kegiatan)
@if($kegiatan->kode_bagian==$kode_bagian_kegiatan)
  <li class="active"><a href="/data/2/{{$kode_bagian_kegiatan}}">{{$kegiatan->nama_kegiatan}}</a></li>
@foreach ($kegiatan->kategori as $kategori)
@if($kategori->kode_bagian==$kode_bagian_kategori)
  <li class="active">{{$kategori->kategori_kegiatan}}</a></li>
@endif
@endforeach
@endif
@endforeach
@endforeach
@endsection
@section('content')
<br/>
@if(Auth::user()->role!=3)
<button type="button" class="btn btn-info btn-rounded waves-effect waves-light pull-right" data-toggle="modal" data-target="#addModal"><span class="btn-label"><i class="fa fa-plus"></i></span>Add</button>
@endif
<h3 class="box-title m-b-0">
 @foreach ($versions as $version)
    @foreach ($version->kegiatan as $kegiatan)
      @if($kegiatan->kode_bagian==$kode_bagian_kegiatan)
      @foreach ($kegiatan->kategori as $kategori)
      @if($kategori->kode_bagian==$kode_bagian_kategori)
        {{strtoupper($kategori->kategori_kegiatan)}} 
      @endif
      @endforeach
      @endif
    @endforeach
  @endforeach
</h3>
  <p class="text-muted m-b-30">Data version {{$version->version}}</p>
    @if (session('message_success'))
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <strong><h4><i class="icon fa fa-check"></i> Sukses!</strong></h4>
            {{ session('message_success') }}
        </div>
    @endif
      
<div class="table-responsive">
  <table id="example1" class="table table-striped">
    <thead>
    <tr>
      <th class="col-sm-1">No.</th>
      <th class="col-sm-5">Provinsi</th>
      <th class="col-sm-1">Satuan</th>
      <th class="col-sm-1">Roda 4(Rp)</th>
      <th class="col-sm-1">Roda 6 / Bus Sedang (Rp)</th>
      <th class="col-sm-1">Roda 6 / Bus Besar (Rp)</th>
      <th class="col-sm-1">Aksi</th>
    </tr>
    </thead>
   <tbody>
    @foreach ($versions as $version)
    @foreach ($version->kegiatan as $kegiatan)
    @if($kegiatan->kode_bagian==$kode_bagian_kegiatan)
    @foreach ($kegiatan->kategori as $kategori) 
    @if($kategori->kode_bagian==$kode_bagian_kategori)
    @foreach ($kategori->uraian as $key => $uraian)
      <tr>
        <td>{{$key+1}}</td>
        <td>
          {{ $uraian->uraian_kegiatan}}
        </td>
        <td>
            {{ $uraian->satuan}}
        </td>
        <td>{{number_format($uraian->var1)}}</td>
        <td>{{number_format($uraian->var2)}}</td>
        <td>{{number_format($uraian->var3)}}</td>
        <td>
          {{-- <button type="button" class="btn btn-info btn-outline btn-circle btn-xs" data-toggle="modal" data-target="#show-modal2" onclick="submitUpdate2({{ $uraian->id }},{{$uraian->kode_tabel}})"><i class="ti-eye" data-toggle="tooltip" title="View Data"></i></button> --}}
          @if(Auth::user()->role!=3)
            <button type="button" class="btn btn-info btn-outline btn-circle btn-xs" data-toggle="modal" data-target="#edit-modal2" onclick="submitUpdate2({{ $uraian->id }},{{$uraian->kode_tabel}})"><i class="ti-pencil" data-toggle="tooltip" title="Edit Data"></i></button>
          @endif
        </td>
      </tr>
      @endforeach
      @endif
      @endforeach
      @endif
      @endforeach
      @endforeach
    </tbody>
  </table>
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
  @foreach ($version->kegiatan as $kegiatan)
    @foreach ($kegiatan->uraian as $uraian)
  @endforeach
  @endforeach
<form action="{{url('/data/add', $uraian->kode_tabel)}}" method="POST">
  {{csrf_field()}} 
    <div class="form-group">
      <select class="form-control select2" style="width:500px" name="kategori_kegiatan" required>
        <option></option>
        @foreach ($versions as $version)
         @foreach ($version->kegiatan as $kegiatan)
         @if($kegiatan->kode_bagian==$kode_bagian_kegiatan)
          @foreach($kegiatan->kategori as $kategori)
          @if($kategori->kode_bagian==$kode_bagian_kategori)
             <option value="{{$kategori->id}}">{{$kategori->kategori_kegiatan}}</option>
          @endif
          @endforeach
          @endif
        @endforeach
      @endforeach
      </select>  
    </div>
  <form class="form-horizontal">
    <div class="box-body">
      <div class="form-group">
        <label class="col-sm-3 control-label">Provinsi</label>
        <div class="col-sm-9">
          <textarea class="form-control" rows="3" id="uraian_kegiatan" name="uraian_kegiatan" placeholder="Uraian Kegiatan" required></textarea>
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-3 control-label">Satuan</label>
        <div class="col-sm-9">
          <input type="text" name="satuan" placeholder="Satuan" class="form-control" required />
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-3 control-label">Roda 4 (Rp)</label>
        <div class="col-sm-9">
          <input type="number" name="var1" placeholder="Roda 4 (Rp)" class="form-control" required />
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-3 control-label">Bus Sedang (Rp)</label>
        <div class="col-sm-9">
          <input type="number" name="var2" placeholder="Roda 6 / Bus Sedang (Rp)" class="form-control" required />
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-3 control-label">Bus Besar (Rp)</label>
        <div class="col-sm-9">
          <input type="number" name="var3" placeholder="Roda 6 / Bus Besar (Rp)" class="form-control" required />
        </div>
      </div>
    </div>
    <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
    <div class="modal-footer">  
      <input type="submit" name="submit" id="submit" class="btn btn-primary btn-rounded" value="Add" /> 
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
  <div class="modal fade" id="show-modal2">
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
                    <td><input style="border: none; box-shadow: none;" class="form-control" type="text" size="50" id="id2" name="id2" disabled> </td>
                  </tr>
                  <tr>
                    <th class="col-sm-3 control-label">Kategori</th>
                    <td width="10">:</td>
                    <td><input style="border: none; box-shadow: none;" class="form-control" type="text" size="50" id="kategori2" name="kategori2" disabled></td>
                  </tr>
                  <tr>
                    <th class="col-sm-3 control-label">Satuan</th>
                    <td width="10">:</td>
                    <td><input style="border: none; box-shadow: none;" class="form-control" type="text" size="50" id="satuan" name="satuan" disabled></td>
                  </tr>
                  <tr>
                    <th class="col-sm-3 control-label">Roda 4 (Rp)</th>
                    <td width="10">:</td>
                    <td><input style="border: none; box-shadow: none;" class="form-control" type="text" size="50" id="var1" name="var1" disabled></td>
                  </tr>
                  <tr>
                    <th class="col-sm-3 control-label">Bus Sedang (Rp)</th>
                    <td width="10">:</td>
                    <td><input style="border: none; box-shadow: none;" class="form-control" type="text" size="50" id="var2" name="var2" disabled></td>
                  </tr>
                  <tr>
                    <th class="col-sm-3 control-label">Bus Besar (Rp)</th>
                    <td width="10">:</td>
                    <td><input style="border: none; box-shadow: none;" class="form-control" type="text" size="50" id="var3" name="var3" disabled></td>
                  </tr>
                 <tr>
                    <th style="vertical-align: top; padding-top: 5px;" class="col-sm-3 control-label">Uraian Kegiatan</th>
                    <td style="vertical-align: top; padding-top: 5px;" width="10">:</td>
                    <td><textarea style="border: none; box-shadow: none;" class="form-control" rows="3" id="uraian" name="uraian" disabled></textarea> </td>
                  </tr>
                </table>
              </div>              
              </div>
            </div>
          </div>
        </div>
    </div>

<!-- Edit Modal -->
 <div class="modal fade" id="edit-modal2">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Data Details</h4>
              </div>
              <div class="modal-body">
              <form action="{{url('/data/update', $uraian->kode_tabel)}}" method="POST">
              {{csrf_field()}} 
              <div class="box-body">
                <table border="0">
                  <tr>
                    <th class="col-sm-3 control-label">ID</th>
                    <td width="10">:</td>
                    <td><input type="text" style="border: none; box-shadow: none;" class="form-control" id="edit_id2" name="edit_id2" required></td>
                  </tr>
                  <br/>
                  <tr>
                    <th class="col-sm-3 control-label">Kategori</th>
                    <td width="10">:</td>
                    <td>
                    <div class="form-group">
                      <select class="form-control select2" style="width:385px" name="edit_kategori2" id="edit_kategori2" required>
                        <option></option>
                        @foreach($versions as $version)
                          @foreach($version->kegiatan as $kegiatan)
                          @if($kegiatan->kode_bagian==$kode_bagian_kegiatan)
                           @foreach($kegiatan->kategori as $kategori)
                            <option value="{{$kategori->id}}">{{$kategori->kategori_kegiatan}}</option>
                          @endforeach
                          @endif
                         @endforeach
                        @endforeach
                      </select>  
                    </div>
                  </td>
                  </tr>
                  <tr>
                    <th class="col-sm-4 control-label">Uraian Kegiatan</th>
                    <td width="10">:&ensp;</td>
                    <td>
                    <textarea class="form-control" rows="3" id="uraian_kegiatan2" name="uraian_kegiatan2" required></textarea>
                    </td>
                  </tr>
                  <tr>
                    <th class="col-sm-3 control-label">Satuan</th>
                    <td width="10">:</td>
                    <td>
                    <input type="text" class="form-control" id="satuan2" name="satuan2" placeholder="Satuan" required>
                    </td>
                  </tr>
                  <tr>
                    <th class="col-sm-3 control-label">Roda 4 (Rp)</th>
                    <td width="10">:</td>
                    <td>
                    <input type="number" class="form-control" id="edit_var1" name="edit_var1" placeholder="Bruto" required>
                    </td>
                  </tr>
                  <tr>
                    <th class="col-sm-3 control-label">Bus Sedang (Rp)</th>
                    <td width="10">:</td>
                    <td>
                    <input type="number" class="form-control" id="edit_var2" name="edit_var2" placeholder="Bruto" required>
                    </td>
                  </tr>
                  <tr>
                    <th class="col-sm-3 control-label">Bus Besar (Rp)</th>
                    <td width="10">:</td>
                    <td>
                    <input type="number" class="form-control" id="edit_var3" name="edit_var3" placeholder="Bruto" required>
                    </td>
                  </tr>
                </table>
              </div>              
              </div>
               <div class="modal-footer">  
                <input type="submit" name="submit" id="submit" class="btn btn-primary btn-rounded" value="Update" /> 
              </div>
            </form>
            </div>
          </div>
        </div>
    </div>


@endsection

@section('add-script')
<script>
  $(document).ready(function (){
    $('#example1').DataTable({
      'ordering'    :false
    });  
});
</script>
<script>
      $(document).ready(function() {
      $('#list_kategori_kegiatan').on('change', function() {
          var getKategoriId = $(this).val();
          var kode_tabel = 4;
          if(getKategoriId) {
              $.ajax({
                  url: '/getDataId/'+getKategoriId,
                  type: "GET",
                  data : {
                      '_token': "{{ csrf_token() }}",
                      'kode_tabel' : kode_tabel
                  },
                  dataType: "json",
                  success:function(data) {
                      // console.log(data);
                    if(data){
                      $('#list_uraian_kegiatan').empty();
                      $('#list_uraian_kegiatan').focus;
                      $('#list_uraian_kegiatan').append('<option value=""></option>'); 
                      $.each(data, function(key, value){
                      $('select[name="list_uraian_kegiatan"]').append('<option value="'+ value.id +'">' + value.uraian_kegiatan+ '</option>');
                  });
                }else{
                  $('#list_uraian_kegiatan').empty();
                }
                }
              });
          }else{
            $('#list_uraian_kegiatan').empty();
          }
      });
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
    $('.selecturaian').select2(
    {
      placeholder: "Pilih Uraian",
      allowClear: true
    })
  })
</script>
<script type="text/javascript">
    submitUpdate2 = function(id, kode_tabel){
      $.ajax({
        url: '/getdata',
        type: 'POST',
        data: {
          '_token': "{{ csrf_token() }}",
          'id' : id,
          'kode_tabel' : kode_tabel
        },
        error: function() {
          console.log('Error');
        },
        dataType: 'json',
        success: function(data) {
          console.log(data);
          $('#id2').val(data.id);
          $('#kategori2').val(data.kategori_id);
          $('#uraian').val(data.uraian_kegiatan);
          $('#satuan').val(data.satuan);
          $('#var1').val(data.var1);
          $('#var2').val(data.var2);
          $('#var3').val(data.var3);
          $('#edit_id2').val(data.id);
          $('#edit_kategori2').val(data.kategori_id);
          $('#edit_kategori2').select2().trigger('change');
          $('#uraian_kegiatan2').val(data.uraian_kegiatan);
          $('#satuan2').val(data.satuan);
          $('#edit_var1').val(data.var1);
          $('#edit_var2').val(data.var2);
          $('#edit_var3').val(data.var3);
        }
      });
    }
</script>
@endsection