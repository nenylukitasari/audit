@extends('master')

@section('title')
    Data pegawai
@endsection
@section('right_title')
  <li class="active">Data pegawai</li>
@endsection
@section('content')
<br/>
<h3 class="box-title m-b-0">CARI DATA PEGAWAI</h3>
  <table border="0" style="width: 67%; margin: 0 auto 2em auto;">
        <thead>
            <tr>
                <th class="col-sm-1">Target</th>
                <th class="col-sm-9">Nama</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Pegawai</td>
                   <div class="form-group" id="form-kegiatan">
                    <form action="#" method="POST"> 
                      {{csrf_field()}} 
                    <td>                           
                      <input type="text" name="versi" placeholder="Nama Pegawai" class="form-control" required />
                    </td>
                    <td>
                      &ensp;
                      <input type="submit" name="submit" id="submit" class="btn btn-primary btn-md btn-rounded" value="Search" /> 
                    </td>
                  </form>
                </div>
            </tr>
        </tbody>
    </table>
  <br/><br/>
</div>
@endsection
