@extends('master')

@section('title')
@foreach ($versions as $version)
@foreach ($version->kegiatan as $kegiatan)
@if($kegiatan->kode_bagian==$kode_bagian_kegiatan)
   {{$kegiatan->nama_kegiatan}}
@endif
@endforeach
@endforeach
@endsection

@section('right_title')
@foreach ($versions as $version)
@foreach ($version->kegiatan as $kegiatan)
@if($kegiatan->kode_bagian==$kode_bagian_kegiatan)
   <li class="active"><a href="/dokumen">SBI</a></li>
   <li class="active">{{$kegiatan->nama_kegiatan}}</li>
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
        {{strtoupper($kegiatan->nama_kegiatan)}}
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
      <th width="10">No.</th>
      <th width="275">Uraian</th>
      <th width="80">Satuan</th>
      <th width="100">Besaran Bruto Maksimum (Rp)</th>
      <th width="40">Aksi</th>
    </tr>
    </thead>
   <tbody>
    @foreach ($versions as $version)
    @foreach ($version->kegiatan as $kegiatan)
    @if($kegiatan->kode_bagian==$kode_bagian_kegiatan)
    @foreach ($kegiatan->kategori as $key => $kategori)
    <tr>
      <td>{{$key+1}}</td>  
        <td>
          {{ $kategori->kategori_kegiatan}}</a>
        </td>
        <td>
          {{ $kategori->satuan}}</a>
        </td>
        <td>
          {{ number_format($kategori->var1)}}</a>
        </td>
        <td>
          {{-- <button type="button" class="btn btn-info btn-outline btn-circle btn-xs" data-toggle="modal" data-target="#show-modal" onclick="submitUpdate({{ $kategori->id }},{{$kategori->kode_tabel}})"><i class="ti-eye" data-toggle="tooltip" title="View Data"></i></button> --}}
          @if(Auth::user()->role!=3)
            <button type="button" class="btn btn-info btn-outline btn-circle btn-xs" data-toggle="modal" data-target="#edit-modal" onclick="submitUpdate({{ $kategori->id }},{{$kategori->kode_tabel}})"><i class="ti-pencil" data-toggle="tooltip" title="Edit Data"></i></button>
          @endif
        </td>
      </tr>
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
                  @foreach ($kegiatan->kategori as $kategori)
                @endforeach
                @endforeach
              <form action="{{url('/data/add', $kategori->kode_tabel)}}" method="POST">
                {{csrf_field()}} 
                  <div class="form-group">
                    <select class="form-control select2" style="width:500px" name="kegiatan_id" required>
                      <option></option>
                      @foreach ($versions as $version)
                       @foreach ($version->kegiatan as $kegiatan)
                       @if($kegiatan->kode_bagian==$kode_bagian_kegiatan)
                           <option value="{{$kegiatan->id}}">{{$kegiatan->nama_kegiatan}}</option>
                        @endif
                      @endforeach
                    @endforeach
                    </select>  
                  </div>
          <form class="form-horizontal">
            <div class="box-body">
              <div class="form-group">
                <label class="col-sm-3 control-label">Uraian</label>
                <div class="col-sm-9">
                  <input type="hidden" name="kode_bagian" value="{{$kode_bagian_kategori}}" class="form-control"/>
                  <textarea class="form-control" rows="3" id="kategori_kegiatan" name="kategori_kegiatan" placeholder="Uraian Kegiatan" required></textarea>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-3 control-label">Satuan</label>
                <div class="col-sm-9">
                  <input type="text" name="satuan_kategori" placeholder="Satuan" class="form-control" required />
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-3 control-label">Bruto</label>
                <div class="col-sm-9">
                  <input type="number" name="var1_kategori" placeholder="Besaran Bruto Maksimum (Rp)" class="form-control" required />
                </div>
              </div>
            </div>
            <br/><br/><br/><br/><br/><br/><br/><br/><br/>
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
                <th class="col-sm-3 control-label">Kegiatan</th>
                <td width="10">:</td>
                <td><input style="border: none; box-shadow: none;" class="form-control" type="text" size="50" id="kegiatan_id2" name="kegiatan_id2" disabled></td>
              </tr>
             <tr>
                <th style="vertical-align: top; padding-top: 5px;" class="col-sm-3 control-label">Uraian Kegiatan</th>
                <td style="vertical-align: top; padding-top: 5px;" width="10">:</td>
                <td><textarea style="border: none; box-shadow: none;" class="form-control" rows="3" id="show_kategori_kegiatan" name="show_kategori_kegiatan" disabled></textarea> </td>
              </tr>
              <tr>
                <th class="col-sm-3 control-label">Satuan</th>
                <td width="10">:</td>
                <td><input style="border: none; box-shadow: none;" class="form-control" type="text" size="50" id="kategori_satuan" name="kategori_satuan" disabled></td>
              </tr>
              <tr>
                <th class="col-sm-3 control-label">Besaran Bruto Maksimum (Rp)</th>
                <td width="10">:</td>
                <td><input style="border: none; box-shadow: none;" class="form-control" type="text" size="50" id="kategori_var1" name="kategori_var1" disabled></td>
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
            <form action="{{url('/data/update', $kategori->kode_tabel)}}" method="POST">
            {{csrf_field()}} 
            <div class="box-body">
              <table border="0">
                <tr>
                  <th class="col-sm-3 control-label">ID</th>
                  <td width="10">:</td>
                  <td><input type="text" style="border: none; box-shadow: none;" class="form-control" id="edit_id" name="edit_id" required></td>
                </tr>
                <tr>
                  <th class="col-sm-4 control-label">Uraian Kegiatan</th>
                  <td width="10">:&ensp;</td>
                  <td>
                  <textarea class="form-control" rows="3" id="kategori_kegiatan1" name="kategori_kegiatan1" required></textarea>
                  </td>
                </tr>
                <tr>
                  <th class="col-sm-3 control-label">Satuan</th>
                  <td width="10">:</td>
                  <td>
                  <input type="text" class="form-control" id="edit_kategori_satuan" name="edit_kategori_satuan" placeholder="Satuan" required>
                  </td>
                </tr>
                <tr>
                  <th class="col-sm-3 control-label">Besaran Bruto Maksimum (Rp)</th>
                  <td width="10">:</td>
                  <td>
                  <input type="number" class="form-control" id="edit_kategori_var1" name="edit_kategori_var1" placeholder="Besaran Bruto Maksimum (Rp)" required>
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

<script type="text/javascript">
  submitUpdate = function(id, kode_tabel){
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
          $('#id').val(data.id);
          $('#kegiatan_id2').val(data.kegiatan_id);
          $('#show_kategori_kegiatan').val(data.kategori_kegiatan);
          $('#kategori_satuan').val(data.satuan);
          $('#kategori_var1').val(data.var1);
          $('#edit_id').val(data.id);
          $('#kategori_kegiatan1').val(data.kategori_kegiatan);
          $('#edit_kategori_satuan').val(data.satuan);
          $('#edit_kategori_var1').val(data.var1);
        }
      });
    }
</script>
@endsection




