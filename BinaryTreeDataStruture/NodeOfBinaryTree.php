<?php
include_once 'AutoLoaded.php';

class NodeOfBinaryTree
{
    public $data;
    public ?NodeOfBinaryTree $left, $right;
    public function __construct($data)
    {
        $this->data = $data;
        $this->left = null;
        $this->right = null;
    }
}
?>