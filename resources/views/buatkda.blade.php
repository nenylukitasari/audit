<?php
if (!isset($_SESSION['userinfo']))
        {
            return redirect('/login');
        }
else {
  $userinfo = $_SESSION['userinfo'];
  $username = $_SESSION['username'];
}
?>
@extends('master')

@section('title')
    Buat KDA
@endsection
@section('right_title')
    <li class="active">Buat KDA</li>
@endsection
@section('content')
<style>
div .biodata {
  padding-left: 200px;
}
div.row1 {
  line-height: 1.7;
}
th, td
{
  text-align: center;
}
td .tengah{
 text-align: center; 
}
td .kanan{
 text-align: right; 
}
</style>
<br/>
    <div class="row" id="balik-eror">
        <div class="box">
          <div class="box-header">  
              <h3 class="box-title">Buat KDA</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <input type="hidden" name="auditor1" id="auditor1" value="<?php echo $username; ?>">
            <div class="col-xs-3">
            	<select id="pilihkda" class="form-control">
              <!-- <option value="" disabled selected>Select your option</option> -->
              <option value="1">kda tanpa Temuan</option>
              <option value="2">kda dengan Temuan</option>
              <option value="3">kda Unaudited</option>
              <option value="4">kda tanpa pengajuan UMK</option>
            </select>
            </div>
            <div class="col-xs-6">
          &ensp;<input type="button" name="submitpilih" id="submitpilih" class="btn btn-info btn-rounded btn-sm" value="buat kda" />
            </div>
            <div class="col-xs-3">
          <button type="button" class="btn btn-sm btn-rounded btn-warning pull-right" data-toggle="modal" data-target="#berkas">Berkas</button>
        </div>
          </div>
      </div>
  </div>
  <div id="peringatan">
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
  </div>
</div>
</div>
<div class="row">
    <div class="col-xs-12">
        <div class="white-box">
		@foreach( $summernote as $summernote)
                      {!! $summernote->content !!}
                      @endforeach







<!-- Modal -->
  <div class="modal fade" id="berkas" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Berkas Kelengkapan</h4>

        </div>
        <div class="modal-body">
          @if(Auth::user()->role==1)
          <button type="button" class="btn btn-info btn-rounded waves-effect waves-light pull-right" data-toggle="modal" data-target="#addModal"><span class="btn-label"><i class="fa fa-plus"></i></span>Add</button></br></br>
          @endif
           
          <table id="berkas1" class="table table-striped">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Berkas</th>
                  @if(Auth::user()->role==1)
                  <th>Edit</th>
                  @endif
                </tr>
              </thead>
              <tbody>
                <?php $i=1;?>
                @foreach ($versions as $key => $version)
                @foreach ($version->kegiatan as $key2 => $data)
                <tr>
                  <td>{{$i++}}</td>
                  <th style="text-align: left">{{$data->nama_kegiatan}}</th>
                  @if(Auth::user()->role==1)
                  <td></td>
                  @endif
                </tr>
                  @foreach ($data->berkas as $item)
                  <tr>
                    <td></td>
                    <td style="text-align: left"> {{$item->berkas}} </td>
                    @if(Auth::user()->role==1)
                    <td><button type="button" class="btn btn-info btn-outline btn-circle btn-xs open-AddBookDialog" data-toggle="modal" data-target="#edit-modal" onclick="submitUpdate({{ $item->id }})"><i class="ti-pencil" data-toggle="tooltip" title="Edit Data"></i></button></td>
                    @endif
                  </tr>
                @endforeach
                @endforeach
                @endforeach
              </tbody>
              <tfoot>
                <tr>
                  <th>No</th>
                  <th>Berkas</th>
                  @if(Auth::user()->role==1)
                  <th>Edit</th>
                  @endif
                </tr>
              </tfoot>
            </table>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
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
      <div class="form-group">
                <br/>
              <form action="{{url('/berkas/add')}}" method="POST">
                {{csrf_field()}}
          <form class="form-horizontal">
            <div class="box-body">
              <div class="form-group">
                <label class="col-sm-3 control-label">Kegiatan</label>
                <div class="col-sm-9">
                  <select class="form-control select2" style="width:100%" name="kegiatan" required>
                      <option></option>
                      @foreach ($versions as $key => $version)
                        @foreach ($version->kegiatan as $key2 => $data)
                           <option value="{{$data->id}}">{{$data->nama_kegiatan}}</option>
                        @endforeach
                      @endforeach
                    </select>  
                </div>
              </div>
            </br></br>
              <div class="form-group">
                <label class="col-sm-3 control-label">Berkas</label>
                <div class="col-sm-9">
                  <input type="text" name="berkas" placeholder="Berkas" class="form-control" required />
                </div>
              </div>
            </div>
            <br/><br/>
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
<!-- Edit Modal -->
 <div class="modal fade" id="edit-modal">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Ubah Berkas</h4>
              </div>
              <div class="modal-body">
              <form action="{{url('/berkas/update')}}" method="POST"> 
              {{csrf_field()}} 
              <div class="box-body">
                 <table border="0">
                  <tr>
                    <input class="form-control" type="hidden" id="edit_id_berkas" name="edit_id_berkas"/>
                    <input class="form-control" type="hidden" id="edit_id_kegiatan" name="edit_id_kegiatan"/>
                    <th style="vertical-align: top; padding-top: 5px;" class="col-sm-3 control-label">Berkas</th>
                    <td style="vertical-align: top; padding-top: 5px;" width="10">:</td>
                    <td><input class="form-control" type="text" size="50" id="edit_berkas" name="edit_berkas" required> </td>
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
    <!--Delete Modal-->
