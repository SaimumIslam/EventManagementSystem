<html>
<head>
  <title>Sign in</title>
  <link rel="stylesheet" type="text/css" href="../css/signin.css">
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

.signin_signup li a:hover:not(.active) {background-color: #ffffff;
    color: red;
}

.active {
    background-color: #4CAF50;
}

.signinDiv{
  height: 420px;
  width: 320px;
  margin:auto;
  padding-top: 100px;
}


input[type=text], input[type=password] {
    width: 100%;
    padding: 4px 12px;
    margin: 10px 0;
    margin-top: 3px;
    display: block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 70%;
}

.container {
    padding: 16px;
}

b{
  color: #00000;
}
  </style>
  </head>
<body style="margin:0;background-color: rgb(222, 224, 226);">
<div class="signin_signup">
<ul>
  <li><a href="../index.php"><i class="fa fa-home"></i> Home</a> </li>
  <li><a href="signin.php">Sign In</a></li>
  <li><a href="signup.php">Sign Up</a></li>
  <li class="about"><a href="aboutus.php">About Us</a></li>
</ul>
</div>


<div class="signinDiv">

<?php
  require '../controller/signinAction.php';
 ?>
<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
	<h2 id="sign">Sign In Form</h2>
  
  <div class="statusmsg" style="margin: auto;text-align: center;"> 
    <?php 
      if(!empty($signinEmail) && !empty($signinPassword)){ 
        echo "<div>$errmsg</div>";  
        }
    ?>
  </div>

  <div class="container">
    <label for="signinEmail"><b>Username</b></label>
    <input type="text" placeholder="Enter Email" name="signinEmail" value="<?php echo ''.$signinEmail?>" required>

    <label for="signinPassword"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="signinPassword" value="<?php echo ''.$signinPassword?>" required>
        
    <button type="submit" style="width: 60%; margin-left: 20%">Login</button>
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancel</button>
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div>
</form>
</div>


</body>
</html>