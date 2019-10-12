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

if($pass_msg == $conpass_msg)
{
	$sql = "UPDATE user_information SET username='$username_msg',email='$email_msg',phone='$phone_msg',password='$pass_msg',city='$city_msg' where u_id = '$userid'";
	$resul = mysqli_query($conn,$sql);
}
else
{
	$conpass_msg = "Password Didn't match!";
}

?>
<html>
<head>
	<title>Edit Profile</title>
<link href='http://fonts.googleapis.com/css?family=Bitter' rel='stylesheet' type='text/css'>
<style type="text/css">
.form-style-10{
    width:450px;
    padding:30px;
    margin:40px auto;
    background: #FFF;
    border-radius: 10px;
    -webkit-border-radius:10px;
    -moz-border-radius: 10px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.13);
    -moz-box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.13);
    -webkit-box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.13);
}
.form-style-10 .inner-wrap{
    padding: 30px;
    background: #F8F8F8;
    border-radius: 6px;
    margin-bottom: 15px;
}
.form-style-10 h1{
    background: #2A88AD;
    padding: 20px 30px 15px 30px;
    margin: -30px -30px 30px -30px;
    border-radius: 10px 10px 0 0;
    -webkit-border-radius: 10px 10px 0 0;
    -moz-border-radius: 10px 10px 0 0;
    color: #fff;
    text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.12);
    font: normal 30px 'Bitter', serif;
    -moz-box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.17);
    -webkit-box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.17);
    box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.17);
    border: 1px solid #257C9E;
}
.form-style-10 h1 > span{
    display: block;
    margin-top: 2px;
    font: 13px Arial, Helvetica, sans-serif;
}
.form-style-10 label{
    display: block;
    font: 13px Arial, Helvetica, sans-serif;
    color: #888;
    margin-bottom: 15px;
}
.form-style-10 input[type="text"],
.form-style-10 input[type="date"],
.form-style-10 input[type="datetime"],
.form-style-10 input[type="email"],
.form-style-10 input[type="number"],
.form-style-10 input[type="search"],
.form-style-10 input[type="time"],
.form-style-10 input[type="url"],
.form-style-10 input[type="password"],
.form-style-10 textarea,
.form-style-10 select {
    display: block;
    box-sizing: border-box;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    width: 100%;
    padding: 8px;
    border-radius: 6px;
    -webkit-border-radius:6px;
    -moz-border-radius:6px;
    border: 2px solid #fff;
    box-shadow: inset 0px 1px 1px rgba(0, 0, 0, 0.33);
    -moz-box-shadow: inset 0px 1px 1px rgba(0, 0, 0, 0.33);
    -webkit-box-shadow: inset 0px 1px 1px rgba(0, 0, 0, 0.33);
}

.form-style-10 .section{
    font: normal 20px 'Bitter', serif;
    color: #2A88AD;
    margin-bottom: 5px;
}
.form-style-10 .section span {
    background: #2A88AD;
    padding: 5px 10px 5px 10px;
    position: absolute;
    border-radius: 50%;
    -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    border: 4px solid #fff;
    font-size: 14px;
    margin-left: -45px;
    color: #fff;
    margin-top: -3px;
}
.form-style-10 input[type="button"], 
.form-style-10 input[type="submit"]{
    background: #2A88AD;
    padding: 8px 20px 8px 20px;
    border-radius: 5px;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    color: #fff;
    text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.12);
    font: normal 30px 'Bitter', serif;
    -moz-box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.17);
    -webkit-box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.17);
    box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.17);
    border: 1px solid #257C9E;
    font-size: 15px;
}
.form-style-10 input[type="button"]:hover, 
.form-style-10 input[type="submit"]:hover{
    background: #2A6881;
    -moz-box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.28);
    -webkit-box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.28);
    box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.28);
}
.form-style-10 .privacy-policy{
    float: right;
    width: 250px;
    font: 12px Arial, Helvetica, sans-serif;
    color: #4D4D4D;
    margin-top: 10px;
    text-align: right;
}
</style>
</head>
<body>


<div class="form-style-10">
<h1>Edit Your Profile<span><a href="mainpage.php" style="color: white; text-decoration:none; ">For going to home page click here....</a></span></h1>
<form>
    <div class="section"><span>1</span>Name &amp; Address</div>
    <div class="inner-wrap">
        <label>Your Full Name <input type="text" name="username" placeholder="<?php echo $username_msg ?>" /></label>
        <label>Address <input  type="text" name="city" placeholder="<?php echo $city_msg ?>"></input></label>
    </div>

    <div class="section"><span>2</span>Email &amp; Phone</div>
    <div class="inner-wrap">
        <label>Email Address <input type="email" name="email" placeholder="<?php echo $email_msg ?>"/></label>
        <label>Phone Number <input type="text" name="phone" placeholder="<?php echo $phone_msg ?>"/></label>
    </div>

    <div class="section"><span>3</span>Passwords</div>
        <div class="inner-wrap">
        <label>Password <input type="text" name="password" placeholder="<?php echo $pass_msg ?>"/></label>
        <label>Confirm Password <input type="text" name="confirmpassword" placeholder="<?php echo $conpass_msg ?>"/></label>
    </div>
    <div class="button-section">
     <input type="submit" name="Submit" value="Update Your Profile" />
     
    </div>
</form>
</div>

</body>
</html>