<?php
include_once './AutoLoaded.php';

class PrintTheMiddleOfGivenLinkedList implements ProblemSolving
{

    public static function midOfEvenSize(LinkedList $list)
    {
        #we will use fast slow pointer
        echo "<br>it is even ";
        $PointerToNodesOfOrginalList = $list->head;
        $lead = $list->head;
        $lag = $list->head;
        while ($lead != null && $lead->next != null) {
            $lead = $lead->next->next;
            $lag = $lag->next;

        }
        return $lag->data;
    }
    public static function midOfOddSize(LinkedList $list, int $coun)
    {
        $count = 1;
        $curr = $list->head;
        while ($curr->next != null) {
            $curr = $curr->next;
            if ($count == $coun) {
                return $curr->data;
            }
            $count++;
        }
    }

    public static function getSize(LinkedList $list)
    {
        $size = 1;
        $curr = $list->head;
        while ($curr->next != null) {
            $curr = $curr->next;
            $size++;
        }

        return $size;
    }

    public static function getMid(LinkedList $list)
    {
        $size = self::getSize($list);
        if ($size % 2 == 0) {
            $mid = self::midOfEvenSize($list);
        } elseif ($size % 2 > 0) {
            # code...
            $coun = (int) $size / 2;
            $mid = self::midOfOddSize($list, $coun);
        }
        return $mid;
    }





}

?>