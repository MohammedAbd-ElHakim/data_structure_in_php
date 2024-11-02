<?php
include_once 'AutoLoaded.php';

class SizeOfDeque
{

    public static function size(DequeLinkedList $deque)
    {
        if ($deque->head == null) {
            return 0;
        }

        $size = 0;
        $curr = $deque->head;
        while ($curr != null) {
            $size++;
            $curr = $curr->next;
        }
        return $size;
    }
}
?>