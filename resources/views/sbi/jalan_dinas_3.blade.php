@extends('master')

@section('title')
  @foreach ($versions as $version)
  @foreach ($version->kegiatan as $kegiatan)
    @if($kegiatan->kode_bagian==$kode_bagian_kegiatan)
    @foreach($kegiatan->kategori as $kategori)
    @if($kategori->kode_bagian==$kode_bagian_kategori)
       {{$kategori->kategori_kegiatan}}
    @endif
    @endforeach
    @endif
  @endforeach
  @endforeach
@endsection

@section('right_title')
@foreach ($versions as $version)
@foreach ($version->kegiatan as $kegiatan)
@if($kegiatan->kode_bagian==$kode_bagian_kegiatan)
  <li class="active"><a href="/dokumen">SBI</a></li>
  <li class="active"><a href="/data/2/{{$kode_bagian_kegiatan}}">{{$kegiatan->nama_kegiatan}}</a></li>
  @foreach($kegiatan->kategori as $kategori)
    @if($kategori->kode_bagian==$kode_bagian_kategori)
    <li class="active">{{$kategori->kategori_kegiatan}}</li>
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
        @foreach($kegiatan->kategori as $kategori)
          @if($kategori->kode_bagian==$kode_bagian_kategori)
            {{strtoupper($kategori->kategori_kegiatan)}} &nbsp;
          <button type="button" class="btn btn-danger btn-circle btn-xs" data-toggle="modal" data-target="#penjelasanModal" ><i class="fa fa-bullhorn" data-toggle="tooltip" title="Penjelasan"></i></button>
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
        <th rowspan="2" class="col-sm-1">No.</th>
        <th rowspan="2" class="col-sm-5">Negara</th>
        <th rowspan="2" class="col-sm-1">Satuan</th>
        <th style="text-align: center" colspan="4" class="col-sm-3">Golongan</th>
        <th rowspan="2" class="col-sm-1">Aksi</th>
      </tr>
      <tr>
        <th>A</th>
        <th>B</th>
        <th>C</th>
        <th>D</th>
      </tr> 
      </thead>
     <tbody>
      @foreach ($versions as $version)
          @foreach ($version->kegiatan as $kegiatan)
            @if($kegiatan->kode_bagian==$kode_bagian_kegiatan)
              @foreach($kegiatan->kategori as $kategori)
                @if($kategori->kode_bagian==$kode_bagian_kategori)
                  @foreach($kategori->uraian as $key => $uraian)
                  <tr>
                    <td>
                        {{$key+1}}. 
                    </td>
                    <td>
                      <strong>{{ $uraian->uraian_kegiatan}}</strong>
                    </td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td> 
                      {{-- <button type="button" class="btn btn-info btn-outline btn-circle btn-xs" data-toggle="modal" data-target="#show-modal" onclick="submitUpdate({{ $uraian->id }},{{$uraian->kode_tabel}})"><i class="ti-eye" data-toggle="tooltip" title="View Data"></i></button> --}}
                      @if(Auth::user()->role!=3)
                        <button type="button" class="btn btn-info btn-outline btn-circle btn-xs" data-toggle="modal" data-target="#edit-modal" onclick="submitUpdate({{ $uraian->id }},{{$uraian->kode_tabel}})"><i class="ti-pencil" data-toggle="tooltip" title="Edit Data"></i></button>
                      @endif
                    </td>
                  </tr>
                    @foreach($uraian->sub1 as $sub1)
                    <tr>
                        <td></td>
                        <td>{{$sub1->uraian_kegiatan}}</td>
                        <td>{{$sub1->satuan}}</td>
                        <td>{{number_format($sub1->var1)}}</td>
                        <td>{{number_format($sub1->var2)}}</td>
                        <td>{{number_format($sub1->var3)}}</td>
                        <td>{{number_format($sub1->var4)}}</td>
                        <td> 
                          {{-- <button type="button" class="btn btn-info btn-outline btn-circle btn-xs" data-toggle="modal" data-target="#show-modal2" onclick="submitUpdate2({{ $sub1->id }},{{$sub1->kode_tabel}})"><i class="ti-eye" data-toggle="tooltip" title="View Data"></i></button> --}}
                          @if(Auth::user()->role!=3)
                            <button type="button" class="btn btn-info btn-outline btn-circle btn-xs" data-toggle="modal" data-target="#edit-modal2" onclick="submitUpdate2({{ $sub1->id }},{{$sub1->kode_tabel}})"><i class="ti-pencil" data-toggle="tooltip" title="Edit Data"></i></button>
                          @endif
                        </td>
                    </tr>
                    @endforeach
                   @endforeach
                  @endif
                @endforeach
              @endif
            @endforeach
        @endforeach
    </tbody>
