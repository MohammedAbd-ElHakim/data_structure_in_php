<?php
include_once 'Autoload.php';

class QueueLinkedListImplementation
{
    #front pointer : refer to first node of the queue
    #rear pointer : refer to last node of the queue
    #enQueue : adds a new node after rear and moves the rear to next node
    #deQueue : remove the front node and move the front the front node to the next node
    public static function enQueue(LinkedList $list, Node $newNode)
    {
        #enQueue : adds a new node after rear and moves the rear to next node
        if ($list->head == null) {
            $list->head = $newNode;
            return $list;
        }
        $curr = $list->head;
        while ($curr->next != null) {
            $curr = $curr->next;
        }
        $curr->next = $newNode;
        return $list;
    }

    public static function deQueue(LinkedList $list)
    {
        #deQueue : remove the front node and move the front the front node to the next node
        if ($list == null) {
            return $list;
        }
        $front = $list->head;
        $list->head = $list->head->next;
        return $front;
    }

    public static function getFront(LinkedList $list)
    {
        #front pointer : refer to first node of the queue
        if ($list == null) {
            return $list;
        }

        $firstNode = $list->head->data;
        return $firstNode;
    }

    public static function getRear(LinkedList $list)
    {
        #rear pointer : refer to last node of the queue
        if ($list == null) {
            return $list;
        }
        $curr = $list->head;
        while ($curr->next != null) {
            $curr = $curr->next;
        }
        $lastNode = $curr->data;
        return $lastNode;
    }
}

?>