<?php
$root = $_SERVER['DOCUMENT_ROOT'].'/anandmurti/';
include($root."/config/config.php");
$data=array();

$query="SELECT max(cinvoice_id) as cinvoice_id FROM tbl_connection_invoice";
$result = mysqli_query($connection,$query);

while ($row = mysqli_fetch_assoc($result)){

	//echo $row['username'];
	// $data[]=$row;
array_push($data, $row);
}
print json_encode($data);

?>