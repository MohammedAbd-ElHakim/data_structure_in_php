<?php
include_once './AutoLoaded.php';


#first list
$n = new Node(1);
$list = new LinkedList($n);
$s = new Node(2);
$new_list = InsertNode::insertNode($list, NewNode: $s);
$a = new Node(3);
$new_list2 = InsertNode::insertNode($list, NewNode: $a);
$aq = new Node(4);
$new_list3 = InsertNode::insertNode($list, NewNode: $aq);
$aq1 = new Node(5);
$new_list4 = InsertNode::insertNode($list, NewNode: $aq1);


echo "<br> linked list before swaping:";
DisplayNodes::DisplayNodes($list);
$newList7 = PairwiseSwapElementsOfAGivenLinkedList::startPairSwaping($list);
echo "<br>  Linked List After PairSwaping : ";
DisplayNodes::DisplayNodes($list);

?>