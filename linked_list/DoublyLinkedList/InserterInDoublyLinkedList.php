<?php
include_once 'AutoLoaded.php';

class InserterInDoublyLinkedList implements InserterInDoublyLinkedListInterFace
{


    public static function insertAtFront(DoublyLinkedList $list, NodeOfDoublyLinkedList $newNode)
    {
        $newNode->next = $list->head;
        if ($list->head != null) {
            $list->head->prev = $newNode;
        }
        $list->head = $newNode;
    }
    public static function insertAfterGivenNode(DoublyLinkedList $list, NodeOfDoublyLinkedList $newNode, $value)
    {
        if ($list == null || $list->head == null) {
            $list->head = $newNode;
        }

        $found = false;
        $curr = $list->head;
        while ($curr != null) {
            # code...
            if ($curr->data == $value) {
                $found = true;
                break;
            }
            $curr = $curr->next;
        }

        if (!$found)
            return $list;

        $newNode->prev = $curr;
        $newNode->next = $curr->next;

        if ($curr->next->prev != null) {
            $curr->next->prev = $newNode;
        }

        $curr->next = $newNode;


        return $list;
    }
    public static function insertBeforeGivenNode(DoublyLinkedList $list, NodeOfDoublyLinkedList $newNode, $value)
    {
        if ($list == null) {
            return $list;
        }

        if ($list->head != null) {
            $list->head = $newNode;
            return $list;
        }

        $found = false;
        $curr = $list->head;
        while ($curr != null) {
            # code...
            if ($curr == $value)
                break;
            $curr = $curr->next;
        }

        if (!$found)
            return $list;

        $newNode->next = $curr;
        $newNode->prev = $curr->prev;
        $curr->prev = $newNode;
    }


    public static function insertAtPosition(DoublyLinkedList $list, NodeOfDoublyLinkedList $newNode, $position)
    {
        if ($list == null || $list->head == null) {
            return $list;
        }

        if ($position == 1) {
            $newNode->next = $list->head;
            $list->head = $newNode;
            return;
        }


        $curr = $list->head;
        $currPosition = 1;

        while ($currPosition < $position) {
            # code...
            $curr = $curr->next;
            echo "<br>currData : " . $curr->data;
            echo "<br>currData : " . $curr->prev->data;
            $currPosition++;
        }

        echo "<br>now we will add B before curr : " . $curr->data;
        echo "<br>now we will add B before currPrev : " . $curr->prev->data;
        echo "<br>now we will add B before currNext : " . $curr->next->data;

        $prevOfCurr = $curr->prev;
        $newNode->next = $curr;
        $curr->prev = $newNode;
        $newNode->prev = $prevOfCurr;
        $prevOfCurr->next = $newNode;

        $prevOfcurrOfPreav = $prevOfCurr;
        $i = 1;
        while ($prevOfcurrOfPreav != null) {
            $tempOfPrev = $prevOfcurrOfPreav;
            $prevOfcurrOfPreav = $prevOfcurrOfPreav->prev;
            $i++;
        }
        $list->head = $tempOfPrev;

        // 

        $curr3 = $list->head;
    }

    public static function insertAtEnd(DoublyLinkedList $list, NodeOfDoublyLinkedList $newNode)
    {
        if ($list == null || $list->head == null) {
            return $list;
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