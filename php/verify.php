<?php require 'header.php' ?>

<div id="wrap">
        <!-- start PHP code -->
        <?php
         
        	require '../ConnectionDb/connection.php';
        if(isset($_POST['email']) && !empty($_POST['email']) AND isset($_POST['hash']) && !empty($_POST['hash']))
        {
    		
    		// Verify data
        	$signupemail = $_POST['email']; // Set email variable
    		$hash = $_POST['hash']; // Set hash variable

    		$search = mysqli_query($conn, "SELECT email, hash, active FROM user_table WHERE email='".$signupemail."' AND hash='".$hash."' AND active='0'") or die(mysqli_error()); 
				$match  = mysqli_num_rows($search);

 
			echo $match;

			if($match > 0){
 				   // We have a match, activate the account
				mysqli_query("UPDATE users SET active='1' WHERE email='".$signupemail."' AND hash='".$hash."' AND active='0'") or die(mysqli_error());
				echo '<div class="statusmsg">Your account has been activated, you can now login. <br><a href="signin.php">Click Here</a></div>';
			}
			else{
        		// No match -> invalid url or account has already been activated.
       			 echo '<div class="statusmsg">The url is either invalid or you already have activated your account.</div>';
    			}
                 
		}
	else
	{
    	// Invalid approach
   		 echo '<div class="statusmsg">Invalid approach, please use the link that has been send to your email.</div>';
	}         
        ?>
        <!-- stop PHP Code -->
         
    </div>
    <!-- end wrap div --> 