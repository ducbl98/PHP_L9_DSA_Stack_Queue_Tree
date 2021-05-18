<?php


namespace Palindrome;


class Stack
{
    public array $stack;

    public function __construct()
    {
        $this->stack = [];
    }

    public function push($element)
    {
        array_unshift($this->stack, $element);
    }

    public function pop()
    {
        return array_shift($this->stack);
    }

    public function isEmpty(): bool
    {
        return empty($this->stack);
    }
}