<?php

$root = $_SERVER['DOCUMENT_ROOT'].'/anandmurti/';
include($root."/config/config.php");

$jsondata=file_get_contents("php://input");
$data = json_decode($jsondata, true);
$connection_date = date("Y-m-d H:i:s");
$query = "INSERT INTO  tbl_new_connection(connection_cylinder_deposit,connection_type,connection_depreciation,connection_hotplate, connection_passbook, connection_stamp, connection_tube,connection_lighter, connection_other,connection_tprice, connection_date,gcustomer_id)
    VALUES('".$data['connection_cylinder_deposit']."','".$data['c_type']."','".$data['connection_depreciation']."','".$data['connection_hotplate']."','".$data['connection_passbook']."', '".$data['connection_stamp']."', '".$data['connection_tube']."', '".$data['connection_lighter']."', '".$data['connection_other']."','".$data['connection_tprice']."', '".$connection_date."', '".$data['customer']."')";
    if(!mysqli_query($connection,$query))
    {
        die('Error : ' . mysqli_error());
    }else{
    	echo"success";
    }
	
echo json_encode($data);

 	?>