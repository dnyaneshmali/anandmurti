<?php


$root = $_SERVER['DOCUMENT_ROOT'].'/anandmurti/';
include($root."/config/config.php");

$jsondata=file_get_contents("php://input");
$data = json_decode($jsondata, true);
$query = "select * from tbl_refil_invoice where refil_id = '".$data['refil_id']."'";
$result = mysqli_query($connection,$query);
   if(!$result)
    {
        die('Error : '.mysqli_error());
    }else{
    	if(mysqli_num_rows($result)>0){
    		echo"1";
    	}
    	else{
    		echo"0";
    	}

    }
    //echo json_encode($data);

    ?>