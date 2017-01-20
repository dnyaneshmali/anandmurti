<?php
define("HOSTNAME", "localhost");
define("USERNAME", "root");
define("PASSWORD", "");
define("DATABASE", "Anandmurti");
$dbhandle= new mysqli(HOSTNAME,USERNAME,PASSWORD,DATABASE) or die("unable to connect");
?>