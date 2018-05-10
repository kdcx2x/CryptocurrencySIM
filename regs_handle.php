<?php
require 'php/dbfunctions.php';
  $email=$_POST["email"];
  $password=$_POST["password"];
  $verify=$_POST["verify"];
  $fname=$_POST["fname"];
  $lname=$_POST["lname"];
  $dob=$_POST["dob"];
    // echo "<br>";
    // echo $password;
    // echo $verify;
    if($password==$verify){
      if (filter_var($email, FILTER_VALIDATE_EMAIL)){
        if(checkemail($conn,$email)!=true){
          session_start();
          $_SESSION['email']=$email;
          $password=password_hash($password, PASSWORD_DEFAULT);
          $_SESSION['password']=$password;
          $_SESSION['fname']=$fname;
          $_SESSION['lname']=$lname;
          $_SESSION['dob']=$dob;
          echo "good";
        }else{
          echo "email existed";
        }
      }else{
        echo "Not an Email";
      }
    }else {
      echo "password not the same";
    }

  // echo "<br>";
  // echo "in";
  // echo $email;
  // echo $lname;
  // echo $fname;
  // echo $password;
  // echo $verify;
  // echo $bday;

  // header("location:Selection2.php");
 ?>
