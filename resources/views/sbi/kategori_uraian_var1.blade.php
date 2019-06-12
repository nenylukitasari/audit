@extends('master')

@section('title')
    @foreach ($versions as $version)
    @foreach ($version->kegiatan as $kegiatan)
    @if($kegiatan->kode_bagian == $kode_bagian)
       {{$kegiatan->nama_kegiatan}}
    @endif
    @endforeach
    @endforeach
@endsection

@section('right_title')
@foreach ($versions as $version)
@foreach ($version->kegiatan as $kegiatan)
@if($kegiatan->kode_bagian == $kode_bagian)
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
    @if($kegiatan->kode_bagian == $kode_bagian)
          {{strtoupper($kegiatan->nama_kegiatan)}} &nbsp;
          <button type="button" class="btn btn-danger btn-circle btn-xs" data-toggle="modal" data-target="#penjelasanModalKegiatan" ><i class="fa fa-bullhorn" data-toggle="tooltip" title="Penjelasan"></i></button>
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
        <th class="col-sm-5">Uraian Kegiatan</th>
        <th class="col-sm-1">Satuan</th>
        <th class="col-sm-1">Besaran Bruto Maksimum (Rp)</th>
        <th class="col-sm-1"></th>
      </tr>
      </thead>
     <tbody>
      @foreach ($versions as $version)
      @foreach ($version->kegiatan as $kegiatan)
      @if($kegiatan->kode_bagian == $kode_bagian)
      @foreach ($kegiatan->kategori as $key => $kategori) 
          <tr>
            <td>
              {{$key+1}}. 
            </td>
          <th>{{ $kategori->kategori_kegiatan}}</th>
          <td>
            @if(strpos($kategori->satuan, '0') !== false)
            @else
               {{$kategori->satuan}}
            @endif
          </td>
          <td>
            @if($kategori->var1 != null)
              {{number_format($kategori->var1)}}
            @endif
          </td>
            <td> 
             {{-- <button type="button" class="btn btn-info btn-outline btn-circle btn-xs" data-toggle="modal" data-target="#show-modal1" onclick="submitUpdate1({{ $kategori->id }},{{$kategori->kode_tabel}})"><i class="ti-eye" data-toggle="tooltip" title="View Data"></i></button> --}}
             @if(Auth::user()->role!=3)
                <button type="button" class="btn btn-info btn-outline btn-circle btn-xs" data-toggle="modal" data-target="#edit-modal1" onclick="submitUpdate1({{ $kategori->id }},{{$kategori->kode_tabel}})"><i class="ti-pencil" data-toggle="tooltip" title="Edit Data"></i></button>
              @endif
              </td>
          </tr>
          @foreach ($kategori->uraian as $uraian)
          <tr>
            <td></td>
            <td>{{$uraian->uraian_kegiatan}}</td>
            <td>
                {{ $uraian->satuan}}
            </td>
            <td>
            @if($uraian->var1==null || $uraian->var1==0)
                <i>at cost</i>
            @else
                {{number_format($uraian->var1)}}
            @endif
            </td>
            <td>
              {{-- <button type="button" class="btn btn-info btn-outline btn-circle btn-xs" data-toggle="modal" data-target="#show-modal2" onclick="submitUpdate2({{ $uraian->id }},{{$uraian->kode_tabel}})"><i class="ti-eye" data-toggle="tooltip" title="View Data"></i></button> --}}
              @if(Auth::user()->role!=3)
                <button type="button" class="btn btn-info btn-outline btn-circle btn-xs" data-toggle="modal" data-target="#edit-modal2" onclick="submitUpdate2({{ $uraian->id }},{{$uraian->kode_tabel}})"><i class="ti-pencil" data-toggle="tooltip" title="Edit Data"></i></button>
              @endif
            </td>
            </tr>
            @endforeach 
            @endforeach
          @endif
        @endforeach
        @endforeach
      </tbody>
    </table>
  </div>

