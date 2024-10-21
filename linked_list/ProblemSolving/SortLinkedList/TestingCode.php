<?php
include_once './AutoLoaded.php';


$n = new Node(3);
$list = new LinkedList($n);
$s = new Node(2);
$new_list = InsertNode::insertNode($list, NewNode: $s);
$a = new Node(1);
$new_list2 = InsertNode::insertNode($list, NewNode: $a);
// $a2 = new Node(0);
// $new_list3 = InsertNode::insertNode($list, NewNode: $a2);
// $a3 = new Node(2);
// $new_list4 = InsertNode::insertNode($list, NewNode: $a3);
// $a4 = new Node(0);
// $new_list5 = InsertNode::insertNode($list, NewNode: $a4);
// $a6 = new Node(1);
// $new_list6 = InsertNode::insertNode($list, NewNode: $a6);
// $a7 = new Node('h');
// $new_list7 = InsertNode::insertNode($list, NewNode: $a7);
// $a8 = new Node('i');
// $new_list8 = InsertNode::insertNode($list, NewNode: $a8);
// $a9 = new Node('j');
// $new_list9 = InsertNode::insertNode($list, NewNode: $a9);
// $a10 = new Node('k');
// $new_list10 = InsertNode::insertNode($list, NewNode: $a10);

echo "<br> linked list before sorted :";
DisplayNodes::DisplayNodes($list);
$sorting_linked_list = SortedLinkedList::sort($list);
echo "<br> linked list after sorted : ";
DisplayNodes::DisplayNodes($list);



?>