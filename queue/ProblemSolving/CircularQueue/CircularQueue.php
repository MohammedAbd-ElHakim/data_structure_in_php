<?php
include_once './AutoLoaded.php';

class CircularQueue
{
    public static function convertToCircular(LinkedListQueue $queue)
    {
        if ($queue == null) {
            return; // لا حاجة لإعادة مصفوفة فارغة
        }

        $curr = $queue->head;
        while ($curr->next != null) {
            $curr = $curr->next;
        }
        $curr->next = $queue->head;
    }
}

?>