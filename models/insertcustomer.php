<?php

$root = $_SERVER['DOCUMENT_ROOT'].'/anandmurti/';
include($root."/config/config.php");

$jsondata=file_get_contents("php://input");
$data = json_decode($jsondata, true);
$customer_date = date("Y-m-d H:i:s");
$query = "INSERT INTO  tbl_customers(customer_name,customer_email,customer_number,customer_address, 	customer_type,customer_role,customer_date)
    VALUES('".$data['customer_name']."','".$data['customer_email']."', '".$data['customer_number']."', '".$data['customer_address']."', '".$data['customer_type']."','".$data['customer_role']."', '".$customer_date."')";
   
    /*print_r(mysqli_query($connection, $query));*/
    if(!mysqli_query($connection,$query))
    {
        die('Error : ' . mysqli_error());
    }else{
    	echo"success";
    }
	
echo json_encode($data);

//echo json_encode($data);
 	?>