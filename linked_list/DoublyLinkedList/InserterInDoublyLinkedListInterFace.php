<?php
include_once 'AutoLoaded.php';

interface InserterInDoublyLinkedListInterFace
{
    public static function insertAtFront(DoublyLinkedList $head, NodeOfDoublyLinkedList $newData);
    public static function insertAfterGivenNode(DoublyLinkedList $head, NodeOfDoublyLinkedList $newData, $index);
    public static function insertBeforeGivenNode(DoublyLinkedList $head, NodeOfDoublyLinkedList $newData, $value);
    public static function insertAtPosition(DoublyLinkedList $head, NodeOfDoublyLinkedList $newData, $position);
    public static function insertAtEnd(DoublyLinkedList $head, NodeOfDoublyLinkedList $newData);
}

?>