<!--Penjelasan Modal-->
<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;" id="penjelasanModalKegiatan">
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
            @if($kegiatan->kode_bagian==$kode_bagian)
            <?php $counter = 0; ?>
            @foreach($kegiatan->penjelasan as $penjelasan)
              @if(strpos('$penjelasan->penjelasan', '0')!==true && $counter != 1)
                <?php $counter = 1; ?>
                <tr>
                  <th></th>
                  <th>{{$kegiatan->nama_kegiatan}}</th>
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
            @foreach($penjelasan->penjelasan_sub1 as $key => $penjelasan_sub1)
            <tr>
              <td></td>
              <td>
                 @php
                  $i = chr($key+97);
                 @endphp
                 &emsp;&ensp;{{$i}}. {{$penjelasan_sub1->penjelasan}}
              </td>
              <td>
              {{-- <button type="button" class="btn btn-info btn-outline btn-circle btn-xs" data-toggle="modal" data-target="#show-modal5" onclick="submitUpdate5({{ $penjelasan_sub1->id }},{{$penjelasan_sub1->kode_tabel}})"><i class="ti-eye" data-toggle="tooltip" title="View Data"></i></button> --}}
              @if(Auth::user()->role!=3)
                <button type="button" class="btn btn-info btn-outline btn-circle btn-xs" data-toggle="modal" data-target="#edit-modal5" onclick="submitUpdate5({{ $penjelasan_sub1->id }},{{$penjelasan_sub1->kode_tabel}})"><i class="ti-pencil" data-toggle="tooltip" title="Edit Data"></i></button>
              @endif
              </td>
            </tr>
            @foreach($penjelasan_sub1->penjelasan_sub2 as $penjelasan_sub2)
            <tr>
              <td></td>
              <td>
                <ul>
                  <li>{{$penjelasan_sub2->penjelasan}}</li>
                </ul>
              </td>
              <td width="100">
              {{-- <button type="button" class="btn btn-info btn-outline btn-circle btn-xs" data-toggle="modal" data-target="#show-modal6" onclick="submitUpdate6({{ $penjelasan_sub2->id }},{{$penjelasan_sub2->kode_tabel}})"><i class="ti-eye" data-toggle="tooltip" title="View Data"></i></button> --}}
              @if(Auth::user()->role!=3)
                <button type="button" class="btn btn-info btn-outline btn-circle btn-xs" data-toggle="modal" data-target="#edit-modal6" onclick="submitUpdate6({{ $penjelasan_sub2->id }},{{$penjelasan_sub2->kode_tabel}})"><i class="ti-pencil" data-toggle="tooltip" title="Edit Data"></i></button>
              @endif
              </td>
            </tr>
            @endforeach
            @endforeach   
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
                  <option value="1">Kategori</option>
                  <option value="2">Uraian</option>
                  <option value="3">Penjelasan</option>
                  @if($kode_bagian==5)
                      <option value="4">Sub Penjelasan</option>
                      <option value="5">Sub2 Penjelasan</option>
                  @endif
                </select>
                <input type="button" name="submitpilih" id="submitpilih" class="btn btn-primary btn-rounded" value="Add"/>

             <div class="form-group" id="form-kategori">
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
                    @if($kegiatan->kode_bagian == $kode_bagian)
                      <option value="{{$kegiatan->id}}">{{$kegiatan->nama_kegiatan}}</option>
                    @endif
                @endforeach
              @endforeach
              </select>  
            </div>
            <form class="form-horizontal">
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-3 control-label">Kategori</label>
                  <div class="col-sm-9">
                    <input type="hidden" name="kode_bagian" value="{{$kode_bagian_kategori}}" class="form-control"/>
                    <textarea class="form-control" rows="3" id="kategori_kegiatan" name="kategori_kegiatan" placeholder="Kategori Kegiatan" required></textarea>
                  </div>
                </div>
            @if($kode_bagian_kategori==20)
                <div class="form-group">
                  <label class="col-sm-3 control-label">Satuan</label>
                  <div class="col-sm-9">
                    <input type="text" name="satuan_kategori" placeholder="Masukkan 0 jika tidak memiliki satuan" class="form-control" required />
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label">Bruto</label>
                  <div class="col-sm-9">
                    <input type="number" name="var1_kategori" placeholder="Masukkan 0 jika tidak memiliki bruto" class="form-control" required />
                  </div>
                </div>
            @endif
              </div>
                <br/><br/><br/><br/><br/>
              <div class="modal-footer">  
                <input type="submit" name="submit" id="submit" class="btn btn-primary btn-rounded" value="Add" /> 
              </div>
            </form>
          </form>
          </div>

    <div class="form-group" id="form-penjelasan-sub1">
  <br/>
  @foreach ($versions as $version)
  @foreach ($version->kegiatan as $kegiatan)
  @foreach ($kegiatan->kategori as $kategori)
  @foreach ($kategori->penjelasan as $penjelasan)
  @foreach ($penjelasan->penjelasan_sub1 as $penjelasan_sub1)
  @endforeach
  @endforeach
  @endforeach
  @endforeach
  @endforeach
  <form action="{{url('/data/add', $penjelasan_sub1->kode_tabel)}}" method="POST">
  {{csrf_field()}} 
    <div class="form-group">
       <select name="list_kegiatan" class="form-control select2"  style="width:500px" id="list_kegiatan" required>
        <option></option>
        @foreach ($versions as $version)
         @foreach ($version->kegiatan as $kegiatan)
         @if($kegiatan->kode_bagian==$kode_bagian)
             <option value="{{$kegiatan->id}}">{{$kegiatan->nama_kegiatan}}</option>
          @endif
        @endforeach
      @endforeach
      </select>  
  </div>
  <div class="form-group">  
  <select class="form-control selectpenjelasan" name="list_penjelasan" style="width:500px" id="list_penjelasan">
    </select>  
  </div>
    <form class="form-horizontal">
      <div class="box-body">
        <div class="form-group">
          <label class="col-sm-2 control-label">Penjelasan</label>
          <div class="col-sm-10">
            <textarea class="form-control" rows="3" id="penjelasan_sub1" name="penjelasan_sub1" placeholder="Penjelasan" required></textarea>
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

