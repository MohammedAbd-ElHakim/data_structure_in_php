<?php
include_once './AutoLoaded.php';


$n = new Node(1);
$list = new LinkedList($n);
$s = new Node(1);
$new_list = InsertNode::insertNode($list, NewNode: $s);
$a = new Node(1);
$new_list2 = InsertNode::insertNode($list, NewNode: $a);
$a2 = new Node(4);
$new_list3 = InsertNode::insertNode($list, NewNode: $a2);
$a3 = new Node(data: 1);
$new_list4 = InsertNode::insertNode($list, NewNode: $a3);
// $a4 = new Node(1);
// $new_list5 = InsertNode::insertNode($list, NewNode: $a4);
// $a6 = new Node(1);
// $new_list6 = InsertNode::insertNode($list, NewNode: $a6);
// $a7 = new Node(1);
// $new_list7 = InsertNode::insertNode($list, NewNode: $a7);
// $a8 = new Node(5);
// $new_list8 = InsertNode::insertNode($list, NewNode: $a8);
// $a9 = new Node('j');
// $new_list9 = InsertNode::insertNode($list, NewNode: $a9);
// $a10 = new Node('k');
// $new_list10 = InsertNode::insertNode($list, NewNode: $a10);

echo "<br>  before deleted 3 :";
DisplayNodes::DisplayNodes($list);
$deleteDuplicateElement = DeleteAllOccurrencesOfAGivenKeyInALinkedList::deleteOccurranceOfAgivenInlinkedList($list, 1);
echo "<br> after deleted 3 : ";
DisplayNodes::DisplayNodes($list);



?>