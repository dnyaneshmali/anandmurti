<?php

$root = $_SERVER['DOCUMENT_ROOT'].'/anandmurti/';
include($root."/config/config.php");


$result = mysql_query("select * from tbl_suers");

while($row=mysqli_fetch_row($result)){

	echo $row['$uid'];
}

$data=json_decode(file_get_contents("php://input"));

$btnName=mysql_real_escape_string($data->btnName);
if($btnName=='Insert'){

$username=mysql_real_escape_string($data->username);
$user_full_name=mysql_real_escape_string($data->user_full_name);
$user_email=mysql_real_escape_string($data->user_email);
$user_number=mysql_real_escape_string($data->user_number);
$user_password=mysql_real_escape_string($data->user_password);
$user_role=mysql_real_escape_string($data->user_role);

 	$query= "INSERT INTO tbl_users VALUES ('".$username."','".$user_full_name."','".$user_email."','".$user_number."','".$user_password."','".$user_role."')";

 	mysql_query($query);
    }else{
    	echo"errror";
    }

 	?>