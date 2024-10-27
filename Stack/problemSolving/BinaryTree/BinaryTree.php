<?php
include_once 'Autoload.php';

class BinaryTree
{
    public NodeBinaryTree $root;
    public function __construct(NodeBinaryTree $root)
    {
        $this->root = $root;
    }
}

?>