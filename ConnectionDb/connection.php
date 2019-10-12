<?php 

$host = "localhost";
$user = "root";
$pass = "";
$dbName = "event_management";

$conn = mysqli_connect($host, $user, $pass, $dbName);

if (!$conn) {
	echo "Error".error_log("Cann't Connect to db");
}

?>