<div class="form-group" id="form-penjelasan">
  <br/>
  @foreach ($version->penjelasan as $penjelasan)
  @endforeach
<form action="{{url('/data/add', $penjelasan->kode_tabel)}}" method="POST">
  {{csrf_field()}} 
    <div class="form-group">
      <select class="form-control select2" style="width:500px" name="penjelasan_kegiatan" required>
        <option></option>
        @foreach ($versions as $version)
         @foreach ($version->kegiatan as $kegiatan)
         @if($kegiatan->kode_bagian==$kode_bagian)
             <option value="{{$kegiatan->id}}">{{$kegiatan->nama_kegiatan}}</option>
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
    <br/><br/><br/><br/><br/><br/><br/>
    <div class="modal-footer">  
      <input type="submit" name="submit" id="submit" class="btn btn-primary btn-rounded" value="Add" /> 
    </div>
  </form>
</form>
</div>

@if($kode_bagian==5)
    <div class="form-group" id="form-penjelasan-sub2">
    <br/>
    @foreach ($versions as $version)
    @foreach ($version->kegiatan as $kegiatan)
    @foreach ($kegiatan->kategori as $kategori)
    @foreach ($kategori->penjelasan as $penjelasan)
    @foreach ($penjelasan->penjelasan_sub1 as $penjelasan_sub1)
    @foreach ($penjelasan_sub1->penjelasan_sub2 as $penjelasan_sub2)
    @endforeach
    @endforeach
    @endforeach
    @endforeach
    @endforeach
    @endforeach
    <form action="{{url('/data/add', $penjelasan_sub2->kode_tabel)}}" method="POST">
    {{csrf_field()}} 
      <div class="form-group">
         <select name="list_all_penjelasan" class="form-control selectpenjelasan"  style="width:500px" id="list_all_penjelasan" required>
          <option></option>
          @foreach ($versions as $version)
           @foreach ($version->kegiatan as $kegiatan)
           @if($kegiatan->kode_bagian==$kode_bagian)
              @foreach($kegiatan->penjelasan as $penjelasan)
               <option value="{{$penjelasan->id}}">{{$penjelasan->penjelasan}}</option>
              @endforeach
            @endif
          @endforeach
        @endforeach
        </select>  
      </div>
      <div class="form-group">  
      <select class="form-control selectpenjelasansub1" name="list_penjelasan_sub1" style="width:500px" id="list_penjelasan_sub1">
        </select>  
      </div>
        <form class="form-horizontal">
          <div class="box-body">
            <div class="form-group">
              <label class="col-sm-2 control-label">Penjelasan</label>
              <div class="col-sm-10">
                <textarea class="form-control" rows="3" id="penjelasan_sub2" name="penjelasan_sub2" placeholder="Penjelasan" required></textarea>
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
    @endif

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
                         @if($kegiatan->kode_bagian == $kode_bagian)
                          @foreach($kegiatan->kategori as $kategori)
                             <option value="{{$kategori->id}}">{{$kategori->kategori_kegiatan}}</option>
                          @endforeach
                          @endif
                        @endforeach
                      @endforeach
                      </select>  
                    </div>
            <form class="form-horizontal">
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Uraian</label>
                  <div class="col-sm-10">
                    <textarea class="form-control" rows="3" id="uraian_kegiatan" name="uraian_kegiatan" placeholder="Uraian Kegiatan" required></textarea>
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
                    <input type="number" name="var1" placeholder="Masukkan 0 jika nominal at cost" class="form-control" required />
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
  <div class="modal fade" id="show-modal1">
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
                    <th style="vertical-align: top; padding-top: 5px;" class="col-sm-3 control-label">Uraian Kegiatan</th>
                    <td style="vertical-align: top; padding-top: 5px;" width="10">:</td>
                    <td><textarea style="border: none; box-shadow: none;" class="form-control" rows="3" id="kategori" name="kategori" disabled></textarea> </td>
                  </tr>
                @if($kode_bagian_kategori==20)
                <tr>
                    <th class="col-sm-3 control-label">Satuan</th>
                    <td width="10">:</td>
                    <td><input style="border: none; box-shadow: none;" class="form-control" type="text" size="50" id="kategori_satuan" name="kategori_satuan" disabled> </td>
                </tr>
                <tr>
                  <th class="col-sm-3 control-label">Bruto</th>
                  <td width="10">:</td>
                  <td><input style="border: none; box-shadow: none;" class="form-control" type="text" size="50" id="kategori_var1" name="kategori_var1" disabled> </td>
                </tr>
                @endif
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
                    <td><input style="border: none; box-shadow: none;" class="form-control" type="text" size="50" id="id2" name="id2" disabled> </td>
                  </tr>
                  <tr>
                    <th class="col-sm-3 control-label">Kategori</th>
                    <td width="10">:</td>
                    <td><input style="border: none; box-shadow: none;" class="form-control" type="text" size="50" id="kategori2" name="kategori2" disabled></td>
                  </tr>
                 <tr>
                    <th style="vertical-align: top; padding-top: 5px;" class="col-sm-3 control-label">Uraian Kegiatan</th>
                    <td style="vertical-align: top; padding-top: 5px;" width="10">:</td>
                    <td><textarea style="border: none; box-shadow: none;" class="form-control" rows="3" id="uraian" name="uraian" disabled></textarea> </td>
                  </tr>
                  <tr>
                    <th class="col-sm-3 control-label">Satuan</th>
                    <td width="10">:</td>
                    <td><input style="border: none; box-shadow: none;" class="form-control" type="text" size="50" id="satuan" name="satuan" disabled></td>
                  </tr>
                  <tr>
                    <th class="col-sm-3 control-label">Bruto</th>
                    <td width="10">:</td>
                    <td><input style="border: none; box-shadow: none;" class="form-control" type="text" size="50" id="var1" name="var1" disabled></td>
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
                    <th class="col-sm-3 control-label">Kegiatan</th>
                    <td width="10">:</td>
                    <td><input style="border: none; box-shadow: none;" class="form-control" type="text" size="50" id="kegiatan4" name="kegiatan4" disabled></td>
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

