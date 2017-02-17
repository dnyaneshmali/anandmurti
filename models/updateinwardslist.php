<?php

$root = $_SERVER['DOCUMENT_ROOT'].'/anandmurti/';
include($root."/config/config.php");

$jsondata=file_get_contents("php://input");
$data = json_decode($jsondata, true);
print_r($data);
	
$query = "UPDATE tbl_gas_inwards SET product_quantity='".$data['product_quantity']."',
total_price='".$data['total_price']."', distributor_name='".$data['distributor_name']."' WHERE inwards_id='".$data['inwards_id']."'";


    if(!mysqli_query($connection,$query))
    {
        die('Error : '.mysqli_error());
    }else{
    	echo"success";
    }
	

 	?>