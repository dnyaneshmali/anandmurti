<?php

$root = $_SERVER['DOCUMENT_ROOT'].'/anandmurti/';
include($root."/config/config.php");

$jsondata=file_get_contents("php://input");
$data = json_decode($jsondata, true);
$cinvoice_date = date("Y-m-d H:i:s");
$cinvoice_status = '0';
$query = "INSERT INTO  tbl_connection_invoice(cinvoice_tax, cinvoice_amount, cinvoice_date, cinvoice_status, connection_id, gcustomer_id)
    VALUES('".$data['cinvoice_tax']."', '".$data['cinvoice_amount']."','".$cinvoice_date."','".$cinvoice_status."', '".$data['connection_id']."','".$data['gcustomer_id']."')";
   
    if(!mysqli_query($connection,$query))
    {
        die('Error :' .mysqli_error());
    }else{
    	echo"success";
    }
	
	echo json_encode($data);
 	?>