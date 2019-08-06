@extends('master')

@section('title')
    Laporan KDA Per Bulan
@endsection

@section('right_title')
    <li class="active">Laporan KDA Per Bulan</li>
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
                  @for ($tahun; $tahun >= $awal; $tahun--)
                  @foreach ($namabulan as $key => $value)
                  @if ($key <= $bulan or $i > 1)
                <tr>
                  <?php
                  
                  
                    echo "
                    <td>$no</td>
                    <td>Bulan $value $tahun </td>"; ?>
                    <td><a href="{{ route('downloadperbulan', ['tahun' => $tahun, 'bulan' => $key]) }}"><button class="btn btn-xs btn-primary">download</button> </a></td>  
                  
                  <?php
                  $no++;
                  ?>
                </tr>
                @endif
                 
                @endforeach
                <?php
                  $i++;
                  ?>
                @endfor
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