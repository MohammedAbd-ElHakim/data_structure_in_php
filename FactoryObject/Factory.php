<?php
include_once 'AutoLoading.php';

class Factory
{
    public static function createNewObject($choose)
    {
        if ($choose == 'stack') {
            return new LinkedList(new Node());
        } elseif ($choose == 'NodeQueue') {
            return new NodeQueue();
        } elseif ($choose == 'LinkedListQueue') {
            return new LinkedListQueue();
        } elseif ($choose == 'NodeOfBinaryTree') {
            return new NodeOfBinaryTree();
        } elseif ($choose == 'BinaryTree') {
            return new BinaryTree();
        }
    }
}
?>