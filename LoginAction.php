<?php
		// check username or password from database
$root = $_SERVER['DOCUMENT_ROOT'].'/anandmurti/';
include($root."/config/config.php");
$query="SELECT admin_username,admin_password FROM tbl_admin";
$result = mysqli_query($connection,$query);

while ($row = mysqli_fetch_assoc($result)){

	//echo $row['username'];
	 $data[]=$row;

}

echo json_encode($data);

//echo $data->username;

		if($email=="santosh@gmail.com" && $password=="one"){
			echo "1";

		     }
		     else{
		     	echo "0";
		     }
		     ?>