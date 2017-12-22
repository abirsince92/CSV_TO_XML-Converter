<?php

$xmlDoc = new DOMDocument();
$xmlDoc->load("capital.xml");
$mysql_hostname = "localhost"; // Example : localhost
$mysql_user     = "root";
$mysql_password = "";
$mysql_database = "capital";

$bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Oops some thing went wrong");
mysql_select_db($mysql_database, $bd) or die("Oops some thing went wrong");

$xmlObject = $xmlDoc->getElementsByTagName('state');
$itemCount = $xmlObject->length;

for ($i=0; $i < $itemCount; $i++){
  $name = $xmlObject->item($i)->getElementsByTagName('name')->item(0)->childNodes->item(0)->nodeValue;
  $capital  = $xmlObject->item($i)->getElementsByTagName('capital')->item(0)->childNodes->item(0)->nodeValue;
   $river  = $xmlObject->item($i)->getElementsByTagName('river')->item(0)->childNodes->item(0)->nodeValue;
  $sql   = "INSERT INTO capitalstate(name,capital,river) VALUES ('$name', '$capital','$river')";
  mysql_query($sql);
  //print "Finished Item $title n<br/>";
}
?>