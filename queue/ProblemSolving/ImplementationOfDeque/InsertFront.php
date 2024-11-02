<?php
include_once 'AutoLoaded.php';

class InsertFront
{
    #return the top element
    public static function insert(LinkedListQueue $list, NodeQueue $newNode)
    {
        #add new Node At Rear
        if ($list->head == null) {
            $list->head = $newNode;
            return;
        }
        $tempNext = $list->head;
        $newNode->next = $tempNext;
        $list->head = $newNode;
    }
}
?>