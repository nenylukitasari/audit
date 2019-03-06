<?php

//fetch.php

$connect = new PDO("mysql:host=localhost;dbname=audit", "root", "");

if($_POST["query"] != '')
{
	$search_array = explode(",", $_POST["query"]);
	$search_text = "'" . implode("', '", $search_array) . "'";
	$query = "
	SELECT * FROM makan_lembur 
	WHERE kategori_makan.kategori_makan IN (".$search_text.") 
	ORDER BY makan_lembur_id DESC
	";
}
else
{
	$query = "SELECT * FROM makan_lembur ORDER BY makan_lembur_id DESC";
}

$statement = $connect->prepare($query);

$statement->execute();

$result = $statement->fetchAll();

$total_row = $statement->rowCount();

$output = '';

if($total_row > 0)
{
	foreach($result as $row)
	{
		$output .= '
		<tr>
			<td>'.$row["Kategori"].'</td>
			<td>'.$row["UraianKegiatan"].'</td>
			<td>'.$row["Satuan"].'</td>
			<td>'.$row["BesaranBrutoMaksimum"].'</td>
		</tr>
		';	
	}
}
else
{
	$output .= '
	<tr>
		<td colspan="5" align="center">No Data Found</td>
	</tr>
	';
}

echo $output;


?>