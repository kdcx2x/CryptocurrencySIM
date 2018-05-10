<?php
require "php/dbfunctions.php";
session_start();
// $type=5;
$crypo=$_POST["crypo"];
$bPrice=$_POST["bPrice"];
$spent=$_POST["spent"];
$type=$_POST["type"];
$rate=(float)$_POST["rate"];
$coins=(float)$_POST["coins"];
$rate1=$_POST["rate1"];
// $bPrice=floatval($bPrice);
// echo $spent;
// $bPrice=floatval(preg_replace('/[^0-9]+/', '', $bPrice), 10);
// $spent=(float)number_format($spent,2);
// echo $spent;
// $spent=(float)intval(preg_replace('/[^0-9]+/', '', $spent), 10);
// $spent=$spent*(.01);
// echo $bPrice;
$user_ID=$_SESSION['userid'];

// echo $user_ID;
$exchange_ID=$_SESSION['exchangeID'];
// echo $exchange_ID;
// echo $type;
if($type==3){
  $bPrice=intval(preg_replace('/[^0-9]+/', '', $bPrice), 10);
  $bPrice=$bPrice*0.01;
  // echo $bPrice;
  // echo "innn";
  if(addCoinsCrypto($conn,$bPrice,$spent,$crypo,$exchange_ID,$user_ID)==true){
    echo "good";
  }else{
    // echo "in";
    echo "bad";
  }
}
if($type==2){
  $spent=floatval($spent);
  // echo $rate1;
  $rate1=floatval(preg_replace('/[^0-9]+/','', $rate1), 10);
  // $rate1=floatval($rate1);
  // echo $rate1;
  // $spent=(float)number_format($spent,2);
  $coins=$spent/$rate1;
  // echo $coins;
  if(subractCoinsCrypto($conn,$rate1,$coins,$crypo,$exchange_ID,$user_ID)==true){
    echo "good";
  }else{
    // echo "sss";
    echo "bad";
  }
}
if($type==1){
  if($crypo=='Bitcoin'){
    $asset_id_base = 'BTC';
    $asset_id_quote = 'USD';
    $rate=getCurrentRate($asset_id_base,$asset_id_quote);
    echo number_format($rate,2);
  }
  if($crypo=='Litecoin'){
    $asset_id_base = 'LTC';
    $asset_id_quote = 'USD';
    $rate=getCurrentRate($asset_id_base,$asset_id_quote);
    echo number_format($rate,2);
  }
  if($crypo=='BitcoinCash'){
    $asset_id_base = 'BCH';
    $asset_id_quote = 'USD';
    $rate=getCurrentRate($asset_id_base,$asset_id_quote);
    echo number_format($rate,2);
  }
  if($crypo=='Ethereum'){
    $asset_id_base = 'ETH';
    $asset_id_quote = 'USD';
    $rate=getCurrentRate($asset_id_base,$asset_id_quote);
    echo number_format($rate,2);
  }
}
if($type==4){

  // echo $rate1;
  // echo gettype($rate1);
  $rate1=(float)intval(preg_replace('/[^0-9]+/', '', $rate1), 10);
  // echo $rate1;

  // echo $rate1;
  // $rate1=(float)number_format($rate1,2);
  $coins=(float)number_format($coins,2);
  // echo gettype($rate1);
  // echo gettype($coins);
  // echo $coins;
  $buy=$coins*$rate1;
  $buy=$buy*(.01);
  // echo $rate1;
  // echo $buy;
  echo number_format($buy,2);
}
if($type==5){
// echo $spent;
  $spent=floatval($spent);
  // echo $rate1;
  $rate1=intval(preg_replace('/[^0-9]+/','', $rate1), 10);
  $rate1=$rate1*(.01);
  // $rate1=floatval($rate1);
  // echo $rate1;
  // $spent=(float)number_format($spent,2);
  $coins=$spent/$rate1;
  echo $coins;

  // echo $rate1;
  // echo number_format($coins,6);
}
 ?>
