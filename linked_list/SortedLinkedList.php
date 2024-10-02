<?php
include_once './AutoLoaded.php';

class SortedLinkedList implements Sorter
{

    public static function sort(LinkedList $list)
    {

        if ($list == null) {
            return $list;
        }
        $curr = $list->head;
        while ($curr->next != null) {
            $prev = $curr;
            $next = $prev->next;
            while ($next != null) {
                $prevData = $prev->data;
                $nextData = $next->data;
                if ($prevData > $nextData) {
                    $temp1 = $prevData;
                    $temp2 = $nextData;
                    $next->data = $temp1;
                    $prev->data = $temp2;
                }
                $next = $next->next;
            }
            $curr = $curr->next;
        }
        return $list;
    }
}

?>