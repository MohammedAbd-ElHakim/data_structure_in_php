<?php
include_once 'AutoLoaded.php';

class SizeOfLinkedList
{
    public static function getSize(LinkedList $list)
    {
        $size = 1;
        $curr = $list->head;
        while ($curr->next != null) {
            $curr = $curr->next;
            $size++;
        }

        return $size;
    }
}
?>