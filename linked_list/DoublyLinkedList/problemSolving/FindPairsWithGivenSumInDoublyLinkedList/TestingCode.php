<?php
include_once './AutoLoaded.php';


#first list
$n = new NodeOfDoublyLinkedList(1);
$list = new DoublyLinkedList($n);
$s = new NodeOfDoublyLinkedList(2);
$new_list = InserterInDoublyLinkedList::insertAtFront($list, $s);
$a = new NodeOfDoublyLinkedList(3);
$new_list2 = InserterInDoublyLinkedList::insertAtFront($list, $a);
$aq = new NodeOfDoublyLinkedList(4);
$new_list3 = InserterInDoublyLinkedList::insertAtFront($list, $aq);
$aq1 = new NodeOfDoublyLinkedList(5);
$new_list4 = InserterInDoublyLinkedList::insertAtFront($list, $aq1);
$aq2 = new NodeOfDoublyLinkedList(6);
$listAfterNode2 = InserterInDoublyLinkedList::insertAtFront($list, $aq2);
$aq3 = new NodeOfDoublyLinkedList(7);
$listAfterNode = InserterInDoublyLinkedList::insertAtFront($list, $aq3);

echo "<br> DoublyLinked List Before Sorted : ";
DisplayDoublyLinkedList::DisplayNodes($list);
echo "<br> The Pairs Of Sum Are : ";
$listAfterNode = FindPairsWithGivenSumInDoublyLinkedList::find($list, 7);
// DisplayDoublyLinkedList::DisplayNodes($list);

?>