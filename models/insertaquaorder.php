<?php

$root = $_SERVER['DOCUMENT_ROOT'].'/anandmurti/';
include($root."/config/config.php");

$jsondata=file_get_contents("php://input");
$data = json_decode($jsondata, true);
$order_date = date("Y-m-d H:i:s");
$order_status = 'Pending';
$query = "INSERT INTO  tbl_aqua_orders(customer_name, order_jar_type, order_quantity, order_price, order_delivery_address, order_delivery_date, order_delivery_time, vehicle_name, order_status, order_date)
    VALUES('".$data['customer_name']."','".$data['jar_type']."', '".$data['order_quantity']."', '".$data['order_price']."', '".$data['order_address']."', '".$data['order_date']."', '".$data['order_time']."','".$data['vehicle']."','".$order_status."','".$order_date."')";
   
     if(!mysqli_query($connection,$query))
    {
        die('Error : ' . mysqli_error());
    }else{
    	echo"success";
    }
	
echo json_encode($data);

 	?>