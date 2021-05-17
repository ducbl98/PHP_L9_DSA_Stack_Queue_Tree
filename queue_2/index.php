<?php

include_once "queue/Queue.php";
use Queue_1\Queue;

$queue= new Queue();
$queue->enqueue(2);
$queue->enqueue(3);
$queue->enqueue(4);
$queue->enqueue(5);
$queue->enqueue(6);
echo $queue->getQueueData();
$queue->dequeue();
echo $queue->getQueueData();