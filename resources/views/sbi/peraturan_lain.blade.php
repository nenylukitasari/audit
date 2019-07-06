@extends('master')

@section('title')
    Peraturan Lain
@endsection
@section('right_title')
  <li class="active">Peraturan Lain</li>
@endsection
@section('content')
<br/>
@if(Auth::user()->role!=3)
<button type="button" class="btn btn-info btn-rounded waves-effect waves-light pull-right" data-toggle="modal" data-target="#addModal"><span class="btn-label"><i class="fa fa-plus"></i></span>Add</button>
@endif
  <br/><br/><br/><br/>
  @if (session('message_success'))
      <div class="alert alert-success">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
          <strong><h4><i class="icon fa fa-check"></i> Sukses!</strong></h4>
          {{ session('message_success') }}
      </div>
  @elseif (session('message_error'))
    <div class="alert alert-danger">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
      <strong><h4><i class="icon fa fa-close"></i> Error!</strong></h4>
        {{ session('message_error') }}
    </div>
  @endif
   <div class="table-responsive">
    <table id="example1" class="table table-striped">
      <thead>
        <tr>
          <th class="col-sm-1">No.</th>
          <th class="col-sm-5">Peraturan</th>
          @if(Auth::user()->role!=3)
            <th class="col-sm-1">Status</th>
          @endif
          <th class="col-sm-2">Aksi</th>
        </tr>
      </thead>
     <tbody>
      @if(Auth::user()->role!=3)
        @foreach ($peraturan_lains as $key => $peraturan_lain)
          <tr>
            <td>
                {{$key+1}}. 
            </td>
            <td>
              {{ $peraturan_lain->nama_peraturan}}
            </td>
              @if($peraturan_lain->deleted_at == null) 
                <td><button class="btn-sm btn btn-rounded btn-success">Aktif</button></td>
              @else 
                <td><button class="btn-sm btn btn-rounded btn-danger">Tidak Aktif</button></td>
                <td>
                  <button type="button" class="btn btn-info btn-outline btn-circle btn-xs" data-toggle="modal" data-target="#restore-modal" data-id="{{ $peraturan_lain->id }}"><i class="ti-settings" data-toggle="tooltip" title="Restore Data"></i></button>
                </td>
              @endif
            @if($peraturan_lain->deleted_at == null) 
            <td>
              @if (strpos($peraturan_lain->link_keterangan, "http")!==false)
                <a href="{{$peraturan_lain->link_keterangan}}"><button type="button" class="btn btn-info btn-outline btn-circle btn-xs"><i class="ti-share" data-toggle="tooltip" title="Go To Link"></i></button></a>
                <button type="button" class="btn btn-info btn-outline btn-circle btn-xs" data-toggle="modal" data-target="#edit-modal" onclick="submitUpdate({{ $peraturan_lain->id }})"><i class="ti-pencil" data-toggle="tooltip" title="Edit Data"></i></button>
              @else
                <a href="{{ url('/download', $peraturan_lain->link_keterangan) }}"><button type="button" class="btn btn-info btn-outline btn-circle btn-xs"><i class="ti-download" data-toggle="tooltip" title="Download Data"></i></button></a>
                <button type="button" class="btn btn-info btn-outline btn-circle btn-xs" data-toggle="modal" data-target="#edit-modal2" onclick="submitUpdate({{ $peraturan_lain->id }})"><i class="ti-pencil" data-toggle="tooltip" title="Edit Data"></i></button>
              @endif
                <button type="button" class="btn btn-info btn-outline btn-circle btn-xs open-AddBookDialog" data-toggle="modal" data-target="#delete-modal" data-id="{{ $peraturan_lain->id }}"><i class="ti-trash" data-toggle="tooltip" title="Delete Data"></i></button> 
              </td>
              @endif
            </tr>
        @endforeach
        @else
          @foreach ($peraturan_lain_user as $key => $peraturan_lain_user)
          <tr>
            <td>
                {{$key+1}}. 
            </td>
            <td>
              {{ $peraturan_lain_user->nama_peraturan}}
            </td>
            @if($peraturan_lain_user->deleted_at == null) 
            <td>
              @if (strpos($peraturan_lain_user->link_keterangan, "http")!==false)
                <a href="{{$peraturan_lain_user->link_keterangan}}"><button type="button" class="btn btn-info btn-outline btn-circle btn-xs"><i class="ti-share" data-toggle="tooltip" title="Go To Link"></i></button></a>
              @else
                <a href="{{ url('/download', $peraturan_lain_user->link_keterangan) }}"><button type="button" class="btn btn-info btn-outline btn-circle btn-xs"><i class="ti-download" data-toggle="tooltip" title="Download Data"></i></button></a>
              @endif
              </td>
              @endif
            </tr>
        @endforeach
        @endif
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
        <select class="styled-select semi-square" style="width:200px" id="pilihopsi">
          <option value="0">Pilih opsi</option>
          <option value="1">Link</option>
          <option value="2">Upload berkas</option>
        </select>
        &ensp;<input type="button" name="submitpilih" id="submitpilih" class="btn btn-primary btn-rounded btn-sm" value="Add"/>

        <div class="form-group" id="form-link">
          <form action="{{url('/peraturan/store')}}" method="POST"> 
          {{csrf_field()}} 
          <form class="form-horizontal">
            <div class="box-body">
              <div class="form-group">
                <label class="col-sm-3 control-label">Peraturan</label>
                <div class="col-sm-9">
                  <input class="form-control" type="hidden" id="version" name="version" value="{{$version->id}}"/>
                  <textarea class="form-control" rows="3" id="peraturan" name="peraturan" placeholder="Peraturan / Keterangan" required></textarea>
                </div>
              </div>
            <div class="form-group">
                <label class="col-sm-3 control-label">Link</label>
                <div class="col-sm-9">
                  <textarea class="form-control" rows="3" id="keterangan" name="keterangan" placeholder="Masukkan Link dengan Lengkap (termasuk http:// atau https:// sebagai awalan)" required></textarea>
                </div>
              </div>
            </div>
            <h5>&ensp;&ensp;Contoh:</h5>
            <ul>
              <li>http://google.com</li>
              <li>https://its.ac.id</li>
            </ul>
            <div class="modal-footer">  
              <input type="submit" name="submit" id="submit" class="btn btn-primary btn-rounded" value="Add" /> 
            </div>
          </form>
        </form>
      </div>

      <div class="form-group" id="form-upload">
          <form action="{{url('/upload')}}" method="POST" enctype="multipart/form-data"> 
          {{csrf_field()}} 
          <form class="form-horizontal">
            <div class="box-body">
              <div class="form-group">
                <label class="col-sm-3 control-label">Peraturan</label>
                <div class="col-sm-9">
                  <input class="form-control" type="hidden" id="version" name="version" value="{{$version->id}}"/>
                  <textarea class="form-control" rows="3" id="peraturan" name="peraturan" placeholder="Peraturan / Keterangan" required></textarea>
                <br/>
                </div>
              </div>
            <div class="form-group">
                <label class="col-sm-3 control-label">File</label>
                <div class="col-sm-9">
                  <input type="file" name="file" required>
                </br>
                </div>
              </div>
            </div>
            <h5>&ensp;&ensp;<b>Ekstensi yang didukung yaitu: </b></br>
                &ensp;&ensp;doc, docx, xlsx, xls, ppt, pptx </br>
                &ensp;&ensp;pdf, jpeg, png, jpg, zip</h5>
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
{{-- 
Show Modal 
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
                    <td><input style="border: none; box-shadow: none;" class="form-control" type="text" size="50" id="id_peraturan" name="id_peraturan" disabled> </td>
                  </tr>
                  <tr>
                    <th style="vertical-align: top; padding-top: 5px;" class="col-sm-3 control-label">Peraturan</th>
                    <td style="vertical-align: top; padding-top: 5px;" width="10">:</td>
                    <td><textarea style="border: none; box-shadow: none;" class="form-control" rows="3" id="peraturan2" name="peraturan2" disabled></textarea> </td>
                  </tr>
                  <tr>
                    <th style="vertical-align: top; padding-top: 5px;" class="col-sm-3 control-label">Link</th>
                    <td style="vertical-align: top; padding-top: 5px;" width="10">:</td>
                    <td><textarea style="border: none; box-shadow: none;" class="form-control" rows="3" id="keterangan2" name="keterangan2" disabled></textarea> </td>
                  </tr>
                </table>
              </div>              
              </div>
            </div>
          </div>
        </div>
    </div>
 --}}

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
              <form action="{{url('/peraturan/update', 1)}}" method="POST"> 
              {{csrf_field()}} 
              <div class="box-body">
                <table border="0">
                  <tr>
                    <th class="col-sm-3 control-label">Peraturan</th>
                    <td width="10">:</td>
                    <td>
                        <input type="hidden" id="edit_id_peraturan" name="edit_id_peraturan">
                        <textarea class="form-control" rows="3" id="edit_peraturan" name="edit_peraturan"></textarea>
                    </td>
                  </tr>
                  <tr>
                    <th class="col-sm-3 control-label">Link</th>
                    <td width="10">:</td>
                    <td>
                        <textarea class="form-control" rows="3" id="edit_keterangan" name="edit_keterangan" placeholder="Masukkan Link dengan Lengkap (termasuk http:// atau https:// sebagai awalan)"></textarea>
                    </td>
                  </tr>
                  <tr>
                    <td class="col-sm-3 control-label">Contoh penulisan link:</th>
                    <ul>
                      <li>http://google.com</li>
                      <li>https://its.ac.id</li>
                    </ul>
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

