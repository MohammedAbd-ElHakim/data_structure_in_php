<?php
include_once 'AutoLoaded.php';

class DeleteRear
{
    #remove the rear node
    public static function RemoveTheRear(LinkedListQueue $list)
    {
        if ($list->head == null) {
            return null;
        }
        $curr = $list->head;
        while ($curr->next->next !== null) {
            $curr = $curr->next;
        }
        $curr->next = null;
    }
}

?>