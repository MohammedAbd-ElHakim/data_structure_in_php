<?php
include_once './AutoLoaded.php';

class TraversalofCircularLinkedList
{
    public static function traversal(LinkedList $list)
    {
        if ($list->head == null || $list == null || $list->head->next == null) {
            return $list;
        }
        $curr = $list->head;
        do {
            # code...
            echo "<br>" . $curr->data;
            $curr = $curr->next;
        } while ($curr != $list->head);
        return $list;

    }
}

?>