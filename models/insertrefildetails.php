<?php

$root = $_SERVER['DOCUMENT_ROOT'].'/anandmurti/';
include($root."/config/config.php");

$jsondata=file_get_contents("php://input");
$data = json_decode($jsondata, true);
$refil_date = date("Y-m-d H:i:s");
$query = "INSERT INTO  tbl_refil_details(refil_cylinder_type,refil_payment_details,check_number,refil_amount,refil_date, gcustomer_id)
    VALUES('".$data['type']."','".$data['refil_payment_details']."','".$data['check_number']."','".$data['amount']."','".$refil_date."','".$data['customer']."')";
   
    if(!mysqli_query($connection,$query))
    {
        die('Error : ' . mysqli_error());
    }else{
    	echo"success";
    }
	
echo json_encode($data);

 	?>