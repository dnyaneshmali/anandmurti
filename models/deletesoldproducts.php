<?php


$root = $_SERVER['DOCUMENT_ROOT'].'/anandmurti/';
include($root."/config/config.php");

$jsondata=file_get_contents("php://input");
$data = json_decode($jsondata, true);

$query = "update gproducts_sale set sale_activestatus = 0 where sale_product_id = '".$data['sale_product_id']."'";
   if(!mysqli_query($connection,$query))
    {
        die('Error : ' . mysqli_error());
    }else{
    	echo"success";
    }
    //echo json_encode($data);

    ?>