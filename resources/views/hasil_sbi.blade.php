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
  {{--   <div class="card-header"><b>{{ $searchResults->count() }} results found for "{{ $query }}"</b></div>
    <div class="card-body">
        @foreach($searchResults->groupByType() as $type => $modelSearchResults)
            <h2>{{ ucfirst($type) }}</h2>
            @foreach($modelSearchResults as $searchResult)
                <ul>
                    <li><a href="{{ $searchResult->url }}">{{ $searchResult->title }}</a></li>
                </ul>
            @endforeach
        @endforeach
    </div> --}}
    
    
    <div class="card-header"><b>Hasil pencarian dengan kata kunci "{{ $key }}"</b></div>

    <div class="card-body">
{{-- 
      @foreach($search as $res) 
            @foreach($res->jenis_kegiatan as $jk) 
               <li>Jenis Kegiatan:  {{$jk->jenis_kegiatan}}</li>

               @foreach($jk->kegiatan as $kegiatan) 
                    <li> -------------- Kegiatan: {{$kegiatan->nama_kegiatan}} . </li>
               @foreach($kegiatan->kategori as $kategori) 
                    <li> -------------- Kategori: {{$kategori->kategori_kegiatan}} . </li>

               @endforeach
               @endforeach
          
          @endforeach
          @endforeach --}}

        @foreach($search as $search)
            <ul>
                <li><a href="#">{{ $search }}</a></li>
            </ul>
        @endforeach

    </div> 
</div>

@endsection