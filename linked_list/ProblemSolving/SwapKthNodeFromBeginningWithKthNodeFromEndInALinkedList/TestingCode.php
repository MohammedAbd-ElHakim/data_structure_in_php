<?php
include_once './AutoLoaded.php';

$n = new Node(1);
$list = new LinkedList($n);
$s = new Node(2);
$new_list = InsertNode::insertNode($list, NewNode: $s);
$a = new Node(3);
$new_list2 = InsertNode::insertNode($list, NewNode: $a);
$a2 = new Node(4);
$new_list3 = InsertNode::insertNode($list, NewNode: $a2);
$a3 = new Node(5);
$new_list4 = InsertNode::insertNode($list, NewNode: $a3);
// $a4 = new Node(3);
// $new_list5 = InsertNode::insertNode($list, NewNode: $a4);
// $a6 = new Node(7);
// $new_list6 = InsertNode::insertNode($list, NewNode: $a6);


echo "<br> linked list :";
DisplayNodes::DisplayNodes($list);
$sorting_linked_list = SwapKthNodeFromBeginningWithKthNodeFromEndInALinkedList::swap($list, 5);
echo "<br> linked list after sorted : ";
DisplayNodes::DisplayNodes($list);

?>