<div class="modal modal-danger fade" id="delete-modal">
<div class="modal-dialog" role="document">
<div class="modal-content">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <h4 class="modal-title text-center" id="myModalLabel">Delete Confirmation</h4>
  </div>
  <div class="modal-body">
    <form class="form-inline"  method="POST" id="fberkas">
    {{csrf_field()}}
  </div> 
    <div class="modal-footer">
      <button type="button" class="btn btn-success" data-dismiss="modal">No, Cancel</button>
      <button type="submit" class="btn btn-warning">Yes, Delete</button>
    </div>
  </form>
</div>
</div>
</div>

@endsection

@section('add-script')
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
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

<script type="text/javascript">
  submitUpdate = function(id){
    console.log(id);
      $.ajax({
        url: '/berkas/data',
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
          $('#edit_id_berkas').val(data.id);
          $('#edit_id_kegiatan').val(data.kegiatan_id);
          $('#edit_berkas').val(data.berkas);
        }
      });
    };
  $('#berkas1').dataTable({
    // "order": [],
      'ordering'    :false
  });
  var keterangan1 = `<tr id="krow0">
                      <td><input type="text" name="kelengkapan[]" placeholder="jenis Kelengkapan" class="form-control name_list" value="Rekap Per Mak"/></td>  
                      <td><select name="kesediaan[]" class="form-control name_list">
                        <option value=""></option>
                        <option value="Ada">Ada</option>
                        <option value="Tidak Ada">Tidak Ada</option>
                      </select></td>
                      <td><input type="number" name="jumlah[]" class="form-control name_list" readonly/></td>  
                      <td><input type="number" name="nom[]" class="form-control name_list" readonly/></td> 
                      <td><button type="button" name="remove" id="0" class="btn btn-danger btn_remove1">X</button></td>  
                    </tr>
                    <tr id="krow1">
                      <td><input type="text" name="kelengkapan[]" placeholder="jenis Kelengkapan" class="form-control name_list" value="Rekap SPJ (urut)" /></td>
                      <td><select name="kesediaan[]" class="form-control name_list">
                        <option value=""></option>
                        <option value="Ada">Ada</option>
                        <option value="Tidak Ada">Tidak Ada</option>
                      </select></td>
                      <td><input type="number" name="jumlah[]" class="form-control name_list" readonly/></td>
                      <td><input type="number" name="nom[]" class="form-control name_list" readonly/></td>
                      <td><button type="button" name="remove" id="1" class="btn btn-danger btn_remove1">X</button></td>
                    </tr>
                    <tr id="krow2">
                      <td><input type="text" name="kelengkapan[]" placeholder="jenis Kelengkapan" class="form-control name_list" value="Kwitansi di Rekap SPJ" /></td>
                      <td><select name="kesediaan[]" class="form-control name_list" readonly>
                      <option selected="selected" value=""></option>
                      </select></td>
                      <td><input type="number" name="jumlah[]" placeholder="masukkan jumlah" class="form-control name_list" /></td>
                      <td><input type="number" name="nom[]" class="form-control name_list" readonly/></td>
                      <td><button type="button" name="remove" id="2" class="btn btn-danger btn_remove1">X</button></td>
                    </tr>
                    <tr id="krow3">
                      <td><input type="text" name="kelengkapan[]" placeholder="jenis Kelengkapan" class="form-control name_list" value="Fisik kwitansi yang ada" /></td>
                      <td><select name="kesediaan[]" class="form-control name_list" readonly>
                      <option selected="selected" value=""></option>
                      </select></td>
                      <td><input type="number" name="jumlah[]" placeholder="masukkan jumlah" class="form-control name_list" /></td>
                      <td><input type="number" name="nom[]" class="form-control name_list" readonly/></td>
                      <td><button type="button" name="remove" id="3" class="btn btn-danger btn_remove1">X</button></td>
                    </tr>
                    <tr id="krow4">
                      <td><input type="text" name="kelengkapan[]" placeholder="jenis Kelengkapan" class="form-control name_list" value="Kwitansi Yang Ada Temuan" /></td>
                      <td><select name="kesediaan[]" class="form-control name_list" readonly>
                      <option selected="selected" value=""></option>
                      </select></td>
                      <td><input type="number" name="jumlah[]" placeholder="masukkan jumlah" class="form-control name_list" /></td>
                      <td><input type="number" name="nom[]" class="form-control name_list" readonly/></td>
                      <td><button type="button" name="remove" id="4" class="btn btn-danger btn_remove1">X</button></td>
                    </tr>
                    <tr id="krow5">
                      <td><input type="text" name="kelengkapan[]" placeholder="jenis Kelengkapan" class="form-control name_list" value="BA Serah Terima UMK" /></td>
                      <td><select name="kesediaan[]" class="form-control name_list">
                        <option value=""></option>
                        <option value="Ada">Ada</option>
                        <option value="Tidak Ada">Tidak Ada</option>
                      </select></td>
                      <td><input type="number" name="jumlah[]" class="form-control name_list" readonly/></td>
                      <td><input type="number" name="nom[]" placeholder="masukkan nominal" class="form-control name_list" /></td>
                      <td><button type="button" name="remove" id="5" class="btn btn-danger btn_remove1">X</button></td>
                    </tr>
                    <tr id="krow6">
                      <td><input type="text" name="kelengkapan[]" placeholder="jenis Kelengkapan" class="form-control name_list" value="BA Rekonsiliasi" /></td>
                      <td><select name="kesediaan[]" class="form-control name_list">
                        <option value=""></option>
                        <option value="Ada">Ada</option>
                        <option value="Tidak Ada">Tidak Ada</option>
                      </select></td>
                      <td><input type="number" name="jumlah[]" class="form-control name_list" readonly/></td>
                      <td><input type="number" name="nom[]" placeholder="masukkan nominal" class="form-control name_list" /></td>
                      <td><button type="button" name="remove" id="6" class="btn btn-danger btn_remove1">X</button></td>
                    </tr>
                    <tr id="krow7">
                      <td><input type="text" name="kelengkapan[]" placeholder="jenis Kelengkapan" class="form-control name_list" value="Transaksi Jurnal" /></td>
                      <td><select name="kesediaan[]" class="form-control name_list">
                        <option value=""></option>
                        <option value="Ada">Ada</option>
                        <option value="Tidak Ada">Tidak Ada</option>
                      </select></td>
                      <td><input type="number" name="jumlah[]" class="form-control name_list" readonly/></td>
                      <td><input type="number" name="nom[]" placeholder="masukkan nominal" class="form-control name_list" /></td>
                      <td><button type="button" name="remove" id="7" class="btn btn-danger btn_remove1">X</button></td>
                    </tr>
                    <tr id="krow8">
                      <td><input type="text" name="kelengkapan[]" placeholder="jenis Kelengkapan" class="form-control name_list" value="Bukti Setor Saldo" /></td>
                      <td><select name="kesediaan[]" class="form-control name_list">
                        <option value=""></option>
                        <option value="Ada">Ada</option>
                        <option value="Tidak Ada">Tidak Ada</option>
                      </select></td>
                      <td><input type="number" name="jumlah[]" class="form-control name_list" readonly/></td>
                      <td><input type="number" name="nom[]" placeholder="masukkan nominal" class="form-control name_list" /></td>
                      <td><button type="button" name="remove" id="8" class="btn btn-danger btn_remove1">X</button></td>
                    </tr>`;
