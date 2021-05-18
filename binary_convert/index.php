<?php

use Binary\Number;

include_once "vendor/autoload.php";

$number = new Number(2545151);
echo "Decimal :" . $number->number . " ► Binary :" . $number->convertBinary();