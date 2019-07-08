@extends('master')

@section('title')
    Laporan KDA
@endsection

@section('right_title')
    <li class="active">Laporan KDA</li>
@endsection
@section('content')
<br/>
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          @if (session('message_error'))
    <div class="alert alert-danger">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
      <strong><h4><i class="icon fa fa-close"></i> Error!</strong></h4>
        {{ session('message_error') }}
    </div>
  @endif
          <div class="box-header">
              <h3 class="box-title">Laporan KDA</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <?php
            $awal = 2019;
            $no = 1;
            $i =1;
            $konstanta = 1;
            ?>
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Laporan</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                  @while ($awal <= $tahun)
                <tr>
                  <?php

                  echo "
                  <td>$no</td>
                  <td>Triwulan $i $tahun </td>"; ?>
                  <td><a href="{{ route('downloadtriwulan', ['tahun' => $awal, 'sesi' => $i]) }}"><button class="btn btn-xs btn-primary">download</button> </a></td>
                  <?php 
                  $no++;
                  $i++;
                  if ($awal == $tahun)
                  {
                    if ($konstanta+3 >= $bulan)
                      break;
                    else
                      $konstanta = $konstanta +2;

                  }
                  if ($i > 4)
                  {
                    $i = 1;
                    $awal ++;
                  }
                  ?>
                </tr>
                @endwhile
                </tfoot>
              </table>
          </div>
    </div>
  </div>
</div>
  
@endsection

@section('add-script')
<script>
  $(function () {
    $('#example1').DataTable(
    {
       "columns": [
          { "width": "10%" },
          { "width": "50%" },
          { "width": "40%" }
        ]
    })
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>


@endsection