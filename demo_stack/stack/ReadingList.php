<?php


namespace Stack;


use Exception;
use http\Exception\RuntimeException;

class ReadingList
{
    protected array $stack;
    protected int $limit;

    /**
     * StackReadingList constructor.
     * @param int $limit
     */
    public function __construct(int $limit = 10)
    {
        $this->stack = [];
        $this->limit = $limit;
    }

    /**
     * @throws Exception
     */
    public function push($item): void
    {
        if (count($this->stack) < $this->limit) {
            array_unshift($this->stack, $item);
        } else {
            throw new Exception("Stack is full");
        }
    }

    public function isEmpty(): bool
    {
        return empty($this->stack);
    }

    /**
     * @throws Exception
     */
    public function pop(): string
    {
        if ($this->isEmpty()) {
            throw new Exception("Stack is empty");
        } else {
            return array_shift($this->stack)."<br>";
        }
    }

    public function top(): string
    {
        return "Top: ".current($this->stack)."<br>";
    }

    public function getStackData(): string
    {
        return "Stack: ".implode(";",$this->stack)."<br>";
    }
}