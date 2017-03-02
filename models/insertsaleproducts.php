<?php

$root = $_SERVER['DOCUMENT_ROOT'].'/anandmurti/';
include($root."/config/config.php");

$jsondata=file_get_contents("php://input");
$data = json_decode($jsondata, true);
$saleproduct_date = date("Y-m-d H:i:s");
$query = "INSERT INTO gproducts_sale(sale_product_quantity,sale_product_price,sale_total_price,product_id,sale_product_date,gcustomer_id)VALUES('".$data['product_quantity']."','".$data['Product_price']."','".$data['Product_tprice']."','".$data['product']."','".$saleproduct_date."','".$data['gcustomer_id']."')";
   
     if(!mysqli_query($connection,$query))
    {
        die('Error : ' . mysqli_error());
    }else{
    	echo"success";
    }
	
echo json_encode($data);

 	?>