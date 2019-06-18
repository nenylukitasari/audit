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
  @endif
   <div class="table-responsive">
    <table id="example1" class="table table-striped">
      <thead>
        <tr>
          <th class="col-sm-1">No.</th>
          <th class="col-sm-5">Peraturan</th>
          <th class="col-sm-2">Aksi</th>
        </tr>
      </thead>
     <tbody>
        @foreach ($versions as $version)
        @foreach ($version->peraturan_lain as $key => $peraturan_lain)
          <tr>
            <td>
                {{$key+1}}. 
            </td>
            <td>
              {{ $peraturan_lain->peraturan}}
            </td>
              <td> 
                <a href="{{$peraturan_lain->keterangan}}"><button type="button" class="btn btn-info btn-outline btn-circle btn-xs"><i class="ti-share" data-toggle="tooltip" title="Go To Link"></i></button></a>
                @if(Auth::user()->role!=3)
                <button type="button" class="btn btn-info btn-outline btn-circle btn-xs" data-toggle="modal" data-target="#edit-modal" onclick="submitUpdate({{ $peraturan_lain->id }})"><i class="ti-pencil" data-toggle="tooltip" title="Edit Data"></i></button>
                @endif
              </td>
            </tr>
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
        <div class="form-group" id="form-jenis-kegiatan">
          <form action="{{url('/dokumen', 10)}}" method="POST"> 
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
            {{-- <br/><br/><br/><br/><br/><br/><br/><br/><br/> --}}
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
              <form action="{{url('/dokumen/update', 10)}}" method="POST"> 
              {{csrf_field()}} 
              <div class="box-body">
                <table border="0">
                  <tr>
                    <th class="col-sm-3 control-label">ID</th>
                    <td width="10">:</td>
                    <td><input type="text" style="border: none; box-shadow: none;" class="form-control" id="edit_id_peraturan" name="edit_id_peraturan" required></td>
                  </tr>
                  <br/>
                  <tr>
                    <th class="col-sm-3 control-label">Peraturan</th>
                    <td width="10">:</td>
                    <td>
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

</div>
@endsection

@section('add-script')
<script>

  $(document).ready(function() {
    $('#example1').DataTable({
        'ordering'    :false
    });
  });
</script>
<script type="text/javascript">
  submitUpdate = function(id, kode_tabel){
    console.log(kode_tabel);
      $.ajax({
        url: '/getdata',
        type: 'POST',
        data: {
          '_token': "{{ csrf_token() }}",
          'id' : id,
          'kode_tabel' : 10
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
          $('#edit_peraturan').val(data.peraturan);
          $('#edit_keterangan').val(data.keterangan);
        }
      });
    }
  </script>
  @endsection
