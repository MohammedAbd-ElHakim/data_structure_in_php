<?php
include_once 'AutoLoaded.php';

class DisplayerDeque
{

    public static function display(DequeLinkedList $list)
    {
        $curr = $list->head;
        while ($curr != null) {
            echo "<br>" . $curr->data;
            $curr = $curr->next;
        }
    }
}

?>