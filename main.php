<?php

require_once 'checkLengthChar.php';
require_once 'uppercase.php';
require_once 'icon.php';
require_once 'number.php';
require_once 'symbol.php'; 

$checkLengthChar = new checkLengthChar;
echo $checkLengthChar->checkLength()."\n";

$uppercase = new uppercase;
echo $uppercase->checkUppercase()."\n";

$icon = new icon;
echo $icon->checkIcon()."\n";

$number = new number;
echo $number->checkNumber()."\n";

$symbol = new symbol;
echo $symbol->checkSymbol();