<div class="modal fade" id="edit-modal2">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Data Details</h4>
              </div>
              <div class="modal-body">
              <form action="{{url('/peraturan/update', 2)}}" method="POST"> 
              {{csrf_field()}} 
              <div class="box-body">
                <table border="0">
                  <tr>
                    <th class="col-sm-3 control-label">Peraturan</th>
                    <td width="10">:</td>
                    <td>
                        <input type="hidden" id="edit_id_peraturan2" name="edit_id_peraturan2">
                        <textarea class="form-control" rows="3" id="edit_peraturan2" name="edit_peraturan2"></textarea>
                      </br>
                    </td>
                  </tr>
                  <tr>
                    <th class="col-sm-3 control-label">File</th>
                    <td width="10">:</td>
                    <td>
                        <input type="file" id="edit_keterangan2" name="edit_keterangan2">
                      </br>
                    </td>
                  </tr>
                  <tr>
                    <td colspan="3">&ensp;&ensp;Ekstensi yang didukung yaitu:</th>
                    <ul>
                      <li>doc, docx, xlsx, xls, ppt, pptx</li>
                      <li>pdf, jpeg, png, jpg, zip</li>
                    </ul>
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

<!--Delete Modal-->
<div class="modal modal-danger fade" id="delete-modal">
<div class="modal-dialog" role="document">
<div class="modal-content">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <h4 class="modal-title text-center" id="myModalLabel">Konfirmasi</h4>
  </div>
  <div class="modal-body">
    <form class="form-inline"  method="POST" id="fuser">
    {{csrf_field()}}
    <h5 style="text-align: center;">Apakah anda akan menghapus data?</h5>
  </div> 
    <div class="modal-footer">
      <button type="button" class="btn btn-success" data-dismiss="modal">Tidak</button>
      <button type="submit" class="btn btn-warning">Ya</button>
    </div>
  </form>
