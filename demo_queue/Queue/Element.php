<?php


namespace Queue;


class Element
{
    public $value;
    public $next;

    /**
     * Element constructor.
     * @param $value
     */
    public function __construct($value)
    {
        $this->value = $value;
    }
}