<?php
include_once './AutoLoaded.php';


#first list
$n = new Node(1);
$list = new LinkedList($n);
$s = new Node(2);
$new_list = InsertNode::insertNode($list, NewNode: $s);
$a = new Node(1);
$new_list2 = InsertNode::insertNode($list, NewNode: $a);
$aq = new Node(2);
$new_list3 = InsertNode::insertNode($list, NewNode: $aq);
$aq1 = new Node(1);
$new_list4 = InsertNode::insertNode($list, NewNode: $aq1);
$aq2 = new Node(3);
InsertNode::insertNode($list, NewNode: $aq2);
$aq3 = new Node(1);
InsertNode::insertNode($list, NewNode: $aq3);


echo "<br> linked list :";
DisplayNodes::DisplayNodes($list);
$count = CountOccurrencesInALinkedList::startCount($list, 5);
echo "<br>k : " . 1;
echo "<br> count : " . $count;

?>