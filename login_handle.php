<?php
require 'php/dbfunctions.php';
session_start();
$email=$_POST['email'];
$password=$_POST['password'];
$check=checklogin($conn,$email,$password);
if($check==2){
  session_start();
  $user_ID=getuserID($conn,$email);
  $_SESSION['userid']=$user_ID;
  $exchange_ID=getExcahngeID($conn,$user_ID);
  $_SESSION['exchangeID']=$exchange_ID;
  $_SESSION['session']=1;
  // echo $exchange_ID;
  // echo $ID;
  echo "good";
  // header("location:homepage.php");

}
if($check==1){
  echo "password";
}
if($check==0){
  echo "email";
}
?>
