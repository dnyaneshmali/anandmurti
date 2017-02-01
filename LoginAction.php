<?php
		// check username or password from database
$root = $_SERVER['DOCUMENT_ROOT'].'/anandmurti/';
include($root."/config/config.php");

$jsondata=file_get_contents("php://input");
$dataa = json_decode($jsondata, true);

$adminuname = $dataa['username'];
$adminpass = $dataa['password'];
$encpass = md5($adminpass);

$query="SELECT * FROM tbl_admin where admin_username = '".$adminuname."' and admin_password = '".$encpass."'";
$result = mysqli_query($connection,$query);

$uname = "";
$upass = "";
$urole = "";
$uid = "";
while ($row = mysqli_fetch_assoc($result)){

	 $data[]=$row;
	//$uid .= $row['admin_id'];
	//$uname .= $row['admin_username'];
	//$upass .= $row['admin_password'];
	//$urole .= $row['admin_role'];

}
//echo $uname;
//echo $upass;
/*
if($adminuname==$uname && $encpass==$upass){
			echo "1";

		     }
		     else{
		     	echo "0";
		     } */
		     print json_encode($data);
		     ?>