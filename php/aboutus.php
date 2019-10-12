<?php
  session_start();
 ?>
<html>
  <head>
      <meta charset="utf-8">
      <title>About Me</title>
      <meta name="author" content="Abdul Lotif">

<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <style>

    body
    {
      margin: 0;
      font-family:sans-serif;
      font-size: 15px;
    }

    footer
    {
      height: 40px;
      text-align: center;
      font-family: arial;
      color: white;
    }

.developer
{
  margin: auto;
  width: 680px;
  text-align: center;
  height: 360px;
}

.manager{
  width: 600px;
  margin: auto;
  background-color: white;
  height: 260px;
  text-align: center;
  border: 1px solid grey;
  color: grey;
  margin-top: 30px;
}
.manager_pic img{
  height: 180px;
  float: left;
  width: 30%;
  position: relative;
  padding-left: 10px;
}
.manager_details{
  height: 360px;
  width: 65%;
  float: right;
  padding-left: 10px;
}

.manager_details a{
  text-decoration: none;
}

.developers{
  width: 1220px;
  margin: auto;
  background-color: white;
  height: 500px;
  border: 1px solid grey;
  color: grey;
  margin-top: 40px;
  text-align: left;
  padding-left: 5px;
  padding-right: 5px;
  background-color: #333;
}
.developer_1{
  width: 49%;
  background-color: white;
  height: 300px;
  text-align: center;
  border: 1px solid grey;
  color: grey;
  float: left;
  padding-left: 10px;
  padding-top: 20px;
}

.developer_2{
  width: 49%;
  background-color: white;
  height: 300px;
  text-align: center;
  border: 1px solid grey;
  color: grey;
  float: right;
  padding-right: 10px;
  padding-top: 20px;
}
.developer_pic img{
  height: 180px;
  float: left;
  width: 30%;
  position: relative;
  padding-left: 10px;
  padding-top: 20px;
}
.developer_details{
  height: 360px;
  width: 65%;
  float: right;
  padding-left: 10px;
}

.dev_details a{
  text-decoration: none;
}

.manager_details a{
  text-decoration: none;
}

    
.headerParts ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

.headerParts li {
    float: left;
}

.headerParts li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

.headerParts li a:hover:not(.active) {
    background-color: #ffffff;
    color: red;
}

.active {
    background-color: #4CAF50;
}

    </style>
  </head>
  <body style="background-color: grey;">

<header>
  <div class="headerParts">
    <ul class="inlineHeader">
        <li><a href="<?php 
        if(isset($_SESSION['userid']))
          echo "../php/mainpage.php";
        else
          echo "../index.php";
      ?>"><i class="fa fa-home"></i> Home</a> </li>
      <li><a href="../php/message.php">Message</a></li>
      <li><a href="../php/createevent.php">Create Event</a></li>
      <li><a href="../php/allevent.php">All Event</a></li>
      <li class="about"><a href="../php/aboutus.php">About Us</a></li>
      <div class="warning">
        <li><a href="../controller/signoutAction.php" >Sign out</a></li>
      </div>

    </ul>
    </div>
  </header> 

    <div class="manager" style="margin-top: 50px">
      <h1>Project Manager</h1>
        <div class="manager_pic">
          <img src="../image/anis_sir.png">
        </div>
        <div class="manager_details">
          <p><a href="https://ku.ac.bd/faculty/dr-md-anisur-rahman/"><b>Dr. Md. Anisur Rahman</b></a></p>
          <p>Professor,<br><i><a href="http://cseku.ac.bd/">Computer Science and Engineering Discipline</a><br><a href="http://ku.ac.bd/">Khulna University</a>, Khulna - 9208 Bangladesh</i></p>
        </div>
    </div>

<div class="developers">
  <h1 style="text-align: left;position: relative; padding-left: 20px; padding-top: 20px;">Developers</h1>
  <div class="developer_1">
    <div class="developer_pic">
          <img src="../image/lotif.png">
    </div>
    <div class="dev_details">
          <p><a href="https://facebook.com/llotif.13/"><b>Md. Abdul Lotif</b></a></p>
          <p>Student (3<sup>rd</sup> year 1<sup>st</sup> Term),<br><i><a href="http://cseku.ac.bd/">Computer Science and Engineering Discipline</a><br><a href="http://ku.ac.bd/">Khulna University</a>, Khulna - 9208 Bangladesh</i></p>
          <p>Contacts:<br> lotif1612@cseku.ac.bd, lotif1612@gmail.com<br>Phone: +8801717059192</p>

          <p><a href="https://github.com/CSEKU160212">Github</a>, <a href="https://twitter.com/lotif13">Twitter</a>, <a href="https://www.linkedin.com/in/cseku160212/">Linedin</a></p>
          <p><a href="mailto:lotif1612@gmail.com">Contact with me</a></p>
    </div>    
  </div>
    
  <div class="developer_2">

    <div class="developer_pic">
          <img src="../image/foysal.png">
    </div>
    <div class="dev_details">
          <p><a href="https://www.facebook.com/mails.to.foysal"><b>Saimum Islam</b></a></p>
          <p>Student (3<sup>rd</sup> year 1<sup>st</sup> Term),<br><i><a href="http://cseku.ac.bd/">Computer Science and Engineering Discipline</a><br><a href="http://ku.ac.bd/">Khulna University</a>, Khulna - 9208 Bangladesh</i></p>
          <p>Contacts<br> saimumislam97@gmail.com<br>Phone: +8801763629672</p>
          <p><a href="mailto:saimumislam97@gmail.com">Contact with me</a></p>
    </div>  
  </div>
</div>
<footer style="margin-top: 20px;"><?php echo "&copy" .date('Y')."All right reserved" ?></footer>
</div>
 </body>
</html>
