@extends('master')

@section('title')
    Data Standar Biaya Institut
@endsection
@section('right_title')
  <li class="active">Data Standar Biaya Institut</li>
@endsection
@section('content')
<br/>
<button type="button" class="btn btn-default waves-effect waves-light"><span class="btn-label"><i class="fa fa-search"></i></span><a href= "{{url ('/datasbi') }}">Cari Data SBI</a></button>
<br/><br/><br/>
<div class="card">
    @if ($count==0)
      <div class="card-header"><b>Hasil pencarian dengan kata kunci "{{ $key }}" tidak ditemukan.</b></div>  
    @else
    <div class="table-responsive">
    <table id="example1" class="table table-striped">
      <thead>
        <tr>
          <td><b>Ditemukan &nbsp;{{$count}}&nbsp; hasil pencarian dengan kata kunci &nbsp;"{{ $key }}"</b></td>
        </tr>
      </thead>
      <tbody>
       @foreach($search as $search)
        <tr>
          @if ($search->nama_kegiatan != null)
            <td><a href="{{ url('/data/'.$search->kode_tabel . '/' .$search->kode_bagian ) }}">{{ $search->nama_kegiatan }}</a></td>
          @elseif ($search->kategori_kegiatan != null )
            @if ($search->kode_bagian==1)
              <td><a href="{{ url('/data/2/1') }}">{{ $search->kategori_kegiatan }}</a></td>
            @elseif ($search->kode_bagian==9)
              <td><a href="{{ url('/data/2/3') }}">{{ $search->kategori_kegiatan }}</a></td>
            @elseif ($search->kode_bagian==18)
              <td><a href="{{ url('/data/2/5') }}">{{ $search->kategori_kegiatan }}</a></td>
            @elseif ($search->kode_bagian==19)
              <td><a href="{{ url('/data/2/6') }}">{{ $search->kategori_kegiatan }}</a></td>
            @elseif ($search->kode_bagian==20)
              <td><a href="{{ url('/data/2/7') }}">{{ $search->kategori_kegiatan }}</a></td>
            @elseif ($search->kode_bagian==21)
              <td><a href="{{ url('/data/2/8') }}">{{ $search->kategori_kegiatan }}</a></td>
            @else
              <td><a href="{{ url('/data/'.$search->kode_tabel . '/' .$search->kode_bagian ) }}">{{ $search->kategori_kegiatan }}</a></td>
            @endif
          @elseif ($search->jenis_kegiatan != null)
            <td><a href="{{ url('dokumen') }}">{{ $search->jenis_kegiatan }}</a></td>
          @endif
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>

    {{-- <div class="card-header"><b>Ditemukan &nbsp;{{$count}}&nbsp; hasil pencarian dengan kata kunci &nbsp;"{{ $key }}"</b></div>

    <div class="card-body">
        </br>
        @foreach($search as $search)
            <ul>
              @if ($search->nama_kegiatan != null)
                <li><a href="{{ url('/data/'.$search->kode_tabel . '/' .$search->kode_bagian ) }}">{{ $search->nama_kegiatan }}</a></li>
              @elseif ($search->kategori_kegiatan != null)
                <li><a href="{{ url('/data/'.$search->kode_tabel . '/' .$search->kode_bagian ) }}">{{ $search->kategori_kegiatan }}</a></li>
              @elseif ($search->jenis_kegiatan != null)
                <li><a href="{{ url('dokumen') }}">{{ $search->jenis_kegiatan }}</a></li>
              @endif
            </ul>
        @endforeach
    </div>  --}}
    @endif
</div>

@endsection
@section('add-script')
<!-- page script -->
<script>
  $(document).ready(function() {
    $('#example1').DataTable({
        'ordering'    :false
    });
  });
</script>
@endsection