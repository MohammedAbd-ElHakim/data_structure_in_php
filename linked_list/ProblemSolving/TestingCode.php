<?php
include_once './AutoLoaded.php';


$n = new Node('A');
$list = new LinkedList($n);
$s = new Node("B");
$new_list = InsertNode::insertNode($list, NewNode: $s);
$a = new Node('C');
$new_list2 = InsertNode::insertNode($list, NewNode: $a);
$a2 = new Node('D');
$new_list3 = InsertNode::insertNode($list, NewNode: $a2);
$a3 = new Node('E');
$new_list4 = InsertNode::insertNode($list, NewNode: $a3);
$a4 = new Node('F');
$new_list5 = InsertNode::insertNode($list, NewNode: $a4);
$a6 = new Node('g');
$new_list6 = InsertNode::insertNode($list, NewNode: $a6);
$a7 = new Node('h');
$new_list7 = InsertNode::insertNode($list, NewNode: $a7);
$a8 = new Node('i');
$new_list8 = InsertNode::insertNode($list, NewNode: $a8);
$a9 = new Node('j');
$new_list9 = InsertNode::insertNode($list, NewNode: $a9);
$a10 = new Node('k');
$new_list10 = InsertNode::insertNode($list, NewNode: $a10);

DisplayNodes::DisplayNodes($new_list8);
echo "<br> now we will git the mid of the list should by F";
$mid_of_linked_list = PrintTheMiddleOfGivenLinkedList::getMid($new_list8);
echo "<br> the mid is : " . $mid_of_linked_list;


?>