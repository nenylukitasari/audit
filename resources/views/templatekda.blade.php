@extends('master')

@section('title-bar')
    Template KDA
@endsection

@section('right_title')
    <li class="active">Template KDA</li>
@endsection

@section('add-css')

 @endsection
@section('content')
<br/>
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
              <h3 class="box-title">Template KDA</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
             <h5>Template Print</h5>
              <ul>
              @foreach($summernote as $data => $print)
              @if ($print->id < 5)
                <li>{{ $print->tipe }}
                <button class="btn btn-xs btn-warning" onclick="summernoteupdate('{{$print->id}}')">Edit</button>
              </li>
              @endif
              @endforeach
            </ul>
            <h5>Template Website</h5>
              <ul>
              @foreach($summernote as $data => $web)
              @if ($web->id > 4)
                <li>{{ $web->tipe }}
                <button class="btn btn-xs btn-warning" onclick="summernoteupdate('{{$web->id}}')">Edit</button>
              </li>
              @endif
              @endforeach
            </ul>
            
            <h4>List Template</h4>
              <form class="form-horizontal" method="POST"
                      enctype="multipart/form-data" id="fsummernote">
                    {{ method_field('PUT') }}
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label class="col-sm-1 control-label">Tipe</label>
                        <div class="col-sm-12">
                            <input type="text" id="tipe" name="tipe" class="form-control" placeholder="Tipe" readonly>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-1 control-label">Konten</label>
                        <div class="col-sm-12">
                          <textarea id="konten" class="form-control" name="konten" rows="30" cols="50"></textarea>
                            {{-- <textarea id="konten" name="konten" class="form-control summernote"
                                      placeholder="Konten"></textarea> --}}
                        </div>
                    </div>
                    <div class="box-footer text-right">
                        <button type="submit" class="btn btn-danger">Simpan</button>
                    </div>
                </form>
          </div>
    </div>
  </div>
</div>
@endsection

@section('add-script')
<script type="text/javascript">
  $(document).ready(function() {

          summernoteupdate = function(id){
          $.ajax({
            url: '/summernote/template',
            type: 'GET',
            data: {
              'id' : id
            },
            error: function() {
              console.log('Error');
            },
            dataType: 'json',
            success: function(data) {
              var id = data.id;
              console.log(data);
              $('#tipe').val(data.tipe);
              //$('#id').val(data.content);
              var konten = document.getElementById("konten");
              CKEDITOR.replace(konten,{language:'en-gb'});
              CKEDITOR.config.allowedContent = true;
              CKEDITOR.config.height = 500;

              CKEDITOR.instances['konten'].setData(data.content)
              //$('.summernote').summernote('code', data.content);
              $("#fsummernote").attr("action"); //Will retrieve it
              $("#fsummernote").attr("action", '/summernote/update/'+id); //Will set it
              //$("#summernote'").summernote("code", response[0].UnitsDescription);

            }
          });
        }

  });

</script>
<!-- include summernote css/js -->
<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote.css" rel="stylesheet">
<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote.js"></script> 
<script src="{{asset('ckeditor/ckeditor.js')}}"></script>


@endsection