<div class="modal fade" id="show-modal5">
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
                    <td><input style="border: none; box-shadow: none;" class="form-control" type="text" size="50" id="id5" name="id5" disabled> </td>
                  </tr>
                  <tr>
                    <th class="col-sm-3 control-label">Penjelasan ID</th>
                    <td width="10">:</td>
                    <td><input style="border: none; box-shadow: none;" class="form-control" type="text" size="50" id="kategori5" name="kategori5" disabled></td>
                  </tr>
                 <tr>
                    <th style="vertical-align: top; padding-top: 5px;" class="col-sm-3 control-label">Penjelasan</th>
                    <td style="vertical-align: top; padding-top: 5px;" width="10">:</td>
                    <td><textarea style="border: none; box-shadow: none;" class="form-control" rows="3" id="penjelasan5" name="penjelasan5" disabled></textarea> </td>
                  </tr>
                </table>
              </div>              
              </div>
            </div>
          </div>
        </div>
    </div>

    <div class="modal fade" id="show-modal6">
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
                    <td><input style="border: none; box-shadow: none;" class="form-control" type="text" size="50" id="id7" name="id7" disabled> </td>
                  </tr>
                  <tr>
                    <th class="col-sm-3 control-label">Sub Penjelasan ID</th>
                    <td width="10">:</td>
                    <td><input style="border: none; box-shadow: none;" class="form-control" type="text" size="50" id="kategori7" name="kategori7" disabled></td>
                  </tr>
                 <tr>
                    <th style="vertical-align: top; padding-top: 5px;" class="col-sm-3 control-label">Penjelasan</th>
                    <td style="vertical-align: top; padding-top: 5px;" width="10">:</td>
                    <td><textarea style="border: none; box-shadow: none;" class="form-control" rows="3" id="penjelasan7" name="penjelasan7" disabled></textarea> </td>
                  </tr>
                </table>
              </div>              
              </div>
            </div>
          </div>
        </div>
    </div>

