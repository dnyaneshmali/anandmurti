<?php

$root = $_SERVER['DOCUMENT_ROOT'].'/anandmurti/';
include($root."/config/config.php");

$jsondata=file_get_contents("php://input");
$data = json_decode($jsondata, true);

$query = "INSERT INTO tbl_users(username, user_full_name, user_email, user_number, user_password, user_role, user_date)
    VALUES('".$data['username']."','".$data['fullname']."', '".$data['email']."', '".$data['phone']."', '".$data['password']."', '".$data['userrole']."', '2017-01-20 05:24:08')";
    if(!mysqli_query($connection,$query))
    {
        die('Error : ' . mysqli_error());
    }else{
    	echo"success";
    }
	

	// checking for blank values.
if (empty($_POST['name']))
  $errors['name'] = 'Name is required.';

if (empty($_POST['username']))
  $errors['username'] = 'Username is required.';

if (empty($_POST['email']))
  $errors['email'] = 'Email is required.';

if (!empty($errors)) {
  $data['errors']  = $errors;
} else {
  $data['message'] = 'Form data is going well';
}
// response back.
echo json_encode($data);


//echo json_encode($data);
 	?>