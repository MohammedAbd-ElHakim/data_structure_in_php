<?php
include_once 'Autoload.php';

class Dequeue
{
    #remove the front node
    public static function RemoveTheFrontNode(LinkedListQueue $list)
    {
        if ($list->head == null) {
            return null;
        }

        $list->head = $list->head->next;
    }
}

?>