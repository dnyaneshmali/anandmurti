<?php

$root = $_SERVER['DOCUMENT_ROOT'].'/anandmurti/';
include($root."/config/config.php");

$jsondata=file_get_contents("php://input");
$data = json_decode($jsondata, true);

$jardetails_date = date("Y-m-d H:i:s");
$jar_activestatus = 1;
$query = "INSERT INTO tbl_jar_details(jar_type, jar_price,jar_date,	jar_activestatus)
    VALUES('".$data['jar_type']."','".$data['jar_price']."','".$jardetails_date."','".$jar_activestatus."')";
   
     if(!mysqli_query($connection,$query))
    {
        die('Error :' .mysqli_error());
    }else{
    	echo"success";
    }
	
echo json_encode($data);
 	?>