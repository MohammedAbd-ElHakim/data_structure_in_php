<?php
include_once 'AutoLoaded.php';

class DeleteFront
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