<?php

$root = $_SERVER['DOCUMENT_ROOT'].'/anandmurti/';
include($root."/config/config.php");

$jsondata=file_get_contents("php://input");
$data = json_decode($jsondata, true);
date_default_timezone_set('Asia/Kolkata');
$admin_date = date("Y-m-d g:i a");

$query = "INSERT INTO tbl_admin(admin_username, admin_name,admin_email, admin_number,admin_password, admin_role, admin_date)
    VALUES('".$data['username']."','".$data['fullname']."', '".$data['email']."', '".$data['phone']."', '".$data['password']."', '".$data['userrole']."', '".$admin_date."')";
    if(!mysqli_query($connection,$query))
    {
        die('Error : ' . mysqli_error());
    }else{
    	echo"success";
    }
	
echo json_encode($data);

 	?>