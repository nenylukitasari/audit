@extends('master')

@section('title-bar')
    Lampiran I
@endsection

@section('right_title')
  Batas Tertinggi
@endsection
@section('content')
<br/>
<div class="col-md-15">
          <div class="box box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">Standar Biaya Institut sebagai Batas Tertinggi</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
			<ol>
			   @foreach ($lampiranI as $x)
								<li>{{ $x->nama_kegiatan }}</li>
							@endforeach
			           </ol>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
@endsection



