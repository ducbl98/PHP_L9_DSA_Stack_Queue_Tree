<?php


namespace Tree;

include_once "../vendor/autoload.php";

class Node
{
    public $value;
    public $left;
    public $right;

    /**
     * Node constructor.
     */
    public function __construct($value)
    {
        $this->value = $value;
        $this->left = null;
        $this->right = null;
    }

    public function dump()
    {
        if (!is_null($this->left)) {
            $this->left->dump();
        }
        if (!is_null($this->right)) {
            $this->right->dump();
        }
    }
}