</table>
</div>

<!--Penjelasan Modal-->
<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;" id="penjelasanModal">
<div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4 class="modal-title" id="myLargeModalLabel">Penjelasan</h4> </div>
        <div class="modal-body">
        <div class="table-responsive">
          <table id="example2" class="table table-striped">
            <thead>
            <tr>
              <th width="10">#</th>
              <th>Penjelasan</th>
              <th width="100"></th>
            </tr>
            </thead>
            <tbody>
            @foreach($versions as $version)
            @foreach($version->kegiatan as $kegiatan)
            @if($kegiatan->kode_bagian==$kode_bagian_kegiatan)
            @foreach($kegiatan->kategori as $kategori)
            @if($kategori->kode_bagian==$kode_bagian_kategori)
            <?php $counter = 0; ?>
            @foreach($kategori->penjelasan as $penjelasan)
              @if(strpos('$penjelasan->penjelasan', '0')!==true && $counter != 1)
                <?php $counter = 1; ?>
                <tr>
                  <th></th>
                  <th>{{$kategori->kategori_kegiatan}}</th>
                  <td></td>
                </tr>
              @endif
            <tr>
              <td></td>
              <td>{{$penjelasan->penjelasan}}</td>
              <td>
              {{-- <button type="button" class="btn btn-info btn-outline btn-circle btn-xs" data-toggle="modal" data-target="#show-modal4" onclick="submitUpdate4({{ $penjelasan->id }},{{$penjelasan->kode_tabel}})"><i class="ti-eye" data-toggle="tooltip" title="View Data"></i></button> --}}
              @if(Auth::user()->role!=3)
                <button type="button" class="btn btn-info btn-outline btn-circle btn-xs" data-toggle="modal" data-target="#edit-modal4" onclick="submitUpdate4({{ $penjelasan->id }},{{$penjelasan->kode_tabel}})"><i class="ti-pencil" data-toggle="tooltip" title="Edit Data"></i></button>
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
  </div>
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
          <select class="styled-select semi-square" style="width:200px" id="pilihopsi">
            <option value="0">Pilih opsi</option>
            <option value="1">Uraian</option>
            <option value="2">Sub Uraian</option>
            <option value="3">Penjelasan</option>
          </select>
          <input type="button" name="submitpilih" id="submitpilih" class="btn btn-primary btn-rounded" value="Add"/>
  <div class="form-group" id="form-penjelasan">
  <br/>
  @foreach ($version->penjelasan as $penjelasan)
  @endforeach
<form action="{{url('/data/add', $penjelasan->kode_tabel)}}" method="POST">
  {{csrf_field()}} 
    <div class="form-group">
      <select class="form-control select2" style="width:500px" name="penjelasan_kategori" required>
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
        <label class="col-sm-2 control-label">Penjelasan</label>
        <div class="col-sm-10">
          <input class="form-control" type="hidden" id="version" name="version" value="{{$version->id}}"/>
          <textarea class="form-control" rows="3" id="penjelasan" name="penjelasan" placeholder="Penjelasan" required></textarea>
        </div>
      </div>
    </div>
    <br/><br/><br/><br/><br/>
    <div class="modal-footer">  
      <input type="submit" name="submit" id="submit" class="btn btn-primary btn-rounded" value="Add" /> 
    </div>
  </form>
</form>
</div>
  <div class="form-group" id="form-uraian">
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
              <label class="col-sm-2 control-label">Negara</label>
              <div class="col-sm-10">
                <textarea class="form-control" rows="3" id="uraian_kegiatan" name="uraian_kegiatan" placeholder="Negara" required></textarea>
              </div>
            </div>
          </div>
          <br/><br/><br/><br/><br/>
          <div class="modal-footer">  
            <input type="submit" name="submit" id="submit" class="btn btn-primary btn-rounded" value="Add" /> 
          </div>
        </form>
      </form>
      </div>
