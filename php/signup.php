<html>
<head>
  <title>Create a new Account</title>
  <link rel="stylesheet" type="text/css" href="../css/signup.css">
</head>
<body>
<?php require 'signin_signupHeader.php' ?>

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
  
  </div>
    <div class="imgcontainer">
    <img src="../image/avatar.jpg" alt="Avatar2" class="avatar">
  </div>
  <div class="container2">
    <label><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="signupusername" value="<?php echo $signupusername; ?>" required>

    <label><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="signupemail" value="<?php echo $signupemail; ?>" required>

    <label><b>Phone No.</b></label>
    <input type="text" placeholder="Enter Your Phone No." name="signupphn" value="<?php echo $signupphn; ?>" required>

  <label><b>Location</b></label>
    <input type="text" placeholder="Enter Location" name="signuplocation" value="<?php echo $signuplocation; ?>" required>

    <label><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="signuppassword" value="<?php echo $signuppassword; ?>" required>

    <label><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="signuppasswordrepeat" value="<?php echo $signuppasswordrepeat ?>" required>
    <input type="checkbox" checked="checked"> Remember me
    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

    <div class="clearfix2">
     <?php
      echo '<div class="cancelbtn" id="cancelbtn">Want to Sign In? <a href="signin.php">Click Here</a></div>';
      ?>
      <button type="submit" class="signupbtn" name="signupbtn" >Sign Up</button>
    </div>
  </div>
</form>
</div>
</body>
</html>