<?php

use Tree\Binary_Tree;

include_once "vendor/autoload.php";

$tree= new Binary_Tree();
$tree->insert(10);
$tree->insert(3);
$tree->insert(4);
$tree->insert(5);
$tree->insert(6);
$tree->insert(2);
$tree->insert(7);
$tree->traverse();