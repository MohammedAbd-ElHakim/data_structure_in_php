<?php
include_once 'AutoLoaded.php';

class DeleterFromDeque
{
    public static function DeleteFirst(DequeLinkedList $deque)
    {
        if ($deque->head == null || $deque->head->next == null) {
            return;
        }

        $deque->head = $deque->head->next;
        $deque->head->prev = null;
    }
    public static function DeleteLast(DequeLinkedList $deque)
    {
        if ($deque->head == null || $deque->head->next == null) {
            return;
        }

        $curr = $deque->head;
        while ($curr->next != null) {
            $curr = $curr->next;
        }

        $curr->prev->next = null;
        return $deque;
    }

}
?>