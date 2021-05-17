<?php

use Stack\ReadingList;

include_once "vendor/autoload.php";
$myBooks = new ReadingList(5);

try {
    $myBooks->push('A Dream of Spring');
    echo $myBooks->top();
    echo $myBooks->getStackData();
    $myBooks->push('The Winds of Winter');
    echo $myBooks->top();
    echo $myBooks->getStackData();
    $myBooks->push('A Dance with Dragons');
    echo $myBooks->top();
    echo $myBooks->getStackData();
    $myBooks->push('A Feast for Crows');
    echo $myBooks->top();
    echo $myBooks->getStackData();
    $myBooks->push('A Storm of Swords');
    echo $myBooks->top();
    echo $myBooks->getStackData();
    $myBooks->push('A Clash of Kings');
    echo $myBooks->top();
    echo $myBooks->getStackData();
    $myBooks->push('A Game of Thrones');
} catch (Exception $e) {
    echo "Error : " . $e->getMessage();
}
try {
    echo $myBooks->pop();
    echo $myBooks->pop();
    echo $myBooks->top();
    echo $myBooks->pop();
    echo $myBooks->pop();
    echo $myBooks->pop();
    echo $myBooks->pop();
    echo $myBooks->pop();
    echo $myBooks->top();
    $myBooks->push('The Armageddon Rag');
    echo $myBooks->pop();
} catch (Exception $e) {
    echo "Error : " . $e->getMessage();
}
