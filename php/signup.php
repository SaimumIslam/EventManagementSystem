<html>
<head>
  <title>Create a new Account</title>
  <link rel="stylesheet" type="text/css" href="../css/signup.css">
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style type="text/css">
  .signin_signup ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
    position: fixed;
    width: 100%;
    min-width: 800px;
}

.signin_signup li {
    float: left;
}

.signin_signup li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

.signin_signup li a:hover:not(.active) {
    background-color: #white;
    color: red;
}

.active {
    background-color: #4CAF50;
}

#asideDiv{
  padding-top: 55px;
}
input[type=text], input[type=password] {
    width: 100%;
    padding: 4px 10px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

/* Add padding to container elements */
.container2 {
    padding: 80px;
    padding-top: 5px;
    padding-bottom: 30px;

}

#asideDiv{
  width: 40%;
  margin: auto;
  height: auto;
}

.imgcontainer {
    text-align: center;
    margin: 10px 0 50px 0;
    height: 15%;
}
/* Clear floats */
.clearfix2::after {
    content: "";
    clear: both;
    display: table;
}

button:hover{
  background: #333;
  color: #ffffff;
  box-shadow: 2px 2px #000000;
  font-size: 18px;
}

</style>

</head>
<body style="margin: 0;background-color: rgb(222, 224, 226);">

  <div class="signin_signup">
<ul>
  <li><a class="active" href="../index.php"><i class="fa fa-home"></i> Home</a> </li>
  <li><a href="signin.php">Sign In</a></li>
  <li><a href="signup.php">Sign Up</a></li>
  <li class="about"><a href="aboutus.php">About Us</a></li>
</ul>
</div>
<div class="mainbody">

<div class="signinDiv">

<?php require '../controller/signupAction.php' ?>

<div id="asideDiv">
  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" style="border: 1px solid #ccc" method="POST" >
    <h2 id="sign">Sign Up Form</h2>
    
   <div class="statusmsg" style="margin: auto;text-align: center;"> 

    <?php 
      if(!empty($signupemail)){ 
        echo '<div>'.$msg.'</div>';
        echo "<div>$msgg</div>"; 
        } 

    if(!empty($signuppassword) && !empty($signuppasswordrepeat))
      {
        echo "<div>$errpass</div>";
      }
    ?>
  
  <div class="container2">
    <input type="text" placeholder="Enter Username" name="signupusername" value="<?php echo $signupusername; ?>" required>

    <input type="text" placeholder="Enter Email" name="signupemail" value="<?php echo $signupemail; ?>" required>

    <input type="text" placeholder="Enter Your Phone No." name="signupphn" value="<?php echo $signupphn; ?>" required>

  <input type="text" placeholder="Enter Location" name="signuplocation" value="<?php echo $signuplocation; ?>" required>

    <input type="password" placeholder="Enter Password" name="signuppassword" value="<?php echo $signuppassword; ?>" required>

    <input type="password" placeholder="Repeat Password" name="signuppasswordrepeat" value="<?php echo $signuppasswordrepeat ?>" required>
    <input type="checkbox" checked="checked"> Remember me
    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

    <div class="clearfix2">
     <div style="padding: 20px;">
    <?php
      echo '<div class="cancelbtn" id="cancelbtn">Want to Sign In? <a href="signin.php">Click Here</a></div>';
      ?>
    </div>
      <button type="submit" class="signupbtn" name="signupbtn" >Sign Up</button>
    </div>
  </div>
</form>
</div>
</div>
</div>
</body>
</html>