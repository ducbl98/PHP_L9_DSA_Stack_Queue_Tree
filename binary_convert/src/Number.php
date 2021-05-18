<?php


namespace Binary;

include_once "../vendor/autoload.php";

use JetBrains\PhpStorm\Pure;


class Number
{
    public int $number;
    public Remainder $stack;

    /**
     * Number constructor.
     * @param int $number
     */
    #[Pure] public function __construct(int $number)
    {
        $this->number = $number;
        $this->stack = new Remainder();
    }


    public function convertBinary(): Remainder
    {
        $divide = $this->number;
        while ($divide > 0) {
            $this->stack->push(($divide % 2));
            $divide = floor($divide / 2);
        }
        return $this->stack;
    }
}