<?php

$root = $_SERVER['DOCUMENT_ROOT'].'/anandmurti/';
include($root."/config/config.php");

$jsondata=file_get_contents("php://input");
$data = json_decode($jsondata, true);
print_r($data);
$query = "UPDATE tbl_admin SET admin_username='".$data['username']."',admin_name='".$data['fullname']."',admin_email='".$data['email']."',admin_number='".$data['phone']."' WHERE admin_id='".$data['admin_id']."'";

    if(!mysqli_query($connection,$query))
    {
        die('Error : ' . mysqli_error());
    }else{
    	echo"success";
    }
	

 	?>