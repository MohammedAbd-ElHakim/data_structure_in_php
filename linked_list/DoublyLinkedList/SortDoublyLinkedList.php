<?php
include_once 'AutoLoaded.php';

class SortDoublyLinkedList
{
    public static function sort(DoublyLinkedList $list)
    {
        if ($list == null) {
            return $list;
        }

        $curr1 = $list->head;
        $curr = $list->head;
        while ($curr != null) {
            $currData = $curr->data;
            while ($curr1 != null) {
                # code...
                $currData1 = $curr1->data;
                if ($currData < $currData1) {
                    $curr->data = $currData1;
                    $curr1->data = $currData;


                    $currData = $curr->data;
                    $currData1 = $curr1->data;
                }
                $curr1 = $curr1->next;
            }
            $curr = $curr->next;
            $curr1 = $list->head;

        }
    }
}









?>