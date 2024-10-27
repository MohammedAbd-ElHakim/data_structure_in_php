<?php
include_once 'Autoload.php';

$root = new NodeBinaryTree('1');
$binaryTree = new BinaryTree($root);
InsertToBinaryTree::insert($binaryTree->root, new NodeBinaryTree(2));
InsertToBinaryTree::insert($binaryTree->root, new NodeBinaryTree(4));
InsertToBinaryTree::insert($binaryTree->root, new NodeBinaryTree(5));
InsertToBinaryTree::insert($binaryTree->root, new NodeBinaryTree(3));
InsertToBinaryTree::insert($binaryTree->root, new NodeBinaryTree(6));

echo "<br>binary tree : ";
DisplayerBinaryTree::preOrderTraversal($binaryTree->root);
?>