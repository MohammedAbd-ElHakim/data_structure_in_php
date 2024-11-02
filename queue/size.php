<?php
include_once 'Autoload.php';

class Size
{
    public static function getSize(LinkedListQueue $list)
    {
        if ($list->head == null) {
            return 0;
        }
        $size = 0;
        $curr = $list->head;
        while ($curr != null) {
            $size++;
            $curr = $curr->next;
        }
        return $size;
    }
}
?>