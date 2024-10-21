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
$a4 = new Node(6);
$new_list55 = InsertNode::insertNode($list, NewNode: $a4);
$a44 = new Node(7);
$new_list555 = InsertNode::insertNode($list, NewNode: $a44);
$a444 = new Node(8);
$new_list5555 = InsertNode::insertNode($list, NewNode: $a444);
$a4444 = new Node(9);
$new_list55555 = InsertNode::insertNode($list, NewNode: $a4444);
$a44444 = new Node(10);
$new_list555555 = InsertNode::insertNode($list, NewNode: $a44444);

echo "<br> orginal linked list before deleted";
DisplayNodes::DisplayNodes($list);
$listAfterDelete = RemoveEveryKthNodeOfTheLinkedList::removeEveryKthNodeOfLinkedList($list, 3);
echo "<br> linked list after deleted";
DisplayNodes::DisplayNodes($list);

?>