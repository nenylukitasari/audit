@extends('master')

@section('title')
    Data Standar Biaya Institut
@endsection
@section('right_title')
  <li class="active">Data Standar Biaya Institut</li>
@endsection
@section('content')
<br/>
<div class="card">
    <div class="card-header"><b>{{ $searchResults->count() }} results found for "{{ request('query') }}"</b></div>

    <div class="card-body">

        @foreach($searchResults->groupByType() as $type => $modelSearchResults)
            <h2>{{ ucfirst($type) }}</h2>

            @foreach($modelSearchResults as $searchResult)
                <ul>
                    <li><a href="#">{{ $searchResult->title }}</a></li>
                </ul>
            @endforeach
        @endforeach

    </div>
</div>

@endsection