</div>
</div>
</div>

<!--Restore Modal-->
@if(Auth::user()->role!=3)
<div class="modal modal-danger fade" id="restore-modal">
<div class="modal-dialog" role="document">
<div class="modal-content">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <h4 class="modal-title text-center" id="myModalLabel">Konfirmasi</h4>
  </div>
  <div class="modal-body">
    <form action="{{url('/peraturan/restore/'.$peraturan_lain->id)}}" method="POST"> 
    {{csrf_field()}}
    <h5 style="text-align: center;">Apakah anda akan mengembalikan data dan mengubah status menjadi aktif?</h5>
  </div> 
    <div class="modal-footer">
      <button type="button" class="btn btn-success" data-dismiss="modal">Tidak</button>
      <button type="submit" class="btn btn-warning">Ya</button>
    </div>
  </form>
</div>
</div>
</div>
@endif

</div>
@endsection

@section('add-script')
<script>

  $(document).ready(function() {
    $('#example1').DataTable({
        'ordering'    :false
    });
    $(document).on("click", ".open-AddBookDialog", function () {
     var id = $(this).data('id');
    $(".modal-body #fuser").attr("action");
    $(".modal-body #fuser").attr("action", '/peraturan/delete/'+id);
    });

  });
</script>
<script type="text/javascript">
  $("#form-link").hide();
  $("#form-upload").hide();
  $(document).ready(function(){
    $("#submitpilih").click(function(){
      var pilihan = $( "#pilihopsi" ).val();
      if (pilihan == 0) {
        $("#form-upload").hide();
        $("#form-link").hide();
      }
      else if (pilihan == 1) {
        $("#form-upload").hide();
        $("#form-link").show();
      }
      else if (pilihan == 2){
        $("#form-link").hide();
        $("#form-upload").show(); 
      }

    })
  })
</script>
<script type="text/javascript">
  submitUpdate = function(id){
    // console.log(kode_tabel);
      $.ajax({
        url: '/getdataPeraturan',
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
          // $('#id_peraturan').val(data.id);
          // $('#peraturan2').val(data.peraturan);
          // $('#keterangan2').val(data.keterangan);
          $('#edit_id_peraturan').val(data.id);
          $('#edit_peraturan').val(data.nama_peraturan);
          $('#edit_keterangan').val(data.link_keterangan);
          $('#edit_id_peraturan2').val(data.id);
          $('#edit_peraturan2').val(data.nama_peraturan);
          $('#edit_keterangan2').val(data.link_keterangan);
          // $('#edit_keterangan2').select2().trigger('change');
        }
      });
    }
  </script>
  @endsection
