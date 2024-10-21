<?php
include_once './AutoLoaded.php';

class ConvertSinglyLinkedListIntoCircularLinkedList
{
    public static function concertToCircular(LinkedList $list)
    {
        if ($list == null) {
            return;
        }

        if ($list->head->next == null) {
            echo "This is last node, require head, can't be null";
            return $list;
        }

        $curr = $list->head;
        while ($curr->next != null) {
            $curr = $curr->next;
        }
        $curr->next = $list->head;

        return $list;
    }
}

?>