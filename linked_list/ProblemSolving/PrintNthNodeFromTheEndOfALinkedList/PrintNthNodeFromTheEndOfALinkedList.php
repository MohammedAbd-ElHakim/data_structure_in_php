<?php
include_once './AutoLoaded.php';

class PrintNthNodeFromTheEndOfALinkedList
{
    public static function execute(LinkedList $list, $k, $size)
    {
        if ($size < 2 || $k < 1) {
            return -1;
        }

        if ($k == 1 && $size == 1 || $size == 2) {
            # code...
            return $list->head;
        }

        $curr = $list->head;

        while ($curr->next != null) {
            $curr = $curr->next;
        }

        $move = ($k > $size) ? $k - $size : $size - $k;

        if ($move > $size) {
            return -1;
        }

        $curr->next = $list->head;

        echo "<br> k : " . $k;
        echo "<br> size : " . $size;

        $curr2 = $list->head;
        for ($i = 1; $i <= $move; $i++) {
            # code...
            $curr2 = $curr2->next;
        }
        return $curr2->data;
    }

    public static function execute2(LinkedList $list, $k, $size)
    {
        if ($size < 2 || $k < 1) {
            return -1;
        }

        if ($k == 1 && $size == 1 || $size == 2) {
            # code...
            return $list->head;
        }

        $move = ($k >= $size) ? $k % $size : $size % $k;

        if ($move > $size) {
            return -1;
        }

        echo "<br> k : " . $k;
        echo "<br> size : " . $size;

        $curr = $list->head;
        for ($i = 0; $i < $move; $i++) {
            # code...
            $curr = $curr->next;
        }
        return $curr->data;
    }

}
?>