<?php
	session_start();

	if(isset($_SESSION['userid']))
		header('Locaion: php/mainpage.php');

 ?>
<html>
<head>
	<title>Event Management</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- <link rel="stylesheet" type="text/css" href="css/index.css"> -->
	<link rel="stylesheet" href="css/bootstrap/bootstrap.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

<style type="text/css">

h2{
    text-align: center;
    font-family: sans-serif;
}

ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

li {
    float: left;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover:not(.active) {
    background-color: #ffffff;
    color: red;
}

.active {
    background-color: #4CAF50;
}

h1{
    font-family: ALGERIAN;
    font-size: 40px;
    text-align: center;
}

footer{
    text-align: center;
}


html{
  height: 100%;
  overflow: hidden;
}

body{
  color: #fff;
  margin:0;
  padding: 0;
  perspective: 1px;
  transform-style: preserve-3d;
  height: 100%;
  overflow-x: hidden;
  overflow-y: scroll;
  font-family: "luna";
}
header{
  box-sizing: border-box;
  min-height: 100vh;
  padding-top: 30vw 0 5vw;
  position: relative;
  transform-style: inherit;
  width: 100vw
}

header h1{
  margin-top: 100px;

}

header, header:before{
  background: 50% 50% / cover;
}

header::before{
  bottom: 0;
  content: "";
  left: 0;
  position: absolute;
  right: 0;
  top: 0;
  display: block;
  background-image: url(image/6.jpg);
  background-size: cover;
  transform-origin: center center 0;
  transform: translateZ(-1px) scale(2);
  z-index: -1;
  min-height: 100vh;

}

header * {
  font-weight: normal;
  letter-spacing: 0.2em;
  text-align: center;
  margin: 0;
  padding: 1em 0;

}


/* aboutus */

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
  background-color: #333;
  height: 400px;
  border: 1px solid white;
  color: grey;
  margin-top: 40px;
  text-align: left;
  padding-left: 5px;
  padding-right: 5px;
}
.developer_1{
  width: 49%;
  background-color: white;
  height: 260px;
  text-align: center;
  border: 1px solid grey;
  color: grey;
  float: left;
  padding-left: 10px;
}

.developer_2{
  width: 49%;
  background-color: white;
  height: 260px;
  text-align: center;
  border: 1px solid grey;
  color: grey;
  float: right;
  padding-right: 10px;
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

</style>

</head>
<body style="background-color: #333">
<div class="headerpart" style="height:0;">
<ul>
  <li><a href="
      <?php 
        if(isset($_SESSION['userid']))
          echo "php/mainpage.php";
        else
          echo "index.php";
      ?>
    "><i class="fa fa-home"></i> Home</a> </li>
  <li><a href="php/signin.php">Sign In</a></li>
  <li><a href="php/signup.php">Sign Up</a></li>
  <li class="about"><a href="#aboutus">About Us</a></li>
</ul>
</div>

<div class="dem">
<header style="margin-top: 0; padding-top: 0;">
    <h1><img src="image/icon.png">Event Management</h1>
    <p><i style="letter-spacing: 20px;">World's largest event hosting site</i></p>
</header>

<section id="aboutus" style="background-color: #333; overflow: hidden; position: relative; padding-top: 20px;margin-top: 20px">
  
    <h1>Event Management</h1>
<h1>About Us</h1>
    <div class="manager">
      <h1>Project Manager</h1>
        <div class="manager_pic">
          <img src="image/anis_sir.png">
        </div>
        <div class="manager_details">
          <p><a href="https://ku.ac.bd/faculty/dr-md-anisur-rahman/"><b>Dr. Md. Anisur Rahman</b></a></p>
          <p>Professor,<br><i><a href="http://cseku.ac.bd/">Computer Science and Engineering Discipline</a><br><a href="http://ku.ac.bd/">Khulna University</a>, Khulna - 9208 Bangladesh</i></p>
        </div>
    </div>

<div class="developers">
  <h1 style="text-align: left; padding-left: 20px;">Developers</h1>
  <div class="developer_1">
    <div class="developer_pic">
          <img src="image/lotif.png">
    </div>
    <div class="dev_details" style="padding-top: 20px;">
          <p><a href="https://facebook.com/llotif.13/"><b>Md. Abdul Lotif</b></a></p>
          <p>Student (3<sup>rd</sup> year 1<sup>st</sup> Term),<br><i><a href="http://cseku.ac.bd/">Computer Science and Engineering Discipline</a><br><a href="http://ku.ac.bd/">Khulna University</a>, Khulna - 9208 Bangladesh</i></p>
          <p>Contacts:<br> lotif1612@cseku.ac.bd, lotif1612@gmail.com<br>Phone: +8801717059192</p>

          <p><a href="https://github.com/CSEKU160212">Github</a>, <a href="https://twitter.com/lotif13">Twitter</a>, <a href="https://www.linkedin.com/in/cseku160212/">Linedin</a></p>
    </div>    
  </div>
    
  <div class="developer_2">

    <div class="developer_pic">
          <img src="image/foysal.png">
    </div>
    <div class="dev_details" style="padding-top: 20px;">
          <p><a href="https://www.facebook.com/mails.to.foysal"><b>Saimum Islam</b></a></p>
          <p>Student (3<sup>rd</sup> year 1<sup>st</sup> Term),<br><i><a href="http://cseku.ac.bd/">Computer Science and Engineering Discipline</a><br><a href="http://ku.ac.bd/">Khulna University</a>, Khulna - 9208 Bangladesh</i></p>
          <p>Contacts<br> saimumislam97@gmail.com<br>Phone: +8801763629672</p>
    </div>  
</div>

</div>

<footer style="padding-bottom: 20px; padding-top: 20px;"><?php echo "&copy" .date('Y')." All right reserved" ?></footer>
</section>
</div>
</div>

</body>
</html>



