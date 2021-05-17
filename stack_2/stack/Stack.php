<?php


namespace stack_1;

use Exception;

class Stack
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
        try {
            if (count($this->stack) < $this->limit) {
                array_unshift($this->stack, $item);
            } else {
                throw new Exception("Stack is full");
            }
        }catch (Exception $e){
            echo "Error :".$e->getMessage();
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
        try {
            if ($this->isEmpty()) {
                throw new Exception("Stack is empty");
            } else {
                return array_shift($this->stack) . "<br>";
            }
        }catch (Exception $e){
            echo "Error :".$e->getMessage();
        }
    }

    public function top(): string
    {
        return "Top: " . current($this->stack) . "<br>";
    }

    public function getStackData(): string
    {
        return "Stack: " . implode(";", $this->stack) . "<br>";
    }
}