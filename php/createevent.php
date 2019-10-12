<?php
  session_start();

require '../ConnectionDb/connection.php';

  $eventTitle="";
  $RegSartDate="";
  $RegEndDate="";
  $eventStartDate="";
  $eventStartTime="";
  $eventOrganizer="";
  $eventLength="";
  $eventDetails="";
  $venue="";
  $eventStartDateTime="";

if (isset($_POST['submit'])){

  if(isset($_POST['etitle']))
      $eventTitle = $_POST['etitle'];

    if(isset($_POST['regbegdate']))
      $RegSartDate = $_POST['regbegdate'];

    if(isset($_POST['regenddate']))
    $RegEndDate = $_POST['regenddate'];

    if(isset($_POST['estartdate']))
    $eventStartDate = $_POST['estartdate'];


    if(isset($_POST['time1']))
    $eventStartTime = $_POST['time1'];

    if(isset($_POST['organizedby']))
    $eventOrganizer = $_POST['organizedby'];

    if(isset($_POST['venue']))
    $venue = $_POST['venue'];
  
    if(isset($_POST['elength']))
    $eventLength = $_POST['elength'];

    if(isset($_POST['edetails']))
    $eventDetails = $_POST['edetails'];

$eventStartDateTime = $eventStartDate." ".$eventStartTime;
$user = $_SESSION['userid'];

  $sql = "INSERT INTO `event_creation`(`event_title`, `start_registration_date`, `end_registration_date`, `event_start_date`, `organized_by`, `venue`, `event_length`, `about`, `user_id`) VALUES ('$eventTitle', '$RegSartDate', '$RegEndDate', '$eventStartDateTime', '$eventOrganizer', '$venue', '$eventLength', '$eventDetails', '$user')";
  mysqli_query($conn, $sql);

     
   }
?>
<html>
</body>
</html>
<head>
	<title>Event Management</title>
	<link rel="stylesheet" type="text/css" href="../css/createevent.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <meta charset="utf-8">
 	 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../css/bootstrap.css">
  <style type="text/css">
    .warning li a:hover:not(.active){
  background-color: red;
  color: white;
}

.warning li{
  float: right;
}

ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
    margin-bottom: 0;
}

li a:hover:not(.active) {
    background-color: #ffffff;
    color: red;
}
  </style>

</head>
<body>
<ul>
  <li><a href="<?php 
        if(isset($_SESSION['userid']))
          echo "../php/mainpage.php";
        else
          echo "../index.php";
      ?>"><i class="fa fa-home"></i> Home</a> </li>
	<li><a href="../php/messenger.php">Messege</a></li> 
	<li><a href="../php/createevent.php">Create Event</a></li>
	<li><a href="../php/allevent.php">All Event</a></li>
	<li class="about"><a href="../php/aboutus.php">About Us</a></li>
  <div class="warning">
        <li><a href="../controller/signoutAction.php" >Sign out</a></li>
      </div>
</ul>
<div class="mainbody" style="margin-top: 0; padding-top: 10; background-color: rgb(222, 224, 226);  width: 550px;margin: auto; border: 1px solid grey;">
<div class="container" style="margin:auto; text-align: center; margin-top: 30px;">
  <h2>Create an Event</h2>
  <form action="" method="POST" style="margin: auto; text-align: left; width: 700px; margin-left: 40px; position: relative;">
    <div class="form-group input-group-sm col-lg-7">
      <label for="etitle">Event Title:</label>
      <input type="text" class="form-control" placeholder="Enter Event Title" name="etitle">
    </div>
    <div class="form-group input-group-sm col-lg-7">
      <label for="regbegdate">Registration start date:</label>
      <input type="date" class="form-control" id="regbegdate" placeholder="dd/mm/yy" name="regbegdate">
    </div>

    <div class="form-group input-group-sm col-lg-7">
      <label for="regenddate">Registration End Date:</label>
      <input type="date" class="form-control" id="regenddate" placeholder="dd/mm/yy" name="regenddate">
    </div>

    <div class="form-group input-group-sm col-lg-7">
      <label for="estartdate">Event Start Date:</label>
      <input type="date" class="form-control" id="estartdate" name="estartdate">
    </div>


    <div class="form-group input-group-sm col-lg-7">
      <label for="time4">Event Start Time:</label>
      <input type="time" class="form-control" name="time1" id="time1" name="time1">
    </div>

    <div class="form-group input-group-sm col-lg-7">
      <label for="organizedby">Enter Organizer Name:</label>
      <input type="text" class="form-control" id="organizedby" placeholder="Enter Organizer Name" name="organizedby">
    </div>

    <div class="form-group input-group-sm col-lg-7">
      <label for="venue">Enter Vanue:</label>
      <input type="text" class="form-control" id="venue" placeholder="Enter Vanue" name="venue">
    </div>

    <div class="form-group input-group-sm col-lg-7">
      <label for="elength">Enter Event Length:</label>
      <input type="number" class="form-control" id="elength" placeholder="Enter Event Length" name="elength">
    </div>

    <div class="form-group input-group-sm col-lg-7">
      <label for="edetails">Event Details:</label>
      <textarea type="text" class="form-control" id="edetails" placeholder="Event Details" name="edetails" rows="4" cols="7"></textarea>
    </div>

  <div class="form-group input-group-sm col-lg-7">
    
  <button name='submit' value='2'>Submit</button> 
</div>

  </form>
</div>
<footer style="padding-bottom:30px; padding-top: 50px; "><?php echo "&copy" .date('Y')."All right reserved" ?></footer>
</div>

</body>
</html>
