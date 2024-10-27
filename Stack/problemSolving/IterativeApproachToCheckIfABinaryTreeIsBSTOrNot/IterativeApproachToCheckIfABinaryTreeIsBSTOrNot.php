<?php
include_once 'Autoload.php';

class IterativeApproachToCheckIfABinaryTreeIsBSTOrNot
{
    #preorder traversal
    public static function CheckItBypreOrderTraversal(NodeBinaryTree $root)
    {
        if ($root == null) {
            return;
        }

        $isBST = self::checkNow($root);
        if (!$isBST) {
            return false;
        }
        if ($root->left !== null) {
            self::CheckItBypreOrderTraversal($root->left);
        }

        if ($root->right !== null) {
            self::CheckItBypreOrderTraversal($root->right);
        }
        return true;
    }

    public static function checkNow(NodeBinaryTree $node)
    {
        if ($node == null) {
            return null;
        }
        $parentData = $node->data;
        $leftData = 0;
        $rightData = 0;
        if ($node->left !== null) {
            $leftData = $node->left->data;
        }

        if ($node->right !== null) {
            $rightData = $node->right->data;
        }

        if ($leftData >= $parentData) {
            return false;
        }

        if ($rightData < $leftData && $rightData !== null) {
            return false;
        } else
            return true;

    }
}

?>