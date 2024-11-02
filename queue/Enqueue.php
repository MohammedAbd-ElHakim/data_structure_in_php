<?php
include_once 'Autoload.php';

class Enqueue
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