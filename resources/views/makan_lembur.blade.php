@extends('master')

@section('title-bar')
    Satuan Biaya Uang Makan, Lembur, dan Konsumsi Rapat
@endsection

@section('right_title')
    SATUAN BIAYA UANG MAKAN, LEMBUR, DAN KONSUMSI RAPAT
@endsection

@section('add-css')
<!-- DataTables -->
   <link rel="stylesheet" href="{{url('assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">
   <!-- Form -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
  <!-- CSFR token for ajax call -->
    <meta name="_token" content="{{ csrf_token() }}"/>
      <!-- toastr notifications -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
@endsection
@section('content')
<br/>
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">SATUAN BIAYA UANG MAKAN, LEMBUR, DAN KONSUMSI RAPAT</h3>
              <button type="button" class="btn btn-default pull-right" data-toggle="modal" data-target="#addModal"><i class="fa fa-plus"></i>&nbsp;&nbsp;&nbsp;Tambah
          </button>
            </div>

 {{-- <div class="modal fade" id="modal-default"> --}}
        <div id="addModal" class="modal fade">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Tambah Satuan Biaya Uang Makan, Lembur, dan Konsumsi Rapat</h4>
              </div>
              <div class="modal-body">
                 <select class="itemName form-control" style="width:500px;" name="itemName">
                 </select>
                 <br/><br/>

                  <form class="form-horizontal" role="form">
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="title">Uraian Kegiatan:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="title_add" autofocus>
                                <small>Min: 1</small>
                                <p class="errorTitle text-center alert alert-danger hidden"></p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="satuan">Satuan:</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" id="satuan_add"></textarea>
                                <small>Min: 1, only text</small>
                                <p class="errorSatuan text-center alert alert-danger hidden"></p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="bruto">Bruto:</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" id="bruto_add"></textarea>
                                <small>Min: 1, only number</small>
                                <p class="errorBruto text-center alert alert-danger hidden"></p>
                            </div>
                        </div>
                    </form>
                 {{-- 
                 <select name="kategori" id="kategori" class="form-control dynamic" data-dependent="sub-kategori">
                 <option value="">Pilih Kategori</option>
                 @foreach($kategori_makans as $kategori_makan)
                 <option value="{{ $kategori_makan->id}}">{{ $kategori_makan->kategori_makan }}</option>
                 @endforeach
                  </select>
                 <br/>
               {{ csrf_field() }} --}}
               
            </div>

              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                {{-- <input type="button" class="btn btn-primary" name="submit" id="submit" class="btn btn-info" value="Tambah" /> --}}  
                <button type="button" class="btn btn-success add" data-dismiss="modal">
                          <span id="" class='glyphicon glyphicon-check'></span> Tambah
                      </button>
                {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->

            <!-- /.box-header -->
            <div class="box-body">
              <table id="postTable" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Uraian Kegiatan</th>
                  <th>Satuan</th>
                  <th>Besaran Bruto Maksimum (Rp)</th>
                </tr>
                </thead>
               <tbody>
                  @foreach ($kategori_makans as $kategori_makan)
                    <tr class="item">
                      <th>
                        {{ $kategori_makan->kategori_makan}}
                      </th>
                    </tr>
                    <tr>
                    @foreach ($kategori_makan->makan_lembur as $makan)
                      <td>
                          {{ $makan->uraian_kegiatan}}
                      </td>
                      
                      <td>
                          {{ $makan->satuan}}
                      </td>
                      @if($makan->bruto == null)
                      <td>
                      </td>
                      @else
                      <td>
                      {{number_format($makan->bruto)}}</td>
                      @endif 
                    </tr>
                      @foreach ($makan->biaya_konsumsi as $biaya)
                        <td>
                          {{ $biaya->uraian_kegiatan}}
                        </td>
                        
                        <td>
                            {{ $biaya->satuan}}
                        </td>
                        @if($biaya->bruto == null)
                        <td>
                        </td>
                        @else
                        <td>
                          {{number_format($biaya->bruto)}}</td>
                        @endif 
                        <tr>
                      @endforeach
                    @endforeach
                  @endforeach 
                </tfoot>
              </table>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
      </div>
@endsection

@section('add-script')
<!-- DataTables -->
<script src="{{url('assets/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{url('assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>

<!-- FastClick -->
<script src="{{url('assets/bower_components/fastclick/lib/fastclick.js')}}"></script>

<!-- page script -->
<script>
  $(function () {
    $('#example1').DataTable()
    $('#postTable').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>

<!-- form -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>


    <!-- Bootstrap JavaScript -->
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.0.1/js/bootstrap.min.js"></script>

    <!-- toastr notifications -->
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

    <!-- Delay table load until everything else is loaded -->
    <script>
        $(window).load(function(){
            $('#postTable').removeAttr('style');
        })
    </script>

<script type="text/javascript">
      $('.itemName').select2({
        placeholder: 'Pilih Kategori',
        ajax: {
          url: '/makan_lembur_rapat_fetch',
          dataType: 'json',
          // delay: 250,
          processResults: function (data) {
            return {
              results:  $.map(data, function (item) {
                    return {
                        text: item.kategori_makan,
                        id: item.id
                    }
                })
            };
          },
          cache: true
        }
      });
</script>

<!-- AJAX CRUD operations -->
    <script type="text/javascript">
        // add a new post
        $('.modal-footer').on('click', '.add', function() {
            $.ajax({
                type: 'POST',
                url: 'posts',
                data: {
                    '_token': $('input[name=_token]').val(),
                    'title': $('#title_add').val(),
                    'satuan': $('#satuan_add').val(),
                    'bruto': $('#bruto_add').val()
                },
                success: function(data) {
                    $('.errorTitle').addClass('hidden');
                    $('.errorSatuan').addClass('hidden');
                    $('.errorBruto').addClass('hidden');

                    if ((data.errors)) {
                        setTimeout(function () {
                            $('#addModal').modal('show');
                            toastr.error('Validation error!', 'Error Alert', {timeOut: 5000});
                        }, 500);

                        if (data.errors.title) {
                            $('.errorTitle').removeClass('hidden');
                            $('.errorTitle').text(data.errors.title);
                        }
                        if (data.errors.satuan) {
                            $('.errorSatuan').removeClass('hidden');
                            $('.errorSatuan').text(data.errors.satuan);
                        }
                        if (data.errors.bruto) {
                            $('.errorBruto').removeClass('hidden');
                            $('.errorBruto').text(data.errors.bruto);
                        }
                    } else {
                        toastr.success('Data berhasil ditambahkan', 'Success Alert', {timeOut: 5000});
                        /*$('#postTable').prepend("<tr class='item" + data.id + "'><td class='col1'>" + data.id + "</td><td>" + data.title + "</td><td>" + data.content + "</td></tr>");
                        
                        $('.col1').each(function (index) {
                            $(this).html(index+1);
                        });*/
                    }
                },
            });
        });



@endsection