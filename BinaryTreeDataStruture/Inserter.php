<?php
include_once 'AutoLoaded.php';

class Inserter
{
    public static function insert(BinaryTree $tree, $node)
    {
        if ($tree->Root == null) {
            $tree->Root = $node;
            return $tree;
        } else {
            self::insertRecursive($tree->Root, $node);
        }
    }

    public static function insertRecursive(NodeOfBinaryTree $parentNode, NodeOfBinaryTree $node)
    {
        if ($node->data < $parentNode->data) {
            echo "<br>will insert in left : ";
            echo "<br>parent data : " . $parentNode->data;
            echo "<br>newNode Data : " . $node->data;
            echo "<br>===============";

            if ($parentNode->left === null) {
                $parentNode->left = $node;
            } else {
                self::insertRecursive($parentNode->left, $node);
            }
        } elseif ($node->data >= $parentNode->data) {
            echo "<br>will insert in right : ";
            echo "<br>parent data : " . $parentNode->data;
            echo "<br>newNode Data : " . $node->data;
            echo "<br>===============";

            if ($parentNode->right === null) {
                $parentNode->right = $node;
            } else {
                self::insertRecursive($parentNode->right, $node);
            }
        }
    }
}
?>