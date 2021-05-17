<?php


use Queue\Element;
use Queue\Queue;

include_once "vendor/autoload.php";

$queue= new Queue();
$queue->enqueue(1);
$queue->enqueue(2);
$queue->enqueue(2);
$queue->enqueue(2);
echo $queue->getQueueData();
$queue->enqueue(3);
echo $queue->getQueueData();
$queue->dequeue();
$queue->dequeue();
$queue->dequeue();
echo $queue->getQueueData();
echo $queue->getTopData();
$queue->enqueue("123");
echo $queue->getQueueData();