<?php 
if(!$dbconnect = mysql_connect('localhost', 'root', '')) {
   echo "Connection failed to the host 'localhost'.";
   exit;
} // if
if (!mysql_select_db('library')) {
   echo "Cannot connect to database 'library'";
   exit;
} // if

$table_id = 'country';
$query = "SELECT * FROM $table_id";
$dbresult = mysql_query($query, $dbconnect);

$doc = new DomDocument('1.0');
$root = $doc->createElement('root');
$root = $doc->appendChild($root);
while($row = mysql_fetch_assoc($dbresult)) {
$occ = $doc->createElement($table_id);
  $occ = $root->appendChild($occ);
  
  foreach ($row as $fieldname => $fieldvalue) {
  $child = $doc->createElement($fieldname);
    $child = $occ->appendChild($child);
	$value = $doc->createTextNode($fieldvalue);
    $value = $child->appendChild($value);
	} // foreach
} 
$xml_string = $doc->saveXML();
echo $xml_string;
?> 