<!-- Edit Modal -->
 <div class="modal fade" id="edit-modal1">
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
                    <th class="col-sm-3 control-label">Uraian Kegiatan</th>
                    <td width="10">:&ensp;</td>
                    <td>
                    <textarea class="form-control" rows="3" id="kategori_kegiatan1" name="kategori_kegiatan1" required></textarea>
                    </td>
                  </tr>
                @if($kode_bagian_kategori==20)
                  <tr>
                    <th class="col-sm-3 control-label">Satuan</th>
                    <td width="10">:</td>
                    <td><input type="text" class="form-control"  placeholder="Masukkan 0 jika tidak memiliki satuan" id="edit_kategori_satuan" name="edit_kategori_satuan" required></td>
                  </tr>
                  <tr>
                    <th class="col-sm-3 control-label">Bruto</th>
                    <td width="10">:</td>
                    <td><input type="number" class="form-control" id="edit_kategori_var1" name="edit_kategori_var1"  placeholder="Masukkan 0 jika tidak memiliki bruto" required></td>
                  </tr>
                @endif
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
                          @if($kegiatan->kode_bagian == $kode_bagian)
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
                    <th class="col-sm-3 control-label">Bruto</th>
                    <td width="10">:</td>
                    <td>
                    <input type="number" class="form-control" id="edit_var1" name="edit_var1" placeholder="Bruto" required>
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
                      <select class="form-control select2" style="width:385px" name="edit_kegiatan4" id="edit_kegiatan4" required>
                        <option></option>
                        @foreach($versions as $version)
                          @foreach($version->kegiatan as $kegiatan)
                          @if($kegiatan->kode_bagian==$kode_bagian)
                            <option value="{{$kegiatan->id}}">{{$kegiatan->nama_kegiatan}}</option>
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

<div class="modal fade" id="edit-modal5">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Data Details</h4>
              </div>
              <div class="modal-body">
              @foreach($versions as $version)
              @foreach($version->penjelasan as $penjelasan)
              @foreach($penjelasan->penjelasan_sub1 as $penjelasan_sub1)
              @endforeach
              @endforeach
              @endforeach
              <form action="{{url('/data/update', $penjelasan_sub1->kode_tabel)}}" method="POST">
              {{csrf_field()}} 
              <div class="box-body">
                <table border="0">
                  <tr>
                    <th class="col-sm-3 control-label">ID</th>
                    <td width="10">:</td>
                    <td><input type="text" style="border: none; box-shadow: none;" class="form-control" id="edit_id5" name="edit_id5" required></td>
                  </tr>
                  <br/>
                  <tr>
                    <th class="col-sm-3 control-label">Penjelasan</th>
                    <td width="10">:</td>
                    <td>
                    <div class="form-group">
                      <select class="form-control selectpenjelasan" style="width:385px" name="edit_penjelasan_id" id="edit_penjelasan_id" required>
                        <option></option>
                        @foreach($versions as $version)
                          @foreach($version->kegiatan as $kegiatan)
                          @if($kegiatan->kode_bagian==$kode_bagian)
                           @foreach($kegiatan->kategori as $kategori)
                           @if($kategori->kode_bagian==$kode_bagian_kategori)
                           @foreach($kategori->penjelasan as $penjelasan)
                            <option value="{{$penjelasan->id}}">{{$penjelasan->penjelasan}}</option>
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
                    <th class="col-sm-4 control-label">Sub Penjelasan</th>
                    <td width="10">:&ensp;</td>
                    <td>
                    <textarea class="form-control" rows="3" id="edit_penjelasan_sub1" name="edit_penjelasan_sub1" required></textarea>
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

