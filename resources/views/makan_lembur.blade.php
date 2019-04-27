@extends('master')

@section('title-bar')
    @foreach ($kategoris as $kegiatan)
       {{$kegiatan->nama_kegiatan}}
    @endforeach
@endsection

@section('right_title')
@foreach ($kategoris as $kegiatan)
    <li class="active">{{$kegiatan->nama_kegiatan}}</li>
@endforeach
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
          <strong class="box-title" >
            @foreach ($kategoris as $kegiatan)
                {{strtoupper($kegiatan->nama_kegiatan)}}
            @endforeach
          </strong><br/>
          <strong class="card-title">Data version {{-- {{$month}} --}}</strong>
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
                            <form class="search-form" method="POST" action="{{url('search_month1')}}">
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
                  <th>Uraian Kegiatan</th>
                  <th>Satuan</th>
                  <th>Besaran Bruto Maksimum (Rp)</th>
                  <th></th>
                </tr>
                </thead>
               <tbody>
                @foreach ($kategoris as $kategoria)
                @foreach ($kategoria->kategori as $key => $kategori) 
                    <tr>
                      <td>
                        {{$key+1}}. 
                      </td>
                    <th>{{ $kategori->kategori_kegiatan}}</th>
                      <td></td>
                      <td></td>
                      <td> 
                        <i class="fa fa-eye" data-toggle="modal" onclick="viewdata1('{{ $kategori->id }}')" data-target="#show-modal1"> | </i>
                          <i class="fa fa-pencil" data-toggle="modal" onclick="submitUpdate1('{{ $kategori->id }}')" data-target="#edit-modal1"> </i>
                        </td>
                    </tr>
                    @foreach ($kategori->uraian as $key2 => $uraian)
                    <tr>
                      <td></td>
                      <td>
                        @php
                          $i = chr($key2+97);
                        @endphp
                        &emsp;&ensp;{{$i}}. {{ $uraian->uraian_kegiatan}}
                      </td>
                      <td>
                          {{ $uraian->satuan}}
                      </td>
                      @if($uraian->var1 == null)
                      <td>
                      </td>
                      @else
                      <td>
                      {{number_format($uraian->var1)}}</td>
                      @endif 
                      <td>
                          <i class="fa fa-eye" data-toggle="modal" onclick="viewdata2('{{ $uraian->id }}')" data-target="#show-modal2"> | </i> 
                          <i class="fa fa-pencil" data-toggle="modal" onclick="submitUpdate2('{{ $uraian->id }}')" data-target="#edit-modal2"> </i>
                      </td>
                    </tr>
                    @foreach ($uraian->sub1 as $sub1)
                      <tr> 
                        <td></td>
                        <td>
                          &emsp;&emsp;&emsp;&emsp;{{ $sub1->uraian_kegiatan}}
                        </td>
                        
                        <td>
                            {{ $sub1->satuan}}
                        </td>
                        @if($sub1->var1 == null)
                        <td>
                        </td>
                        @else
                        <td>
                          {{number_format($sub1->var1)}}</td>
                        @endif 
                        <td>
                          <i class="fa fa-eye" data-toggle="modal" onclick="viewdata3('{{ $sub1->id }}')" data-target="#show-modal2"> | </i>
                          <i class="fa fa-pencil" data-toggle="modal" onclick="submitUpdate3('{{ $sub1->id }}')" data-target="#edit-modal3"> </i>
                        </td>
                      </tr>
                        @endforeach
                        @endforeach 
                      @endforeach
                    @endforeach
                </tbody>
                <tfoot>
                <tr>
                  <th width="10">No.</th>
                  <th>Uraian Kegiatan</th>
                  <th>Satuan</th>
                  <th>Besaran Bruto Maksimum (Rp)</th>
                  <th></th>
                </tr>
              </tfoot>
              </table>
          </br/>
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
                  <option value="3">Sub Uraian</option>
                </select>
                <input type="button" name="submitpilih" id="submitpilih" class="btn btn-primary" value="Add"/>

                <div class="form-group" id="form-uraian">
                  <br/>
                <form action="{{url('/makan_lembur')}}" method="POST"> 
                  {{csrf_field()}} 
                    <div class="form-group">
                      <select class="form-control select2" style="width:500px" name="kategori_kegiatan" required>
                        <option></option>
                        @foreach($kategoris as $kategoria)
                        @foreach($kategoria->kategori as $kategori)
                        <option value="{{$kategori->id}}">{{$kategori->kategori_kegiatan}}</option>
                        @endforeach
                        @endforeach
                      </select>  
                    </div>
            <form class="form-horizontal">
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Uraian</label>
                  <div class="col-sm-10">
                    <input type="text" name="uraian_kegiatan" placeholder="Uraian Kegiatan" class="form-control" required />
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
                <br/><br/>
              </div>
              <div class="modal-footer">  
                <input type="submit" name="submit" id="submit" class="btn btn-primary" value="Add" /> 
              </div>
            </form>
          </form>
          </div>

          <div class="form-group" id="form-kategori">
                  <br/>
                <form action="{{url('/makan_lembur/kategori')}}" method="POST"> 
                  {{csrf_field()}} 
            <form class="form-horizontal">
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Kategori</label>
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

         <div class="form-group" id="form-sub1">
          <br/>
        <form action="{{url('/makan_lembur/sub1')}}" method="POST"> 
          {{csrf_field()}} 
          <div class="form-group">
            <select name="list_kategori_kegiatan" class="form-control select2"  style="width:500px" id="list_kategori_kegiatan">
              <option value=""></option>
              @foreach($kategoris as $kategoria)
                @foreach($kategoria->kategori as $kategori)
                    {{-- <option value="{{$kategori->id}}">{{ucfirst ($kategori->kategori_kegiatan) }}</option> --}}
                    <option value="{{$kategori->id}}">{{$kategori->kategori_kegiatan}}</option>
                @endforeach 
              @endforeach
            </select>
          </div>
            <div class="form-group">  
            <select class="form-control selecturaian" name="list_uraian_kegiatan" style="width:500px" id="list_uraian_kegiatan">
              {{-- <option value="1">yeyeyey</option>--}}
              </select>  
            </div>
          <div class="form-group" id="form-detail-sub1">
            <form class="form-horizontal">
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Uraian</label>
                  <div class="col-sm-10">
                    <input type="text" name="uraian_kegiatan" placeholder="Uraian Kegiatan" class="form-control" required />
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
                <br/><br/>
              </div>
              <div class="modal-footer">  
                <input type="submit" name="submit" id="submit" class="btn btn-primary" value="Add" /> 
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
                    <th class="col-sm-3 control-label">Kategori</th>
                    <td width="10">:</td>
                    <td><input style="border: none; box-shadow: none;" class="form-control" type="text" size="50" id="kategori" name="kategori" disabled></td>
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
                    <td><input style="border: none; box-shadow: none;" class="form-control" type="text" size="50" id="id2" name="id2" disabled> </td>
                  </tr>
                  <tr>
                    <th class="col-sm-3 control-label">Kategori</th>
                    <td width="10">:</td>
                    <td><input style="border: none; box-shadow: none;" class="form-control" type="text" size="50" id="kategori2" name="kategori2" disabled></td>
                  </tr>
                  <tr>
                    <th class="col-sm-3 control-label">Uraian Kegiatan</th>
                    <td width="10">:</td>
                    <td><input style="border: none; box-shadow: none;" class="form-control" type="text" size="50" id="uraian" name="uraian" disabled></td>
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
              <form action="{{url('/makan_lembur/update')}}" method="POST"> 
              {{csrf_field()}} 
              <div class="box-body">
                <table border="0">
                  <tr>
                    <th class="col-sm-3 control-label">ID</th>
                    <td width="10">:</td>
                    <td><input type="text" class="form-control" id="id_kegiatan1" name="id_kegiatan1" required></td>
                  </tr>
                  <br/>
                  <tr>
                    <th class="col-sm-3 control-label">Kategori</th>
                    <td width="10">:</td>
                    <td>
                    <input type="text" class="form-control" style="width:385px" id="kategori_kegiatan1" name="kategori_kegiatan1" value="{{old('kategori_kegiatan')}}" placeholder="Kategori Kegiatan" required>
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

     <div class="modal fade" id="edit-modal2">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Data Details</h4>
              </div>
              <div class="modal-body">
              <form action="{{url('/makan_lembur/update2')}}" method="POST"> 
              {{csrf_field()}} 
              <div class="box-body">
                <table border="0">
                  <tr>
                    <th class="col-sm-3 control-label">ID</th>
                    <td width="10">:</td>
                    <td><input type="text" class="form-control" id="id_kegiatan2" name="id_kegiatan2" required></td>
                  </tr>
                  <br/>
                  <tr>
                    <th class="col-sm-3 control-label">Kategori</th>
                    <td width="10">:</td>
                    <td>
                    <div class="form-group">
                      <select class="form-control select2" style="width:385px" name="kategori2" id="kategori2" value="{{old('kategori_kegiatan')}}" required>
                        <option></option>
                        @foreach($kategoris as $kategoria)
                        @foreach($kategoria->kategori as $kategori)
                        <option value="{{$kategori->id}}">{{$kategori->kategori_kegiatan}}</option>
                        @endforeach
                        @endforeach
                      </select>  
                    </div>
                  </td>
                  </tr>
                  <tr>
                    <th class="col-sm-3 control-label">Uraian Kegiatan</th>
                    <td width="10">:</td>
                    <td>
                    <input type="text" class="form-control" id="uraian_kegiatan2" name="uraian_kegiatan2" value="{{old('uraian_kegiatan')}}" placeholder="Kategori" required>
                    </td>
                  </tr>
                  <tr>
                    <th class="col-sm-3 control-label">Satuan</th>
                    <td width="10">:</td>
                    <td>
                    <input type="text" class="form-control" id="satuan2" name="satuan2" value="{{old('satuan')}}" placeholder="Satuan" required>
                    </td>
                  </tr>
                  <tr>
                    <th class="col-sm-3 control-label">Bruto</th>
                    <td width="10">:</td>
                    <td>
                    <input type="text" class="form-control" id="var12" name="var12" value="{{old('var1')}}" placeholder="Bruto" required>
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

    <div class="modal fade" id="edit-modal3">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Data Details</h4>
              </div>
              <div class="modal-body">
              <form action="{{url('/makan_lembur/update3')}}" method="POST"> 
              {{csrf_field()}} 
              <div class="box-body">
                <table border="0">
                  <tr>
                    <th class="col-sm-3 control-label">ID</th>
                    <td width="10">:</td>
                    <td><input type="text" class="form-control" id="id_kegiatan3" name="id_kegiatan3" required></td>
                  </tr>
                  <br/>
                  <tr>
                    <th class="col-sm-3 control-label">Uraian</th>
                    <td width="10">:</td>
                    <td>
                    <div class="form-group">
                      <select class="form-control select2" style="width:385px" name="uraian3" id="uraian3" value="{{old('uraian_id')}}" required>
                        <option></option>
                        @foreach($kategori->uraian as $uraian)
                        <option value="{{$uraian->id}}">{{$uraian->uraian_kegiatan}}</option>
                        @endforeach
                      </select>  
                    </div>
                  </td>
                  </tr>
                  <tr>
                    <th class="col-sm-3 control-label">Uraian Kegiatan</th>
                    <td width="10">:</td>
                    <td>
                    <input type="text" class="form-control" id="uraian_kegiatan3" name="uraian_kegiatan3" value="{{old('uraian_kegiatan')}}" placeholder="Kategori" required>
                    </td>
                  </tr>
                  <tr>
                    <th class="col-sm-3 control-label">Satuan</th>
                    <td width="10">:</td>
                    <td>
                    <input type="text" class="form-control" id="satuan3" name="satuan3" value="{{old('satuan')}}" placeholder="Satuan" required>
                    </td>
                  </tr>
                  <tr>
                    <th class="col-sm-3 control-label">Bruto</th>
                    <td width="10">:</td>
                    <td>
                    <input type="text" class="form-control" id="var13" name="var13" value="{{old('var1')}}" placeholder="Bruto" required>
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