<div class="form-group" id="form-sub1">
        <br/>
        @foreach ($version->kegiatan as $kegiatan)
          @foreach ($kegiatan->uraian as $uraian)
          @foreach ($uraian->sub1 as $sub1)
          @endforeach
          @endforeach
        @endforeach
      <form action="{{url('/data/add', $sub1->kode_tabel)}}" method="POST"> 
        {{csrf_field()}} 
        <div class="form-group">
          <select name="list_kategori_kegiatan" class="form-control select2"  style="width:500px" id="list_kategori_kegiatan" required>
            <option value=""></option>
            @foreach($versions as $version)
              @foreach($version->kegiatan as $kegiatan)
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
          <div class="form-group">  
          <select class="form-control selecturaian" name="list_uraian_kegiatan" style="width:500px" id="list_uraian_kegiatan" required>
            </select>  
          </div>
          <form class="form-horizontal">
            <div class="box-body">
              <div class="form-group">
                <label class="col-sm-3 control-label">Negara</label>
                <div class="col-sm-9">
                  <textarea class="form-control" rows="3" id="uraian_kegiatan" name="uraian_kegiatan" placeholder="Negara" required></textarea>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-3 control-label">Satuan</label>
                <div class="col-sm-9">
                  <input type="text" name="satuan" placeholder="Satuan" class="form-control" required />
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-3 control-label">Golongan A</label>
                <div class="col-sm-9">
                  <input type="number" name="var1" placeholder="Golongan A" class="form-control" required />
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-3 control-label">Golongan B</label>
                <div class="col-sm-9">
                  <input type="number" name="var2" placeholder="Golongan B" class="form-control" required />
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-3 control-label">Golongan C</label>
                <div class="col-sm-9">
                  <input type="number" name="var3" placeholder="Golongan C" class="form-control" required />
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-3 control-label">Golongan D</label>
                <div class="col-sm-9">
                  <input type="number" name="var4" placeholder="Golongan D" class="form-control" required />
                </div>
              </div>
            </div>
            <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
            <div class="modal-footer">  
              <input type="submit" name="submit" id="submit" class="btn btn-primary btn-rounded" value="Add" /> 
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
                    <td><input style="border: none; box-shadow: none;" class="form-control" type="text" size="50" id="id2" name="id2" disabled> </td>
                  </tr>
                  <tr>
                    <th class="col-sm-3 control-label">Kategori</th>
                    <td width="10">:</td>
                    <td><input style="border: none; box-shadow: none;" class="form-control" type="text" size="50" id="kategori2" name="kategori2" disabled></td>
                  </tr>
                 <tr>
                    <th style="vertical-align: top; padding-top: 5px;" class="col-sm-3 control-label">Negara</th>
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
                  <td><input style="border: none; box-shadow: none;" class="form-control" type="text" size="50" id="id3" name="id3" disabled> </td>
                </tr>
                <tr>
                  <th class="col-sm-3 control-label">Uraian</th>
                  <td width="10">:</td>
                  <td><input style="border: none; box-shadow: none;" class="form-control" type="text" size="50" id="uraian_id" name="uraian_id" disabled></td>
                </tr>
                <tr>
                  <th class="col-sm-3 control-label">Satuan</th>
                  <td width="10">:</td>
                  <td><input style="border: none; box-shadow: none;" class="form-control" type="text" size="50" id="sub1_satuan3" name="sub1_satuan3" disabled></td>
                </tr>
                <tr>
                  <th class="col-sm-3 control-label">Golongan A</th>
                  <td width="10">:</td>
                  <td><input style="border: none; box-shadow: none;" class="form-control" type="text" size="50" id="sub1_var1" name="sub1_var1" disabled></td>
                </tr>
                <tr>
                  <th class="col-sm-3 control-label">Golongan B</th>
                  <td width="10">:</td>
                  <td><input style="border: none; box-shadow: none;" class="form-control" type="text" size="50" id="sub1_var2" name="sub1_var2" disabled></td>
                </tr>
                <tr>
                  <th class="col-sm-3 control-label">Golongan C</th>
                  <td width="10">:</td>
                  <td><input style="border: none; box-shadow: none;" class="form-control" type="text" size="50" id="sub1_var3" name="sub1_var3" disabled></td>
                </tr>
                <tr>
                  <th class="col-sm-3 control-label">Golongan D</th>
                  <td width="10">:</td>
                  <td><input style="border: none; box-shadow: none;" class="form-control" type="text" size="50" id="sub1_var4" name="sub1_var4" disabled></td>
                </tr>
               <tr>
                  <th style="vertical-align: top; padding-top: 5px;" class="col-sm-3 control-label">Negara</th>
                  <td style="vertical-align: top; padding-top: 5px;" width="10">:</td>
                  <td><textarea style="border: none; box-shadow: none;" class="form-control" rows="3" id="sub1_uraian3" name="sub1_uraian3" disabled></textarea> </td>
                </tr>
              </table>
            </div>              
            </div>
          </div>
        </div>
      </div>
  </div>

