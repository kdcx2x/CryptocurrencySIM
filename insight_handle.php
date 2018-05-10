<?php
require_once "php/apifunctions.php";
date_default_timezone_set("America/New_York");
$user_ID=$_SESSION['userid'];
$exchange_ID=  $_SESSION['exchangeID'];
$crytpo=$_POST["crytpo"];
$type=$_POST["type"];
$amount=$_POST["amount"];
$amount1=$amount;
$time_start=$_POST["timeStart"];
$time_end=$_POST["timeEnd"];
$limit=1000;
// $crytpo="Bitcoin";
// $type="Year";
// $time_start="2015-04-01T01:00";
// $time_end="2018-03-12T13:56";
// echo $time_start;
// $amount=1;
$amount1=$amount;
$startchars = preg_split('//', $time_start, -1, PREG_SPLIT_NO_EMPTY);
$endchars = preg_split('//', $time_end, -1, PREG_SPLIT_NO_EMPTY);
// print_r($chars);
$startdate1=$startchars[0];
$startdate1.=$startchars[1];
$startdate1.=$startchars[2];
$startdate1.=$startchars[3];
$startdate2=$startchars[5];
$startdate2.=$startchars[6];
$startdate3=$startchars[8];
$startdate3.=$startchars[9];
$starttime1=$startchars[11];
$starttime1.=$startchars[12];
$starttime2=$startchars[14];
$starttime2.=$startchars[15];
///////////////////////////////////////
$enddate1=$endchars[0];
$enddate1.=$endchars[1];
$enddate1.=$endchars[2];
$enddate1.=$endchars[3];
$enddate2=$endchars[5];
$enddate2.=$endchars[6];
$enddate3=$endchars[8];
$enddate3.=$endchars[9];
$endtime1=$endchars[11];
$endtime1.=$endchars[12];
$endtime2=$endchars[14];
$endtime2.=$endchars[15];
// $time_start="ee";
// echo $endDate1;
// echo $startDate1;
$startDate=new DateTime();
$endDate=new DateTime();
$startDate->setDate($startdate1,$startdate2,$startdate3);
$startDate->setTime($starttime1,$starttime2);
$endDate->setDate($enddate1,$enddate2,$enddate3);
$endDate->setTime($endtime1,$endtime2);
$interval = $startDate->diff($endDate);
$year= $interval->format('%y');
$month=$interval->format('%m');
$day=$interval->format('%d');
$hour=$interval->format('%h');
$minute=$interval->format('%i');
$second=$interval->format('%s');
// print_r($startDate);
// print_r($endDate);
// echo $type;


// echo $type;
if($type=="Second"){
  if($day==0 && $month==0 && $year==0){
  $limit1=1000*$amount1;
  $answer=($minute*60)+($hour*3600)+$second;
  if($limit1<$answer){
      // echo "bad";
      $check=0;
    }else {
      // echo "good";
      $check=1;
    }
  }else{
    $check=0;
  }
}
if($type=="Minute"){
  if($month==0 && $year==0){
      $limit1=1000*$amount1;
      $answer=(1440*$day)+($hour*60)+$minutes;
      if($limit1>=$answer){
          $check=1;
        }else {
          $check=0;
        }
  }else{
    $check=0;
  }
}
if($type=="Hour"){
      $limit1=1000*$amount1;
      $answer=(24*$day)+(730.001*$month)+(8760*$year)+$hour;
      if($limit1>=$answer){
          $check=1;
        }else {
          $check=0;
        }
  }
