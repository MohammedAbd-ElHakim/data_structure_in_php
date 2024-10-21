<?php
include_once './AutoLoaded.php';

class PairwiseSwapElementsOfAGivenLinkedList
{
    public static function startPairSwaping(LinkedList $list)
    {
        #1234
        #2143
        if ($list == null) {
            return $list;
        }

        $curr = $list->head;
        while ($curr->next != null) {
            $prev = $curr->data;
            $next = $curr->next->data;

            $curr->next->data = $prev;
            $curr->data = $next;

            if ($curr->next->next != null) {
                $curr = $curr->next->next;
            } else {
                return $list;
            }
        }

        return $list;
    }
}

?>