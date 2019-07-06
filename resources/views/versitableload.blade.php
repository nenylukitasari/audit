 <thead>
  <tr>
    <th class="col-sm-1">No.</th>
    <th class="col-sm-5">Version</th>
    <th class="col-sm-1">Status</th>
    <th class="col-sm-1">Created at</th>
    <th class="col-sm-1">Updated at</th>
    <th class="col-sm-1">Aktif</th>
    <th class="col-sm-1">Aksi</th>
  </tr>
  </thead>
 <tbody>
      @foreach ($versions as $key => $version) 
          <tr>
            <td>
              {{$key+1}}. 
            </td>
          <td>{{ $version->version}}</td>
          @if ($version->status == 0)
            <td>Aktif</td>
          @else
            <td>Tidak Aktif</td>
          @endif
          <td>{{ $version->created_at}}</td>
          <td>{{ $version->created_at}}</td>
          <td>
          <form action="{{ url('pilihversi')}}" method="POST">
          {{ csrf_field() }}
            <input type="hidden" name="versi_id" value="{{$version->id}}">
            <input type="submit" name="submit" id="submit" class="btn btn-sm btn-primary btn-rounded btn-sm" value="Pilih" /> 
          </form> 
          </td>
          <td>
            <button type="button" class="btn btn-info btn-outline btn-circle btn-xs" data-toggle="modal" data-target="#edit-modal" onclick="submitUpdate({{ $version->id }})"><i class="ti-pencil" data-toggle="tooltip" title="Edit Data"></i></button>
          </td>
      @endforeach
  </tbody>