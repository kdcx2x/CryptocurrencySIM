<?php
require_once "php/apifunctions.php";
// require_once "php/dbfunctions.php";
session_start();
$user_ID=$_SESSION['userid'];
$exchange_ID=  $_SESSION['exchangeID'];
$crypo=$_POST["crypo"];
// $option=$_POST["option"];
// if($option==0){
  if($crypo=='Bitcoin'){
    $asset_id_base = 'BTC';
    $asset_id_quote = 'USD';
    $rate=getCurrentRate($asset_id_base,$asset_id_quote);
    echo "$".number_format($rate,2);
  }
  if($crypo=='Litecoin'){
    $asset_id_base = 'LTC';
    $asset_id_quote = 'USD';
    $rate=getCurrentRate($asset_id_base,$asset_id_quote);
    echo "$".number_format($rate,2);
  }
  if($crypo=='BitcoinCash'){
    $asset_id_base = 'BCH';
    $asset_id_quote = 'USD';
    $rate=getCurrentRate($asset_id_base,$asset_id_quote);
    echo "$".number_format($rate,2);
  }
  if($crypo=='Ethereum'){
    $asset_id_base = 'ETH';
    $asset_id_quote = 'USD';
    $rate=getCurrentRate($asset_id_base,$asset_id_quote);
    echo "$".number_format($rate,2);
  }
// }
// if($option==1){
//   if($crypo=='Bitcoin'){
//     $profit=getTotalProfitCrypo($conn,$user_ID,$crypo,$exchange_ID);
//     echo $profit;
//   }
//   if($crypo=='Litecoin'){
//     $profit=getTotalProfitCrypo($conn,$user_ID,$crypo,$exchange_ID);
//     echo $profit;
//   }
//   if($crypo=='BitcoinCash'){
//     $profit=getTotalProfitCrypo($conn,$user_ID,$crypo,$exchange_ID);
//     echo $profit;
//   }
//   if($crypo=='Ethereum'){
//     $profit=getTotalProfitCrypo($conn,$user_ID,$crypo,$exchange_ID);
//     echo $profit;
//   }
// }




 ?>
