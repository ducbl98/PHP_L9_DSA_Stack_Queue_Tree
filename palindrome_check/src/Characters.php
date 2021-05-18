<?php


namespace Palindrome;

use JetBrains\PhpStorm\Pure;

include_once "../vendor/autoload.php";

class Characters
{
    public string $string;
    public Stack $stack;
    public Queue $queue;


    #[Pure] public function __construct(string $string)
    {
        $this->string = $string;
        $this->stack = new Stack();
        $this->queue = new Queue();
    }

    public function createStorage()
    {
        $arr = str_split($this->string);
        foreach ($arr as $character) {
            $this->stack->push($character);
            $this->queue->push($character);
        }
    }

    public function checkPalindrome(): bool
    {
        $this->createStorage();
        $flag = true;
        while (!$this->stack->isEmpty()) {
            if ($this->stack->pop() !== $this->queue->pop()) {
                $flag = false;
                break;
            }
        }
        return $flag;
    }

    public function __toString(): string
    {
        $display = "";
        if ($this->checkPalindrome()) {
            $display .= $this->string . " is a palindrome";
        } else {
            $display .= $this->string . " is not a palindrome";
        }
        return $display;
    }
}