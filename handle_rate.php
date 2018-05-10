<?php
require_once "php/apifunctions.php";
$crypo=$_POST["crypo"];
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
 ?>