<div class="modal fade" id="show-modal4">
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
                    <td><input style="border: none; box-shadow: none;" class="form-control" type="text" size="50" id="id4" name="id4" disabled> </td>
                  </tr>
                  <tr>
                    <th class="col-sm-3 control-label">Kategori</th>
                    <td width="10">:</td>
                    <td><input style="border: none; box-shadow: none;" class="form-control" type="text" size="50" id="kategori4" name="kategori4" disabled></td>
                  </tr>
                 <tr>
                    <th style="vertical-align: top; padding-top: 5px;" class="col-sm-3 control-label">Penjelasan</th>
                    <td style="vertical-align: top; padding-top: 5px;" width="10">:</td>
                    <td><textarea style="border: none; box-shadow: none;" class="form-control" rows="3" id="penjelasan4" name="penjelasan4" disabled></textarea> </td>
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
                           @if($kategori->kode_bagian==$kode_bagian_kategori)
                            <option value="{{$kategori->id}}">{{$kategori->kategori_kegiatan}}</option>
                            @endif
                          @endforeach
                          @endif
                         @endforeach
                        @endforeach
                      </select>  
                    </div>
                  </td>
                  </tr>
                  <tr>
                    <th class="col-sm-3 control-label">Negara</th>
                    <td width="10">:&ensp;</td>
                    <td>
                    <textarea class="form-control" rows="3" id="uraian_kegiatan2" name="uraian_kegiatan2" required></textarea>
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
  <div class="modal fade" id="edit-modal2">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Data Details</h4>
              </div>
              <div class="modal-body">
              <form action="{{url('/data/update', $sub1->kode_tabel)}}" method="POST">
              {{csrf_field()}} 
              <div class="box-body">
                <table border="0">
                  <tr>
                    <th class="col-sm-3 control-label">ID</th>
                    <td width="10">:</td>
                    <td><input type="text" style="border: none; box-shadow: none;" class="form-control" id="edit_id3" name="edit_id3" required></td>
                  </tr>
                  <br/>
                  <tr>
                    <th class="col-sm-3 control-label">Uraian</th>
                    <td width="10">:</td>
                    <td>
                    <div class="form-group">
                      <select class="form-control select2" style="width:385px" name="uraian3" id="uraian3" required>
                        <option></option>
                        @foreach($versions as $version)
                          @foreach($version->kegiatan as $kegiatan)
                          @if($kegiatan->kode_bagian==$kode_bagian_kegiatan)
                          @foreach($kegiatan->kategori as $kategori)
                           @if($kategori->kode_bagian==$kode_bagian_kategori)
                          @foreach($kategori->uraian as $uraian)
                            <option value="{{$uraian->id}}">{{$uraian->uraian_kegiatan}}</option>
                          @endforeach
                          @endif
                          @endforeach
                          @endif
                        @endforeach
                        @endforeach
                      </select>  
                    </div>
                  </td>
                  </tr>
                  <tr>
                    <th class="col-sm-3 control-label">Negara</th>
                    <td width="10">:</td>
                    <td>
                    <textarea class="form-control" rows="3" id="uraian_kegiatan3" name="uraian_kegiatan3" required></textarea>
                    </td>
                  </tr>
                  <tr>
                    <th class="col-sm-3 control-label">Satuan</th>
                    <td width="10">:</td>
                    <td>
                    <input type="text" class="form-control" id="satuan3" name="satuan3" placeholder="Satuan" required>
                    </td>
                  </tr>
                  <tr>
                    <th class="col-sm-3 control-label">Golongan A</th>
                    <td width="10">:</td>
                    <td>
                    <input type="number" class="form-control" id="sub1_edit_var1" name="sub1_edit_var1" placeholder="Golongan A" required>
                    </td>
                  </tr>
                  <tr>
                    <th class="col-sm-3 control-label">Golongan B</th>
                    <td width="10">:</td>
                    <td>
                    <input type="number" class="form-control" id="sub1_edit_var2" name="sub1_edit_var2" placeholder="Golongan B" required>
                    </td>
                  </tr>
                  <tr>
                    <th class="col-sm-3 control-label">Golongan C</th>
                    <td width="10">:</td>
                    <td>
                    <input type="number" class="form-control" id="sub1_edit_var3" name="sub1_edit_var3" placeholder="Golongan C" required>
                    </td>
                  </tr>
                  <tr>
                    <th class="col-sm-3 control-label">Golongan D</th>
                    <td width="10">:</td>
                    <td>
                    <input type="number" class="form-control" id="sub1_edit_var4" name="sub1_edit_var4" placeholder="Golongan D" required>
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
  <div class="modal fade" id="edit-modal4">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Data Details</h4>
              </div>
              <div class="modal-body">
              <form action="{{url('/data/update', $penjelasan->kode_tabel)}}" method="POST">
              {{csrf_field()}} 
              <div class="box-body">
                <table border="0">
                  <tr>
                    <th class="col-sm-3 control-label">ID</th>
                    <td width="10">:</td>
                    <td><input type="text" style="border: none; box-shadow: none;" class="form-control" id="edit_id4" name="edit_id4" required></td>
                  </tr>
                  <br/>
                  <tr>
                    <th class="col-sm-3 control-label">Kategori</th>
                    <td width="10">:</td>
                    <td>
                    <div class="form-group">
                      <select class="form-control select2" style="width:385px" name="edit_kategori4" id="edit_kategori4" required>
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
                    <th class="col-sm-4 control-label">Penjelasan</th>
                    <td width="10">:&ensp;</td>
                    <td>
                    <textarea class="form-control" rows="3" id="edit_penjelasan" name="edit_penjelasan" required></textarea>
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
<script type="text/javascript">
  $("#form-uraian").hide();
  $("#form-sub1").hide();
  $("#form-penjelasan").hide();
  $(document).ready(function(){
    $("#submitpilih").click(function(){
      var pilihan = $( "#pilihopsi" ).val();
      if (pilihan == 0) {
        $("#form-uraian").hide();
        $("#form-sub1").hide();
        $("#form-penjelasan").hide();
      }
      else if (pilihan == 1) {
        $("#form-uraian").show();
        $("#form-sub1").hide();
        $("#form-penjelasan").hide();
      }
      else if (pilihan == 2){
        $("#form-uraian").hide();
        $("#form-sub1").show(); 
        $("#form-penjelasan").hide();
      }
      else if (pilihan == 3){
        $("#form-uraian").hide();
        $("#form-sub1").hide(); 
        $("#form-penjelasan").show();
      }
    })
  })
