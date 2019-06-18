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
          <th class="col-sm-5">Jenis Biaya</th>
          <th class="col-sm-1">Satuan</th>
          <th class="col-sm-2">Besaran Bruto Maksimum (Rp)</th>
          <th class="col-sm-2">Keterangan</th>
          <th class="col-sm-1">Aksi</th>
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
                      <td> 
                        {{-- <button type="button" class="btn btn-info btn-outline btn-circle btn-xs" data-toggle="modal" data-target="#show-modal" onclick="submitUpdate({{ $uraian->id }},{{$uraian->kode_tabel}})"><i class="ti-eye" data-toggle="tooltip" title="View Data"></i></button> --}}
                        @if(Auth::user()->role!=3)
                          <button type="button" class="btn btn-info btn-outline btn-circle btn-xs" data-toggle="modal" data-target="#edit-modal" onclick="submitUpdate({{ $uraian->id }},{{$uraian->kode_tabel}})"><i class="ti-pencil" data-toggle="tooltip" title="Edit Data"></i></button>
                        @endif
                      </td>
                    </tr>
                      @foreach($uraian->sub1 as $key2 => $sub1)
                      <tr>
                          <td></td>
                           <td>
                            @php
                              $i = chr($key2+97);
                            @endphp
                            &emsp;&ensp;{{$i}}. {{$sub1->uraian_kegiatan}}
                          </td>
                          <td>
                            @if(strpos('$sub1->satuan', '0')!==false)
                            @else
                              {{$sub1->satuan}}
                            @endif
                          </td>
                          <td>
                            @if($sub1->var1 != null || $sub1->var1 !=0)
                               {{number_format($sub1->var1)}}
                            @endif
                          </td>
                          <td>
                            @if(strpos('$sub1->keterangan', '0')!==false)
                            @else
                              {{$sub1->keterangan}}
                            @endif
                          </td>
                          <td> 
                            {{-- <button type="button" class="btn btn-info btn-outline btn-circle btn-xs" data-toggle="modal" data-target="#show-modal2" onclick="submitUpdate2({{ $sub1->id }},{{$sub1->kode_tabel}})"><i class="ti-eye" data-toggle="tooltip" title="View Data"></i></button> --}}
                            @if(Auth::user()->role!=3)
                              <button type="button" class="btn btn-info btn-outline btn-circle btn-xs" data-toggle="modal" data-target="#edit-modal2" onclick="submitUpdate2({{ $sub1->id }},{{$sub1->kode_tabel}})"><i class="ti-pencil" data-toggle="tooltip" title="Edit Data"></i></button>
                            @endif
                          </td>
                      </tr>
                      @foreach($sub1->sub2 as $sub2)
                      <tr>
                          <td></td>
                          <td>&emsp;&emsp;&emsp;&emsp;{{$sub2->uraian_kegiatan}}</td>
                          <td>{{$sub2->satuan}}</td>
                          <td>{{number_format($sub2->var1)}}</td>
                          <td>
                            @if(strpos('$sub2->keterangan', '0')!==false)
                            @else
                              {{$sub2->keterangan}}
                            @endif
                          </td>
                          <td> 
                            {{-- <button type="button" class="btn btn-info btn-outline btn-circle btn-xs" data-toggle="modal" data-target="#show-modal3" onclick="submitUpdate3({{ $sub2->id }},{{$sub2->kode_tabel}})"><i class="ti-eye" data-toggle="tooltip" title="View Data"></i></button> --}}
                            @if(Auth::user()->role!=3)
                              <button type="button" class="btn btn-info btn-outline btn-circle btn-xs" data-toggle="modal" data-target="#edit-modal3" onclick="submitUpdate3({{ $sub2->id }},{{$sub2->kode_tabel}})"><i class="ti-pencil" data-toggle="tooltip" title="Edit Data"></i></button>
                            @endif
                          </td>
                      </tr>
                      @endforeach
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
            <option value="1">Kategori</option>
            <option value="2">Uraian</option>
            <option value="3">Sub Uraian</option>
          </select>
          <input type="button" name="submitpilih" id="submitpilih" class="btn btn-primary btn-rounded" value="Add"/>

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
              <label class="col-sm-2 control-label">Jenis Biaya</label>
              <div class="col-sm-10">
                <textarea class="form-control" rows="3" id="uraian_kegiatan" name="uraian_kegiatan" placeholder="Jenis Biaya" required></textarea>
              </div>
            </div>
            <br/><br/><br/><br/><br/>
          </div>
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
          <select class="form-control selecturaian" name="list_uraian_kegiatan" style="width:500px" id="list_uraian_kegiatan">
            </select>  
          </div>
        <div class="form-group" id="form-detail-sub1">
          <form class="form-horizontal">
            <div class="box-body">
              <div class="form-group">
                <label class="col-sm-2 control-label">Jenis Biaya</label>
                <div class="col-sm-10">
                  <textarea class="form-control" rows="3" id="uraian_kegiatan" name="uraian_kegiatan" placeholder="Jenis Biaya" required></textarea>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Satuan</label>
                <div class="col-sm-10">
                  <input type="text" name="satuan" placeholder="Masukkan 0 jika tidak memiliki satuan" class="form-control" required />
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Bruto</label>
                <div class="col-sm-10">
                  <input type="number" name="var1" placeholder="Masukkan 0 jika tidak memiliki besaran bruto maksimum (Rp)" class="form-control" required />
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Keterangan</label>
                <div class="col-sm-10">
                  <textarea class="form-control" rows="3" id="keterangan" name="keterangan" placeholder="Masukkan 0 jika tidak memiliki keterangan" required></textarea>
                </div>
              </div>
            </div>
            <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
            <div class="modal-footer">  
              <input type="submit" name="submit" id="submit" class="btn btn-primary btn-rounded" value="Add" /> 
            </div>
          </div>
          </form>
        </form>
        </div>

