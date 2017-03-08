<?php

$root = $_SERVER['DOCUMENT_ROOT'].'/anandmurti/';
include($root."/config/config.php");

$jsondata=file_get_contents("php://input");
$data = json_decode($jsondata, true);
$inwards_date = date("Y-m-d H:i:s");
$inwards_activestatus = 1;
$query = "INSERT INTO  tbl_gas_inwards(product_quantity,total_price,product_date, 	distributor_name,product_id,vehicle_id,inwards_activestatus)VALUES('".$data['pquantity']."','".$data['tprice']."','".$inwards_date."','".$data['distributor_name']."', '".$data['product']."','".$data['vehicle']."','".$inwards_activestatus."')";
   
    if(!mysqli_query($connection,$query))
    {
        die('Error : ' . mysqli_error());
    }else{
    	echo"success";
    }
	
echo json_encode($data);

 	?>