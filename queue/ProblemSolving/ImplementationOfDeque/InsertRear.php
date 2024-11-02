<?php
include_once 'AutoLoaded.php';

class InsertRear
{
    #return the top element
    public static function addNewNodeAtRear(LinkedListQueue $list, NodeQueue $newNode)
    {
        #add new Node At Rear
        if ($list->head == null) {
            $list->head = $newNode;
            return;
        }
        $rear = Rear::getRear($list);
        $rear->next = $newNode;
    }
}
?>