<?php
include_once 'AutoLoaded.php';

$n = new NodeOfBinaryTree(10);
$root = new BinaryTree($n);

Inserter::insert($root, new NodeOfBinaryTree(2));
Inserter::insert($root, new NodeOfBinaryTree(15));
Inserter::insert($root, new NodeOfBinaryTree(7));
Inserter::insert($root, new NodeOfBinaryTree(17));


echo "<br>preOrder : ";
DfsTraversal::preOrder($root->Root);

// echo "<br>postOrder : ";
// DfsTraversal::postOrder($root->Root);

// echo "<br>inOrder : ";
// DfsTraversal::inOrder($root->Root);

echo "<br>display : ";
DfsTraversal::display($root->Root);
?>