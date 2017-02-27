<?php

$root = $_SERVER['DOCUMENT_ROOT'].'/anandmurti/';
include($root."/config/config.php");

$jsondata=file_get_contents("php://input");
$data = json_decode($jsondata, true);
$invoice_date = date("Y-m-d H:i:s");
$invoice_status = '0';
$query = "INSERT INTO  tbl_aqua_invoice(invoice_tax, invoice_amount, invoice_date, invoice_status, order_id, acustomer_id)
    VALUES('".$data['invoice_tax']."', '".$data['invoice_amount']."','".$invoice_date."','".$invoice_status."', '".$data['order_id']."','".$data['acustomer_id']."')";
   
    if(!mysqli_query($connection,$query))
    {
        die('Error :' .mysqli_error());
    }else{
    	echo"success";
    }
	
	echo json_encode($data);
 	?>