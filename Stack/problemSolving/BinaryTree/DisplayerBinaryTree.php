<?php
include_once 'Autoload.php';

class DisplayerBinaryTree
{
    #preorder traversal
    public static function preOrderTraversal(NodeBinaryTree $root)
    {
        if ($root == null) {
            return;
        }

        echo "<br>========================start====" . $root->data . "===================";
        self::displayNode($root);
        if ($root->left !== null) {
            echo "<br>Go To Left of " . $root->data;
            self::preOrderTraversal($root->left);
        }

        if ($root->right !== null) {
            echo "<br>Go To Right of " . $root->data;
            self::preOrderTraversal($root->right);
        }
        echo "<br>========================end====" . $root->data . "===================";
    }

    public static function displayNode(NodeBinaryTree $node)
    {
        if ($node == null) {
            return null;
        }
        echo "<br>data : " . $node->data;
        if ($node->left !== null)
            echo "<br>left : " . $node->left->data;
        else
            echo "<br>left is null";
        if ($node->right !== null)
            echo "<br>right : " . $node->right->data;
        else
            echo "<br>right is null";
    }
}

?>