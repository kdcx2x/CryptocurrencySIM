<?php
require 'php/dbfunctions.php';
session_start();
$crytpo=$_POST["crypto"];
$period=$_POST["period"];
$user_ID=$_SESSION['userid'];
$exchange_ID=$_SESSION['exchangeID'];
echo $crytpo;
// if($period=="Hour"){
//   $hourProfit=getHourProfit($conn,$user_ID,$crypo,$exchange_ID);
//   if($hourProfit==false){
//     echo "bad";
//   }else {
//       echo "$".number_format($hourProfit,2);
//   }
// }
// if($period=="Day"){
//   $dayProfit=getDayProfit($conn,$user_ID,$crypo,$exchange_ID);
//   if($DayProfit==false){
//     echo "bad";
//   }else {
//
//       echo "$".number_format($dayProfit,2);
//   }
// }
// if($period=="Week"){
//   $weekProfit=getWeekProfit($conn,$user_ID,$crypo,$exchange_ID);
//   if($weekProfit==false){
//     echo "bad";
//   }else {
//     echo "$".number_format($weekProfit,2);
//   }
// }
// if($period=="Month"){
//   $monthProfit=getMonthProfit($conn,$user_ID,$crypo,$exchange_ID);
//   if($monthProfit==false){
//     echo "bad";
//   }else {
//     echo "$".number_format($monthProfit,2);
//   }
// }
// if($period=="Year"){
//   $yearProfit=getYearProfit($conn,$user_ID,$crypo,$exchange_ID);
//   if($yearProfit==false){
//     echo "bad";
//   }else{
//     echo "$".number_format($yearProfit,2);
//
//   }
// }

 ?>
