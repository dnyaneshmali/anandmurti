<?php

$root = $_SERVER['DOCUMENT_ROOT'].'/anandmurti/';
include($root."/config/config.php");

$jsondata=file_get_contents("php://input");
$data = json_decode($jsondata, true);

$jardetails_date = date("Y-m-d H:i:s");
$query = "INSERT INTO   tbl_jar_details(jar_type, jar_price,jar_date)
    VALUES('".$data['jar_type']."','".$data['jar_price']."','".$jardetails_date."')";
   
     if(!mysqli_query($connection,$query))
    {
        die('Error :' .mysqli_error());
    }else{
    	echo"success";
    }
	
echo json_encode($data);
 	?>