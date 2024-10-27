<?php
include_once 'Autoload.php';

class InsertToBinaryTree
{
    public static function insert(NodeBinaryTree $root, NodeBinaryTree $newNode)
    {

        # left child containing values less than the parent node 
        #the right child containing values greater than the parent node
        if ($root == null) {
            $root = $newNode;
            return;
        }

        $valueOfRoot = $root->data;
        $newNodeValue = $newNode->data;
        if ($newNodeValue < $valueOfRoot) {
            #add at left
            if ($root->left == null) {
                $root->left = $newNode;
            } elseif ($root->left !== null) {
                self::insert($root->left, $newNode);
            }
        } elseif ($newNodeValue >= $valueOfRoot) {
            # add at right
            if ($root->right == null) {
                $root->right = $newNode;
            } elseif ($root->right !== null) {
                self::insert($root->right, $newNode);
            }
        }
    }

}

?>