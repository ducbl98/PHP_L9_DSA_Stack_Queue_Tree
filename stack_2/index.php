<?php

use stack_1\Stack;

include_once "vendor/autoload.php";

$stack = new Stack(7);
for ($i = 0; $i < 5; $i++) {
    $stack->push($i);
}
echo $stack->getStackData();
$stack->pop();
$stack->pop();
$stack->pop();
echo $stack->getStackData();