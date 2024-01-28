<?php
require_once 'classes/TextPrinter.php';
require_once 'classes/UpperCasePrinter.php';

$printer = new TextPrinter();
$printer->print();
echo "\n";

$upperCasePrinter = new UpperCasePrinter();
$upperCasePrinter->print();
echo "\n";