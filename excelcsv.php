<?php
ini_set('display_errors', true);
ini_set('auto_detect_line_endings', true);
$xmlWriter = new XMLWriter();
$xmlWriter->openUri('Book1.xml');
$xmlWriter->setIndent(true);
$xmlWriter->startDocument('1.0', 'UTF-8');
$xmlWriter->startElement('root');

$tsvFile = new SplFileObject('Book1.csv');
$tsvFile->setFlags(SplFileObject::READ_CSV);
$tsvFile->setCsvControl(" ");

$lines = explode("\n", $tsvFile);
foreach ($lines as $line=>$row) {
    if($line > 0 ) {
        $xmlWriter->writeElement('data');
        $xmlWriter->writeElement('name', $row[0]); 
        $xmlWriter->writeElement('age', $row[1]);
        $xmlWriter->writeElement('address', $row[2]);
        $xmlWriter->endElement();
         }
    }

$xmlWriter->endElement();
$xmlWriter->endDocument();?>