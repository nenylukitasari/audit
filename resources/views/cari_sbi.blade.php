@extends('master')

@section('title')
    Data Standar Biaya Institut
@endsection
@section('right_title')
  <li class="active">Data Standar Biaya Institut</li>
@endsection
@section('content')
<br/>
<h3 class="box-title m-b-0">CARI DATA STANDAR BIAYA INSTITUT</h3>
  <table border="0" style="width: 67%; margin: 0 auto 2em auto;">
        <thead>
            <tr>
                <th class="col-sm-1">Target</th>
                <th class="col-sm-9">Kata Kunci</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="col-sm-1">SBI</td>
                   <div class="form-group">
                    <form action="{{ url('data/search') }}" method="POST">
                      @csrf
                      <input type="text" name="query" />
                      <input type="submit" class="btn btn-sm btn-primary" value="Search" />
                  </form>

{{-- 
                    <form action="{{url('/data/search')}}" method="POST">
                      {{csrf_field()}} 
                    <td>                           
                      <input type="text" name="keywordsbi" id="keywordsbi" placeholder="Masukkan kata kunci" class="form-control" required />
                    </td>
                    <td>
                      &ensp;
                      <input type="submit" name="submit" id="submit" class="btn btn-primary btn-md btn-rounded" value="Search" /> 
                    </td>
                  </form> --}}
                </div>
            </tr>
        </tbody>
    </table>
{{-- 
  <div class="table-responsive">
  <table id="example1" class="table table-striped">
    <thead>
      <tr>
        <th class="col-sm-1">No.</th>
        <th class="col-sm-10">Uraian Kegiatan</th>
        <th class="col-sm-1"></th>
      </tr>
    </thead>
   <tbody>
      @foreach ($search as $key => $search)
        <tr>
          <td>
              {{$key+1}}. 
          </td>
          <th>
            {{ $search}}
          </th>
          </tr>
    @endforeach
  </tbody>
  </table>
</div> --}}
@endsection
