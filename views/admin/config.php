<?php
    
    global $connection;
    $sql = "localhost"; 
    $username = "root";
    $password = "";
    $connection = mysql_connect($sql, $username, $password) or 
    die("Unable to Connect");
    $databse = mysql_select_db("anandmurti_db", $connection); 


function base_url(){

echo 'http://localhost/anandmurti';

}


?>