var keterangan3 = `<tr id="krow0">
                      <td><input type="text" name="kelengkapan[]" placeholder="jenis Kelengkapan" class="form-control name_list" value="Rekap Per Mak"/></td>  
                      <td><select name="kesediaan[]" class="form-control name_list">
                        <option value=""></option>
                        <option value="Ada">Ada</option>
                        <option selected="selected" value="Tidak Ada">Tidak Ada</option>
                      </select></td>
                      <td><input type="number" name="jumlah[]" class="form-control name_list" readonly/></td>  
                      <td><input type="number" name="nom[]" class="form-control name_list" readonly/></td> 
                      <td><button type="button" name="remove" id="0" class="btn btn-danger btn_remove1">X</button></td>  
                    </tr>
                    <tr id="krow1">
                      <td><input type="text" name="kelengkapan[]" placeholder="jenis Kelengkapan" class="form-control name_list" value="Rekap SPJ (urut)" /></td>
                      <td><select name="kesediaan[]" class="form-control name_list">
                        <option value=""></option>
                        <option value="Ada">Ada</option>
                        <option selected="selected" value="Tidak Ada">Tidak Ada</option>
                      </select></td>
                      <td><input type="number" name="jumlah[]" class="form-control name_list" readonly/></td>
                      <td><input type="number" name="nom[]" class="form-control name_list" readonly/></td>
                      <td><button type="button" name="remove" id="1" class="btn btn-danger btn_remove1">X</button></td>
                    </tr>
                    <tr id="krow2">
                      <td><input type="text" name="kelengkapan[]" placeholder="jenis Kelengkapan" class="form-control name_list" value="Kwitansi di Rekap SPJ" /></td>
                      <td><select name="kesediaan[]" class="form-control name_list" readonly>
                      <option selected="selected" value=""></option>
                      </select></td>
                      <td><input type="text" name="jumlah[]" placeholder="masukkan jumlah" class="form-control name_list" value= "-"/></td>
                      <td><input type="number" name="nom[]" class="form-control name_list" readonly/></td>
                      <td><button type="button" name="remove" id="2" class="btn btn-danger btn_remove1">X</button></td>
                    </tr>
                    <tr id="krow3">
                      <td><input type="text" name="kelengkapan[]" placeholder="jenis Kelengkapan" class="form-control name_list" value="Fisik kwitansi yang ada" /></td>
                      <td><select name="kesediaan[]" class="form-control name_list" readonly>
                      <option selected="selected" value=""></option>
                      </select></td>
                      <td><input type="text" name="jumlah[]" value= "-" class="form-control name_list" /></td>
                      <td><input type="number" name="nom[]" class="form-control name_list" readonly/></td>
                      <td><button type="button" name="remove" id="3" class="btn btn-danger btn_remove1">X</button></td>
                    </tr>
                    <tr id="krow4">
                      <td><input type="text" name="kelengkapan[]" placeholder="jenis Kelengkapan" class="form-control name_list" value="Kwitansi Yang Ada Temuan" /></td>
                      <td><select name="kesediaan[]" class="form-control name_list" readonly>
                      <option selected="selected" value=""></option>
                      </select></td>
                      <td><input type="text" name="jumlah[]" value= "-" class="form-control name_list" /></td>
                      <td><input type="number" name="nom[]" class="form-control name_list" readonly/></td>
                      <td><button type="button" name="remove" id="4" class="btn btn-danger btn_remove1">X</button></td>
                    </tr>
                    <tr id="krow5">
                      <td><input type="text" name="kelengkapan[]" placeholder="jenis Kelengkapan" class="form-control name_list" value="BA Serah Terima UMK" /></td>
                      <td><select name="kesediaan[]" class="form-control name_list">
                        <option value=""></option>
                        <option value="Ada">Ada</option>
                        <option selected="selected" value="Tidak Ada">Tidak Ada</option>
                      </select></td>
                      <td><input type="number" name="jumlah[]" class="form-control name_list" readonly/></td>
                      <td><input type="text" name="nom[]" value= "-" class="form-control name_list" /></td>
                      <td><button type="button" name="remove" id="5" class="btn btn-danger btn_remove1">X</button></td>
                    </tr>
                    <tr id="krow6">
                      <td><input type="text" name="kelengkapan[]" placeholder="jenis Kelengkapan" class="form-control name_list" value="BA Rekonsiliasi" /></td>
                      <td><select name="kesediaan[]" class="form-control name_list">
                        <option value=""></option>
                        <option value="Ada">Ada</option>
                        <option selected="selected" value="Tidak Ada">Tidak Ada</option>
                      </select></td>
                      <td><input type="number" name="jumlah[]" class="form-control name_list" readonly/></td>
                      <td><input type="text" name="nom[]" value= "-" class="form-control name_list" /></td>
                      <td><button type="button" name="remove" id="6" class="btn btn-danger btn_remove1">X</button></td>
                    </tr>
                    <tr id="krow7">
                      <td><input type="text" name="kelengkapan[]" placeholder="jenis Kelengkapan" class="form-control name_list" value="Transaksi Jurnal" /></td>
                      <td><select name="kesediaan[]" class="form-control name_list">
                        <option value=""></option>
                        <option value="Ada">Ada</option>
                        <option selected="selected" value="Tidak Ada">Tidak Ada</option>
                      </select></td>
                      <td><input type="number" name="jumlah[]" class="form-control name_list" readonly/></td>
                      <td><input type="text" name="nom[]" value= "-" class="form-control name_list" /></td>
                      <td><button type="button" name="remove" id="7" class="btn btn-danger btn_remove1">X</button></td>
                    </tr>
                    <tr id="krow8">
                      <td><input type="text" name="kelengkapan[]" placeholder="jenis Kelengkapan" class="form-control name_list" value="Bukti Setor Saldo" /></td>
                      <td><select name="kesediaan[]" class="form-control name_list">
                        <option value=""></option>
                        <option value="Ada">Ada</option>
                        <option selected="selected" value="Tidak Ada">Tidak Ada</option>
                      </select></td>
                      <td><input type="number" name="jumlah[]" class="form-control name_list" readonly/></td>
                      <td><input type="text" name="nom[]" value= "-" class="form-control name_list" /></td>
                      <td><button type="button" name="remove" id="8" class="btn btn-danger btn_remove1">X</button></td>
                    </tr>`;
  

  var jenis_kda;
  var postURL;
  var auditor = $("#auditor1").val();
  $("#kda1").hide();
  $("#kda2").hide();
  $("#kda3").hide();
  $("#kda4").hide();
  $(document).ready(function(){
    $("#submitpilih").click(function(){
      //$(".auditor").val(auditor);
      $("#peringatan").empty();
      $("#temuanlama").empty();
      var listunit = `<select id="unit" class="unit2" name="unit"  style="width:170px">>
                      <option></option>
                      </select>`;
      $(".listunit").empty();
      $(".listunit").append(`${listunit}`);
      var jenis_dana = `<select id="jenis_dana" class=" form-control jenis_dana" name="jenis_dana"  style="width:170px">
                      @foreach($sumberdana as $data => $value)
                      <option value="{{$value->id}}">{{$value->jenis_dana}}</option>
                      @endforeach
                      </select>`;
      $(".jenis_dana").empty();
      $(".jenis_dana").append(`${jenis_dana}`);
      // document.getElementById('bulan_audit').valueAsDate = new Date();
      $(function () {
        //Initialize Select2 Elements
        $('.unit2').select2(
        {
          placeholder: "Pilih Unit",
          allowClear: true,
          ajax: {
            url: "https://api.its.ac.id:8243/audit/unit",
            //params: { headers: { "Authorization": "Bearer 13a5750b-a51c-3193-9904-6b943ff95ee8" } },
            headers: {"Authorization": "Bearer 13a5750b-a51c-3193-9904-6b943ff95ee8"},
            dataType: "json",
            type: "GET",
            data: function (params) {
              if (params.term == null)
              return {
                query: "",
              };
              else
              return {
                query: params.term,
              };

            },
            processResults: function (data) {
              //console.log(data);
                return {
                    results: $.map(data, function (item) {
                        return {
                            text: item.namasatker,
                            id: item.namasatker
                        }
                    })
                };
            }
          }
        })
      })
      var pilihan = $( "#pilihkda" ).val();
      if (pilihan == 1) {
        console.log(auditor);
        $('#add_kda1')[0].reset();
        $('#dynamic-added1').remove();
        $(".keterangan1").empty();
        $(".keterangan1").append(keterangan1);
        jenis_kda = 1 ;
        postURL = "<?php echo url('tambahkda1'); ?>";
        $('#jenis_kda').val(pilihan);
        $("#kda1").show();
        $("#kda2").hide();
        $("#kda3").hide();
        $("#kda4").hide();
      }
      else if (pilihan == 2)
      {
        //$('#add_kda2')[0].reset();
        $('#dynamic-added2').remove();
        $(".keterangan1").empty();
        $(".keterangan1").append(keterangan1);
        jenis_kda = 2 ;
        postURL = "<?php echo url('tambahkda2'); ?>";
        $('#jenis_kda2').val(pilihan);
        $("#kda2").show();
        $("#kda1").hide();
        $("#kda3").hide();
        $("#kda4").hide();
      }
      else if (pilihan == 3)
      {
        $('#add_kda3')[0].reset();
        $(".keterangan1").empty();
        $(".keterangan1").append(keterangan3);
        jenis_kda = 3 ;
        postURL = "<?php echo url('tambahkda3'); ?>";
        //$('#jenis_kda'+jenis_kda).val(pilihan);
        $("#kda3").show();
        $("#kda4").hide();
        $("#kda2").hide();
        $("#kda1").hide(); 
      }
      else
      {
        $('#add_kda4')[0].reset();
        jenis_kda = 4 ;
        postURL = "<?php echo url('tambahkda4'); ?>";
        $('#judulform'+jenis_kda+'').text('Form Kda tanpa pengajuan UMK');
        // $('#jenis_kda'+jenis_kda+'').val(pilihan);
        $("#kda4").show();
        $("#kda3").hide();
        $("#kda2").hide();
        $("#kda1").hide();
      }
      const monthNames = ["Januari", "Februari", "Maret", "April", "Mei", "Juni",
          "Juli", "Agustus", "September", "Oktober", "November", "Desember"
        ];
      var tanggal_sekarang = new Date();
      var tanggal_audit = new Date();
      tanggal_audit.setMonth(tanggal_audit.getMonth()-1);
      var bulan = monthNames[tanggal_audit.getMonth()];
      var tahun = tanggal_audit.getFullYear();
      var tanggal_sekarang_ganti = tanggal_sekarang;
      var tanggal_audit_ganti = tanggal_audit;
      var bulan_ganti = bulan;
      var tahun_ganti = tahun;
      $(".bulan_audit").change(function(){
        tanggal_sekarang_ganti = $(this).val();
        console.log(tanggal_sekarang_ganti);
        //alert(bla + tanggal_sekarang);
        tanggal_sekarang_ganti = new Date(tanggal_sekarang_ganti);
        var bulan_audit = document.getElementsByClassName("bulan_audit");
        for(var i = 0; i< bulan_audit.length ;i++){
          document.getElementsByClassName("bulan_audit")[i].valueAsDate = tanggal_sekarang_ganti;
        }
      });
      var bulan_audit = document.getElementsByClassName("bulan_audit");
      for(var i = 0; i< bulan_audit.length ;i++){
        document.getElementsByClassName("bulan_audit")[i].valueAsDate = tanggal_sekarang;
      }
      $(".masa_audit").change(function(){
        tanggal_audit_ganti = $(this).val();
        console.log(tanggal_audit_ganti);
        //alert(bla + tanggal_sekarang);
        tanggal_audit_ganti = new Date(tanggal_audit_ganti);
        bulan_ganti = monthNames[tanggal_audit_ganti.getMonth()];
        tahun_ganti = tanggal_audit_ganti.getFullYear();
        var masa_audit = document.getElementsByClassName("masa_audit");
        for(var i = 0; i< masa_audit.length ;i++){
          document.getElementsByClassName("masa_audit")[i].valueAsDate = tanggal_audit_ganti;
          $('#kondisi1').val("SPJ bulan "+bulan_ganti+" tahun "+tahun_ganti+" belum diserahkan.");
        }
        var jumlahbulan = document.getElementsByClassName("bulan");
        for(var i = 0; i< jumlahbulan.length ;i++){
          document.getElementsByClassName("bulan")[i].value = bulan_ganti;
        }
        var jumlahtahun = document.getElementsByClassName("tahun");
        for(var i = 0; i< jumlahtahun.length ;i++){
          document.getElementsByClassName("tahun")[i].value = tahun_ganti;
        }

      });
      var masa_audit = document.getElementsByClassName("masa_audit");
      for(var i = 0; i< masa_audit.length ;i++){
        document.getElementsByClassName("masa_audit")[i].valueAsDate = tanggal_audit;
        $('#kondisi1').val("SPJ bulan "+bulan+" tahun "+tahun+" belum diserahkan.");
      }
      var jumlahbulan = document.getElementsByClassName("bulan");
      for(var i = 0; i< jumlahbulan.length ;i++){
        document.getElementsByClassName("bulan")[i].value = bulan;
      }
      var jumlahtahun = document.getElementsByClassName("tahun");
      for(var i = 0; i< jumlahtahun.length ;i++){
        document.getElementsByClassName("tahun")[i].value = tahun;
      }
      var jumlahauditor = document.getElementsByClassName("auditor");
      for(var i = 0; i< jumlahauditor.length ;i++){
        document.getElementsByClassName("auditor")[i].value = auditor;
      }
      

      $('.unit2').on('select2:select', function (e) {
        var isiunit = document.getElementsByClassName("unit");
        for(var i = 0; i< isiunit.length;i++){
          var unittemuan = e.params.data.text;
          document.getElementsByClassName("unit")[i].value = e.params.data.text;
          $('#kondisi').val("Unit Kerja : "+e.params.data.text+" pada bulan "+bulan_ganti+" tahun "+tahun_ganti+ " tidak mencairkan UMK.");
        }
        if (pilihan == 2)
        {
          $("#temuanlama").empty();
            $.ajax({
            url: '/temuan/temuanlama',
            type: 'POST',
            data: {
              '_token': "{{ csrf_token() }}",
              'unit' : e.params.data.id,
              'bulan' : tanggal_audit_ganti.getMonth()+1,
              'tahun' : tanggal_audit_ganti.getFullYear()
            },
            error: function() {
              console.log('Error');
            },
            dataType: 'json',
            success: function(data1) {

              console.log(data1);
              var jumlah = data1.length;
              // console.log(jumlah);
              var katatampung = ``;
              var katatemuan = ``;
              var temuansemua = ``;
              if (jumlah > 0){
              for (var jbulan = 0; jbulan < 12; jbulan++) {
                var flag =0;
                temuansemua = `<table class="table table-bordered table-striped" style="width:100%">
                      <thead>
                        <th align='center' width=30%>No. Kwitansi</th>
                        <th align='center' width=20%>Nominal (Rp)</th>
                        <th align='center' width=45%>Uraian Temuan</th>
                      </thead>
                      <tbody>`;
                for (var i = 0; i < jumlah; i++)
                {
                  var nbulan = data1[i]['masa_audit'];
                  nbulanasli = new Date (nbulan);
                  console.log("masa audit");
                  console.log(nbulan);
                  nbulan = nbulanasli.getMonth();
                  ntahun = nbulanasli.getFullYear();
                  console.log("bulan");
                  console.log(nbulan);

                  if (nbulan == jbulan) {
                    flag =1;
                    nbulan = monthNames[nbulan];
                    katatemuan = `<li style="text-align: justify;">&nbsp; &nbsp; Hasil audit dokumen SPJ diketahui bahwa pengelolaan administrasi keuangan bulan ${nbulan} tahun ${ntahun} yang dilaksanakan BPP di Unit Kerja :  ${unittemuan} yang belum ditindaklanjuti temuan, yaitu:</li><p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 1.&nbsp;  Ketidakpatuhan terhadap aturan yang berlaku:</p><div></div>`;
                    var kwitansi = data1[i]['kwitansi'];
                    var nominal = data1[i]['nominal'];
                    var keterangan = data1[i]['keterangan'];
                    var id = data1[i]['id'];
                    var detailtemuan = 
                  `<tr><td class="tengah">${kwitansi}</td><td class="kanan">${nominal}</td><td class="tengah">${keterangan}</td></tr>`;
                   temuansemua = temuansemua.concat(detailtemuan);
                    }
                }
                if (flag == 1) {
                  detailtemuan = `</tbody>
                  </table>`;
                  temuansemua = temuansemua.concat(detailtemuan);
                  katatampung = katatampung.concat(katatemuan);
                  katatampung = katatampung.concat(temuansemua);
                  // console.log(temuansemua);
                  // katatemuan = katatemuan.concat(temuansemua);  
                }
                  
              }
              console.log(katatampung);
              $("#temuanlama").append(katatampung);
              }

              
              var jumlahtahun = document.getElementsByClassName("tahun");
              for(var i = 0; i< jumlahtahun.length ;i++){
                document.getElementsByClassName("tahun")[i].value = tanggal_audit.getFullYear();
              }
              var isiunit = document.getElementsByClassName("unit");
              for(var i = 0; i< isiunit.length;i++){
                document.getElementsByClassName("unit")[i].value = e.params.data.text;
              }
            }
          })
        }
        //console.log(e.params.data);
      });
      
    });
    // $.ajaxSetup({
    //   headers: {
    //     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    //   }
    // });

     $('.submitkda').click(function(){  
      $("#peringatan").empty();
      $.ajax({  
      url:postURL,  
      method:"POST",
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      },
      data:$('#add_kda'+jenis_kda).serialize(),
      type:'json',
      success:function(data)  
      {
        if(data.error){
          printErrorMsg(data.error);
          //window.location.hash = '#print-error-msg';
          document.getElementById('balik-eror').scrollIntoView();
        }else{
          $('#kda'+jenis_kda+'').hide();
          $('#add_kda'+jenis_kda+'')[0].reset();
          $("#peringatan").append(`<div class="alert alert-success print-success-msg" style="display:none">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <h4><i class="icon fa fa-check"></i> Sukses!</h4>
              <ul></ul>
            </div>`)
          $(".print-success-msg").find("ul").html('');
          $(".print-success-msg").css('display','block');
          $(".print-error-msg").css('display','none');
          $(".print-success-msg").find("ul").append('<li>Berhasil Membuat KDA</li>');
        }
      }  
    });
     
   });  
    function printErrorMsg (msg) {
     $("#peringatan").append(`<div class="alert alert-danger print-error-msg" id="print-error-msg" style="display:none">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h4><i class="icon fa fa-ban"></i> Peringatan!</h4>
        <ul></ul>
      </div>`)
     $(".print-error-msg").find("ul").html('');
     $(".print-error-msg").css('display','block');
     $(".print-success-msg").css('display','none');
     $.each( msg, function( key, value ) {
      $(".print-error-msg").find("ul").append('<li>'+value+'</li>');
    });
   } 
  }); 
