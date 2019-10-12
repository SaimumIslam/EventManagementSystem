<?php
	session_start();

	if(!isset($_SESSION['userid']))
		header('Locaion: ../index.php');
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


.sidenav ul{
	list-style-type: none;
	padding: 0;
	margin:0;
    background-color: rgb(20, 58, 58);
    width: 15%;
    position: fixed;
    height: 100%;
    min-width: 120px;
    margin-top: 52px;
}

.sidenav li{
    border: 2px inset #ffffff;
    text-align: center;
    border-radius: 5px;
}

.sidenav li a{
	display: block;
    color: #FFFFFF;
    padding: 15px 20px;
    text-decoration: none;
	}

.sidenav li a:hover:not(.active) {
    background-color: #ffffff;
    text-decoration:underline;
    color: red;
    border-radius: 5px;
}

footer{
	text-align: center;
	padding-bottom: 30px;
	padding-top: 30px;
}

.mainbody{
	background-color: grey;
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
  						echo "mainpage.php"; 
  						else
  							echo "../index.php"; ?>"><i class="fa fa-home"></i> Home</a> </li>
			<li><a href="message.php">Message</a></li>
			<li><a href="createevent.php">Create Event</a></li>
			<li><a href="allevent.php">All Event</a></li>
			<li class="about"><a href="aboutus.php">About Us</a></li>
			<div class="warning">
				<li><a href="../controller/signoutAction.php" >Sign out</a></li>
			</div>

		</ul>
	</header>	
<div class="sideAndBody">
	<div class="sidenav">
		<ul>
			<li><a href="mainpage.php">Dashboard</a></li>
			<li><a href="mainpage.php?page=myevent">My Event</a></li>
			<li><a href="mainpage.php?page=upcomming">Upcomming Event</a></li>
			<li><a href="mainpage.php?page=pastevents">Past Event</a></li>
			<li><a href="mainpage.php?page=myprofile" >My Profile</a></li>
		</ul>
	</div>
	<div class="body" style="padding-left: 20px;">

	<?php

	 	$p = isset($_GET['page'])? $_GET["page"]: "";
		$page = $p.".php";

		if(file_exists($page))
		{
			include $page;
		} 
		elseif ($p=="") {
			
			include 'events.php';

		}
		else
		{
			echo "Page not found";
		}
	?>

	<footer><?php echo "&copy" .date('Y')."All right reserved" ?></footer>
	</div>
	
</div>
</body>
</html>
