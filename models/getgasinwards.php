<?php
$root = $_SERVER['DOCUMENT_ROOT'].'/anandmurti/';
include($root."/config/config.php");
$data=array();

//$query="SELECT * FROM  tbl_gas_inwards";
$query="select tbl_gas_inwards.*,tbl_gproducts.product_name,tbl_gproducts.product_id,tbl_gvehicle_details.gvehicle_id,tbl_gvehicle_details.gvehicle_owner_name from tbl_gas_inwards INNER JOIN tbl_gproducts On tbl_gas_inwards.product_id = tbl_gproducts.product_id INNER JOIN tbl_gvehicle_details ON tbl_gas_inwards.vehicle_id = tbl_gvehicle_details.gvehicle_id
";
$result = mysqli_query($connection,$query);

while ($row = mysqli_fetch_assoc($result)){

	//echo $row['username'];
	// $data[]=$row;
 array_push($data, $row);
}
print json_encode($data);

?>