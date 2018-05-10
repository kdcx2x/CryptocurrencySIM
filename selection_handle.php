<?php
require 'php/dbfunctions.php';
session_start();
$exchange=$_POST["exchange"];
// echo $exchange;
$email=$_SESSION['email'];
$password=$_SESSION['password'];
$fname=$_SESSION['fname'];
$lname=$_SESSION['lname'];
$dob=$_SESSION['dob'];
// echo $exchange;
if ($exchange=="GDX"){
  $exchange_ID=1;
  // echo "ass";
}
if ($exchange=="Kraken"){
  $exchange_ID=2;
  // echo "hole";
}
if ($exchange=="Bitstamp"){
  $exchange_ID=3;
  // echo "puss";
}
if ($exchange=="Gemini"){
  $exchange_ID=4;
  // echo "qqqq";
}
// echo $exchange_ID;
if(newregister($conn,$email,$password,$fname,$lname,$dob,$exchange_ID)==true){
  echo "good";
  session_destroy();

}else {
  echo "bad";
  // header("location: regs1.php");
}
//


 ?>
