<?php

$root = $_SERVER['DOCUMENT_ROOT'].'/anandmurti/';
include($root."/config/config.php");

$jsondata=file_get_contents("php://input");
$data = json_decode($jsondata, true);
$vehicle_date = date("Y-m-d H:i:s");
$query = "INSERT INTO   tbl_avehicle_details(vehicle_owner_name,vehicle_number,vehicle_contact_number,vehicle_date)
    VALUES('".$data['vowner_name']."', '".$data['vehicle_number']."','".$data['vehicle_contact_number']."', '".$vehicle_date."')";
   
     if(!mysqli_query($connection,$query))
    {
        die('Error : ' . mysqli_error());
    }else{
    	echo"success";
    }
	
echo json_encode($data);

 	?>