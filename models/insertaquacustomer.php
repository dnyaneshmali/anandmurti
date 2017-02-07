<?php

$root = $_SERVER['DOCUMENT_ROOT'].'/anandmurti/';
include($root."/config/config.php");

$jsondata=file_get_contents("php://input");
$data = json_decode($jsondata, true);
$acustomer_date = date("Y-m-d H:i:s");
$query = "INSERT INTO   tbl_aqua_customers(acustomer_name,	acustomer_email,acustomer_number,	acustomer_address,acustomer_type,acustomer_date)
    VALUES('".$data['acustomer_name']."','".$data['acustomer_email']."', '".$data['acustomer_number']."', '".$data['acustomer_address']."', '".$data['acustomer_type']."','".$acustomer_date."')";
   
     if(!mysqli_query($connection,$query))
    {
        die('Error : ' . mysqli_error());
    }else{
    	echo"success";
    }
	
echo json_encode($data);

 	?>