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
        $_SESSION['email']=$signinEmail;
        $_SESSION['password']=$signinPassword;

        $id_query = "SELECT u_id from user_information where email='$signinEmail' AND password='$signinPassword'";
        $result2 = mysqli_query($conn, $id_query);
        
          $row = mysqli_fetch_array($result2);
        
        $_SESSION['userid'] = $row['u_id']; 
        
        
        echo "<script type='text/javascript'>window.top.location='../php/mainpage.php/';</script>"; exit;
      }
      else
      {
        $errmsg = "Invalid email or password or account isn't activated!";
      }

    }
?>