<div class="form-group" id="form-sub2">
        <br/>
        @foreach ($version->kegiatan as $kegiatan)
          @foreach ($kegiatan->uraian as $uraian)
          @foreach ($uraian->sub2 as $sub2)
          @endforeach
          @endforeach
        @endforeach
      <form action="{{url('/data/add', $sub2->kode_tabel)}}" method="POST"> 
        {{csrf_field()}} 
        <div class="form-group">
          <select name="list_uraian" class="form-control selecturaian"  style="width:500px" id="list_uraian" required>
            <option value=""></option>
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
          <div class="form-group">  
          <select class="form-control selectsub1" name="list_sub1" style="width:500px" id="list_sub1" required>
            </select>  
          </div>
        <div class="form-group" id="form-detail-sub1">
          <form class="form-horizontal">
            <div class="box-body">
              <div class="form-group">
                <label class="col-sm-2 control-label">Jenis Biaya</label>
                <div class="col-sm-10">
                  <textarea class="form-control" rows="3" id="uraian_kegiatan" name="uraian_kegiatan" placeholder="Jenis Biaya" required></textarea>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Satuan</label>
                <div class="col-sm-10">
                  <input type="text" name="satuan" placeholder="Satuan" class="form-control" required />
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Bruto</label>
                <div class="col-sm-10">
                  <input type="number" name="var1" placeholder="Besaran Bruto Maksimum (Rp)" class="form-control" required />
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Keterangan</label>
                <div class="col-sm-10">
                  <textarea class="form-control" rows="3" id="keterangan" name="keterangan" placeholder="Masukkan 0 jika tidak memiliki keterangan" required></textarea>
                </div>
              </div>
            </div>
            <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
            <div class="modal-footer">  
              <input type="submit" name="submit" id="submit" class="btn btn-primary btn-rounded" value="Add" /> 
            </div>
          </div>
          </form>
        </div>
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
                    <th style="vertical-align: top; padding-top: 5px;" class="col-sm-3 control-label">Jenis Biaya</th>
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
                    <th style="vertical-align: top; padding-top: 5px;" class="col-sm-3 control-label">Jenis Biaya</th>
                    <td style="vertical-align: top; padding-top: 5px;" width="10">:</td>
                    <td><textarea style="border: none; box-shadow: none;" class="form-control" rows="3" id="sub1_uraian3" name="sub1_uraian3" disabled></textarea> </td>
                  </tr>
                  <tr>
                    <th class="col-sm-3 control-label">Satuan</th>
                    <td width="10">:</td>
                    <td><input style="border: none; box-shadow: none;" class="form-control" type="text" size="50" id="sub1_satuan3" name="sub1_satuan3" disabled></td>
                  </tr>
                  <tr>
                    <th class="col-sm-3 control-label">Bruto</th>
                    <td width="10">:</td>
                    <td><input style="border: none; box-shadow: none;" class="form-control" type="text" size="50" id="sub1_var1" name="sub1_var1" disabled></td>
                  </tr>
                  <tr>
                    <th style="vertical-align: top; padding-top: 5px;" class="col-sm-3 control-label">Keterangan</th>
                    <td style="vertical-align: top; padding-top: 5px;" width="10">:</td>
                    <td><textarea style="border: none; box-shadow: none;" class="form-control" rows="3" id="sub1_keterangan" name="sub1_keterangan" disabled></textarea> </td>
                  </tr>
                </table>
              </div>              
              </div>
            </div>
          </div>
        </div>
    </div>
