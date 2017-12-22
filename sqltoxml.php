<?php



mysql_connect("localhost", "root", "");


mysql_select_db("library");

$sql = "SELECT udid, country FROM country ORDER BY udid";
$res = mysql_query($sql);

$xml = new XMLWriter();

$xml->openURI("php://output");
$xml->startDocument();
$xml->setIndent(true);

$xml->startElement('countries');

while ($row = mysql_fetch_assoc($res)) {
   $xml->startElement("country");

  $xml->writeAttribute('udid', $row['udid']);
  $xml->writeRaw($row['country']);

  $xml->endElement();
}

$xml->endElement();

header('Content-type: text/content.xml');
$xml->flush();
?>