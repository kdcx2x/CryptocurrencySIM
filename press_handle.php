<?php
  $xml=simplexml_load_file("https://news.google.com/news/u/0/rss/headlines/section/q/cryptocurrency/cryptocurrency?ned=us&hl=en&gl=US");

  // echo $xml["version"];
  // $xml = simplexml_load_string("https://news.google.com/news/u/0/rss/headlines/section/q/cryptocurrency/cryptocurrency?ned=us&hl=en&gl=US");
// $Axml=(array)$xml;
// print_r($Axml[0]);
// echo gettype ($xml["lastBuildDate"]);
// var_dump($xml["@attributes"]["channel"]["generator"]);
// var_dump($xml[]);
echo gettype($xml);

// echo "<br>";
// print_r($xml["@attributes"]["channel"]["generator"]);
// var_dump(get_object_vars($xml));
  // print_r();
  // $json = json_encode($xml);
  // echo $json;

?>
