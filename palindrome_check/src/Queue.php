<?php


namespace Palindrome;


class Queue
{
    public array $queue;

    public function __construct()
    {
        $this->queue = [];
    }

    public function push($element)
    {
        array_unshift($this->queue, $element);
    }

    public function pop()
    {
        return array_pop($this->queue);
    }

    public function isEmpty(): bool
    {
        return empty($this->queue);
    }
}
