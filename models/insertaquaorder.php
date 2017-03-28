<?php

$root = $_SERVER['DOCUMENT_ROOT'].'/anandmurti/';
include($root."/config/config.php");

$jsondata=file_get_contents("php://input");
$data = json_decode($jsondata, true);
date_default_timezone_set('Asia/Kolkata');
$order_date = date("Y-m-d g:i a");

$order_status = '0';
$order_reminder = '0';
$order_activestatus = 1;
$query = "INSERT INTO  tbl_aqua_orders(order_quantity, order_price, order_delivery_address, order_delivery_date, order_delivery_time, vehicle_name, order_status, order_reminder,order_date,jar_id, acustomer_id,order_activestatus)
    VALUES('".$data['order_quantity']."', '".$data['order_price']."', '".$data['order_address']."', '".$data['order_date']."', '".$data['order_time']."','".$data['vehicle']."','".$order_status."','".$order_reminder."','".$order_date."','".$data['jar_id']."','".$data['customer_id']."','".$order_activestatus."')";
   
    if(!mysqli_query($connection,$query))
    {
        die('Error :' .mysqli_error());
    }else{
    	echo"success";
    }
	
echo json_encode($data);
 	?>