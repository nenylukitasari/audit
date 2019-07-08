@extends('master')

@section('title')
    Template KDA
@endsection

@section('right_title')
    <li class="active">Template KDA</li>
@endsection
@section('content')
<br/>
<style type="text/css">
  div .list{
    padding-left: 20px;
  }

table {
  border-collapse: collapse;
}
div .row{
margin-bottom: 0px !important;
}
.row-bottom-margin { 
  margin-bottom: 0px !important; 
  margin-top: 0px !important; 
}

table, th, td {
  border: 1px solid black;
}
th
{
  text-align: center;
}

div .biodata {
  padding-left: 160px;
}
div .tab1 {
  text-align: justify;
  padding-left: 35px;
}
div .tab2 {
  text-align: justify;
  padding-left: 15px;
}
div .menu {
  padding-left: 15px;
}
div .deskripsi {
  padding-left: 211px;
}
div .penutup {
  padding-left: 400px;
}
div .temuan {
  padding-left: 15px;
}
</style>
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          @if (session('message_success'))
      <div class="alert alert-success">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
          <strong><h4><i class="icon fa fa-check"></i> Sukses!</strong></h4>
          {{ session('message_success') }}
      </div>
  @elseif (session('message_error'))
    <div class="alert alert-danger">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
      <strong><h4><i class="icon fa fa-close"></i> Error!</strong></h4>
        {{ session('message_error') }}
    </div>
  @endif
          <div class="box-header">
              <h3 class="box-title">Template KDA</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
             <h5>Template Print</h5>
            <div class="row">
              <ul>
              @foreach($summernote as $data => $print)
              @if ($print->id < 5)
              <div class="form-group list">
              <li><label class="col-sm-3 control-label">{{ $print->tipe }}</label>
              <button class="btn btn-xs btn-warning" onclick="summernoteupdate('{{$print->id}}')">Edit</button></li>
              </div>
              @endif
              @endforeach
              <ul>
            </div>
            <h5>Template Website</h5>
            <div class="row">
              <ul>
              @foreach($summernote as $data => $web)
              @if ($web->id > 4)
                <div class="form-group list">
                <li><label class="col-sm-3 control-label">{{ $web->tipe }}</label>
                <button class="btn btn-xs btn-warning" onclick="summernoteupdate('{{$web->id}}')">Edit</button></li>
                </div>
              @endif
              @endforeach
              </ul>
            </div>
            <br>
            <h4>Edit Template</h4>
            <ul>
              <li>Edit hanya bagian-bagian tanpa simbol khusus (Abaikan Formating)</li>
              <li>Edit pada masing-masing Template Print dan Template Website pada kategori yang sama</li>
            </ul>
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
                      <a href="{{ route('templatekda') }}" class="btn btn-danger">Tutup</a>
                        <button type="submit" class="btn btn-success">Simpan</button>
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
              document.getElementById('fsummernote').scrollIntoView();

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