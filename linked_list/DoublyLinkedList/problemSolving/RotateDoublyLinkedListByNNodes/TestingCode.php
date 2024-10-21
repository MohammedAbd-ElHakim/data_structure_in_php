<?php
include_once './AutoLoaded.php';


#first list
$n = new NodeOfDoublyLinkedList('a');
$list = new DoublyLinkedList($n);
$s = new NodeOfDoublyLinkedList('b');
$new_list = InserterInDoublyLinkedList::insertAtEnd($list, $s);
$a = new NodeOfDoublyLinkedList('c');
$new_list2 = InserterInDoublyLinkedList::insertAtEnd($list, $a);
$aq = new NodeOfDoublyLinkedList('d');
$new_list3 = InserterInDoublyLinkedList::insertAtEnd($list, $aq);
$aq1 = new NodeOfDoublyLinkedList('e');
$new_list4 = InserterInDoublyLinkedList::insertAtEnd($list, $aq1);
$aq1 = new NodeOfDoublyLinkedList('f');
$new_list4 = InserterInDoublyLinkedList::insertAtEnd($list, $aq1);
$aq1 = new NodeOfDoublyLinkedList('g');
$new_list4 = InserterInDoublyLinkedList::insertAtEnd($list, $aq1);
$aq1 = new NodeOfDoublyLinkedList('h');
$new_list4 = InserterInDoublyLinkedList::insertAtEnd($list, $aq1);

echo "<br> DoublyLinked List : ";
DisplayDoublyLinkedList::DisplayNodes($list);
$listAfterNode = RotateDoublyLinkedListByNNodes::rotate($list, 4);
echo "<br> DoublyLinked List After Rotate  4 Times: ";
DisplayDoublyLinkedList::DisplayNodes($list);

?>