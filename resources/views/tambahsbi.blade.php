@extends('master')

@section('title-bar')
    Dokumen SBI
@endsection
@section('right_title')
  Standar Biaya Institut
@endsection
@section('add-css')
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
    <link href="{{url('css/bootstrap-select.min.css')}}" rel="stylesheet" />
@endsection

@section('content')
<div class="container">
			<br />
			<h2 align="center">Ajax Live Data Search using Multi Select Dropdown in PHP</h2><br />
			
			<select name="multi_search_filter" id="multi_search_filter" multiple class="form-control selectpicker">
			<?php
			foreach($result as $row)
			{
				echo '<option value="'.$row["Country"].'">'.$row["Country"].'</option>';	
			}
			?>
			</select>
			<input type="hidden" name="hidden_country" id="hidden_country" />
			<div style="clear:both"></div>
			<br />
			<div class="table-responsive">
				<table class="table table-striped table-bordered">
					<thead>
						<tr>
							<th>Kategori</th>
							<th>Uraian Kegiatan</th>
							<th>Satuan</th>
							<th>Besaran Bruto Maksimum</th>
						</tr>
					</thead>
					<tbody>
					</tbody>
				</table>
			</div>
			<br />
			<br />
			<br />
		</div>

@endsection


@section('add-script')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="{{url('js/bootstrap-select.min.js')}}"></script>
    <script>
    $(document).ready(function(){

	load_data();
	
	function load_data(query='')
	{
		$.ajax({
			url:"fetch.php",
			method:"POST",
			data:{query:query},
			success:function(data)
			{
				$('tbody').html(data);
			}
		})
		}
	});
</script>
@endsection