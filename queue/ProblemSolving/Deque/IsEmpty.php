<?php
include_once 'AutoLoaded.php';

class IsEmpty
{
    public static function isEmpty(DequeLinkedList $deque)
    {
        if ($deque->head == null) {
            return true;
        }
        return false;
    }
}
?>