<?php 
?>
<h1>
	<?php 
		require '../ConnectionDb/connection.php';
		$eventid = $_SESSION['event_id'];
		$sql = "select * from event_creation where event_id = '$eventid'";
		$result = mysqli_query($conn, $sql);
		while ($row = mysqli_fetch_array($result)) {
			echo "<h1>{$row['event_title']}</h1>";
		}

	?>
</h1>