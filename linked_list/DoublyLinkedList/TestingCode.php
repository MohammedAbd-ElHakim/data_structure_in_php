<?php
include_once './AutoLoaded.php';


#first list
$n = new NodeOfDoublyLinkedList(1);
$list = new DoublyLinkedList($n);
$s = new NodeOfDoublyLinkedList(2);
$new_list = InserterInDoublyLinkedList::insertAtFront($list, $s);
$a = new NodeOfDoublyLinkedList(3);
$new_list2 = InserterInDoublyLinkedList::insertAtFront($list, $a);
$aq = new NodeOfDoublyLinkedList(11);
$new_list3 = InserterInDoublyLinkedList::insertAtFront($list, $aq);
$aq1 = new NodeOfDoublyLinkedList(5);
$new_list4 = InserterInDoublyLinkedList::insertAtFront($list, $aq1);
$aq2 = new NodeOfDoublyLinkedList(6);
$listAfterNode2 = InserterInDoublyLinkedList::insertAtFront($list, $aq2);
$aq3 = new NodeOfDoublyLinkedList(7);
$listAfterNode = InserterInDoublyLinkedList::insertAtFront($list, $aq3);

echo "<br> DoublyLinked List :";
DisplayDoublyLinkedList::DisplayNodes($list);
echo "<br> DoublyLinked List After 3 add 99  :";
$aq33 = new NodeOfDoublyLinkedList(99);
$listAfterNode = InserterInDoublyLinkedList::insertAfterGivenNode($list, $aq33, 3);
DisplayDoublyLinkedList::DisplayNodes($list);

echo "<br> DoublyLinked List before 5 add 76  :";
$aq33 = new NodeOfDoublyLinkedList(76);
$listAfterNode = InserterInDoublyLinkedList::insertAfterGivenNode($list, $aq33, 5);
DisplayDoublyLinkedList::DisplayNodes($list);

echo "<br> DoublyLinked List add 101 at position 5  : ";
$aq33 = new NodeOfDoublyLinkedList(101);
$listAfterNode = InserterInDoublyLinkedList::insertAtPosition($list, newNode: $aq33, position: 5);
echo "<br> DoublyLinked List After add 101 at position 5 : ";
DisplayDoublyLinkedList::DisplayNodes($list);

echo "<br> sorted list  : ";
$listAfterNode = SortDoublyLinkedList::sort($list);
DisplayDoublyLinkedList::DisplayNodes($list);
?>