if($type=="Day"){
    $limit1=1000*$amount1;
    $answer=(30.4167*$month)+(365*$year)+$day;
    if($limit1>=$answer){
        $check=1;
      }else {
        $check=0;
      }
}
if($type=="Month"){
  $limit1=1000*$amount1;
  $answer=(12*$year)+$month;
  if($limit1>=$answer){
      $check=1;
    }else {
      $check=0;
    }
}
if($type=="Year"){

    $limit1=1000*$amount1;
      // echo $limit1;
    $answer=$year;
    // echo $limit1;
    // echo $answer;
    // echo $answer;
    if($limit1>=$answer){
        $check=1;
      }else {
        $check=0;
      }
}
// echo $check;
if($check==1){
  if($exchange_ID==1){
    if($crytpo=="Bitcoin"){
      $symbol_id="COINBASE_SPOT_BTC_USD";
    }
    if($crytpo=="Litecoin"){
      $symbol_id="COINBASE_SPOT_LTC_USD";
    }
    if($crytpo=="Bitcoin Cash"){
      $symbol_id="COINBASE_SPOT_BCH_USD";
    }
    if($crytpo=="Ethereum"){
      $symbol_id="COINBASE_SPOT_ETH_USD";
    }
  }
  if($exchange_ID==2){
    if($crytpo=="Bitcoin"){
      $symbol_id="KRAKRN_SPOT_BTC_USD";
    }
    if($crytpo=="Litecoin"){
      $symbol_id="KRAKRN_SPOT_LTC_USD";
    }
    if($crytpo=="Bitcoin Cash"){
      $symbol_id="KRAKRN_SPOT_BCH_USD";
    }
    if($crytpo=="Ethereum"){
      $symbol_id="KRAKRN_SPOT_ETH_USD";
    }

  }
  if($exchange_ID==3){
    if($crytpo=="Bitcoin"){
      $symbol_id="BITSTAMP_SPOT_BTC_USD";
    }
    if($crytpo=="Litecoin"){
      $symbol_id="BITSTAMP_SPOT_LTC_USD";
    }
    if($crytpo=="Bitcoin Cash"){
      $symbol_id="BITSTAMP_SPOT_BCH_USD";
    }
    if($crytpo=="Ethereum"){
      $symbol_id="BITSTAMP_SPOT_ETH_USD";
    }

  }
  if($exchange_ID==4){
    if($crytpo=="Bitcoin"){
      $symbol_id="GEMINI_SPOT_BTC_USD";
    }
    if($crytpo=="Ethereum"){
      $symbol_id="GEMINI_SPOT_ETH_USD";
    }
  }
  // echo $symbol_id;
  if($type=="Second"){
    $type="SEC";
  }
  if($type=="Minute"){
    $type="MIN";
  }
  if($type=="Hour"){
    $type="HRS";
  }
  if($type=="Day"){
    $type="DAY";
  }
  if($type=="Month"){
    $type="MTH";
  }
  if($type=="Year"){
    $type="YRS";
  }
  $amount.=$type;
  // echo $symbol_id."<br>";
  // echo $amount."<br>";
  // print_r($startDate);
  // echo "<br>";
  // print_r($endDate);
  // echo "<br>";
  // echo $amount;
   $OHLCV=getOHLCVH($symbol_id, $amount, $startDate, $endDate, $limit);
   // $newOH=json_decode($OHLCV[0]);
   $length=count($OHLCV);
   // echo $length;
   $hlc=array();
   $d=0;
   for($i=0;$i<$length;$i++){
     $d=0;
     $newOH=get_object_vars($OHLCV[$i]);
     $hlc[$i][$d]=$newOH["price_low"];
     $d++;
     $hlc[$i][$d]=$newOH["price_high"];
   }
   echo json_encode($hlc);
   // echo $newOH["price_low"];
   // echo gettype($newOH);
   // echo $newOH
   // print_r($OHLCV);
   // $lenth=count($newOH);
   // $d=0;
   // echo $lenth;
   // $hlc=array();
   // for($i=0;$i<$lenth;$i++){
   //    $newOH[$i]["price_high"]=$hlc[$d];
   //   $d++;
   //    $newOH[$i]["price_low"]=$hlc[$d];
   //    $d++;
   //  }
   //  $hlc[$d]=$lenth;
   //  print_r($hlc);
   // echo json_encode($OHLCV);

   // return $jso;

}else{
  echo "no";
}

















?>