<div class="modal fade" id="show-modal3">
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
                  <td><input style="border: none; box-shadow: none;" class="form-control" type="text" size="50" id="id6" name="id6" disabled> </td>
                </tr>
                <tr>
                  <th class="col-sm-3 control-label">Sub Uraian</th>
                  <td width="10">:</td>
                  <td><input style="border: none; box-shadow: none;" class="form-control" type="text" size="50" id="sub1_id" name="sub1_id" disabled></td>
                </tr>
               <tr>
                  <th style="vertical-align: top; padding-top: 5px;" class="col-sm-3 control-label">Jenis Biaya</th>
                  <td style="vertical-align: top; padding-top: 5px;" width="10">:</td>
                  <td><textarea style="border: none; box-shadow: none;" class="form-control" rows="3" id="sub2_uraian" name="sub2_uraian" disabled></textarea> </td>
                </tr>
                <tr>
                  <th class="col-sm-3 control-label">Satuan</th>
                  <td width="10">:</td>
                  <td><input style="border: none; box-shadow: none;" class="form-control" type="text" size="50" id="sub2_satuan" name="sub2_satuan" disabled></td>
                </tr>
                <tr>
                  <th class="col-sm-3 control-label">Bruto</th>
                  <td width="10">:</td>
                  <td><input style="border: none; box-shadow: none;" class="form-control" type="text" size="50" id="sub2_var1" name="sub2_var1" disabled></td>
                </tr>
                <tr>
                  <th style="vertical-align: top; padding-top: 5px;" class="col-sm-3 control-label">Keterangan</th>
                  <td style="vertical-align: top; padding-top: 5px;" width="10">:</td>
                  <td><textarea style="border: none; box-shadow: none;" class="form-control" rows="3" id="sub2_keterangan" name="sub2_keterangan" disabled></textarea> </td>
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
                    <input type="hidden" class="form-control" id="edit_id2" name="edit_id2"/>
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
                    <th class="col-sm-4 control-label">Jenis Biaya</th>
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
                    <input type="hidden" class="form-control" id="edit_id3" name="edit_id3"/>
                    <th class="col-sm-3 control-label">Uraian</th>
                    <td width="10">:</td>
                    <td>
                    <div class="form-group">
                      <select class="form-control selecturaian" style="width:385px" name="uraian3" id="uraian3" required>
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
                    <th class="col-sm-3 control-label">Jenis Biaya</th>
                    <td width="10">:</td>
                    <td>
                    <textarea class="form-control" rows="3" id="uraian_kegiatan3" name="uraian_kegiatan3" required></textarea>
                    </td>
                  </tr>
                  <tr>
                    <th class="col-sm-3 control-label">Satuan</th>
                    <td width="10">:</td>
                    <td>
                    <input type="text" class="form-control" id="satuan3" name="satuan3" placeholder="Satuan (Biarkan kosong jika memang tidak memiliki data)">
                    </td>
                  </tr>
                  <tr>
                    <th class="col-sm-3 control-label">Bruto</th>
                    <td width="10">:</td>
                    <td>
                    <input type="number" class="form-control" id="sub1_edit_var1" name="sub1_edit_var1" placeholder="Bruto (Biarkan kosong jika memang tidak memiliki data)">
                    </td>
                  </tr>
                  <tr>
                    <th class="col-sm-3 control-label">Keterangan</th>
                    <td width="10">:</td>
                    <td>
                    <textarea class="form-control" rows="3" id="sub1_edit_keterangan" name="sub1_edit_keterangan" placeholder="Keterangan (Biarkan kosong jika memang tidak memiliki data)"></textarea>
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
  <div class="modal fade" id="edit-modal3">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Data Details</h4>
              </div>
              <div class="modal-body">
              <form action="{{url('/data/update', $sub2->kode_tabel)}}" method="POST">
              {{csrf_field()}} 
              <div class="box-body">
                <table border="0">
                  <tr>
                    <input type="hidden" class="form-control" id="edit_id6" name="edit_id6"/>
                    <th class="col-sm-3 control-label">Sub Uraian</th>
                    <td width="10">:</td>
                    <td>
                    <div class="form-group">
                      <select class="form-control selectsub1" style="width:385px" name="edit_sub1_id" id="edit_sub1_id" required>
                        <option></option>
                        @foreach($versions as $version)
                          @foreach($version->kegiatan as $kegiatan)
                          @if($kegiatan->kode_bagian==$kode_bagian_kegiatan)
                          @foreach($kegiatan->kategori as $kategori)
                           @if($kategori->kode_bagian==$kode_bagian_kategori)
                          @foreach($kategori->sub1 as $sub1)
                            <option value="{{$sub1->id}}">{{$sub1->uraian_kegiatan}}</option>
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
                    <th class="col-sm-3 control-label">Jenis Biaya</th>
                    <td width="10">:</td>
                    <td>
                    <textarea class="form-control" rows="3" id="edit_sub2_uraian" name="edit_sub2_uraian" required></textarea>
                    </td>
                  </tr>
                  <tr>
                    <th class="col-sm-3 control-label">Satuan</th>
                    <td width="10">:</td>
                    <td>
                    <input type="text" class="form-control" id="edit_sub2_satuan" name="edit_sub2_satuan" placeholder="Satuan" required>
                    </td>
                  </tr>
                  <tr>
                    <th class="col-sm-3 control-label">Bruto</th>
                    <td width="10">:</td>
                    <td>
                    <input type="number" class="form-control" id="edit_sub2_var1" name="edit_sub2_var1" placeholder="Bruto" required>
                    </td>
                  </tr>
                   <tr>
                    <th class="col-sm-3 control-label">Keterangan</th>
                    <td width="10">:</td>
                    <td>
                    <textarea class="form-control" rows="3" id="edit_sub2_keterangan" name="edit_sub2_keterangan" required></textarea>
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

 $(document).ready(function() {
      $('#list_uraian').on('change', function() {
          var getUraianId = $(this).val();
          var kode_tabel = 5;
          if(getUraianId) {
              $.ajax({
                  url: '/getDataId/'+getUraianId,
                  type: "GET",
                  data : {
                    '_token': "{{ csrf_token() }}",
                    'kode_tabel' : kode_tabel
                  },
                  dataType: "json",
                  success:function(data) {
                      // console.log(data);
                    if(data){
                      $('#list_sub1').empty();
                      $('#list_sub1').focus;
                      $('#list_sub1').append('<option value=""></option>'); 
                      $.each(data, function(key, value){
                      $('select[name="list_sub1"]').append('<option value="'+ value.id +'">' + value.uraian_kegiatan+ '</option>');
                  });
                }else{
                  $('#list_sub1').empty();
                }
                }
              });
          }else{
            $('#list_sub1').empty();
          }
      });
  });
