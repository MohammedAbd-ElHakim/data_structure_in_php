<?php
include_once './AutoLoaded.php';

class GetDuplicateElementInLinkedList
{
    public static function getDublicate(LinkedList $list)
    {
        $curr = $list->head;
        while ($curr != null) {
            # code...
            $prev = $curr;
            $prevDate = $prev->data;
            $nxt = $prev->next;
            while ($nxt != null) {
                $nxtData = $nxt->data;
                if ($nxtData == $prevDate) {
                    return $nxtData;
                }
                $nxt = $nxt->next;
            }
            $curr = $curr->next;
        }
        return false;
    }
}
?>