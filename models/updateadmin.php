<?php


$root = $_SERVER['DOCUMENT_ROOT'].'/anandmurti/';
include($root."/config/config.php");


$jsondata=file_get_contents("php://input");
$data = json_decode($jsondata, true);

//$btnName=$connection->real_escape_string($data->btnName);


/*
            $id=$connection->real_escape_string($data->id);
             $username=$connection->real_escape_string($data->username);
              $name=$connection->real_escape_string($data->name);
               $email=$connection->real_escape_string($data->email);
                $phone=$connection->real_escape_string($data->phone);
                 $role=$connection->real_escape_string($data->role);
                  $date=$connection->real_escape_string($data->date);*/
              $query="UPDATE tbl_admin SET admin_username ='".$data['username']."', admin_name ='".$data['fullname']."', admin_email ='".$data['email']."', admin_number ='".$data['phone']."',admin_role ='".$data['userrole']."',admin_date ='".$data['date']."' WHERE admin_id = '".$data['id']."'";
              if(!mysqli_query($connection,$query))
    {
        die('Error : ' . mysqli_error());
    }else{
    	echo"success";
    }
	
echo json_encode($data);

 	?>