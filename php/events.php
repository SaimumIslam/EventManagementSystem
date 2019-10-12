<?php 
	require '../ConnectionDb/connection.php';
	
	$sql = "select * from event_creation order by(event_start_date)";
	$result = mysqli_query($conn, $sql);	
	$row = mysqli_fetch_array($result);
?>