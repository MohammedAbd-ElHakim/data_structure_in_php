<?php
include_once 'AutoLoaded.php';

$n = new NodeOfBinaryTree(1);
$root = new BinaryTree($n);
$queue = new LinkedListQueue(new NodeQueue());
// $root = new BinaryTree($n);

Inserter::insert($root, new NodeOfBinaryTree(2));
Inserter::insert($root, new NodeOfBinaryTree(3));
Inserter::insert($root, new NodeOfBinaryTree(4));
Inserter::insert($root, new NodeOfBinaryTree(5));


echo "<br>PrintLevelOrderTraversalLineByLine : ";
PrintLevelOrderTraversalLineByLine::levelOrderTraversal($queue, $root);

echo "<br>PrintLevelOrderTraversalLineByLine : ";
DisplayerQueue::display($queue);


?>