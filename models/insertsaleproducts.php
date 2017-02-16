<?php

$root = $_SERVER['DOCUMENT_ROOT'].'/anandmurti/';
include($root."/config/config.php");

$jsondata=file_get_contents("php://input");
$data = json_decode($jsondata, true);
$gproduct_date = date("Y-m-d H:i:s");
$query = "INSERT INTO tbl_gproducts(product_name,product_category,product_company,product_price,product_tax,product_date)VALUES('".$data['product_name']."','".$data['Product_category']."','".$data['Product_company']."','".$data['product_prize']."','".$data['product_tax']."','".$gproduct_date."')";
   
     if(!mysqli_query($connection,$query))
    {
        die('Error : ' . mysqli_error());
    }else{
    	echo"success";
    }
	
echo json_encode($data);

 	?>