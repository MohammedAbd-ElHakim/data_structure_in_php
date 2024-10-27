<?php
include_once 'Autoload.php';

class NodeBinaryTree
{
    public $data;
    public ?NodeBinaryTree $left, $right;

    public function __construct($data)
    {
        $this->data = $data;
        $this->left = null;
        $this->right = null;
    }
}

?>