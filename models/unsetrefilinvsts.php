<?php
$root = $_SERVER['DOCUMENT_ROOT'].'/anandmurti/';
include($root."/config/config.php");

$jsondata=file_get_contents("php://input");
$data = json_decode($jsondata, true);
$query="update tbl_refil_invoice set rinvoice_status = 0 where rinvoice_id = '".$data['rinvoice_id']."'";

 if(!mysqli_query($connection,$query))
    {
        die('Error : ' .mysqli_error());
    }else{
    	echo"success";
    }
	
echo json_encode($data);
?>