<div class="modal fade" id="edit-modal6">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Data Details</h4>
              </div>
              <div class="modal-body">
              @foreach($versions as $version)
              @foreach($version->penjelasan as $penjelasan)
              @foreach($penjelasan->penjelasan_sub1 as $penjelasan_sub1)
              @foreach($penjelasan_sub1->penjelasan_sub2 as $penjelasan_sub2)
              @endforeach
              @endforeach
              @endforeach
              @endforeach
              <form action="{{url('/data/update', $penjelasan_sub2->kode_tabel)}}" method="POST">
              {{csrf_field()}} 
              <div class="box-body">
                <table border="0">
                  <tr>
                    <th class="col-sm-3 control-label">ID</th>
                    <td width="10">:</td>
                    <td><input type="text" style="border: none; box-shadow: none;" class="form-control" id="edit_id7" name="edit_id7" required></td>
                  </tr>
                  <br/>
                  <tr>
                    <th class="col-sm-3 control-label">Penjelasan</th>
                    <td width="10">:</td>
                    <td>
                    <div class="form-group">
                      <select class="form-control selectpenjelasan" style="width:385px" name="edit_penjelasan_sub1_id" id="edit_penjelasan_id" required>
                        <option></option>
                        @foreach($versions as $version)
                          @foreach($version->kegiatan as $kegiatan)
                          @if($kegiatan->kode_bagian==$kode_bagian)
                           @foreach($kegiatan->kategori as $kategori)
                           @if($kategori->kode_bagian==$kode_bagian_kategori)
                           @foreach($kategori->penjelasan as $penjelasan)
                           @foreach($penjelasan->penjelasan_sub1 as $penjelasan_sub1)
                            <option value="{{$penjelasan_sub1->id}}">{{$penjelasan_sub1->penjelasan}}</option>
                            @endforeach
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
                    <th class="col-sm-4 control-label">Sub Penjelasan</th>
                    <td width="10">:&ensp;</td>
                    <td>
                    <textarea class="form-control" rows="3" id="edit_penjelasan_sub2" name="edit_penjelasan_sub2" required></textarea>
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
    $('#example2').DataTable({
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
$(document).ready(function() {
$('#list_kegiatan').on('change', function() {
    var getKategoriId = $(this).val();
    var kode_tabel = 70;
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
              if(data){
                $('#list_penjelasan').empty();
                $('#list_penjelasan').focus;
                $('#list_penjelasan').append('<option value=""></option>'); 
                $.each(data, function(key, value){
                $('select[name="list_penjelasan"]').append('<option value="'+ value.id +'">' + value.penjelasan+ '</option>');
            });
          }else{
            $('#list_penjelasan').empty();
          }
          }
        });
    }else{
      $('#list_penjelasan').empty();
    }
});
});


