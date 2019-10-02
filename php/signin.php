<html>
<head>
  <title>Sign in</title>
  <link rel="stylesheet" type="text/css" href="../css/signin.css">
</head>
<body>

<?php require 'signin_signupHeader.php' ?>
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

  <div class="imgcontainer">
    <img src="../image/avatar.jpg" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label><b>Username</b></label>
    <input type="text" placeholder="Enter Email" name="signinEmail" value="<?php echo ''.$signinEmail?>" required>

    <label><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="signinPassword" value="<?php echo ''.$signinPassword?>" required>
        
    <button type="submit">Login</button>
    <input type="checkbox" checked="checked"> Remember me
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancel</button>
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div>
</form>
</div>


</body>
</html>