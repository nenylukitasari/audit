@extends('master')

@section('title-bar')
    Penjelasan
@endsection

@section('right_title')
    <li class="active">Penjelasan</li>
@endsection

@section('add-css')

 @endsection
@section('content')
<br/>
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
              <h3 class="box-title"></h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">  
            <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Penjelasan</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $i=1;?>
                    @foreach($jelas as $key => $data)
                    <tr>
                      <td>{{$i++}}</td>
                      <td>{{$data->penjelasan}}</td>
                    </tr>
                    @endforeach
                  </tbody>
                  <tfoot>
                    <tr>
                      <th>No</th>
                      <th>Penjelasan</th>
                    </tr>
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
<script type="text/javascript">
  $('#example1').dataTable();
</script>


@endsection