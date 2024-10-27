<?php
include_once 'Autoload.php';

class QueueLinkedListImplementation
{
    #enqueue ->add to rear
    #dequeue ->remove front
    #get front
    #get rear

    public static function enqueue(LinkedList $list, $newNode)
    {
        #enqueue ->add to rear
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

    public static function dequeue(LinkedList $list)
    {
        #dequeue ->remove front
        if ($list == null) {
            return $list;
        }
        $firstNode = $list->head->data;
        $list->head = $list->head->next;
        return $firstNode;
    }
    public static function getFront(LinkedList $list)
    {
        $firstData = $list->head->data;
        return $firstData;
    }
    public static function getRear(LinkedList $list)
    {
        $curr = $list->head;
        while ($curr->next != null) {
            $curr = $curr->next;
        }
        return $curr;
    }
}

?>