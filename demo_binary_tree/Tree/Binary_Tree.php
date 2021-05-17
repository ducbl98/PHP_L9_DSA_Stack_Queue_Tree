<?php


namespace Tree;


class Binary_Tree
{
    public $root = null;

    public function isEmpty(): bool
    {
        return is_null($this->root);
    }

    public function insert($data)
    {
        $node = new Node($data);
        if ($this->isEmpty()) {
            $this->root = $node;
        } else {
            $this->insertNode($node, $this->root);
        }
    }

    public function insertNode($node, &$subtree)
    {
        if (is_null($subtree)) {
            $subtree = $node;
        } else if ($node->value > $subtree->value) {
            $this->insertNode($node, $subtree->right);
        } elseif ($node->value < $subtree->value) {
            $this->insertNode($node, $subtree->left);
        }
    }
    public function traverse(){
        echo $this->root->dump();
    }

}