</script>
<script type="text/javascript">
  $("#form-uraian").hide();
  $("#form-sub1").hide();
  $("#form-sub2").hide();
  $(document).ready(function(){
    $("#submitpilih").click(function(){
      var pilihan = $( "#pilihopsi" ).val();
      if (pilihan == 0) {
        $("#form-uraian").hide();
        $("#form-sub1").hide();
        $("#form-sub2").hide();
      }
      else if (pilihan == 1) {
        $("#form-uraian").show();
        $("#form-sub1").hide();
        $("#form-sub2").hide();
      }
      else if (pilihan == 2){
        $("#form-uraian").hide();
        $("#form-sub1").show();
        $("#form-sub2").hide(); 
      }
      else if (pilihan == 3){
        $("#form-uraian").hide();
        $("#form-sub1").hide();
        $("#form-sub2").show(); 
      }
    })
  })
</script>
<script>
  $(document).ready(function (){
    $('#example1').DataTable({
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
          $('#sub1_keterangan').val(data.keterangan);
          $('#sub1_var1').val(data.var1);
          $('#edit_id3').val(data.id);
          $('#uraian3').val(data.uraian_id);
          $('#uraian3').select2().trigger('change');
          $('#uraian_kegiatan3').val(data.uraian_kegiatan);
          $('#satuan3').val(data.satuan);
          $('#sub1_edit_keterangan').val(data.keterangan);
          $('#sub1_edit_var1').val(data.var1);
        }
      });
    }
    submitUpdate3 = function(id, kode_tabel){
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
          $('#id6').val(data.id);
          $('#sub1_id').val(data.sub1_id);
          $('#sub2_uraian').val(data.uraian_kegiatan);
          $('#sub2_satuan').val(data.satuan);
          $('#sub2_keterangan').val(data.keterangan);
          $('#sub2_var1').val(data.var1);
          $('#edit_id6').val(data.id);
          $('#edit_sub1_id').val(data.sub1_id);
          $('#edit_sub1_id').select2().trigger('change');
          $('#edit_sub2_uraian').val(data.uraian_kegiatan);
          $('#edit_sub2_satuan').val(data.satuan);
          $('#edit_sub2_keterangan').val(data.keterangan);
          $('#edit_sub2_var1').val(data.var1);
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
      placeholder: "Pilih Uraian",
      allowClear: true
    })
     $('.selectsub1').select2(
    {
      placeholder: "Pilih Sub Uraian",
      allowClear: true
    })

  })
</script>

@endsection




