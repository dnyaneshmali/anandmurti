<?php

$root = $_SERVER['DOCUMENT_ROOT'].'/anandmurti/';
include($root."/config/config.php");

$jsondata=file_get_contents("php://input");
$data = json_decode($jsondata, true);
$gcustomer_date = date("Y-m-d H:i:s");
$query = "INSERT INTO  tbl_gogas_customers(	gcustomer_name,	gcustomer_email,gcustomer_number,	gcustomer_dob, gcustomer_state,	gcustomer_city,	gcustomer_pincode,	gcustomer_landmark,gcustomer_proof,	gcustomer_date)
    VALUES('".$data['gcustomer_name']."','".$data['gcustomer_email']."', '".$data['gcustomer_number']."', '".$data['gcustomer_dob']."', '".$data['gcustomer_state']."','".$data['gcustomer_city']."','".$data['gcustomer_pincode']."','".$data['gcustomer_landmark']."','".$data['gcustomer_proof']."','".$gcustomer_date."')";
   
    if(!mysqli_query($connection,$query))
    {
        die('Error : ' . mysqli_error());
    }else{
    	echo"success";
    }
	
echo json_encode($data);

 	?>