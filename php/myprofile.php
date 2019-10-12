<div id="info" style=" margin: 0 auto; margin-top:70px; height: 50%; width: 50%;  text-align: center; align:center; background:#333;">
		<?php
			require '../ConnectionDb/connection.php';
			$userid  = $_SESSION['userid'];
			$sql = "select * from user_information where u_id = '$userid'";
			$result  = mysqli_query($conn, $sql);
			$row = mysqli_fetch_array($result);			
 		?>
 		<div id="main" style="background: white; height: 90%; width: 90%; position: relative; margin: auto; align-content: center; align:center; padding-top: 20px;">
 			<h1>My Account Information</h1>
 			<h3>
 				Username: <i><?php echo "{$row['username']}"; ?></i>
 			</h3>
 			<h3>
 				Email: <i><?php echo "{$row['email']}"; ?></i>
 			</h3>
 			<h3>
 				Phone No: <i><?php echo "{$row['phone']}"; ?></i>
 			</h3>
 			<h3>
 				Password: <i><?php echo "{$row['password']}"; ?></i>
 			</h3>
 			<h5><a href="editprofile.php">Edit Profile</a></h5>

 		</div>
</div>	