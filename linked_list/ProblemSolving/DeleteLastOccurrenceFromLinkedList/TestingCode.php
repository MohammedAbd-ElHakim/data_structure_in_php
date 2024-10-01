<?php
include_once './AutoLoaded.php';

$n = new Node('1');
$list = new LinkedList($n);
$s = new Node("2");
$new_list = InsertNode::insertNode($list, NewNode: $s);
$a = new Node('2');
$new_list2 = InsertNode::insertNode($list, NewNode: $a);
$a2 = new Node('4');
$new_list3 = InsertNode::insertNode($list, NewNode: $a2);
$a3 = new Node('2');
$new_list4 = InsertNode::insertNode($list, NewNode: $a3);
// $a4 = new Node('6');
// $new_list5 = InsertNode::insertNode($list, NewNode: $a4);
// $a6 = new Node('7');
// $new_list6 = InsertNode::insertNode($list, NewNode: $a6);
// $a7 = new Node('8');
// $new_list7 = InsertNode::insertNode($list, NewNode: $a7);
// $a8 = new Node('i');
// $new_list8 = InsertNode::insertNode($list, NewNode: $a8);
// $a9 = new Node('j');
// $new_list9 = InsertNode::insertNode($list, NewNode: $a9);
// $a10 = new Node('k');
// $new_list10 = InsertNode::insertNode($list, NewNode: $a10);

echo "<br>LinkedList before delete : ";
DisplayNodes::DisplayNodes($new_list4);
$size = SizeOfLinkedList::getSize($new_list4);
$ListAfterDelete = DeleteLastOccurrenceFromLinkedList::execute($new_list4, 2);
echo "<br> linked after delete : ";
DisplayNodes::DisplayNodes($ListAfterDelete);


?>