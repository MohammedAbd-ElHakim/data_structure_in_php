<?php
include_once 'Autoload.php';

$root = new NodeBinaryTree(9);
$binaryTree = new BinaryTree($root);
// InsertToBinaryTree::insert($binaryTree->root, new NodeBinaryTree(2));
// InsertToBinaryTree::insert($binaryTree->root, new NodeBinaryTree(4));
// InsertToBinaryTree::insert($binaryTree->root, new NodeBinaryTree(5));
// InsertToBinaryTree::insert($binaryTree->root, new NodeBinaryTree(3));
// InsertToBinaryTree::insert($binaryTree->root, new NodeBinaryTree(6));
// InsertToBinaryTree::insert($binaryTree->root, new NodeBinaryTree(7));
$binaryTree->root->left = new NodeBinaryTree(6);
$binaryTree->root->right = new NodeBinaryTree(10);
$binaryTree->root->left->left = new NodeBinaryTree(4);
$binaryTree->root->left->right = new NodeBinaryTree(7);
$binaryTree->root->right->right = new NodeBinaryTree(11);
$binaryTree->root->left->left->left = new NodeBinaryTree(3);
$binaryTree->root->left->left->right = new NodeBinaryTree(5);
$binaryTree->root->left->right->right = new NodeBinaryTree(8);

echo "<br>ITS BST : ";
$isBst = IterativeApproachToCheckIfABinaryTreeIsBSTOrNot::CheckItBypreOrderTraversal($binaryTree->root);
if ($isBst) {
    echo "<br>YES";
} else {
    echo "<br>No";
}
?>