$(document).ready(function() {
$('#list_all_penjelasan').on('change', function() {
    var getPenjelasanId = $(this).val();
    var kode_tabel = 8;
    if(getPenjelasanId) {
        $.ajax({
            url: '/getDataId/'+getPenjelasanId,
            type: "GET",
            data : {
              '_token': "{{ csrf_token() }}",
              'kode_tabel' : kode_tabel
            },
            dataType: "json",
            success:function(data) {
              if(data){
                $('#list_penjelasan_sub1').empty();
                $('#list_penjelasan_sub1').focus;
                $('#list_penjelasan_sub1').append('<option value=""></option>'); 
                $.each(data, function(key, value){
                $('select[name="list_penjelasan_sub1"]').append('<option value="'+ value.id +'">' + value.penjelasan+ '</option>');
            });
          }else{
            $('#list_penjelasan_sub1').empty();
          }
          }
        });
    }else{
      $('#list_penjelasan_sub1').empty();
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
    $('.selectpenjelasan').select2(
    {
      placeholder: "Pilih Penjelasan",
      allowClear: true
    })
    $('.selectkegiatan').select2(
    {
      placeholder: "Pilih Kegiatan",
      allowClear: true
    })
    $('.selectpenjelasansub1').select2(
    {
      placeholder: "Pilih Sub Penjelasan",
      allowClear: true
    })

  })
</script>
<script type="text/javascript">
  $("#form-kategori").hide();
  $("#form-uraian").hide();
  $("#form-penjelasan").hide(); 
  $("#form-penjelasan-sub1").hide();
  $("#form-penjelasan-sub2").hide();
  $(document).ready(function(){
    $("#submitpilih").click(function(){
      var pilihan = $( "#pilihopsi" ).val();
      if (pilihan == 0) {
        $("#form-penjelasan-sub2").hide();
        $("#form-kategori").hide();
        $("#form-uraian").hide();
        $("#form-penjelasan").hide(); 
        $("#form-penjelasan-sub1").hide();
      }
      else if (pilihan == 1) {
        $("#form-penjelasan-sub2").hide();
        $("#form-kategori").show();
        $("#form-uraian").hide();
        $("#form-penjelasan").hide(); 
        $("#form-penjelasan-sub1").hide();
      }
      else if (pilihan == 2){
        $("#form-penjelasan-sub2").hide();
        $("#form-uraian").show();
        $("#form-kategori").hide();
        $("#form-penjelasan").hide(); 
        $("#form-penjelasan-sub1").hide();  
      }
      else if (pilihan == 3){
        $("#form-penjelasan-sub2").hide();
        $("#form-uraian").hide();
        $("#form-kategori").hide();
        $("#form-penjelasan").show(); 
        $("#form-penjelasan-sub1").hide();  
      }
      else if (pilihan == 4){
        $("#form-penjelasan-sub2").hide();
        $("#form-uraian").hide();
        $("#form-kategori").hide();
        $("#form-penjelasan").hide(); 
        $("#form-penjelasan-sub1").show();  
      }
      else if (pilihan == 5){
        $("#form-penjelasan-sub2").show();
        $("#form-uraian").hide();
        $("#form-kategori").hide();
        $("#form-penjelasan").hide(); 
        $("#form-penjelasan-sub1").hide();  
      }
    })
  })
</script>
<script type="text/javascript">
  submitUpdate1 = function(id, kode_tabel){
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
          $('#kategori').val(data.kategori_kegiatan);
          $('#kategori_satuan').val(data.satuan);
          $('#kategori_var1').val(data.var1);
          $('#edit_id').val(data.id);
          $('#kategori_kegiatan1').val(data.kategori_kegiatan);
          $('#edit_kategori_satuan').val(data.satuan);
          $('#edit_kategori_var1').val(data.var1);
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
          $('#id2').val(data.id);
          $('#kategori2').val(data.kategori_id);
          $('#uraian').val(data.uraian_kegiatan);
          $('#satuan').val(data.satuan);
          $('#var1').val(data.var1);
          $('#edit_id2').val(data.id);
          $('#edit_kategori2').val(data.kategori_id);
          $('#uraian_kegiatan2').val(data.uraian_kegiatan);
          $('#satuan2').val(data.satuan);
          $('#edit_var1').val(data.var1);
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
          $('#kegiatan4').val(data.kegiatan_id);
          $('#penjelasan4').val(data.penjelasan);
          $('#edit_id4').val(data.id);
          $('#edit_kegiatan4').val(data.kegiatan_id);
          $('#edit_kegiatan4').select2().trigger('change');
          $('#edit_penjelasan').val(data.penjelasan);
        }
      });
    }
    submitUpdate5 = function(id, kode_tabel){
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
          $('#id5').val(data.id);
          $('#kategori5').val(data.penjelasan_id);
          $('#penjelasan5').val(data.penjelasan);
          $('#edit_id5').val(data.id);
          $('#edit_penjelasan_id').val(data.penjelasan_id);
          $('#edit_penjelasan_id').select2().trigger('change');
          $('#edit_penjelasan_sub1').val(data.penjelasan);
        }
      });
    }
    submitUpdate6 = function(id, kode_tabel){
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
          $('#id7').val(data.id);
          $('#kategori7').val(data.penjelasan_sub1_id);
          $('#penjelasan7').val(data.penjelasan);
          $('#edit_id7').val(data.id);
          $('#edit_penjelasan_sub1_id').val(data.penjelasan_sub1_id);
          $('#edit_penjelasan_sub1_id').select2().trigger('change');
          $('#edit_penjelasan_sub2').val(data.penjelasan);
        }
      });
    }
</script>
@endsection