<?php
$root = $_SERVER['DOCUMENT_ROOT'].'/anandmurti/';
include($root."/config/config.php");
$data=array();

$jsondata=file_get_contents("php://input");
$postdata = json_decode($jsondata, true);

$startdtt=$postdata['startdt'];
$enddtt=$postdata['enddt'];

$st = strtotime($startdtt);
$startdt=date('Y-m-d',$st);

$et = strtotime($enddtt);
$enddt=date('Y-m-d',$et);


if($postdata['startdt']!="") {
	if($postdata['enddt']!=""){
<<<<<<< HEAD
		$query="select tbl_aqua_orders.order_quantity,tbl_aqua_orders.order_price,tbl_aqua_orders.order_delivery_address,tbl_aqua_orders.order_delivery_date,tbl_aqua_orders.order_delivery_time,tbl_aqua_orders.vehicle_name,tbl_aqua_orders.order_delivery_date,tbl_aqua_customers.acustomer_name,tbl_aqua_customers.acustomer_id from tbl_aqua_orders INNER JOIN tbl_aqua_customers On tbl_aqua_orders.acustomer_id = tbl_aqua_customers.acustomer_id where order_activestatus = 1 and order_delivery_date between '".$startdt."' and '".$enddt."'";
		
=======
		$query="select tbl_aqua_orders.order_quantity,tbl_aqua_orders.order_price,tbl_aqua_orders.order_delivery_address,tbl_aqua_orders.order_delivery_date,tbl_aqua_orders.order_delivery_time,tbl_aqua_orders.vehicle_name,tbl_aqua_orders.order_date,tbl_aqua_customers.acustomer_name,tbl_aqua_customers.acustomer_id from tbl_aqua_orders INNER JOIN tbl_aqua_customers On tbl_aqua_orders.acustomer_id = tbl_aqua_customers.acustomer_id where order_activestatus = 1 and order_delivery_date between '".$startdt."' and '".$enddt."'";
>>>>>>> 2e84cc013321c15791ac8a481b2d73720392a12f
	}else{
		$query="select tbl_aqua_orders.order_quantity,tbl_aqua_orders.order_price,tbl_aqua_orders.order_delivery_address,tbl_aqua_orders.order_delivery_date,tbl_aqua_orders.order_delivery_time,tbl_aqua_orders.vehicle_name,tbl_aqua_orders.order_date,tbl_aqua_customers.acustomer_name,tbl_aqua_customers.acustomer_id from tbl_aqua_orders INNER JOIN tbl_aqua_customers On tbl_aqua_orders.acustomer_id = tbl_aqua_customers.acustomer_id where order_activestatus = 1";
	}
}else{
	$query="select tbl_aqua_orders.order_quantity,tbl_aqua_orders.order_price,tbl_aqua_orders.order_delivery_address,tbl_aqua_orders.order_delivery_date,tbl_aqua_orders.order_delivery_time,tbl_aqua_orders.vehicle_name,tbl_aqua_orders.order_date,tbl_aqua_customers.acustomer_name,tbl_aqua_customers.acustomer_id from tbl_aqua_orders INNER JOIN tbl_aqua_customers On tbl_aqua_orders.acustomer_id = tbl_aqua_customers.acustomer_id where order_activestatus = 1";
}

//echo $query;
	

$result = mysqli_query($connection,$query);

while ($row = mysqli_fetch_assoc($result)){
	array_push($data, $row);
}
print json_encode($data);

?>