<?php
require "php/dbfunctions.php";
session_start();

$crypo=$_POST["crypo"];
$user_ID=$_SESSION['userid'];
$exchange_ID=  $_SESSION['exchangeID'];
// echo $crypo;
if($crypo=='Bitcoin'){
    $profit=getTotalProfitCrypo($conn,$user_ID,$crypo,$exchange_ID);
    echo "$".number_format($profit,2);
  }
  if($crypo=='Litecoin'){
    $profit=getTotalProfitCrypo($conn,$user_ID,$crypo,$exchange_ID);
    echo "$".number_format($profit,2);
  }
  if($crypo=='BitcoinCash'){
    $profit=getTotalProfitCrypo($conn,$user_ID,$crypo,$exchange_ID);
    echo "$".number_format($profit,2);
  }
  if($crypo=='Ethereum'){
    $profit=getTotalProfitCrypo($conn,$user_ID,$crypo,$exchange_ID);
    echo "$".number_format($profit,2);
  }

 ?>
