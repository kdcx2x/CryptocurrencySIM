<?php
require_once "php/apifunctions.php";
// getAllSymbols();
$symbol_id="COINBASE_SPOT_BTC_USD";
$amount="30SEC";
$startDate=(new DateTime())->modify('-9 hour');
$endDate=(new DateTime())->modify('-1 hour');
$startDate=$startDate->modify('-33 minute');

$limit=1000;
$type="MIN";
$amount1="30";
print_r($startDate);
echo "<br>";
print_r($endDate);
$interval = $startDate->diff($endDate);
$year= $interval->format('%y');
$month=$interval->format('%m');
$day=$interval->format('%d');
$hour=$interval->format('%h');
$minute=$interval->format('%i');
$second=$interval->format('%s');
echo "<br>";
echo $second;
echo "<br>";
echo $hour;
echo "<br>";
echo $minute;
echo "<br>";
echo $month;
echo "<br>";
if($type=="SEC"){
  if($day==0 && $month==0 && $year==0){
  $limit1=1000*$amount1;
  $answer=($minute*60)+($hour*3600)+$second;
  if($limit1<$answer){
      echo "bad";
      $check=0;
    }else {
      echo "good";
      $check=1;
    }
  }else{
    $check=0;
  }
}
if($type=="MIN"){
  if($month==0 && $year==0){
      $limit1=1000*$amount1;
      $answer=(1440*$day)+($hour*60)+$minutes;
      if($limit1=>$answer){
          $check=1;
        }else {
          $check=0;
        }
  }else{
    $check=0;
  }
}
if($type=="HRS"){
      $limit1=1000*$amount1;
      $answer=(24*$day)+(730.001*$month)+(8760*$year)+$hour;
      if($limit1=>$answer){
          $check=1;
        }else {
          $check=0;
        }
  }
  if($type=="DAY"){
        $limit1=1000*$amount1;
        $answer=(30.4167*$month)+(365*$year)+$day;
        if($limit1=>$answer){
            $check=1;
          }else {
            $check=0;
          }
    }
    if($type=="MTH"){
          $limit1=1000*$amount1;
          $answer=(12*$year)+$month;
          if($limit1=>$answer){
              $check=1;
            }else {
              $check=0;
            }
      }
      if($type=="YRS"){
            $limit1=1000*$amount1;
            $answer=$year;
            if($limit1=>$answer){
                $check=1;
              }else {
                $check=0;
              }
        }

// print_r(getOHLCVH($symbol_id, $amount, $startDate, $endDate, $limit));
?>
