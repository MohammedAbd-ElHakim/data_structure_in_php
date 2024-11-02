<?php
include_once 'AutoLoaded.php';

class Tail
{
    public $data;
    public ?NodeOfDeque $next, $prev;
    public static function getTail(DequeLinkedList $list)
    {
        if ($list->head == null) {
            return null;
        }
        $curr = $list->head;
        while ($curr->next != null) {
            $curr = $curr->next;
        }
        return $curr->data;
    }
}
?>