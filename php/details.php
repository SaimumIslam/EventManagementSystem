<?php
	session_start();

	if(!isset($_SESSION['userid']))
		header('Locaion: ../index.php');
	$_SESSION['event_id'] = $_GET['id'];
 ?>
<html>
<head>
	<title>Event Management</title>
<style>
header ul{
	list-style-type: none;
	padding: 0;
	margin:0;
	width: 100%;
	position: fixed;
    background-color: rgb(34, 35, 35);
    min-width: 800px;
}

.inlineHeader li {
	display: inline-block;
	float: left;
}

.inlineHeader li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

.inlineHeader li a:hover:not(.active) {
    background-color: #ffffff;
    text-decoration:underline;
    color: red;
}

.warning li a:hover:not(.active){
	background-color: red;
	color: white;
}

.warning li{
	float: right;
}

footer{
	text-align: center;
	padding-bottom: 30px;
	padding-top: 30px;
}

.mainbody{
	background-color: rgb(222, 224, 226);
}

.body{
	margin: 0;
	width: 85%;
	min-width: 400px;
	float: right;
	background-color: rgb(222, 224, 226);
	margin-left: 15%;
    padding-top: 55px;
}

.sideAndBody{
	background-color: grey;
	min-width: 800px;
}
</style>
<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body style="margin: 0;background-color: rgb(222, 224, 226);">
<div class="mainbody">
	<header>
		<ul class="inlineHeader">
  			<li><a href="
  				<?php if(isset($_SESSION['userid']))
  						echo "../../php/mainpage.php"; 
  						else
  							echo "../../index.php"; ?>"><i class="fa fa-home"></i> Home</a> </li>
			<li><a href="../../php/message.php">Message</a></li>
			<li><a href="../../php/createevent.php">Create Event</a></li>
			<li><a href="../../php/allevent.php">All Event</a></li>
			<li class="about"><a href="../../php/aboutus.php">About Us</a></li>
			<div class="warning">
				<li><a href="../../controller/signoutAction.php" >Sign out</a></li>
			</div>

		</ul>
	</header>
	<div style="padding-top: 100px;text-align: center; color: black;">	
<p>
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
</p>
<div style="background: grey; color: black; border: 1px dotted #ffffff; border-radius: 10%; float: right; width: 20%; position: relative; margin-right: 20px; padding-top: 20px;">
	<h1 style="font-size: 15px;">Organized by:</h1>
	<?php 
		$field = 'organized_by';
		$result = mysqli_query($conn, "SELECT $field FROM event_creation WHERE event_id = '$eventid'");
		$row = mysqli_fetch_array($result);
		echo "<small> 
				{$row[$field]}
		</small>";
	 ?>
	 <div style="background: red; color:white; margin-top: 20px; margin-bottom: 20px; padding-top: 10px; padding-bottom: 10px; width: 100%; position: relative;">
		<?php 
			$field = 'user_id';
			$result = mysqli_query($conn, "SELECT $field FROM event_creation WHERE event_id = '$eventid'");
		$row = mysqli_fetch_array($result);
		
		if($row['user_id']==$_SESSION['userid'])
			{
				echo "<a href='form.php' style='color:white;'>Add More Programe</a>";
			}	
		?>
</div>			
	<footer><?php echo "&copy" .date('Y')."All right reserved" ?></footer>
	</div>
	</div>
	
</div>
	
</div>
</body>
</html>