<?php


namespace Number;


class Numbers
{
    public array $stack;
    public int $limit;

    /**
     * Numbers constructor.
     * @param int $limit
     */
    public function __construct(int $limit = 10)
    {
        $this->stack = [];
        $this->limit = $limit;
    }

    public function push($element)
    {
        array_push($this->stack, $element);
    }

    public function pop()
    {
        return array_pop($this->stack);
    }

    public function isEmpty(): bool
    {
        return empty($this->stack);
}

}