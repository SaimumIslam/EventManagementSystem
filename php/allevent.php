<?php
  session_start();
 ?>

<html lang="en">
<head>
  <title>All Events</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="../css/header.css">
  <link rel="stylesheet" href="../css/bootstrap/bootstrap.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>

<style type="text/css">
  .warning li a:hover:not(.active){
  background-color: red;
  color: white;
}

.warning li{
  float: right;
}

li a:hover:not(.active) {
    background-color: #ffffff;
    color: red;
}

</style>

</head>
<body style="background-color: rgb(222, 224, 226);">

<ul>
  <li><a href="<?php 
        if(isset($_SESSION['userid']))
          echo "mainpage.php";
        else
          echo "../index.php";
      ?>"><i class="fa fa-home"></i> Home</a> </li>
	<li><a href="../php/messenger.php">Messege</a></li>
	<li><a href="../php/createevent.php">Create Event</a></li>
	<li><a href="../php/allevent.php">All Event</a></li>
	<li class="about"><a href="../php/aboutus.php">About Us</a></li>
  <div class="warning">
        <li><a href="../controller/signoutAction.php" >Sign out</a></li>
      </div></ul>

<br>
<div class="container">
  <h2>Hosted Events</h2>
  <br>
  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li class="nav-item">
      <a class="nav-link active" data-toggle="tab" href="#upcomingEvent">Upcoming Event</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#pastEvent">Past Events</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#allEvent">All Events</a>
    </li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div id="upcomingEvent" class="container tab-pane active" ><br>
      <h3>Upcoming Events</h3>
      <p>
        <?php 
        
        require '../ConnectionDb/connection.php';
        
        $sql = "SELECT * FROM `event_creation` where event_start_date > today() order by(event_start_date) ASC";
        
        $result = mysqli_query($conn, $sql);

      echo "<table>";  
      while ($row = mysqli_fetch_array($result)) { 

        echo "<tr><div style='height: 15px; width: auto; padding:30px; margin_top:40px'><h1><a href='details.php?id={$row['event_id']}'><b>{$row['event_title']}</tr></b>
    </h1>
    <p>
      <small style='float: right;'><i>Organized by {$row['organized_by']} </i></small>
    </p>
    <p style=''>
    <h7><small><i style='color: #333;'>(Event Start Date: {$row['event_start_date']} )</i></small></h7>
      {$row['about']}
      </div>
    </p>
 </a>";
      }
      echo "</table>";
      ?>
      </p>
    </div>
    <div id="pastEvent" class="container tab-pane fade"><br>
      <h3>Past Events</h3>
      <p><?php 
        
        require '../ConnectionDb/connection.php';
        
        $sql = "SELECT * FROM `event_creation` where event_start_date > today() order by(event_start_date) ASC";
        
        $result = mysqli_query($conn, $sql);

      echo "<table>";  
      while ($row = mysqli_fetch_array($result)) { 

        echo "<tr><div style='height: 15px; width: auto; padding:30px; margin_top:40px'><h1><a href='details.php?id={$row['event_id']}'><b>{$row['event_title']}</tr></b>
    </h1>
    <p>
      <small style='float: right;'><i>Organized by {$row['organized_by']} </i></small>
    </p>
    <p style=''>
    <h7><small><i style='color: #333;'>(Event Start Date: {$row['event_start_date']} )</i></small></h7>
      {$row['about']}
      </div>
    </p>
 </a>";
      }
      echo "</table>";
      ?></p>
    </div>


    <div id="allEvent" class="container tab-pane fade"><br>
      <h3>All Events</h3>
      <p>
        <?php 
        
        require '../ConnectionDb/connection.php';
        
        $sql = "SELECT * FROM `event_creation` order by(event_start_date) DESC";
        
        $result = mysqli_query($conn, $sql);

      echo "<table>";  
      while ($row = mysqli_fetch_array($result)) { 

        echo "<tr><div style='height: 15px; width: auto; padding:30px; margin_top:40px; color:black;' ><h1><a href='details.php?id={$row['event_id']}'><b>{$row['event_title']}</tr></b>
    </h1>
    <p>
      <small style='float: right;'><i>Organized by {$row['organized_by']} </i></small>
    </p>
    <p style=''>
    <h7><small><i style='color: #333; float:left;'>(Event Start Date: {$row['event_start_date']} )</i></small></h7>
    <p style='margin-left:100px; margin-right:100px;'>
      <br><b style='color:#000000;'>{$row['about']}</b>
      </p>
      </div>
    </p>
 </a><br><br>";
      }
      echo "</table>";
      ?>

      </p>
    </div>
  </div>
</div>

<div>
	<footer><?php echo "&copy" .date('Y')."All right reserved" ?></footer>
</div>
</body>
</html>
