<?php
include_once 'AutoLoaded.php';

class DfsTraversal
{
    #DFS هي خوارزميه للمرور علي كل النودز الموجوده بالشجره
    #خوارزميه الDFS يمكن تنفيزها ب3 طرق في الBINARY TREE 
    #pre,in,post -> order
    #pre order -> node->(data,left,right)
    #post order -> node(left,right,data)
    #in order -> node->(left,data,right)

    #preOrder Traversal data,left,right
    public static function preOrder(NodeOfBinaryTree $node)
    {
        if ($node === null) {
            return $node;
        }

        echo "<br>" . $node->data;
        if ($node->left !== null) {
            self::preOrder($node->left);

        }
        if ($node->right !== null) {
            self::preOrder($node->right);
        }
    }
    #inOrder left,data,right
    public static function inOrder(NodeOfBinaryTree $node)
    {
        if ($node == null)
            return $node;

        self::preOrder($node->left);
        echo "<br>" . $node->data;
        self::preOrder($node->right);
    }

    #postOrder left,right,data
    public static function postOrder(NodeOfBinaryTree $node)
    {
        if ($node == null)
            return $node;

        echo "<br>==================";
        echo "<br>CurrentNode : " . $node->data;
        echo "<br>ItsLeft : " . $node->left->data;
        echo "<br>ItsRight : " . $node->right->data;
        echo "<br>==================";
        self::preOrder($node->left);
        self::preOrder($node->right);
        echo "<br> CurrentNode : " . $node->data;
    }



    public static function display($root)
    {
        self::displayNode($root);
    }

    public static function displayNode($node)
    {
        if ($node !== null) {
            echo "<br>Parent Node: " . $node->data . "\n";
            if ($node->left !== null) {
                echo "<br>Left Child: " . $node->left->data . "\n";
            } else {
                echo "<br>Left Child: NULL\n";
            }
            if ($node->right !== null) {
                echo "<br>Right Child: " . $node->right->data . "\n";
            } else {
                echo "<br>Right Child: NULL\n";
            }

            echo "<br>====================";
            self::displayNode($node->left);
            self::displayNode($node->right);
        }
    }
}
?>