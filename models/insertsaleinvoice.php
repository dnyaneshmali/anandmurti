<?php

$root = $_SERVER['DOCUMENT_ROOT'].'/anandmurti/';
include($root."/config/config.php");

$jsondata=file_get_contents("php://input");
$data = json_decode($jsondata, true);
$sinvoice_date = date("Y-m-d H:i:s");
$sinvoice_status = '0';
$query = "INSERT INTO  tbl_sale_invoice(sinvoice_tax, sinvoice_amount, sinvoice_date, sinvoice_status, 	sale_product_id, gcustomer_id)
    VALUES('".$data['sinvoice_tax']."', '".$data['sinvoice_amount']."','".$sinvoice_date."','".$sinvoice_status."', '".$data['sale_product_id']."','".$data['gcustomer_id']."')";
   
    if(!mysqli_query($connection,$query))
    {
        die('Error :' .mysqli_error());
    }else{
    	echo"success";
    }
	
	echo json_encode($data);
 	?>