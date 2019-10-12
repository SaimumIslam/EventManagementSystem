<?php
session_start();
	$userid = $_SESSION['userid'];

	require '../ConnectionDb/connection.php';

	$userid = $_SESSION['userid'];
	$sql = "select * from user_information where u_id = '$userid'";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_array($result);

	$username_msg = $row['username'];
	$email_msg = $row['email'];
	$phone_msg = $row['phone'];
	$pass_msg = $row['password'];
	$conpass_msg = $row['password'];
	$city_msg = $row['city'];

if(isset($_POST['username']))
	$username_msg = $_POST['username'];

if(isset($_POST['email']))
	$email_msg = $_POST['email'];

if(isset($_POST['city']))
	$city_msg = $_POST['city'];

if(isset($_POST['phone']))
	$phone_msg = $_POST['phone'];

if(isset($_POST['confirmpassword']))
	$conpass_msg = $_POST['confirmpassword'];

if(isset($_POST['password']))
	$pass_msg = $_POST['password'];

if($pass_msg == $pass_msg)
{
	$sql = "UPDATE user_information SET username='$username_msg',email='$email_msg',phone='$phone_msg',password='pass_msg',city='city_msg' where u_id = 'userid'";
	$resul = mysqli_query($conn, $sql);
	$message = 'Your Profile Updated Successfully, Thank you for being with us.';

	echo "<SCRIPT>
	alert('$message');
	</SCRIPT>";
}
else
{
	$conpass_msg = "Password Didn't match!";
}
?>