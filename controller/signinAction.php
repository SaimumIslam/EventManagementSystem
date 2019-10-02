<?php
require '../ConnectionDb/connection.php';

session_start();

    $signinEmail="";
    $signinPassword="";
    $errmsg="";

    if(isset($_POST['signinEmail']) && isset($_POST['signinPassword']))
    {
      $signinEmail = $_POST['signinEmail'];
      $signinPassword = $_POST['signinPassword'];


        
      $search = "SELECT email, password FROM user_information WHERE email='$signinEmail' AND password='$signinPassword'";
      $result = mysqli_query($conn, $search);

        $match  = mysqli_num_rows($result);


      if($match>0)
      { 
        header("Location:../php/mainpage.php");

        $_SESSION["email"]=$signinEmail;
        $_SESSION["password"]=$signinPassword;
          exit;

      }
      else
      {
        $errmsg = "Invalid email or password or account isn't activated!";
      }

    }
?>