<?php
include_once './AutoLoaded.php';

class ReverseList implements ReverseLinkedList
{
    public static function reverseLinkedList(LinkedList $list)
    {
        $curr = $list->head;
        $prev = new Node(0);

        while ($curr != null) {
            $next_of_curr = $curr->next;
            $curr->next = $prev;
            $prev = $curr;
            $curr = $next_of_curr;
        }
        $list->head = $prev;

        return $list;
    }

}
?>