<?php
include_once "src/Numbers.php";

use Number\Numbers;

$numbers = [1, 2, 3, 4, 5, 6];
$stack = new Numbers(20);
foreach ($numbers as $number) {
    $stack->push($number);
    array_shift($numbers);
}
while (!$stack->isEmpty()) {
    $element = $stack->pop();
    array_push($numbers, $element);
}
echo implode(",", $numbers);
