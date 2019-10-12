<?php 

$host = "localhost";
$user = "lotifxyz_root";
$pass = "adminroot1234";
$dbName = "lotifxyz_eventmanagement";

$conn = mysqli_connect($host, $user, $pass, $dbName);

if (!$conn) {
	echo "Error".error_log("Cann't Connect to db");
}

?>
