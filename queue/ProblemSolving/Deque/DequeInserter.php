<?php
include_once 'AutoLoaded.php';

class DequeInserter
{
    public static function insertFirst(DequeLinkedList $list, NodeOfDeque $newNode)
    {
        $newNode->next = $list->head;
        if ($list->head != null) {
            $list->head->prev = $newNode;
        }
        $list->head = $newNode;
    }
    public static function insertAtLast(DequeLinkedList $list, NodeOfDeque $newNode)
    {
        if ($list == null || $list->head == null) {
            $list->head = $newNode;
            return;
        }

        $curr = $list->head;
        while ($curr->next != null) {
            $curr = $curr->next;
        }

        $curr->next = $newNode;
        $newNode->prev = $curr;

        return $list;
    }

}
?>