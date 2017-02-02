<?php

$root = $_SERVER['DOCUMENT_ROOT'].'/anandmurti/';
include($root."/config/config.php");

$jsondata=file_get_contents("php://input");
$data = json_decode($jsondata, true);
$product_date = date("Y-m-d H:i:s");
$query = "INSERT INTO  tbl_products(product_name,product_prize,Product_category,Product_company	, 	product_tax,product_date)
    VALUES('".$data['product_name']."','".$data['product_prize']."', '".$data['Product_category']."', '".$data['Product_company']."', '".$data['product_tax']."', '".$product_date."')";
   
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