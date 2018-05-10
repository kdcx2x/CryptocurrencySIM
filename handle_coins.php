<?php
require_once "php/dbfunctions.php";
session_start();
  $user_ID=$_SESSION['userid'];
  $exchange=$_SESSION['exchange'];
  $crypo=$_POST["crypo"];
  $crypo_ID=getCrypoID($conn,$exchange_ID,$crypo);
  echo getUserCrypAmount($conn,$user_ID,$crypo_ID);
 ?>
