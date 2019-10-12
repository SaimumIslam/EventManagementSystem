<?php 
require '../ConnectionDb/connection.php';

$password="";
$signupusername="";
$signupemail="";
$signupphn="";
$signuplocation="";
$signuppassword ="";
$signuppasswordrepeat="";
$msg="";
$msgg='To Create a new account you must need another email or you can recover your account by clicking <a href="forgotPass.php">here</a> ';
$newpass="";
$ERR=0;
$hash="";

if(isset($_POST['signupusername'])) {
$signupusername =trim($_POST['signupusername']);
}

if(isset($_POST['signupemail'])) {
$signupemail = trim($_POST['signupemail']);
}
if(isset($_POST['signupphn'])) {
$signupphn = trim($_POST['signupphn']);
}

if(isset($_POST['signuplocation'])) {
$signuplocation = trim($_POST['signuplocation']);
}
if(isset($_POST['signuppassword'])) {
$signuppassword = $_POST['signuppassword'];
}

if(isset($_POST['signuppasswordrepeat'])) {
$signuppasswordrepeat = $_POST['signuppasswordrepeat'];
}

$errpass="";


if($signuppassword != $signuppasswordrepeat)
{
$errpass= "Password doesn't match.";
$ERR=1;
}
else{

if (!filter_var($signupemail, FILTER_VALIDATE_EMAIL)) {
$msg = 'The email you have entered is invalid, please try again.';
}
else if(!$ERR){

$sql = "SELECT email FROM user_information where email like '$signupemail'";

$result = mysqli_query($conn,$sql);

if(mysqli_num_rows($result)>0)
{
$msg="Sign up unsuccessful";
$msg = "User already exist.";
}
else
{

$sql="INSERT INTO `user_information`(`username`, `email`, `phone`, `password`, `city`) VALUES ('$signupusername', '$signupemail', '$signupphn', '$signuppassword', '$signuplocation');";


$result = mysqli_query($conn, $sql);


$msgg = "Thank you for registration.";

 
echo "<script type='text/javascript'>window.top.location='../php/signin.php/';</script>"; exit;

/*
$to      = $signupemail; 
$subject = 'Signup | Verification'; 
$message = '
Thanks for signing up!<br>


Your account has been created, you can login with the following credentials after you have activated your account by pressing the url below.
<br> 
------------------------<br>
Username: '.$signupusername.'<br>
Password: '.$password.'<br>
------------------------<br>
<br>
Please click this link to activate your account:<br>
http://www.eventhub.com/verify.php?email='.$signupemail.'&hash='.$hash.'

';

$headers = 'From:noreply@eventhub.com' . "\r\n"; 
mail($to, $subject, $message, $headers);

*/    
}
mysqli_close($conn);

}
}


?>

