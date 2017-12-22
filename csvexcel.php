<?php
$filexml='capital.xml';
if (file_exists($filexml)) {
    $xml = simplexml_load_file($filexml);
$f = fopen('capital.csv', 'w');
foreach ($xml->state as $state) {
    fputcsv($f, get_object_vars($state),',','"');
}
echo "<h2>file has been converted from .xml to .csv</h2>";
fclose($f);
}

?>