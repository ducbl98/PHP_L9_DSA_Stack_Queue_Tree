<?php

use Patient\QueuePatient;

include_once "vendor/autoload.php";

$queue= new QueuePatient();
$queue->enqueue("A",2);
$queue->enqueue("B",1);
$queue->enqueue("C",1);
$queue->enqueue("D",1);
$queue->enqueue("E",3);
$queue->enqueue("F",2);
$queue->enqueue("G",2);
echo $queue->dequeue();
echo "<pre>";
var_dump($queue);