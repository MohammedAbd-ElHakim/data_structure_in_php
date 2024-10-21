<?php
include_once './AutoLoaded.php';

class CountOccurrencesInALinkedList
{
    public static function startCount(LinkedList $list, $k)
    {

        if ($list == null) {
            return $list;
        }

        $curr = $list->head;
        $count = 0;
        while ($curr != null) {
            $currData = $curr->data;
            if ($currData == $k) {
                $count++;
            }
            $curr = $curr->next;

        }

        return $count;
    }
}

?>