</script>

<script type="text/javascript">
  //document.getElementById('tanggal1').valueAsDate = new Date();
  $(document).ready(function(){      
    var i=9; 

    $('.add1').click(function(){  
     i++;  
     $('.keterangan1').append('<tr id="krow'+i+'" class="dynamic-added1"><td><input type="text" name="kelengkapan[]" placeholder="jenis Kelengkapan" class="form-control name_list" /></td><td><select name="kesediaan[]" class="form-control name_list"><option value=""></option><option value="Ada">Ada</option><option value="Tidak Ada">Tidak</option></select></td> <td><input type="number" name="jumlah[]" placeholder="masukkan jumlah" class="form-control name_list" /></td><td><input type="number" name="nom[]" placeholder="masukkan nominal" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove1">X</button></td></tr>');  
   });  


    $(document).on('click', '.btn_remove1', function(){  
     var button_id = $(this).attr("id");   
     $('#krow'+button_id+'').remove();  
   });
     
  });   
</script>

<script type="text/javascript">
  $(document).ready(function(){      
    var i=1;  

    $('#add').click(function(){  
     i++;  
     $('#dynamic_field').append('<tr id="row'+i+'" class="dynamic-added"><td><input type="text" name="kwitansi[]" placeholder="nomor kwitansi" class="form-control name_list" /></td><td><input type="number" name="nominal[]" placeholder="masukkan nominal" class="form-control name_list" /></td><td><input type="text" name="keterangan[]" placeholder="masukkan keterangan" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');  
   });  


    $(document).on('click', '.btn_remove', function(){  
     var button_id = $(this).attr("id");   
     $('#row'+button_id+'').remove();  
   });  

    $(document).on("click", ".open-AddBookDialog", function () {
     var id = $(this).data('id');
    $(".modal-body #fberkas").attr("action");
    $(".modal-body #fberkas").attr("action", '/berkas/delete/'+id);
  });
 });  
</script>

{{-- <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.css" rel="stylesheet">
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script> 
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script>  --}}

<!-- include summernote css/js -->
<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote.css" rel="stylesheet">
<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote.js"></script> 


@endsection