
<?php
$root = $_SERVER['DOCUMENT_ROOT'].'/anandmurti/';
include($root."/config/config.php");
$data=array();

$query="SELECT SUM(exp_amount) AS exp_total,
MONTHNAME(exp_date ) AS expense_month
FROM tbl_aquaexpensives GROUP BY MONTHNAME(exp_date )  ";
$result = mysqli_query($connection,$query);

while ($row = mysqli_fetch_assoc($result)){

	//echo $row['username'];
	// $data[]=$row;
 array_push($data, $row);
}

print json_encode($data);

?>