<?php
include_once './AutoLoaded.php';

class SwapKthNodeFromBeginningWithKthNodeFromEndInALinkedList
{

    public static function swap(LinkedList $list, $k)
    {
        $curr = $list->head;
        $size = 1;
        while ($curr != null) {
            $size++;
            $curr = $curr->next;
        }

        $moveFromLast = $size - $k;
        $moveFromFront = $k;
        $curr1 = $list->head;
        $curr11 = $list->head;

        $inToFrontValue = 1;
        $inToLastValue = 1;
        while ($inToFrontValue <= $moveFromFront && $curr1 != null) {
            if ($inToFrontValue == $moveFromFront) {
                break;
            }
            $curr1 = $curr1->next;
            $inToFrontValue++;
        }
        while ($inToLastValue <= $moveFromLast && $curr11 != null) {
            if ($inToLastValue == $moveFromLast) {
                $temp1 = $curr1->data;
                $temp11 = $curr11->data;

                $curr1->data = $temp11;
                $curr11->data = $temp1;
                break;
            }
            $curr11 = $curr11->next;
            $inToLastValue++;
        }
    }
}

?>