</script>
<script>
  $(document).ready(function (){
    $('#example1').DataTable({
      'ordering'    :false
    });  
    $('#example2').DataTable({
      'ordering'    :false
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
          $('#id2').val(data.id);
          $('#kategori2').val(data.kategori_id);
          $('#uraian').val(data.uraian_kegiatan);
          $('#edit_id2').val(data.id);
          $('#edit_kategori2').val(data.kategori_id);
          $('#edit_kategori2').select2().trigger('change');
          $('#uraian_kegiatan2').val(data.uraian_kegiatan);
        }
      });
    }
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
          $('#id3').val(data.id);
          $('#uraian_id').val(data.uraian_id);
          $('#sub1_uraian3').val(data.uraian_kegiatan);
          $('#sub1_satuan3').val(data.satuan);
          $('#sub1_var1').val(data.var1);
          $('#sub1_var2').val(data.var2);
          $('#sub1_var3').val(data.var3);
          $('#sub1_var4').val(data.var4);
          $('#edit_id3').val(data.id);
          $('#uraian3').val(data.uraian_id);
          $('#uraian3').select2().trigger('change');
          $('#uraian_kegiatan3').val(data.uraian_kegiatan);
          $('#satuan3').val(data.satuan);
          $('#sub1_edit_var1').val(data.var1);
          $('#sub1_edit_var2').val(data.var2);
          $('#sub1_edit_var3').val(data.var3);
          $('#sub1_edit_var4').val(data.var4);
        }
      });
    }
    submitUpdate4 = function(id, kode_tabel){
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
          $('#id4').val(data.id);
          $('#kategori4').val(data.kategori_id);
          $('#penjelasan4').val(data.penjelasan);
          $('#edit_id4').val(data.id);
          $('#edit_kategori4').val(data.kategori_id);
          $('#edit_kategori4').select2().trigger('change');
          $('#edit_penjelasan').val(data.penjelasan);
        }
      });
    }
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
      placeholder: "Pilih Negara",
      allowClear: true
    })

  })
</script>

@endsection




