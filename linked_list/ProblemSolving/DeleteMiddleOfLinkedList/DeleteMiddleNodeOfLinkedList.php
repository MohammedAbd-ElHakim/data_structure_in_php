<?php
include_once './AutoLoaded.php';

class DeleteMiddleNodeOfLinkedList implements DeleteMiddleNode
{

    public static function deleteMidOFList(LinkedList $list, $size)
    {
        if ($list->head == null || $size == 0) {
            return $list; // القائمة فارغة
        }

        $curr = $list->head;
        $iseven = ($size % 2 == 0) ? true : false;
        $prev = new node('');
        $move = $iseven ? 0 : 1;

        while ($curr != null) {
            # code...
            $nxt = $curr->next;

            if ($iseven && $move == $size / 2) {
                $prev->next = $nxt;
            } elseif (!$iseven && $move == (int) ($size / 2) + 1) {
                # code...
                $prev->next = $nxt;
            }

            $prev = $curr;
            $curr = $curr->next;
            $move++;
        }

        return $list;
    }
}

?>