@endsection

@section('add-script')
<!-- DataTables -->
<script src="{{url('assets/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{url('assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>

<!-- FastClick -->
<script src="{{url('assets/bower_components/fastclick/lib/fastclick.js')}}"></script>

<script>
  $(document).ready(function (){
    $('#example1').DataTable({
      'ordering'    :false
    });  
});
</script>


{{-- dependent dropdown --}}
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
{{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> --}}
{{-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> --}}
     <script>
             $(document).ready(function() {
            $('#list_kategori_kegiatan').on('change', function() {
                var getKategoriId = $(this).val();
                if(getKategoriId) {
                    $.ajax({
                        url: '/getUraian/'+getKategoriId,
                        type: "GET",
                        data : {"_token":"{{ csrf_token() }}"},
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

<!-- form -->
<script src="{{url('assets/bower_components/select2/dist/js/select2.full.min.js')}}"></script>        

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
  $("#form-kategori").hide();
  $("#form-uraian").hide();
  $("#form-sub1").hide();
  // $("#modal-footer").hide();
  $(document).ready(function(){
    $("#submitpilih").click(function(){
      var pilihan = $( "#pilihopsi" ).val();
      if (pilihan == 0) {
        $("#form-kategori").hide();
        $("#form-uraian").hide();
        $("#form-sub1").hide();
      }
      else if (pilihan == 1) {
        $("#form-kategori").show();
        $("#form-uraian").hide();
        $("#form-sub1").hide();
      }
      else if (pilihan == 2){
        $("#form-uraian").show();
        $("#form-sub1").hide(); 
        $("#form-kategori").hide();
      }
      else if (pilihan == 3){
        $("#form-sub1").show(); 
        $("#form-uraian").hide();
        $("#form-kategori").hide();
      }
    })
  })
</script>

<script>
  $(document).ready(function(){

    viewdata1 = function(id){
      $.ajax({
        url: '/data/makan1',
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
    viewdata2 = function(id){
      $.ajax({
        url: '/data/makan2',
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
          $('#id2').val(data.id);
          $('#kategori2').val(data.kategori_id);
          $('#uraian').val(data.uraian_kegiatan);
          $('#satuan').val(data.satuan);
          $('#var1').val(data.var1);
        }
      });
    }
    viewdata3 = function(id){
      $.ajax({
        url: '/data/makan3',
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
          $('#id2').val(data.id);
          $('#kategori2').val(data.uraian_id);
          $('#uraian').val(data.uraian_kegiatan);
          $('#satuan').val(data.satuan);
          $('#var1').val(data.var1);
        }
      });
    }
    submitUpdate1 = function(id){
      $.ajax({
        url: '/data/edit-makan1',
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
          $('#id_kegiatan1').val(data.id);
          $('#kategori_kegiatan1').val(data.kategori_kegiatan);
        }
      });
    }
    submitUpdate2 = function(id){
      $.ajax({
        url: '/data/edit-makan2',
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
          $('#kategori2').val(data.kategori_kegiatan);
          $('#uraian_kegiatan2').val(data.uraian_kegiatan);
          $('#satuan2').val(data.satuan);
          $('#var12').val(data.var1);
        }
      });
    }
    submitUpdate3 = function(id){
      $.ajax({
        url: '/data/edit-makan3',
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
          $('#id_kegiatan3').val(data.id);
          $('#uraian3').val(data.uraian_id);
          $('#uraian_kegiatan3').val(data.uraian_kegiatan);
          $('#satuan3').val(data.satuan);
          $('#var13').val(data.var1);
        }
      });
    }


  });
</script>
@endsection